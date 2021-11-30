<?php 
	
	// 休息一会
	sleep(1);

	// 获取 用户发送的 消息  (可选)
	$starName=$_GET['name'];
	// echo $starName;
	// innerHTML
	// 后端 对于 用户发过来的 时候 是否 使用 (可选)

	/**<?php
	$t=date("H");

	if ($t<"20") {
 	 echo "Have a good day!";
	}

	array_key_exists()
?>
 */
	$linkArr = array (
		'九月'=>array('link'=>'https://sdocapp.com/s/ewz9gAzk6K4wKGJ5h'),
		'十月'=>array('link'=>'https://sdocapp.com/s/zLzp88Pc8ekZYfL4p')
	);
	if(array_key_exists($starName,$linkArr)){

		$link = $linkArr[$starName];
		echo '<a>'
		echo $link['link'];
		echo '</a>'
		echo '<br>';
		echo '整理不易';
	}else{
		echo '关键词错误或不存在';
	}
	

 ?>