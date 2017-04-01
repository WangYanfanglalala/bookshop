<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 栅格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <p>通过下表可以详细查看 Bootstrap 的栅格系统是如何在多种屏幕设备上工作的。</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    超小屏幕
                                    <small>手机 (&lt;768px)</small>
                                </th>
                                <th>
                                    小屏幕
                                    <small>平板 (≥768px)</small>
                                </th>
                                <th>
                                    中等屏幕
                                    <small>桌面显示器 (≥992px)</small>
                                </th>
                                <th>
                                    大屏幕
                                    <small>大桌面显示器 (≥1200px)</small>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-nowrap">栅格系统行为</th>
                                <td>总是水平排列</td>
                                <td colspan="3">开始是堆叠在一起的，当大于这些阈值时将变为水平排列C</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap"><code>.container</code> 最大宽度</th>
                                <td>None （自动）</td>
                                <td>750px</td>
                                <td>970px</td>
                                <td>1170px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">类前缀</th>
                                <td><code>.col-xs-</code>
                                </td>
                                <td><code>.col-sm-</code>
                                </td>
                                <td><code>.col-md-</code>
                                </td>
                                <td><code>.col-lg-</code>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">列（column）数</th>
                                <td colspan="4">12</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">最大列（column）宽</th>
                                <td class="text-muted">自动</td>
                                <td>~62px</td>
                                <td>~81px</td>
                                <td>~97px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">槽（gutter）宽</th>
                                <td colspan="4">30px （每列左右均有 15px）</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">可嵌套</th>
                                <td colspan="4">是</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">偏移（Offsets）</th>
                                <td colspan="4">是</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">列排序</th>
                                <td colspan="4">是</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox-content p-xl">
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                            <strong>北京百度在线网络技术有限公司</strong><br>
                            北京市海淀区上地十街10号<br>
                            <abbr title="Phone">总机：</abbr> (+86 10) 5992 8888
                        </address>
                    </div>

                    <div class="col-sm-6 text-right">
                        <h4>单据编号：</h4>
                        <h4 class="text-navy">H+-000567F7-00</h4>
                        <address>
                            <strong>阿里巴巴集团</strong><br>
                            中国杭州市华星路99号东部软件园创业大厦6层(310099)<br>
                            <abbr title="Phone">总机：</abbr> (86) 571-8502-2088
                        </address>
                        <p>
                            <span><strong>日期：</strong> 2014-11-11</span>
                        </p>
                    </div>
                </div>

                <div class="table-responsive m-t">
                    <table class="table invoice-table">
                        <thead>
                        <tr>
                            <th>清单</th>
                            <th>数量</th>
                            <th>单价</th>
                            <th>税率</th>
                            <th>总价</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div><strong>尚都比拉2013冬装新款女装 韩版修身呢子大衣 秋冬气质羊毛呢外套</strong>
                                </div>
                            </td>
                            <td>1</td>
                            <td>&yen;26.00</td>
                            <td>&yen;1.20</td>
                            <td>&yen;31,98</td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>11*11夏娜 新款斗篷毛呢外套 女秋冬呢子大衣 韩版大码宽松呢大衣</strong>
                                </div>
                                <small>双十一特价
                                </small>
                            </td>
                            <td>2</td>
                            <td>&yen;80.00</td>
                            <td>&yen;1.20</td>
                            <td>&yen;196.80</td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>2013秋装 新款女装韩版学生秋冬加厚加绒保暖开衫卫衣 百搭女外套</strong>
                                </div>
                            </td>
                            <td>3</td>
                            <td>&yen;420.00</td>
                            <td>&yen;1.20</td>
                            <td>&yen;1033.20</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /table-responsive -->

                <table class="table invoice-total">
                    <tbody>
                    <tr>
                        <td><strong>总价：</strong>
                        </td>
                        <td>&yen;1026.00</td>
                    </tr>
                    <tr>
                        <td><strong>税：</strong>
                        </td>
                        <td>&yen;235.98</td>
                    </tr>
                    <tr>
                        <td><strong>总计</strong>
                        </td>
                        <td>&yen;1261.98</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <button class="btn btn-primary"><i class="fa fa-dollar"></i> 去付款</button>
                </div>

                <div class="well m-t"><strong>注意：</strong> 请在30日内完成付款，否则订单会自动取消。
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/demo/peity-demo.min.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>

</html>