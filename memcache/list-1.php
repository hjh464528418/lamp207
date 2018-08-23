<!-- 180815 郝嘉辉 list-1 -->
<?php

	include './common.php';

	//写入
		// $res = $redis -> lpush('yewu', 'a');
		// $res = $redis -> lpush('yewu', 'b');
		// $res = $redis -> lpush('yewu', 'c');
		// $res = $redis -> lpush('yewu', 'd');
		// $res = $redis -> lpush('yewu', 'e');
		// $res = $redis -> lpush('yewu', 'f');
		// $res = $redis -> rpush('yewu', 'g');
		// // 
	//删除
		// $res = $redis -> rpop('yewu');
		// $res = $redis -> lpop('yewu');
		// $res = $redis -> lrem('yewu', 'd');
	
	//修改
		// $res = $redis -> lset('yewu', 2, 'z');
		// $res = $redis -> rpoplpush('yewu', 'error');
		// 
	//获取
		// $res = $redis -> lindex('yewu', 1);
		// $res = $redis -> lrange('yewu', 0, 2);
		// $res = $redis -> lsize('yewu');
		var_dump($res);