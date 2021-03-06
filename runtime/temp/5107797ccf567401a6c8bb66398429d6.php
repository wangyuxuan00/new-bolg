<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\blog\public/../application/index\view\index\index.html";i:1513843242;s:70:"D:\phpStudy\WWW\blog\public/../application/index\view\index\doing.html";i:1514882136;s:69:"D:\phpStudy\WWW\blog\public/../application/index\view\index\base.html";i:1514883283;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>博客--首页</title>
    <link href="__CSS__/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__CSS__/blog.css">
 	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="__JS__/scrollReveal.js"></script>
    
	<style type="text/css">
    	.nav1{
		    margin-top: 40px;
    	}
    	.cont{
            margin-top: 40px;
    		display: block;
    		width: 5px;
    		min-height: 500px;
    		background-color: #fff;
    		margin-left: 130px;
    	}
    	.cont ul li{
    		width: 18px;
    		height: 18px;
    		background-color: #0979b1;
    		border: 3px solid #fff;
    		border-radius: 50%;
    		margin: 0px 0px 216px -46px;
    	}
    	.cont span{
		    position: relative;
    		display: block;
            font-size: 16px;
	    	width: 95px;
	        height: 43px;
            line-height: 43px;
            text-align: center;
	        right: 110px;
            border-radius: 10px 0px 0px 10px;
    	}
    	.cont i{
    		position: relative;
    		display: block;
	    	width: 1px;
	    	border-top: 10px solid transparent;
	    	border-right: 10px solid #3594cb;
	    	border-bottom: 10px solid transparent;
    	    left: -10px;
            top: 29px;
    	}
    	.cont div{
    		position: relative;
		    width: 735px;
			height: 198px;
    		background-color: #3594cb;
    		left: 39px;
    		top: -78px;
	        border-radius: 10px;
    	}
    	title{
    		font-size: 16px;
		    padding: 20px 10px 10px 40px;
		    text-shadow: rgba(7, 84, 152, 0.71) 1px 1px 1px;
		    width: 500px;
		    display: block;
    	}
    	.img-rounded{
    		width: 200px;
    		height: 120px;
		    margin-left: 40px;
		    float: left;
	        margin-right: 20px;
    	}
    	em{
    		font-style: normal;
    		margin-right: 20px;
		    display: block;
    	}
    	.cont button{
    		position: relative;
	    	top: 29px;
    		left: 320px;
    	}
    	.pagination{
    		margin: 0 auto;
    	}
        .button{
            color: #fff;
        }
        .cont ul li:hover>span{
            background-color: #bdd0db;
        }
        .cont:after { 
            clear:both;
            content:'';
            display:block;
            width:0;
            height:0;
            visibility:hidden; 
        }
	</style>
    <script type="text/javascript" src="__JS__/jquery.pagination.js"></script>
    <link rel="stylesheet" href="__CSS__/pagination.css" type="text/css">

    
	<style type="text/css">
		.col-xs-4 p{
			background-color: #fff;
		    color: #666;
	        padding: 15px;
	        width: 279px
		}
		.img{
		    width: 279px;
		    height: 240px;
		    border: 5px solid #fff;
		}
		.col-xs-4:hover{
			margin-top:-5px; 
		}
		.col-xs-4 a{
			color: #226039;
			font-size: 16px;
		}
		.col-xs-4 a:hover{
			cursor: pointer;
			text-decoration: none;
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
			
	<div class="row">
		<div class="col-xs-4">
			<img src="__IMG__/t01.jpg" alt="..." class="img">
			<p class="text-center"> 
				<a>灯具公司复古风格PSD设计稿</a><br>
				此模板为PSD设计稿，复古风格。首页主要突出产品，以及公司简介。手绘灯作为头部背景图片，这个比较特别。html可以做出灯一闪一闪的效果，或者说旁边有个按钮...
			</p>
		</div>
		<div class="col-xs-4">
			<img src="__IMG__/t02.jpg" alt="..." class="img">
			<p class="text-center">
				<a>灯具公司复古风格PSD设计稿</a><br>
				一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...
			</p>
			</div>
		<div class="col-xs-4">
			<img src="__IMG__/t03.jpg" alt="..." class="img">
			<p class="text-center">
				<a>灯具公司复古风格PSD设计稿</a><br>
				让世界拥有它的脚步，让我保有我的茧。当溃烂已极的心灵再不想做一丝一毫的思索时，就让我静静回到我的茧内，以回忆为睡榻，以悲哀为覆被，这是我唯一的美丽
			</p>
		</div> 
	</div> 

			
    <div class="content_1">
    	<div class="cont">
    		<ul>
    			<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    				<li>
    					<span id="bg"><?php echo date("y-m-d",$vo['created']); ?></span>
    					<div data-scroll-reveal="enter right and move 20px over 0.53s">
                            <i></i>
    						<title><?php echo $vo['title']; ?></title>
    						<img src="<?php echo $vo['picture']; ?>" alt="..." class="img-rounded">
    						<em><?php echo $vo['content']; ?></em>
    						<button type="button" class="btn btn-primary">
                                <a class="button" href="<?php echo url('index/particulars',['id' => $vo['id']]); ?>">阅读全文</a>
                            </button>
    					</div>
    				</li>
    			<?php endforeach; endif; else: echo "" ;endif; ?>
    		</ul>
    	</div>
    	<div class="text-center"><?php echo $page; ?></div>
        <div class="text-center">
            当前页:<?php echo $info->currentPage(); ?>
            总页数:<?php echo $info->lastPage(); ?>
            数据总数:<?php echo $info->total(); ?>
        </div>
    </div>

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
        $(".nav1 button").click(function () {
            var val = $(this).html();
            // $.ajax({
            //     type: "POST",
            //     url:  "<?php echo url('index/do'); ?>",
            //     data: {'key':val},
            //     dataType: "json",
            // //     success: function(data){
            // //     },
            // //     error: function(){
            // //     },
            // });  
            $(".content_1").load('<?php echo url('index/do'); ?>',{"key" : val});

        });
    </script>

</body>
</html>