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
                                    <a href="<?php echo U('Deal/category');?>">贷款审批</a>
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
                                    <a href="<?php echo U('DealLoadRepay/all');?>">贷款跟踪</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('DealLoadRepay/category');?>">执行复合</a>
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
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse --> </div>
            <!-- /.navbar-static-side --> </nav>
            <div id="page-wrapper"><div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			  管理deal_load_repay			  </div>
			  <div class="widget-icons pull-right">
				<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
				<a href="#" class="wclose"><i class="icon-remove"></i></a>
			  </div>  
			  <div class="clearfix"></div>
			</div>  
			<div class="widget-content" >
			<div class="padd">
				<div class="form quick-post">
							  <div class="form-horizontal">                        
								  <div class="form-group">
									<table class="table table-striped table-bordered table-hover">
<thead>
<tr>	
<th><center>id</center></th><th><center>deal_id</center></th><th><center>user_id</center></th><th><center>self_money</center></th><th><center>repay_money</center></th><th><center>manage_money</center></th><th><center>impose_money</center></th><th><center>repay_time</center></th><th><center>repay_date</center></th><th><center>true_repay_time</center></th><th><center>true_repay_date</center></th><th><center>true_repay_money</center></th><th><center>true_self_money</center></th><th><center>interest_money</center></th><th><center>true_interest_money</center></th><th><center>true_manage_money</center></th><th><center>true_repay_manage_money</center></th><th><center>status</center></th><th><center>is_site_repay</center></th><th><center>l_key</center></th><th><center>u_key</center></th><th><center>is_check</center></th><th><center>repay_id</center></th><th><center>load_id</center></th><th><center>has_repay</center></th><th><center>t_user_id</center></th><th><center>repay_manage_money</center></th><th><center>repay_manage_impose_money</center></th><th><center>loantype</center></th><th><center>manage_interest_money</center></th><th><center>true_manage_interest_money</center></th><th><center>manage_interest_money_rebate</center></th><th><center>true_manage_interest_money_rebate</center></th><th><center>t_pMerBillNo</center></th><th><center>reward_money</center></th><th><center>true_reward_money</center></th><td>操作</td>
</tr>
</thead>
<?php if(is_array($deal_load_repayList)): $i = 0; $__LIST__ = $deal_load_repayList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["deal_id"]); ?></td><td><?php echo ($vo["user_id"]); ?></td><td><?php echo ($vo["self_money"]); ?></td><td><?php echo ($vo["repay_money"]); ?></td><td><?php echo ($vo["manage_money"]); ?></td><td><?php echo ($vo["impose_money"]); ?></td><td><?php echo ($vo["repay_time"]); ?></td><td><?php echo ($vo["repay_date"]); ?></td><td><?php echo ($vo["true_repay_time"]); ?></td><td><?php echo ($vo["true_repay_date"]); ?></td><td><?php echo ($vo["true_repay_money"]); ?></td><td><?php echo ($vo["true_self_money"]); ?></td><td><?php echo ($vo["interest_money"]); ?></td><td><?php echo ($vo["true_interest_money"]); ?></td><td><?php echo ($vo["true_manage_money"]); ?></td><td><?php echo ($vo["true_repay_manage_money"]); ?></td><td><?php echo ($vo["status"]); ?></td><td><?php echo ($vo["is_site_repay"]); ?></td><td><?php echo ($vo["l_key"]); ?></td><td><?php echo ($vo["u_key"]); ?></td><td><?php echo ($vo["is_check"]); ?></td><td><?php echo ($vo["repay_id"]); ?></td><td><?php echo ($vo["load_id"]); ?></td><td><?php echo ($vo["has_repay"]); ?></td><td><?php echo ($vo["t_user_id"]); ?></td><td><?php echo ($vo["repay_manage_money"]); ?></td><td><?php echo ($vo["repay_manage_impose_money"]); ?></td><td><?php echo ($vo["loantype"]); ?></td><td><?php echo ($vo["manage_interest_money"]); ?></td><td><?php echo ($vo["true_manage_interest_money"]); ?></td><td><?php echo ($vo["manage_interest_money_rebate"]); ?></td><td><?php echo ($vo["true_manage_interest_money_rebate"]); ?></td><td><?php echo ($vo["t_pMerBillNo"]); ?></td><td><?php echo ($vo["reward_money"]); ?></td><td><?php echo ($vo["true_reward_money"]); ?></td><td><a href="<?php echo U('DealLoadRepay/edit/id/'.$vo[id]);?>">编辑</a> |
<a href="<?php echo U('DealLoadRepay/delete/id/'.$vo[id]);?>" onclick='return confirm("确定删除吗？")'>删除</a>
</td>
<tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo ($page); ?>								  </div>              
							  </div>
				</div><!--end  paddad-->
			</div>
		</div>	
		</div>	
	</div>
</div>
</div></div>
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
    

</body>

</html>