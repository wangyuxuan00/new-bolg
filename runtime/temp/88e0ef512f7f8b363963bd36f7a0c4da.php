<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\blog\public/../application/index\view\index\about.html";i:1513590429;s:69:"D:\phpStudy\WWW\blog\public/../application/index\view\index\base.html";i:1514883283;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>博客--关于我</title>
    <link href="__CSS__/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__CSS__/blog.css">
 	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="__JS__/scrollReveal.js"></script>
    
	<style type="text/css">
		.top{
		    height: 240px;
    		overflow: hidden;
		}
		img{
			height: 300px;
    		width: 900px;
    	}
    	.line{
    		margin-top: 100px;
    		height: 80px;
    	}
    	#time_axis{
    		display: block;
    		height: 5px;
    		background-color: #fff;
		    margin-left: 40px;
    	}
    	.line ul li{
    		width: 18px;
    		height: 18px;
    		background-color: #0979b1;
    		border: 3px solid #fff;
    		border-radius: 50%;
    		float: left;
    		position: relative;
    	}
    	.line ul li:hover{
    		background-color: #07618e;
    	}
    	.n1{
    		margin: -10px 0px 0px 30px;
    	}
    	.n2{
    		margin: -10px 0px 0px 126px;
    	}
    	.n3{
    		margin: -10px 0px 0px 151px;
    	}
    	.n4{
    		margin: -10px 0px 0px 186px;
    	}
    	.n5{
    		margin: -10px 0px 0px 137px;
    	}
    	.line ul li a{
    		display: block;
    		width: 100px;
    		height: 50px;
    		color: #fff;
    		margin-top: 20px;
    	}
    	.line i{
    		font-style: normal;
    		display: block;
    		position: absolute;
    		text-align: center;
		    width: 88px;
		    height: 45px;
		    top: -50px;
    		left: 6px;
    	}
    	.main{
		    margin: 40px;
    	}
    	address p{
		    margin: 20px 35px;
    	}
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
			
			
	<div class="top">
			<img src="__IMG__/banner.jpg">
		</div>
		<div class="line">
			<span id="time_axis"></span>
			<ul>
				<li class="n1">
					<i>
						时间
					</i>
					<a href="<?php echo url('index/particulars'); ?>">前端入行</a>
				</li>
				<li class="n2">
					<i>时间</i>
					<a href="">创建个人博客</a>
				</li>
				<li class="n3">
					<i>时间</i>
					<a href="">分享第一个博客模板</a>
				</li>
				<li class="n4">
					<i>时间</i>
					<a href="">制作第一个html5模板</a>
				</li>
				<li class="n5">
					<i>时间</i>
					<a href="">模板更换为时间轴</a>
				</li>
			</ul>	
		</div>
		<div class="about">Just about me</div>
		<div class="main">	
			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<p><?php echo $vo['desc']; ?></p>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="about">About my blog</div>
		<address>
		  	<p>域 名：www.yangqq.com 创建于2011年01月12日</p>
		  	<p>服务器：阿里云服务器购买空间参考我的空间配置</p>
		  	<p>程 序：PHP 帝国CMS7.0</p>
		</address>

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
  	
	<script type="text/javascript">
		var time_axis = document.getElementById("time_axis");
		var length = 100 ;
	 	var timer = setInterval(function(){
			length += 10;
			if(length >= 800){
				clearInterval(timer);
			}
				time_axis.style.width = length+"px";
		}
		,10);
	</script>

</body>
</html>