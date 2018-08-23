<!-- 180815 郝嘉辉 redis-common -->
<?php
	$redis = new Redis;
	$res = $redis -> connect('localhost',6379);
	$redis -> auth('123456');
	$redis -> select(1);

	//获取键名
	// $res = $redis -> keys('*');
	 
	//检测键名是否设置
	// $res = $redis -> exists('week');
	 
	//删除
	// $res = $redis -> del('a');
	// 
	//清空当前的数据库
	// $res = $redis -> flushdb();
	
	//清空所有的数据库
	$res = $redis -> flushall(); 
	

	var_dump($res);