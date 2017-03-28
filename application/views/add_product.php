<head>
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row" style="background-color:#fff">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 商品基本信息</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">商品详细信息</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <form class="form-horizontal m-t">
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品名称：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_name" id="goods_name"
                                                       class="form-control"
                                                       placeholder="请输入商品名称">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品货号：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_sn" id="goods_sn" class="form-control"
                                                       placeholder="请输入商品货号">
                                                <span class="help-block m-b-none">如果您不输入商品货号，系统将会为您生成一个唯一的商品货号</span>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品分类</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_type" id="goods_type">
                                                    <option>请选择</option>
                                                    <?php
                                                    foreach ($goods_type as $item) {
                                                        ?>
                                                        <option><?php echo $item->type_name ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品品牌</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="goods_brand" id="goods_brand">
                                                    <option>请选择</option>
                                                    <?php
                                                    foreach ($goods_brand as $item) {
                                                        ?>
                                                        <option><?php echo $item->brand_name ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">市场价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="market_price" id="market_price"
                                                       class="form-control"
                                                       placeholder="请输入市场售价">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">本店价格：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="shop_price" id="shop_price"
                                                       class="form-control"
                                                       placeholder="请输入本店售卖价格">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">促销价：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="promote_price" id="promote_price"
                                                       class="form-control"
                                                       placeholder="请输入商品促销价">
                                            </div>
                                        </div>
                                        <div class="form-group draggable" id="data_5">
                                            <label class="col-sm-3 control-label">促销日期</label>

                                            <div class="input-daterange input-group col-sm-9" id="datepicker">
                                                <input type="text" class="input-sm form-control" name="start"
                                                       id="promote_start_date"
                                                       value="2017-03-27"/>
                                                <span class="input-group-addon">到</span>
                                                <input type="text" class="input-sm form-control" name="end"
                                                       id="promote_end_date"
                                                       value="2017-03-29"/>
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">赠送消费积分数：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="add_point" id="add_point" class="form-control"
                                                       placeholder="赠送消费积分数">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">积分购买金额：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="consume_point" id="consume_point"
                                                       class="form-control"
                                                       placeholder="积分可以抵扣的金额">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">上传商品图片：</label>

                                            <div class="col-sm-9">
                                                <input type="file" name="goods_img" id="goods_img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group draggable" id="data_1">
                                            <label class="col-sm-3 control-label">上架时间：</label>

                                            <div class="input-group date col-sm-9">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" name="sale_date" id="sale_date"
                                                       value="2017-03-27">
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group draggable">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <button class="btn btn-primary" type="button" onclick="add_product()">
                                                    添加商品
                                                </button>
                                                <button class="btn btn-white" type="button">取消</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <form class="form-horizontal m-t">
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品长度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_length" id="goods_length"
                                                       class="form-control"
                                                       placeholder="请输入商品长度">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品宽度：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_width" id="goods_width"
                                                       class="form-control"
                                                       placeholder="请输入商品宽度">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品重量：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_weight" id="goods_weight"
                                                       class="form-control"
                                                       placeholder="请输入商品重量">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品简单描述：</label>

                                            <div class="col-sm-9">
                                                <input type="text" name="goods_brief" id="goods_brief"
                                                       class="form-control"
                                                       placeholder="请输入商品简单描述">
                                            </div>
                                        </div>
                                        <div class="form-group draggable">
                                            <label class="col-sm-3 control-label">商品详细描述：</label>
                                        </div>
                                        <div class="form-group draggable">
                                            <div class="col-sm-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content no-padding">

                                                        <div class="summernote" style="display: none;">
                                                            <h2>H+ 后台主题</h2>

                                                            <p>
                                                                H+是一个完全响应式，基于Bootstrap3.3.5最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术，她提供了诸多的强大的可以重新组合的UI组件，并集成了最新的jQuery版本(v2.1.1)，当然，也集成了很多功能强大，用途广泛的就jQuery插件，她可以用于所有的Web应用程序，如<b>网站管理后台</b>，<b>网站会员中心</b>，<b>CMS</b>，<b>CRM</b>，<b>OA</b>等等，当然，您也可以对她进行深度定制，以做出更强系统。
                                                            </p>

                                                            <p>
                                                                <b>当前版本：</b>v4.0.0
                                                            </p>

                                                            <p>
                                                                <b>定价：</b><span
                                                                    class="label label-warning">¥988（不开发票）</span>
                                                            </p>

                                                        </div>
                                                        <div class="note-editor">
                                                            <div class="note-dropzone">
                                                                <div class="note-dropzone-message"></div>
                                                            </div>
                                                            <div class="note-dialog">
                                                                <div class="note-image-dialog modal"
                                                                     aria-hidden="false">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close"
                                                                                        aria-hidden="true"
                                                                                        tabindex="-1">×
                                                                                </button>
                                                                                <h4>插入图片</h4></div>
                                                                            <div class="modal-body">
                                                                                <div class="row-fluid"><h5>从本地上传</h5>
                                                                                    <input class="note-image-input"
                                                                                           type="file" name="files"
                                                                                           accept="image/*"><h5>
                                                                                        图片地址</h5><input
                                                                                        class="note-image-url form-control span12"
                                                                                        type="text"></div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button href="#"
                                                                                        class="btn btn-primary note-image-btn disabled"
                                                                                        disabled="disabled">插入图片
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-link-dialog modal" aria-hidden="false">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close"
                                                                                        aria-hidden="true"
                                                                                        tabindex="-1">×
                                                                                </button>
                                                                                <h4>插入链接</h4></div>
                                                                            <div class="modal-body">
                                                                                <div class="row-fluid">
                                                                                    <div class="form-group">
                                                                                        <label>显示文本</label><input
                                                                                            class="note-link-text form-control span12"
                                                                                            disabled="" type="text">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>链接地址</label><input
                                                                                            class="note-link-url form-control span12"
                                                                                            type="text"></div>
                                                                                    <div class="checkbox"><label><input
                                                                                                type="checkbox"
                                                                                                checked="">
                                                                                            在新窗口打开</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button href="#"
                                                                                        class="btn btn-primary note-link-btn disabled"
                                                                                        disabled="disabled">插入链接
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-video-dialog modal"
                                                                     aria-hidden="false">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close"
                                                                                        aria-hidden="true"
                                                                                        tabindex="-1">×
                                                                                </button>
                                                                                <h4>插入视频</h4></div>
                                                                            <div class="modal-body">
                                                                                <div class="row-fluid">
                                                                                    <div class="form-group">
                                                                                        <label>视频地址</label>&nbsp;
                                                                                        <small class="text-muted">(优酷,
                                                                                            Instagram, DailyMotion,
                                                                                            Youtube等)
                                                                                        </small>
                                                                                        <input
                                                                                            class="note-video-url form-control span12"
                                                                                            type="text"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button href="#"
                                                                                        class="btn btn-primary note-video-btn disabled"
                                                                                        disabled="disabled">插入视频
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-help-dialog modal" aria-hidden="false">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body"><a
                                                                                    class="modal-close pull-right"
                                                                                    aria-hidden="true"
                                                                                    tabindex="-1">关闭</a>

                                                                                <div class="title">快捷键</div>
                                                                                <p class="text-center"><a
                                                                                        href="//hackerwins.github.io/summernote/"
                                                                                        target="_blank">Summernote
                                                                                        0.5.2</a> · <a
                                                                                        href="//github.com/HackerWins/summernote"
                                                                                        target="_blank">Project</a> · <a
                                                                                        href="//github.com/HackerWins/summernote/issues"
                                                                                        target="_blank">Issues</a></p>
                                                                                <table class="note-shortcut-layout">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table
                                                                                                class="note-shortcut">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th></th>
                                                                                                    <th>动作</th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Z</td>
                                                                                                    <td>撤销</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        Z
                                                                                                    </td>
                                                                                                    <td>重做</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + ]</td>
                                                                                                    <td>增加缩进</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + [</td>
                                                                                                    <td>减少缩进</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + ENTER
                                                                                                    </td>
                                                                                                    <td>水平线</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td>
                                                                                            <table
                                                                                                class="note-shortcut">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th></th>
                                                                                                    <th>文本格式</th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>Ctrl + B</td>
                                                                                                    <td>粗体</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + I</td>
                                                                                                    <td>斜体</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + U</td>
                                                                                                    <td>下划线</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        S
                                                                                                    </td>
                                                                                                    <td>undefined</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + \</td>
                                                                                                    <td>清除格式</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table
                                                                                                class="note-shortcut">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th></th>
                                                                                                    <th>文档样式</th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM0</td>
                                                                                                    <td>普通</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM1</td>
                                                                                                    <td>标题 1</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM2</td>
                                                                                                    <td>标题 2</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM3</td>
                                                                                                    <td>标题 3</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM4</td>
                                                                                                    <td>标题 4</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM5</td>
                                                                                                    <td>标题 5</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + NUM6</td>
                                                                                                    <td>标题 6</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td>
                                                                                            <table
                                                                                                class="note-shortcut">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th></th>
                                                                                                    <th>段落格式</th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        L
                                                                                                    </td>
                                                                                                    <td>左对齐</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        E
                                                                                                    </td>
                                                                                                    <td>居中对齐</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        R
                                                                                                    </td>
                                                                                                    <td>右对齐</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        J
                                                                                                    </td>
                                                                                                    <td>两端对齐</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        NUM7
                                                                                                    </td>
                                                                                                    <td>有序列表</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Ctrl + Shift +
                                                                                                        NUM8
                                                                                                    </td>
                                                                                                    <td>无序列表</td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="note-handle">
                                                                <div class="note-control-selection"
                                                                     style="display: none;">
                                                                    <div class="note-control-selection-bg"></div>
                                                                    <div
                                                                        class="note-control-holder note-control-nw"></div>
                                                                    <div
                                                                        class="note-control-holder note-control-ne"></div>
                                                                    <div
                                                                        class="note-control-holder note-control-sw"></div>
                                                                    <div
                                                                        class="note-control-sizing note-control-se"></div>
                                                                    <div class="note-control-selection-info"></div>
                                                                </div>
                                                            </div>
                                                            <div class="note-popover">
                                                                <div class="note-link-popover popover bottom in"
                                                                     style="display: none;">
                                                                    <div class="arrow"></div>
                                                                    <div class="popover-content note-link-content"><a
                                                                            href="http://www.google.com"
                                                                            target="_blank">www.google.com</a>&nbsp;&nbsp;
                                                                        <div class="note-insert btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="showLinkDialog"
                                                                                    tabindex="-1"
                                                                                    data-original-title="编辑链接"><i
                                                                                    class="fa fa-edit icon-edit"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="unlink"
                                                                                    tabindex="-1"
                                                                                    data-original-title="去除链接"><i
                                                                                    class="fa fa-unlink icon-unlink"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-image-popover popover bottom in"
                                                                     style="display: none;">
                                                                    <div class="arrow"></div>
                                                                    <div class="popover-content note-image-content">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="resize"
                                                                                    data-value="1" tabindex="-1"
                                                                                    data-original-title="调整至 100%"><span
                                                                                    class="note-fontsize-10">100%</span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="resize"
                                                                                    data-value="0.5" tabindex="-1"
                                                                                    data-original-title="调整至 50%"><span
                                                                                    class="note-fontsize-10">50%</span>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="resize"
                                                                                    data-value="0.25" tabindex="-1"
                                                                                    data-original-title="调整至 25%"><span
                                                                                    class="note-fontsize-10">25%</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="floatMe"
                                                                                    data-value="left" tabindex="-1"
                                                                                    data-original-title="左浮动"><i
                                                                                    class="fa fa-align-left icon-align-left"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="floatMe"
                                                                                    data-value="right" tabindex="-1"
                                                                                    data-original-title="右浮动"><i
                                                                                    class="fa fa-align-right icon-align-right"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="floatMe"
                                                                                    data-value="none" tabindex="-1"
                                                                                    data-original-title="不浮动"><i
                                                                                    class="fa fa-align-justify icon-align-justify"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-event="removeMedia"
                                                                                    data-value="none" tabindex="-1"
                                                                                    data-original-title="undefined"><i
                                                                                    class="fa fa-trash-o icon-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="note-toolbar btn-toolbar">
                                                                <div class="note-style btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            title="" data-toggle="dropdown"
                                                                            tabindex="-1" data-original-title="样式"><i
                                                                            class="fa fa-magic icon-magic"></i> <span
                                                                            class="caret"></span></button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a data-event="formatBlock" data-value="p">普通</a>
                                                                        </li>
                                                                        <li><a data-event="formatBlock"
                                                                               data-value="blockquote">
                                                                                <blockquote>引用</blockquote>
                                                                            </a></li>
                                                                        <li><a data-event="formatBlock"
                                                                               data-value="pre">代码</a></li>
                                                                        <li><a data-event="formatBlock" data-value="h1">
                                                                                <h1>标题 1</h1></a></li>
                                                                        <li><a data-event="formatBlock" data-value="h2">
                                                                                <h2>标题 2</h2></a></li>
                                                                        <li><a data-event="formatBlock" data-value="h3">
                                                                                <h3>标题 3</h3></a></li>
                                                                        <li><a data-event="formatBlock" data-value="h4">
                                                                                <h4>标题 4</h4></a></li>
                                                                        <li><a data-event="formatBlock" data-value="h5">
                                                                                <h5>标题 5</h5></a></li>
                                                                        <li><a data-event="formatBlock" data-value="h6">
                                                                                <h6>标题 6</h6></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="note-font btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small active"
                                                                            title="" data-shortcut="Ctrl+B"
                                                                            data-mac-shortcut="⌘+B" data-event="bold"
                                                                            tabindex="-1"
                                                                            data-original-title="粗体 (Ctrl+B)"><i
                                                                            class="fa fa-bold icon-bold"></i></button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-shortcut="Ctrl+I"
                                                                            data-mac-shortcut="⌘+I" data-event="italic"
                                                                            tabindex="-1"
                                                                            data-original-title="斜体 (Ctrl+I)"><i
                                                                            class="fa fa-italic icon-italic"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-shortcut="Ctrl+U"
                                                                            data-mac-shortcut="⌘+U"
                                                                            data-event="underline" tabindex="-1"
                                                                            data-original-title="下划线 (Ctrl+U)"><i
                                                                            class="fa fa-underline icon-underline"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-shortcut="Ctrl+\"
                                                                            data-mac-shortcut="⌘+\"
                                                                            data-event="removeFormat" tabindex="-1"
                                                                            data-original-title="清除格式 (Ctrl+\)"><i
                                                                            class="fa fa-eraser icon-eraser"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="note-fontname btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            data-toggle="dropdown" title=""
                                                                            tabindex="-1" data-original-title="字体"><span
                                                                            class="note-current-fontname">open sans</span>
                                                                        <b class="caret"></b></button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a data-event="fontName" data-value="Serif"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Serif</a></li>
                                                                        <li><a data-event="fontName" data-value="Sans"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Sans</a></li>
                                                                        <li><a data-event="fontName" data-value="Arial"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Arial</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Arial Black" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Arial Black</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Courier" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Courier</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Courier New" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Courier New</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Comic Sans MS" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Comic Sans MS</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Helvetica" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Helvetica</a></li>
                                                                        <li><a data-event="fontName" data-value="Impact"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Impact</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Lucida Grande" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Lucida Grande</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Lucida Sans" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Lucida Sans</a></li>
                                                                        <li><a data-event="fontName" data-value="Tahoma"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Tahoma</a></li>
                                                                        <li><a data-event="fontName" data-value="Times"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Times</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Times New Roman" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Times New Roman</a></li>
                                                                        <li><a data-event="fontName"
                                                                               data-value="Verdana" class=""><i
                                                                                    class="fa fa-check icon-ok"></i>
                                                                                Verdana</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="note-color btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small note-recent-color"
                                                                            title="" data-event="color"
                                                                            data-value="{&quot;backColor&quot;:&quot;yellow&quot;}"
                                                                            tabindex="-1" data-original-title="最近使用"><i
                                                                            class="fa fa-font icon-font"
                                                                            style="color:black;background-color:yellow;"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            title="" data-toggle="dropdown"
                                                                            tabindex="-1" data-original-title="更多"><span
                                                                            class="caret"></span></button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <div class="btn-group">
                                                                                <div class="note-palette-title">背景</div>
                                                                                <div class="note-color-reset"
                                                                                     data-event="backColor"
                                                                                     data-value="inherit" title="透明">透明
                                                                                </div>
                                                                                <div class="note-color-palette"
                                                                                     data-target-event="backColor">
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000;"
                                                                                                data-event="backColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#000000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242;"
                                                                                                data-event="backColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#424242"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363;"
                                                                                                data-event="backColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#636363"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94;"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C9C94"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEC6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#EFEFEF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7;"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7F7F7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFFFFF"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF9C00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFFF00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00;"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#00FF00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#00FFFF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#0000FF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C00FF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF00FF"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7C6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFE7CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFEFC6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6;"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6EFD6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7;"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEDEE7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7;"
                                                                                                data-event="backColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEE7F7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7;"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6D6E7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E7D6DE"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C;"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E79C9C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFC69C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFE79C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5;"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B5D6A5"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#A5C6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF;"
                                                                                                data-event="backColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9CC6EF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6;"
                                                                                                data-event="backColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B5A5D6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD;"
                                                                                                data-event="backColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6A5BD"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363;"
                                                                                                data-event="backColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E76363"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B;"
                                                                                                data-event="backColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7AD6B"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663;"
                                                                                                data-event="backColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFD663"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B;"
                                                                                                data-event="backColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#94BD7B"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD;"
                                                                                                data-event="backColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#73A5AD"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE;"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#6BADDE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6;"
                                                                                                data-event="backColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#8C7BC6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5;"
                                                                                                data-event="backColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#C67BA5"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000;"
                                                                                                data-event="backColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CE0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439;"
                                                                                                data-event="backColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E79439"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631;"
                                                                                                data-event="backColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#EFC631"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A;"
                                                                                                data-event="backColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#6BA54A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C;"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#4A7B8C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6;"
                                                                                                data-event="backColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#3984C6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5;"
                                                                                                data-event="backColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#634AA5"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B;"
                                                                                                data-event="backColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#A54A7B"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000;"
                                                                                                data-event="backColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308;"
                                                                                                data-event="backColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B56308"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400;"
                                                                                                data-event="backColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#BD9400"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21;"
                                                                                                data-event="backColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#397B21"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A;"
                                                                                                data-event="backColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#104A5A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294;"
                                                                                                data-event="backColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#085294"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873;"
                                                                                                data-event="backColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#311873"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842;"
                                                                                                data-event="backColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#731842"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000;"
                                                                                                data-event="backColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#630000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900;"
                                                                                                data-event="backColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#7B3900"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300;"
                                                                                                data-event="backColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#846300"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218;"
                                                                                                data-event="backColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#295218"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139;"
                                                                                                data-event="backColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#083139"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163;"
                                                                                                data-event="backColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#003163"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A;"
                                                                                                data-event="backColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#21104A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031;"
                                                                                                data-event="backColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#4A1031"></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="btn-group">
                                                                                <div class="note-palette-title">前景</div>
                                                                                <div class="note-color-reset"
                                                                                     data-event="foreColor"
                                                                                     data-value="inherit" title="重置">默认
                                                                                </div>
                                                                                <div class="note-color-palette"
                                                                                     data-target-event="foreColor">
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#000000;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#000000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#000000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#424242;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#424242"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#424242"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#636363;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#636363"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#636363"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C9C94;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C9C94"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C9C94"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEC6CE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEC6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEC6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFEFEF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFEFEF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#EFEFEF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7F7F7;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7F7F7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7F7F7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFFFF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFFFF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFFFFF"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF0000;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF9C00;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF9C00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF9C00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFFF00;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFFF00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFFF00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FF00;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FF00"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#00FF00"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#00FFFF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#00FFFF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#00FFFF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#0000FF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#0000FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#0000FF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C00FF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C00FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C00FF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FF00FF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FF00FF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FF00FF"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7C6CE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7C6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7C6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE7CE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE7CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFE7CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFEFC6;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFEFC6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFEFC6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6EFD6;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6EFD6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6EFD6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEDEE7;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEDEE7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEDEE7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CEE7F7;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CEE7F7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CEE7F7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6D6E7;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6D6E7"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6D6E7"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E7D6DE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E7D6DE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E7D6DE"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79C9C;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79C9C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E79C9C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFC69C;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFC69C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFC69C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFE79C;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFE79C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFE79C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5D6A5;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5D6A5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B5D6A5"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A5C6CE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A5C6CE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#A5C6CE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9CC6EF;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9CC6EF"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9CC6EF"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B5A5D6;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B5A5D6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B5A5D6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#D6A5BD;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#D6A5BD"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#D6A5BD"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E76363;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E76363"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E76363"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#F7AD6B;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#F7AD6B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#F7AD6B"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#FFD663;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#FFD663"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#FFD663"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#94BD7B;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#94BD7B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#94BD7B"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#73A5AD;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#73A5AD"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#73A5AD"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BADDE;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BADDE"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#6BADDE"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#8C7BC6;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#8C7BC6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#8C7BC6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#C67BA5;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#C67BA5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#C67BA5"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#CE0000;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#CE0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#CE0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#E79439;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#E79439"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#E79439"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#EFC631;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#EFC631"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#EFC631"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#6BA54A;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#6BA54A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#6BA54A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A7B8C;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A7B8C"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#4A7B8C"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#3984C6;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#3984C6"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#3984C6"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#634AA5;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#634AA5"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#634AA5"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#A54A7B;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#A54A7B"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#A54A7B"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#9C0000;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#9C0000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#9C0000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#B56308;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#B56308"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#B56308"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#BD9400;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#BD9400"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#BD9400"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#397B21;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#397B21"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#397B21"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#104A5A;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#104A5A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#104A5A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#085294;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#085294"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#085294"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#311873;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#311873"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#311873"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#731842;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#731842"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#731842"></button>
                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#630000;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#630000"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#630000"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#7B3900;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#7B3900"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#7B3900"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#846300;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#846300"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#846300"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#295218;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#295218"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#295218"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#083139;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#083139"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#083139"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#003163;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#003163"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#003163"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#21104A;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#21104A"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#21104A"></button>
                                                                                        <button type="button"
                                                                                                class="note-color-btn"
                                                                                                style="background-color:#4A1031;"
                                                                                                data-event="foreColor"
                                                                                                data-value="#4A1031"
                                                                                                title=""
                                                                                                data-toggle="button"
                                                                                                tabindex="-1"
                                                                                                data-original-title="#4A1031"></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="note-para btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-shortcut="Ctrl+Shift+8"
                                                                            data-mac-shortcut="⌘+⇧+7"
                                                                            data-event="insertUnorderedList"
                                                                            tabindex="-1"
                                                                            data-original-title="无序列表 (Ctrl+Shift+8)"><i
                                                                            class="fa fa-list-ul icon-list-ul"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-shortcut="Ctrl+Shift+7"
                                                                            data-mac-shortcut="⌘+⇧+8"
                                                                            data-event="insertOrderedList" tabindex="-1"
                                                                            data-original-title="有序列表 (Ctrl+Shift+7)"><i
                                                                            class="fa fa-list-ol icon-list-ol"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            title="" data-toggle="dropdown"
                                                                            tabindex="-1" data-original-title="段落"><i
                                                                            class="fa fa-align-left icon-align-left"></i>
                                                                        <span class="caret"></span></button>
                                                                    <div class="dropdown-menu">
                                                                        <div class="note-align btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title=""
                                                                                    data-shortcut="Ctrl+Shift+L"
                                                                                    data-mac-shortcut="⌘+⇧+L"
                                                                                    data-event="justifyLeft"
                                                                                    tabindex="-1"
                                                                                    data-original-title="左对齐 (Ctrl+Shift+L)">
                                                                                <i class="fa fa-align-left icon-align-left"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small active"
                                                                                    title=""
                                                                                    data-shortcut="Ctrl+Shift+E"
                                                                                    data-mac-shortcut="⌘+⇧+E"
                                                                                    data-event="justifyCenter"
                                                                                    tabindex="-1"
                                                                                    data-original-title="居中对齐 (Ctrl+Shift+E)">
                                                                                <i class="fa fa-align-center icon-align-center"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title=""
                                                                                    data-shortcut="Ctrl+Shift+R"
                                                                                    data-mac-shortcut="⌘+⇧+R"
                                                                                    data-event="justifyRight"
                                                                                    tabindex="-1"
                                                                                    data-original-title="右对齐 (Ctrl+Shift+R)">
                                                                                <i class="fa fa-align-right icon-align-right"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title=""
                                                                                    data-shortcut="Ctrl+Shift+J"
                                                                                    data-mac-shortcut="⌘+⇧+J"
                                                                                    data-event="justifyFull"
                                                                                    tabindex="-1"
                                                                                    data-original-title="两端对齐 (Ctrl+Shift+J)">
                                                                                <i class="fa fa-align-justify icon-align-justify"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="note-list btn-group">
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-shortcut="Ctrl+["
                                                                                    data-mac-shortcut="⌘+["
                                                                                    data-event="outdent" tabindex="-1"
                                                                                    data-original-title="减少缩进 (Ctrl+[)">
                                                                                <i class="fa fa-outdent icon-indent-left"></i>
                                                                            </button>
                                                                            <button type="button"
                                                                                    class="btn btn-default btn-sm btn-small"
                                                                                    title="" data-shortcut="Ctrl+]"
                                                                                    data-mac-shortcut="⌘+]"
                                                                                    data-event="indent" tabindex="-1"
                                                                                    data-original-title="增加缩进 (Ctrl+])">
                                                                                <i class="fa fa-indent icon-indent-right"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="note-height btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            data-toggle="dropdown" title=""
                                                                            tabindex="-1" data-original-title="行高"><i
                                                                            class="fa fa-text-height icon-text-height"></i>&nbsp;
                                                                        <b class="caret"></b></button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a data-event="lineHeight" data-value="1.0"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.0</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="1.2"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.2</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="1.4"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.4</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="1.5"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.5</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="1.6"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.6</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="1.8"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 1.8</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="2.0"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 2.0</a>
                                                                        </li>
                                                                        <li><a data-event="lineHeight" data-value="3.0"
                                                                               class=""><i
                                                                                    class="fa fa-check icon-ok"></i> 3.0</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="note-table btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                                            title="" data-toggle="dropdown"
                                                                            tabindex="-1" data-original-title="表格"><i
                                                                            class="fa fa-table icon-table"></i> <span
                                                                            class="caret"></span></button>
                                                                    <ul class="dropdown-menu">
                                                                        <div class="note-dimension-picker">
                                                                            <div
                                                                                class="note-dimension-picker-mousecatcher"
                                                                                data-event="insertTable"
                                                                                data-value="1x1"></div>
                                                                            <div
                                                                                class="note-dimension-picker-highlighted"></div>
                                                                            <div
                                                                                class="note-dimension-picker-unhighlighted"></div>
                                                                        </div>
                                                                        <div class="note-dimension-display"> 1 x 1</div>
                                                                    </ul>
                                                                </div>
                                                                <div class="note-insert btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="showLinkDialog"
                                                                            tabindex="-1" data-original-title="链接"><i
                                                                            class="fa fa-link icon-link"></i></button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="showImageDialog"
                                                                            tabindex="-1" data-original-title="图片"><i
                                                                            class="fa fa-picture-o icon-picture"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="showVideoDialog"
                                                                            tabindex="-1" data-original-title="视频"><i
                                                                            class="fa fa-youtube-play icon-play"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="note-view btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="fullscreen"
                                                                            tabindex="-1" data-original-title="全屏"><i
                                                                            class="fa fa-arrows-alt icon-fullscreen"></i>
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="codeview" tabindex="-1"
                                                                            data-original-title="源代码"><i
                                                                            class="fa fa-code icon-code"></i></button>
                                                                </div>
                                                                <div class="note-help btn-group">
                                                                    <button type="button"
                                                                            class="btn btn-default btn-sm btn-small"
                                                                            title="" data-event="showHelpDialog"
                                                                            tabindex="-1" data-original-title="帮助"><i
                                                                            class="fa fa-question icon-question"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <textarea class="note-codable"></textarea>

                                                            <div class="note-editable" contenteditable="true">
                                                                <h2>H+ 后台主题</h2>

                                                                <p>
                                                                    H+是一个完全响应式，基于Bootstrap3.3.5最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术，她提供了诸多的强大的可以重新组合的UI组件，并集成了最新的jQuery版本(v2.1.1)，当然，也集成了很多功能强大，用途广泛的就jQuery插件，她可以用于所有的Web应用程序，如<b>网站管理后台</b>，<b>网站会员中心</b>，<b>CMS</b>，<b>CRM</b>，<b>OA</b>等等，当然，您也可以对她进行深度定制，以做出更强系统。
                                                                </p>

                                                                <p>
                                                                    <b>当前版本：</b>v4.0.0
                                                                </p>

                                                                <p>
                                                                    <b>定价：</b><span class="label label-warning">¥988（不开发票）</span>
                                                                </p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group draggable">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <button class="btn btn-primary" type="button" onclick="add_product()">
                                                    保存商品详细信息
                                                </button>
                                                <button class="btn btn-white" type="button">取消</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    function add_product() {
        var goods_name = document.getElementById('goods_name').value;
        var goods_sn = document.getElementById('goods_sn').value;
        var goods_type = $("#goods_type option:selected").val();
        var goods_brand = $("#goods_brand option:selected").val();
        var market_price = document.getElementById('market_price').value;
        var shop_price = document.getElementById('shop_price').value;
        var promote_price = document.getElementById('promote_price').value;
        var promote_start_date = document.getElementById('promote_start_date').value;
        var promote_end_date = document.getElementById('promote_end_date').value;
        var add_point = document.getElementById('add_point').value;
        var consume_point = document.getElementById('consume_point').value;
        var goods_img = document.getElementById('goods_img').value;
        var sale_date = document.getElementById('sale_date').value;
        var data = {
            goods_name: goods_name,
            goods_sn: goods_sn,
            goods_type: goods_type,
            goods_brand: goods_brand,
            market_price: market_price,
            shop_price: shop_price,
            promote_price: promote_price,
            promote_start_date: promote_start_date,
            promote_end_date: promote_end_date,
            add_point: add_point,
            consume_point: consume_point,
            goods_img: goods_img,
            sale_date: sale_date
        };
        var url = '<?php echo base_url()?>index.php/product/addProduct';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('添加成功')
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
</html>