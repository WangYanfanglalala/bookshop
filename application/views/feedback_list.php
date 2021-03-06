<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="<?php echo base_url(); ?>public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>搜索条件</h5>
                </div>
                <div class="ibox-content">
                    <p>
                        <label>用户名：</label><input type="text" id="username_input">
                        <label>留言状态：</label>
                        <select name="feedback_status_input" id="feedback_status_input" style="width: 100px">
                            <option value="0">请选择</option>
                            <option value="1">未回复</option>
                            <option value="2">已回复</option>
                        </select>
                        <label>留言类型：</label>
                        <select name="feedback_type_input" id="feedback_type_input" style="width: 100px">
                            <option value="0">请选择</option>
                            <option value="1">投诉</option>
                            <option value="2">售后</option>
                            <option value="3">求购</option>
                            <option value="4">询问</option>
                            <option value="5">留言</option>
                        </select>
                        <button type="button" class="btn btn-w-m btn-primary" onclick="search_feedback()">
                            <i class=" fa fa-search"></i>搜索
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>用户名</th>
                            <th>会员邮箱</th>
                            <th>留言标题</th>
                            <th>留言类型</th>
                            <th>留言时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($feedback as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->msg_id ?></td>
                                <td><?php echo $item->user_name ?></td>
                                <td><?php echo $item->user_email ?></td>
                                <td><?php echo $item->msg_title ?></td>
                                <td><?php echo $item->msg_type ?></td>
                                <td><?php echo $item->msg_time ?></td>
                                <td><?php echo $item->msg_status ?></td>
                                <td>
                                    <button class="btn btn-info " type="button"
                                            onclick="javascript:window.location.href='<?php echo base_url(); ?>index.php/member/reply/<?php echo $item->msg_id ?>'">
                                        <i
                                            class="fa fa-search"></i>&nbsp;查看详情
                                    </button>
                                    <button class="btn btn-danger " type="button"
                                            onclick="removeFeedback(<?php echo $item->msg_id ?>)"><i
                                            class="fa fa-times"></i>
                                        <span class="bold">删除</span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery.min.js?v=2.1.4"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/js/content.min.js?v=1.0.0"></script>
<script>
    function search_feedback() {
        var feedback_data = {
            username: document.getElementById('username_input').value ? document.getElementById('username_input').value : 0,
            feedback_status: $("#feedback_status_input option:selected").val() ? $("#feedback_status_input option:selected").val() : 0,
            feedback_type: $("#feedback_type_input option:selected").val() ? $("#feedback_type_input option:selected").val() : 0
        }
        window.location.href = "<?php echo base_url();?>index.php/member/feedback/" +
            feedback_data.username + "/" + feedback_data.feedback_status + "/" + feedback_data.feedback_type
    }
</script>
<script>
    $(document).ready(function () {
        $(".dataTables-example").dataTable();
        var oTable = $("#editable").dataTable();
        oTable.$("td").editable("../example_ajax.php", {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1])
            }, "submitdata": function (value, settings) {
                return {"row_id": this.parentNode.getAttribute("id"), "column": oTable.fnGetPosition(this)[2]}
            }, "width": "90%", "height": "100%"
        })
    });
    function fnClickAddRow() {
        $("#editable").dataTable().fnAddData(["Custom row", "New row", "New row", "New row", "New row"])
    }
    ;
</script>
<script>
    function removeFeedback(msgId) {
        if (!confirm('你确定要删除吗?')) {
            return false;
        }
        var url = '<?php echo base_url(); ?>index.php/member/deleteFeedback';
        var data = {
            msgId: msgId
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('删除成功');
                window.location.href = '<?php echo base_url()?>index.php/member/feedback'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>