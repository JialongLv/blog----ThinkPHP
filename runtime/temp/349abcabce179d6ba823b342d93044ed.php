<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wamp64\www\blog\public/../application/admin\view\cate\edit.html";i:1490173167;s:67:"C:\wamp64\www\blog\public/../application/admin\view\Public\top.html";i:1490020566;s:68:"C:\wamp64\www\blog\public/../application/admin\view\Public\left.html";i:1490109820;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/static/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/static/admin/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__/static/admin/js/libs/modernizr.min.js"></script>
  
</head>
<body>
<<div class="topbar-wrap white">
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
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
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
                        <li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="<?php echo url('cate/lst'); ?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">栏目管理</a><span class="crumb-step">&gt;</span><span>修改栏目</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action=" " method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $cates['id']; ?>">
                    <table class="insert-tab" width="80%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>栏目名称：</th>
                                <td>
                                    <input class="common-text required" id="catename" name="catename" size="50" value="<?php echo $cates['catename']; ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>关键词：</th>
                                <td><input class="common-text" name="keywords" size="50" value="<?php echo $cates['keywords']; ?>" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>栏目类型：</th>
                                <td><input name="type" value="1"  type="checkbox" <?php if($cates['type'] == 1): ?>checked='checked'<?php endif; ?> />留言板</td>
                            </tr>
                            <tr>
                                <th >内容：</th>
                                <td><textarea name="desc" class="common-textarea" id="desc" cols="30" style="width: 98%;" rows="10">
                                    <?php echo $cates['desc']; ?>
                                </textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>

</body>
</html>