<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\blog\public/../application/index\view\index\saying.html";i:1513667713;s:69:"D:\phpStudy\WWW\blog\public/../application/index\view\index\base.html";i:1514883283;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>博客--留言</title>
    <link href="__CSS__/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__CSS__/blog.css">
 	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="__JS__/scrollReveal.js"></script>
    
	<style type="text/css">
		
	</style>

    
</head>
<body>
	<header>
		<h1 data-scroll-reveal>王雨萱的博客</h1>
		<ul class="nav">
			<li>
				<a href="<?php echo url('index/index'); ?>">首页<span>home</span></a>
			</li>
			<li>
				<a href="<?php echo url('index/about'); ?>">关于我<br/><span>about</span></a>

			</li>
			<li>
				<a href="<?php echo url('index/doing'); ?>">碎言碎语<br/><span>doing</span></a>
			</li>
			<li>
				<a href="<?php echo url('index/saying'); ?>">留言<br/><span>saying</span></a>
			</li>
		</ul>
	</header>
	<article>
		<div class="container">
			
			
	<div class="about">留言板</div>

		</div>
	</article>
	<footer>
		<p>Design by DanceSmile 蜀ICP备11002373号-1</p>
	</footer>
    <script src="__JS__/bootstrap.min.js"></script>
  	<script src="__JS__/blog.js"></script>
  	<script type="text/javascript">
		window.scrollReveal = new scrollReveal({ reset: true});
//或者，elem 为动画元素的任何级别的父元素
		window.scrollReveal2 = new scrollReveal({elem: document.getElementById('srcontainer')});
  	</script>
  	
</body>
</html>