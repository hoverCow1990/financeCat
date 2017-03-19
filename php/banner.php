<?php
	header('Access-Control-Allow-Origin:*');
	$arr = array (
		'0' => array(
			'url'  => 'http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/sbnsj.jpg',
			'alt'  => '',
			'link' => 'sbnsj'
		),
		'1' => array(
			'url'  => 'http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/gzbj.jpg',
			'alt'  => '',
			'link' => 'gzbj'
		),
		'2' => array(
			'url'  => 'http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/dhmgl.jpg',
			'alt'  => '',
			'link' => 'dhmgl'
		),
		'3' => array(
			'url'  => 'http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/xfmbj.jpg',
			'alt'  => '',
			'link' => 'xfmbj'
		),
		'4' => array(
			'url'  => 'http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/hyyq.jpg',
			'alt'  => '',
			'link' => 'hyyq'
		),
	);
	
	echo json_encode($arr);
?>