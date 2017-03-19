<?php
	header('Access-Control-Allow-Origin:*');
	$arr = array (
		'0' => array(
			'type' => 'a',
			'title' => '余额猫第1355期',
			'profit' => '6.00',
			'des' => '本产品由承兑汇票质押',
			'start' => '100元起够'
		),
		'1' => array(
			'type' => 'b',
			'title' => '"银企众盈"融资项目31555期',
			'profit' => '6.20',
			'des' => '银行承兑',
			'surplus' => 44996,
			'day' => 70,
			'rate' => 85,
		),
		'2' => array(
			'type' => 'b',
			'title' => '"商融保盈"融资项目1009期',
			'profit' => '8.50',
			'des' => '预期年化收益率',
			'surplus' => 66,
			'day' => 178,
			'rate' => 72,
		),
		'3' => array(
			'type' => 'b',
			'title' => '"惠普众盈"融资项目288期',
			'profit' => '8.20',
			'des' => '车产抵押',
			'surplus' => 0,
			'day' => 88,
			'rate' => 0,
		),
	);
	
	echo json_encode($arr);
?>