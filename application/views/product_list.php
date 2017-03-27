<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>基本 <small>分类，查找</small></h5>
                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>商品名称</th>
                            <th>货号</th>
                            <th>价格</th>
                            <th>上架时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($data as $item){
                        ?>
                        <tr class="gradeX">
                            <td><?php echo $item->goods_id?></td>
                            <td><?php echo $item->goods_name?></td>
                            <td><?php echo $item->goods_sn?></td>
                            <td class="center"><?php echo $item->shop_price?></td>
                            <td class="center"><?php echo $item->sale_date?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>编号</th>
                            <th>商品名称</th>
                            <th>货号</th>
                            <th>价格</th>
                            <th>上架时间</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>