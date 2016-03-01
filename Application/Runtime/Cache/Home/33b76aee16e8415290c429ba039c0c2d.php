<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/Static/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/Static/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    
	<!-- DataTables CSS -->
	<link href="/Public/Static/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="/Public/Static/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="/Public/Static/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/Static/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div> <strong>John Smith</strong>
                                    <span class="pull-right text-muted"> <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div> <strong>John Smith</strong>
                                    <span class="pull-right text-muted"> <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages --> </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks --> </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                    New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>
                                    3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>
                                    Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>
                                    New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>
                                    Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts --> </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i>
                                User Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i>
                                Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out fa-fw"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user --> </li>
                <!-- /.dropdown --> </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-dashboard fa-fw"></i>
                                仪表盘
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i>
                                客户管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('CustomerInfo/all');?>">客户信息</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-in fa-fw"></i>
                                贷款受理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Deal/all');?>">贷款信息</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Accept/category');?>">贷款审批</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out fa-fw"></i>
                                贷款发放
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Grant/lists');?>">放款受理</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-wrench fa-fw"></i>
                                贷后管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Manage/lists');?>">贷款跟踪</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Manage/category');?>">执行复合</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart-o fa-fw"></i>
                                统计模块
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Count/lists');?>">借款人统计</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart-o fa-fw"></i>
                                用户管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('User/lists');?>">用户列表</a>
                                </li>
                            </ul>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('User/lists');?>">角色管理</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse --> </div>
            <!-- /.navbar-static-side --> </nav>
            <div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">用户信息</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="<?php echo U('CustomerInfo/add');?>" class="btn btn-primary " role="button">新增用户</a>
				</div>
				<!-- /.panel-heading -->
				<div class="table-responsive">
					<div class="panel-body">
						<div class="dataTable_wrapper">

							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
<tr>	
<th><center>id</center></th><th><center>deal_sn</center></th><th><center>name</center></th><th><center>sub_name</center></th><th><center>cate_id</center></th><th><center>c_id</center></th><th><center>description</center></th><th><center>is_effect</center></th><th><center>is_delete</center></th><th><center>sort</center></th><th><center>type_id</center></th><th><center>icon</center></th><th><center>borrow_amount</center></th><th><center>repay_time</center></th><th><center>rate</center></th><th><center>loantype</center></th><th><center>create_time</center></th><th><center>update_time</center></th><th><center>repay_money</center></th><th><center>repay_start_time</center></th><th><center>last_repay_time</center></th><th><center>next_repay_time</center></th><th><center>deal_status</center></th><th><center>is_check</center></th><th><center>enddate</center></th><th><center>services_fee</center></th><th><center>publish_wait</center></th><th><center>send_three_msg_time</center></th><th><center>is_send_contract</center></th><th><center>repay_time_type</center></th><th><center>risk_rank</center></th><th><center>risk_security</center></th><th><center>manage_fee</center></th><th><center>manage_impose_fee_day1</center></th><th><center>manage_impose_fee_day2</center></th><th><center>impose_fee_day1</center></th><th><center>impose_fee_day2</center></th><th><center>delete_msg</center></th><th><center>user_bid_rebate</center></th><th><center>guarantor_pro_fit_amt</center></th><th><center>guarantor_real_fit_amt</center></th><th><center>view_info</center></th><th><center>repay_start_date</center></th><th><center>bad_date</center></th><th><center>contract_id</center></th><th><center>tcontract_id</center></th><th><center>is_hidden</center></th><th><center>attachment</center></th><th><center>tattachment</center></th><th><center>is_index_show</center></th><th><center>loans_pic</center></th><th><center>admin_id</center></th><td>操作</td>
</tr>
</thead>
								<tbody>
									<?php if(is_array($dealList)): $i = 0; $__LIST__ = $dealList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["deal_sn"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["sub_name"]); ?></td><td><?php echo ($vo["cate_id"]); ?></td><td><?php echo ($vo["c_id"]); ?></td><td><?php echo ($vo["description"]); ?></td><td><?php echo ($vo["is_effect"]); ?></td><td><?php echo ($vo["is_delete"]); ?></td><td><?php echo ($vo["sort"]); ?></td><td><?php echo ($vo["type_id"]); ?></td><td><?php echo ($vo["icon"]); ?></td><td><?php echo ($vo["borrow_amount"]); ?></td><td><?php echo ($vo["repay_time"]); ?></td><td><?php echo ($vo["rate"]); ?></td><td><?php echo ($vo["loantype"]); ?></td><td><?php echo ($vo["create_time"]); ?></td><td><?php echo ($vo["update_time"]); ?></td><td><?php echo ($vo["repay_money"]); ?></td><td><?php echo ($vo["repay_start_time"]); ?></td><td><?php echo ($vo["last_repay_time"]); ?></td><td><?php echo ($vo["next_repay_time"]); ?></td><td><?php echo ($vo["deal_status"]); ?></td><td><?php echo ($vo["is_check"]); ?></td><td><?php echo ($vo["enddate"]); ?></td><td><?php echo ($vo["services_fee"]); ?></td><td><?php echo ($vo["publish_wait"]); ?></td><td><?php echo ($vo["send_three_msg_time"]); ?></td><td><?php echo ($vo["is_send_contract"]); ?></td><td><?php echo ($vo["repay_time_type"]); ?></td><td><?php echo ($vo["risk_rank"]); ?></td><td><?php echo ($vo["risk_security"]); ?></td><td><?php echo ($vo["manage_fee"]); ?></td><td><?php echo ($vo["manage_impose_fee_day1"]); ?></td><td><?php echo ($vo["manage_impose_fee_day2"]); ?></td><td><?php echo ($vo["impose_fee_day1"]); ?></td><td><?php echo ($vo["impose_fee_day2"]); ?></td><td><?php echo ($vo["delete_msg"]); ?></td><td><?php echo ($vo["user_bid_rebate"]); ?></td><td><?php echo ($vo["guarantor_pro_fit_amt"]); ?></td><td><?php echo ($vo["guarantor_real_fit_amt"]); ?></td><td><?php echo ($vo["view_info"]); ?></td><td><?php echo ($vo["repay_start_date"]); ?></td><td><?php echo ($vo["bad_date"]); ?></td><td><?php echo ($vo["contract_id"]); ?></td><td><?php echo ($vo["tcontract_id"]); ?></td><td><?php echo ($vo["is_hidden"]); ?></td><td><?php echo ($vo["attachment"]); ?></td><td><?php echo ($vo["tattachment"]); ?></td><td><?php echo ($vo["is_index_show"]); ?></td><td><?php echo ($vo["loans_pic"]); ?></td><td><?php echo ($vo["admin_id"]); ?></td><td><a href="<?php echo U('Deal/edit/id/'.$vo[id]);?>">编辑</a> |
<a href="<?php echo U('Deal/delete/id/'.$vo[id]);?>" onclick='return confirm("确定删除吗？")'>删除</a>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

								</tbody>
							</table>
						</div>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/Public/Static/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/Static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Static/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="/Public/Static/dist/js/sb-admin-2.js"></script>
    
	<script src="/Public/Static/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="/Public/Static/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


</body>

</html>