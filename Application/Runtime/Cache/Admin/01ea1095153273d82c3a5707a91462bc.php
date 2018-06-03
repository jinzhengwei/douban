<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico">
<link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Data Tables -->
<link href="/Public/admin/assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="/Public/admin/assets/css/animate.min.css" rel="stylesheet">
<link href="/Public/admin/assets/css/style.min.css" rel="stylesheet"><base target="_blank">
    <!-- 自定义样式可以直接写在这 -->
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>商品管理</h5>
                </div>
                <!-- 检索框 -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <form role="form" class="form-inline" action="" method="get" target="_self">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="">名称:</label>
                                        <input type="text" placeholder="请输入用户名" id="exampleInputEmail2" class="form-control" name="name" value="<?php echo ($_GET['name']); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="">:状态</label>
                                        <select class="form-control" name="status">
                                            <option value='all'>全部</option>
                                            <option value='0' <?php if($_GET['status'] === '0') {echo "selected";}?>>未审核</option>
                                            <option value='1' <?php if($_GET['status'] == 1) {echo "selected";}?>>上线</option>
                                            <option value='2' <?php if($_GET['status'] == 2) {echo "selected";}?>>下线</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-white" type="submit">搜索</button>
                                    <a href="<?php echo U('admin/goods/add');?>" class="btn btn-primary" type="submit" target="_self">新增</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 列表 -->
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>商品名字</th>
                            <th>简介</th>
                            <th>图片</th>
                            <th>单价</th>
                            <th>标签</th>
                            <th>状态</th>
                            <th>删除</th>
                            <th>更改</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["name"]); ?></td> 
                                <td><?php echo ($vo["content"]); ?></td>
                                
                               <td> <img src="/Public/Upload/<?php echo ($vo["img"]); ?>" height="200px" width="300px"></td>
                               <td><?php echo ($vo["price"]); ?></td>
                       
                               <td><?php echo ($vo["tag"]); ?></td>
                            
                                <?php if(($vo["status"] == 0) OR ($vo["status"] == 2)): ?><td><a href="<?php echo U('admin/goods/online',array('id'=>$vo['id']));?>" target="_self">上线</a></td>
                                <?php elseif($vo["status"] == 1): ?> <td><a href="<?php echo U('admin/goods/offline',array('id'=>$vo['id']));?>" target="_self">下线</a></td><?php endif; ?>
                                <td><a href="<?php echo U('admin/goods/delete',array('id'=>$vo['id']));?>" target="_self">删除</td>
                                <td><a href="<?php echo U('admin/goods/update',array('id'=>$vo['id']));?>" target="_self">修改</td>

                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                         <!-- <tfoot> -->
                            <tr>
                                <td colspan="6">
                                    <?php echo ($page); ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/Public/admin/assets/js/jquery.min.js"></script>
<script src="/Public/admin/assets/js/bootstrap.min.js"></script>
<script src="/Public/admin/assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="/Public/admin/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/Public/admin/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/Public/admin/assets/js/content.min.js"></script>
</body>
</html>