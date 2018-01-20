<?php

function display($tplPath,$tplVars = null)
{
	//组合成模板路径拼接模板文件
	$tplFilePath = rtrim(TPL_PATH,'/').'/'.$tplPath;
	//检查文件是否存在

	if (!file_exists($tplFilePath)) {
		exit('模板文件不存在');
	}
	
	//编译模板文件为PHP代码
	$php = compile($tplFilePath);
	
	//组合成一个新的缓存目录拼接文件
	$cacheFilePath = rtrim(TPL_CACHE,'/').'/'.str_replace('.','_',$tplPath).'.php';

	//检查目录权限，并写入
	if (!check_cache_dir(TPL_CACHE)) {
		exit('不可以写入');
	}

	file_put_contents($cacheFilePath,$php);
	
	//分配变量并包含缓存文件
	if (is_array($tplVars)) {
		
		extract($tplVars);
		include $cacheFilePath;
	}	
}

function check_cache_dir($path)
{
	if (!is_dir($path) || !file_exists($path)) {
		return mkdir($path,0755,true);
	}
	
	if ( !is_writeable($path) || !is_readable($path)) {
			return chmod($path,0755);
	}
	
	return true;
	
}
function compile($path)
{
	$file = file_get_contents($path);
	
	$keys = [
		'{$%%}' 			=> '<?=$\1;?>',
		'{if %%}' 			=> '<?php if(\1):?>',
		'{/if}'				=> '<?php endif;?>',
		'{else}'			=> '<?php else: ?>',
		'{elseif %%}'   	=> '<?php elseif(\1):?>',
		'{else if %%}'  	=> '<?php elseif(\1):?>',
		'{foreach %%}'		=> '<?php foreach(\1):?>',
		'{/foreach}'		=> '<?php endforeach;?>',
		'{while %%}'		=> '<?php while(\1):?>',
		'{/while}'			=> '<?php endwhile;?>',
		'{for %%}'			=> '<?php for(\1):?>',
		'{/for}'			=> '<?php endfor;?>',
		'{continue}'		=> '<?php continue;?>',
		'{break}'			=> '<?php break;?>',
		'{$%%++}'			=> '<?php $\1++;?>',
		'{$%%--}'			=> '<?php $\1--;?>',
		'{/*}'				=> '<?php /*',
		'{*/}'				=> '*/?>',
		'{section}'			=> '<?php ',
		'{/section}'		=> '?>',
		'{$%% = $%%}'		=> '<?php $\1 = $\2;?>',
		'{default}'			=> '<?php default:?>',
		'{include %%}'		=> '<?php include "\1";?>',	
	];
	
	foreach ($keys as $key => $val) {
		//#\{\$(.+)\}#imsU
		$pattern = '#'.str_replace('%%','(.+)',preg_quote($key,'#')).'#imsU';
		$replace = $val;
		if (stripos($pattern,'include')) {
			$file = preg_replace_callback($pattern,'parseInclude',$file);
		}else{
			$file = preg_replace($pattern, $replace, $file);
		}
	}
	return $file;
}

function parseInclude($data)
{
	$path = str_replace(['\'','"'],'',$data[1]);
	display($path);
	// <?php include "./cache/路径";
	$cacheFileName = rtrim(TPL_CACHE,'/').'/'.str_replace('.','_',$path).'.php';
	return "<?php include '$cacheFileName';?>";
	
}