<?php
//引入配置文件
require_once '../lib/config.php';
require_once 'func/global.func.php';
require_once '../lib/func/comm.func.php'; //获取全局公共函数
require_once 'func/systems.func.php';
require_once 'admin_check.php';
?>
<!DOCTYPE html>
<html>
<head>

    <title>管理后台</title>
    <?php include_once 'lib/header.inc.php'; ?>

</head>
<body class="skin-blue">


<?php include_once 'lib/nav.inc.php';
include_once 'lib/slidebar_left.inc.php';  ?>




<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            添加分类
            <small>Add</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> 后台</a></li>
            <li class="active">下载管理</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">编辑</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="cate_do.php">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="cate_title">分类标题</label>
                                <input  class="form-control" name="cate_title" value="<?php echo $rs['cate_name'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">排序</label>
                                <input   class="form-control" name="cate_order"  value="<?php echo $rs['cate_order'];?>" >
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="action" value="add" class="btn btn-primary">添加</button>
                        </div>

                </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            </form>
        </div>   <!-- /.row -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->



<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
