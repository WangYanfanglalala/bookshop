<head>
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row" style="background-color:#fff">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="panel-body">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form class="form-horizontal m-t">
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">留言标题：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="username" id="username"
                                           class="form-control"
                                           value="<?php echo $feedback["msg_title"] ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">留言内容：</label>

                                <div class="col-sm-9">
                                    <textarea name="msg_content" id="msg_content" class="form-control"
                                              required="required"><?php echo $feedback["msg_content"] ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">email地址：</label>

                                <div class="col-sm-9">
                                    <input type="text" name="email" id="email" class="form-control"
                                           value="<?php echo $feedback["user_email"] ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">回复：</label>

                                <div class="col-sm-9">
                                    <textarea name="replyContent" id="replyContent" class="form-control"
                                              required="required"><?php echo $feedback["reply_content"] ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit" onclick="replyFeedback()">
                                        回复留言
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
        <div class="col-sm-4"></div>
    </div>
</div>
<script>
    function replyFeedback() {
        var url = '<?php echo base_url(); ?>index.php/member/replyFeedback';
        var data = {
            replyContent: document.getElementById('replyContent').value
        };
        $.post(url, data, function (rsps) {
            if (rsps.result) {
                alert('回复成功');
                window.location.href = '<?php echo base_url()?>index.php/member/feedback'
            } else {
                alert(rsps.msg);
            }
        }, 'json');
    }
</script>

</body>