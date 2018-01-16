<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\phpStudy\WWW\blog\public/../application/index\view\index\do.html";i:1514885740;}*/ ?>
<div class="cont">
    <ul>
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
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
 <div id="pagination"></div>
<script type="text/javascript">
   $('#pagination').jqPaginator({
    totalPages: 100,
    visiblePages: 10,
    currentPage: 1,

    first: '<li class="first"><a href="javascript:void(0);">First</a></li>',
    prev: '<li class="prev"><a href="javascript:void(0);">Previous</a></li>',
    next: '<li class="next"><a href="javascript:void(0);">Next</a></li>',
    last: '<li class="last"><a href="javascript:void(0);">Last</a></li>',
    page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
    onPageChange: function (num) {
        $('#text').html('当前第' + num + '页');
    }
});
</script>
	