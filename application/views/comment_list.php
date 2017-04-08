<!DOCTYPE html>
<html>

<head>
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
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>用户名</th>
                            <th>购买产品</th>
                            <th>评论星级</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($comment as $item) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $item->comment_id ?></td>
                                <td><?php echo $item->user_name ?></td>
                                <td><?php echo $item->goods_name ?></td>
                                <td><?php echo $item->comment_rank ?>星</td>
                                <td class="col-sm-3"><?php echo $item->content ?></td>
                                <td><?php echo $item->add_time ?></td>
                                <td><?php echo $item->status ?></td>
                                <td>
                                    <button class="btn btn-info " type="button"
                                            onclick="checkComment(<?php echo $item->comment_id ?>)"><i
                                            class="fa fa-check"></i>&nbsp;查看
                                    </button>
                                    <button class="btn btn-danger " type="button"
                                            onclick="dealComment(<?php echo $item->comment_id ?>)"><i
                                            class="fa fa-edit"></i>
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
    function checkComment(commentId) {
        var data = {
            commentId: commentId
        };
        var url = '<?php echo base_url()?>index.php/product/checkComment';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                window.location.href = '<?php echo base_url()?>index.php/product/comment'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
    function dealComment(commentId) {
        var data = {
            commentId: commentId
        };
        var url = '<?php echo base_url()?>index.php/product/dealComment';
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                window.location.href = '<?php echo base_url()?>index.php/product/comment'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>