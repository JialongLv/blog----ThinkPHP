<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\wamp64\www\blog\public/../application/index\view\article\article.html";i:1491663195;s:69:"C:\wamp64\www\blog\public/../application/index\view\Public\right.html";i:1491530157;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> <?php echo $arts['title']; ?></title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="__PUBLIC__/static/index/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
     <link href="__PUBLIC__/static/index/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="__PUBLIC__/static/index/css/style.css" rel="stylesheet" />

  
</head>
<body > 
   
 

    <section class="header-section">
        <div class="container">
              <div class="row">
               <a href="http://127.0.0.1/blog/public/index.php/"><div class="col-md-2">
                    <img src="__PUBLIC__/static/index/images/person.webp" class="img-circle img-responsive" />
                </div></a>
                <div class="col-md-5 text-center">
                    <h1><strong> 加龙</strong></h1>
                    <h4>PHPer & Pythoner</h4>
                </div>
                <div class="col-md-5">
                    <h3>WHO M I :</h3>

                    <p>一个94年的小年轻<p>
                    <p>爱跑步，爱阅读，爱美食</p>
                     <p>宝剑锋从磨砺出，梅花香自苦寒来</p>
                </div>
            </div>
        </div>
    </section>
    <!--HOME SECTION END-->

 
   
     <section  >
        <div class="container">
            <div class="row">
                <div class="col-md-9" >
                      <div class="blog-main">
                        <div class="heading-blog">
                          <?php echo $arts['title']; ?>
                        </div>
                        <div class="blog-info">
                            <span class="label label-primary">时间：<?php echo date("Y-m-d H:i:s",$arts['time']); ?></span>
                            <span class="label label-success">栏目：<?php echo $arts['catename']; ?></span>
                            
                                    <span class="label label-info">
                              点击： <?php echo $arts['click']; ?>
                            </span>
                            <span class="label label-danger">标签：
                            <?php
                                $arr=explode(',',$arts['keywords']);
                                foreach ($arr as $k => $v){
                                    echo "<a href='http://127.0.0.1/blog/public/index.php/index/Tags/index/tags/$v'>$v</a>";
                                    echo '  ' ;
                                                                   }
                                    ?></span>
                        </div>
                        <img <?php if($arts['pic'] != ''): ?>
                        src="__PUBLIC__<?php echo $arts['pic']; ?>"  class="img-responsive img-rounded" />
                        <?php endif; ?> 
                        
                        <div class="blog-txt">
                             <?php echo $arts['content']; ?>
                        </div>
                         
                         
                    </div>
                     <!--BLOG MAIN SECTION END-->
                 
               <!--  <h3 ><strong>留言</strong></h3>
                    <hr />
                     <ul class="media-list">
                        <li class="media">
        <p class="pull-left" href="#">
          <img class="media-object img-circle"   src="__PUBLIC__/static/index/images/person.jpg" />
        </p>
        <div class="media-body">
          <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
          <p>
              Donec sit amet ligula enim. Duis vel condimentum massa.
               Maecenas eget congue dui. Vestibulum et eros consectetur,
               interdum nibh et, volutpat dolor.
          </p>
          <!-- Nested media object -->
          <!-- <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-circle"   src="__PUBLIC__/static/index/images/580.jpg" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nulla gravida vitae neque </h4>
             Donec sit amet ligula enim. Duis vel condimentum massa.
               Maecenas eget congue dui. Vestibulum et eros consectetur,
               interdum nibh et, volutpat dolor.
              <!-- Nested media object -->
             
           <!--  </div>
          </div>
          
        </div>
      </li>
                     
                     </ul>  -->
                    </div>
                 <div class="col-md-3">

 <ul class="list-group">
                        <li class="list-group-item">
                            <strong>栏目</strong>
                        </li>
                        <?php if(is_array($navres) || $navres instanceof \think\Collection || $navres instanceof \think\Paginator): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="list-group-item">
                            <a  href="
                            <?php if($vo['type'] == 0): ?>
                            <?php echo url('lst/index',array('cateid'=>$vo['id'])); else: ?>
                            <?php echo url('guest/index',array('cateid'=>$vo['id'])); endif; ?> ">
                           <?php echo $vo['catename']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <!-- <br /> -->
                         <ul class="list-group">
                        <li class="list-group-item">
                            <strong>最热文章</strong>
                        </li>
                         <?php if(is_array($hotartres) || $hotartres instanceof \think\Collection || $hotartres instanceof \think\Paginator): $i = 0; $__LIST__ = $hotartres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="list-group-item">
                            <a  href="
                            
                            <?php echo url('article/index',array('artid'=>$vo['id'])); ?>
                            
                            
                             ">
                             <?php echo $vo['title']; ?>
                           </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <br />

                    <ul class="list-group">
                        <li class="list-group-item">广告
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <img src="__PUBLIC__/static/index/images/ad1.jpg" class="img-responsive" />
                            </a>
                            <br />
                            <a href="#">
                                <img src="__PUBLIC__/static/index/images/ad2.jpg" class="img-responsive" />
                            </a>
                        </li>
                    </ul>

                  <!--   <br />
                    <div  >
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align:center">留言板</h3>
                            </div>
                            <div class="panel-body" >
                                昵称：<input type="text" class="form-control" size="1" placeholder="你的昵称" /><br />
                                邮箱：
                                <input type="text" class="form-control" placeholder="你的邮箱" /><br />
                                内容：
                                <textarea rows="10" cols="30" >
                                
                                </textarea>
                                
                                <hr />
                                <a href="#" class="btn btn-info btn-sm btn-block">提交</a>
                            </div>
                        </div>
                    </div> -->
             




               
                    
              <!--   </div> -->


               
          <!--   </div> -->
</div>
    <!-- </section> -->
    <hr />
     <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="padding:20px 5px;" >
                   &copy 2017 吕加龙
                    </div>
                </div>
                </div>
   
</body>
</html>
