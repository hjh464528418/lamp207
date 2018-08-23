<!-- 180815 郝嘉辉 common -->
<?php
	$redis = new Redis;

	$res = $redis -> connect('localhost', 6379);

	$redis -> auth('123456');

	$redis -> select(1);