<?php 

function pre($list, $exit = true){
	echo '<pre>';
	print_r($list);
	if($exit){
		die();
	}
}

function str_slug($str, $seperator = '-') {
	$str = strip_tags($str);
	$str = trim(mb_strtolower($str,"UTF-8"));
	$str = preg_replace('/(\s+)|(\-)/', ' ', $str);
	$str = preg_replace('/(à|À|Á|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	$str = preg_replace('/(đ)/', 'd', $str);
	$str = preg_replace('/[^a-zA-z0-9-\s]/', '', $str);
	$str = preg_replace('/\s+/', $seperator, $str);
	
	return trim($str, '-');
}

?>