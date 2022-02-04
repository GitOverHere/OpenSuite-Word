<?php
require 'core/init.php';
session_start();
$user= new User();

$template=$_GET['template'];

$username=$user->get("users","username");
echo $username;

function copyr($source,$dest){
	
	foreach (
 $iterator = new \RecursiveIteratorIterator(
  new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS),
  \RecursiveIteratorIterator::SELF_FIRST) as $item
) {
  if ($item->isDir()) {
    mkdir($dest . DIRECTORY_SEPARATOR . $iterator->getSubPathname());
  } else {
    copy($item, $dest . DIRECTORY_SEPARATOR . $iterator->getSubPathname());
  }
}

}

//Epic method Using a recursive copy function.

 $source = "../Templates/".$template;
	$destination = "../".$username;

if(!is_dir($destination)){
	echo "no exist";
	mkdir($destination,0777);
	/*
	$t_html= fopen("../Templates/".$template."/index.php","r");
	$t_css = fopen("../Templates/".$template."/main.css","r");
	$t_js = fopen("../Templates/".$template."/index.js","r");
	$html = fopen("../".$username."/index.php","w+");
	$css = fopen("../".$username."/index.php","w+");
	$js = fopen("../".$username."index.js","w+");
	
	
	fwrite($html,$html_t);
	fwrite($css,$css_t);
	fwrite($js,$js_t);
	
	Crappy method used 5-20-2021
	
	*/
	
   
	
	copyr($source,$destination);
	
}

else {
	
}

?>