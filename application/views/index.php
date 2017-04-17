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
                        <span><img alt="image" class="img-circle" src="<?php echo base_url()?>public/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="<?php echo base_url();?>index.php/welcome/profile">个人资料</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo base_url();?>index.php/welcome/resetpassword">修改密码</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>index.php/welcome/login">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php">
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
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/product/comment">商品评论</a>
                        </li>
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
                        <li><a class="J_menuItem" href="<?php echo base_url(); ?>index.php/mail/send">发送邮件</a>
                        </li>
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
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                            class="fa fa-bars"></i> </a>

                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search"
                                   id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="m-t-xs">
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>

                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 这个在日本投降书上签字的军官，建国后一定是个不小的干部吧？
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>

                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>国民岳父</strong> 如何看待“男子不满自己爱犬被称为狗，刺伤路人”？——这人比犬还凶
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="index_v1.html" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i>
                            购买</a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%"
                    src="<?php base_url(); ?>index.php/welcome/indexstat" frameborder="0" data-id="index_v2.html"
                    seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2014-2015 <a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>