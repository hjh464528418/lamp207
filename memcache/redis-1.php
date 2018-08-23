<!-- 180815 郝嘉辉 redis-1 -->
<?php
	//创建对象
	$redis = new Redis;

	//连接
	$res = $redis -> connect('localhost', 6379);

	//判断
	if(!$res){
		echo '连接失败';
		die;
	}

	//设置密码
	$redis -> auth('123456');

	//选择数据库
	$redis -> select(1);

	//操作
	$res = $redis -> set('week', '星期三');
	var_dump($res);