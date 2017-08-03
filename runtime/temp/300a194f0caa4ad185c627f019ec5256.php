<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"C:\wamp64\www\blog\public/../application/admin\view\article\lst.html";i:1490972370;s:67:"C:\wamp64\www\blog\public/../application/admin\view\Public\top.html";i:1490272337;s:68:"C:\wamp64\www\blog\public/../application/admin\view\Public\left.html";i:1490971917;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文章管理</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/static/admin/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__\admin\js\libs"></script>
     <style type="text/css">
        ul.pagination li{
            float: left;
        }

        div.list-page{
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员<?php echo session('username') ?></a></li>
                <li><a href="<?php echo url('Admin/edit',array('id'=>session('id'))); ?>">修改密码</a></li>
                <li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('article/lst'); ?>"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="<?php echo url('cate/lst'); ?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="<?php echo url('link/lst'); ?>"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="<?php echo url('guest/lst'); ?>"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('admin/lst'); ?>"><i class="icon-font">&#xe008;</i>管理员管理</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">文章管理</span></div>
        </div>
    
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo url('Article/add'); ?>"><i class="icon-font"></i>添加文章</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>文章</th>
                            <th>缩略图</th>
                            <th>点击量</th>
                            <th>所属栏目</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($artres) || $artres instanceof \think\Collection || $artres instanceof \think\Paginator): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['id']; ?></td>
                            <td title="<?php echo $vo['title']; ?>"><a target="_blank" href="<?php echo url('index/Article/index',array('artid'=>$vo['id'])); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a>
                            </td>
                            <td>
                            <?php if($vo['pic'] != ''): ?>
                            <img height="50" src="__PUBLIC__<?php echo $vo['pic']; ?>">
                            <?php else: ?>
                            暂无缩略图
                            <?php endif; ?>
                            </td>
                            <td><?php echo $vo['click']; ?></td>
                            <td><?php echo $vo['catename']; ?></td>
                            <td><?php echo date("Y-m-d",$vo['time']); ?></td>
                            <td>
                                <a class="link-update" href="<?php echo url('admin/article/edit',array('id'=>$vo['id'])); ?>">修改</a>
                                <a class="link-del" onclick="return confirm('你确定要删除该管理员吗？');" href="<?php echo url('article/del',array('id'=>$vo['id'])); ?>">删除</a>
                            </td>
                        </tr>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo $artres->render(); ?></div> 
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>