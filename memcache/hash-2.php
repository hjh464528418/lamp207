<!-- 180815 郝嘉辉 hash-2 -->
<?php
	include './common.php';

	//添加
		// $res = $redis -> hset('xiaoming', 'name', '明');
		// $res = $redis -> hset('xiaoming', 'height', '180cm');
		// $res = $redis -> hmset('hui', ['name' => '辉', 'age' => 23,'height' => '178', 'hasCar' => true, 'hasMoney' =>true]);
	
	//删除
		// $res = $redis -> hdel('xiaoming', 'height');
		// $res = $redis -> del('xiaoming');
	
	//修改
		// $res = $redis -> hset('hui', 'height', '177cm');
		// $res = $redis -> hincrby('hui','year',-1);
	
	//获取
		// $res = $redis -> hget('hui', 'hasCar');
		// $res = $redis -> hmget('hui', ['name', 'height', 'age']);
		// $res = $redis -> hgetall('hui');
		$res = $redis -> hvals('hui');

		var_dump($res);