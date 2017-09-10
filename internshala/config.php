<?php
ob_start();
session_start();
$con = mysql_connect('localhost','root','');
if($con){
echo 'connect'; 
//die();
}else{
echo mysql_error();
}
mysql_select_db('intershala',$con);
//echo dirname(dirname($_SERVER['SCRIPT_NAME'])); // GET FOLDER NAME
$siteFolder = dirname(dirname($_SERVER['SCRIPT_NAME']));
define('SUBDIR', $siteFolder);

define('WEBSITE_URL', 'http://' . $_SERVER['HTTP_HOST']. SUBDIR);
define('CATEGORY_IMAGE' ,$_SERVER['DOCUMENT_ROOT'].$siteFolder.'/category_image/');
define('PRODUCT_IMAGE' ,$_SERVER['DOCUMENT_ROOT'].$siteFolder.'/product_image/');
 /*  THUMB image Path and size*/
define('CATEGORY_IMAGE_SMALL_THUMB' ,CATEGORY_IMAGE.'small_thumb/');
define('CATEGORY_IMAGE_SMALL_THUMB_WIDTH' ,50);
define('CATEGORY_IMAGE_SMALL_THUMB_HEIGHT' ,50);

define('CATEGORY_IMAGE_LARGE_THUMB' ,PRODUCT_IMAGE.'large_thumb/');
define('CATEGORY_IMAGE_LARGE_THUMB_WIDTH' ,100);
define('CATEGORY_IMAGE_LARGE_THUMB_HEIGHT' ,100);

define('PRODUCT_IMAGE_SMALL' ,PRODUCT_IMAGE.'small/');
define('PRODUCT_IMAGE_SMALL_WIDTH' ,95);
define('PRODUCT_IMAGE_SMALL_HEIGHT' ,100);

define('PRODUCT_IMAGE_LARGE' ,PRODUCT_IMAGE.'large/');
define('PRODUCT_IMAGE_LARGE_WIDTH' ,93);
define('PRODUCT_IMAGE_LARGE_HEIGHT' ,107);
define('PER_PAGE_RECORD',3);

/* function getExtension($filename=NULL){
	$file = explode('.',$filename);
	$ext = end($file);
	 echo $ext;
	echo '<pre>';
	print_r($file);die; 
	return $ext;
} */
 function getParentCategoryName($parent_id=NULL){

$sql = mysql_query("SELECT `category_name`  FROM `categories` WHERE `id` =".(int)$parent_id);

$data = mysql_fetch_array($sql);
return $data['category_name'];

}


?>