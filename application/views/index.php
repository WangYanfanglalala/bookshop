<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle"
                                   src="<?php echo base_url(); ?>public/img/profile_small.jpg"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                            </li>
                            <li><a class="J_menuItem" href="profile.html">个人资料</a>
                            </li>
                            <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                            </li>
                            <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php">
                        <i class="fa fa-dashboard"></i>
                        <span class="nav-label">主页</span>
                        <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">商品管理</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/goodslist">商品列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/comment">商品评论</a></li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/add">添加商品</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/type">商品分类</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/brand">商品品牌</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">订单管理</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/orderlist">订单列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/shipping">发货单列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/cancel">退货单列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">会员管理</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/member/memberlist">会员列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/member/add">添加会员</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/member/feedback">会员留言</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">报表统计</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="graph_echarts.html">客户统计</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_flot.html">订单统计</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_morris.html">销售概况</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_rickshaw.html">销售排行</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_peity.html">会员排行</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">邮件短信管理</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/orderlist">邮件任务列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/shipping">邮件模板</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/order/cancel">结果分析</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-group"></i> <span class="nav-label">管理员管理</span><span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/welcome/adminlist">管理员列表</a>
                        </li>
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/welcome/signup">添加管理员</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="index_v2.html?v=4.0" frameborder="0" data-id="index_v2.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2017-2018 <a href="http://www.zi-han.net/" target="_blank">王艳芳</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>