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
            <div id="page-wrapper"><div class="container ">
<div class="row">
	<div class="col-md-6">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			  新建deal			  </div>
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
									<form class="form-horizontal" method="post">
	<div class="form-group">
		<label class="col-md-2 control-label" for="deal_sn">deal_sn</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="deal_sn" name="deal_sn" id="deal_sn" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="name">name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="name" name="name" id="name" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="sub_name">sub_name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="sub_name" name="sub_name" id="sub_name" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="cate_id">cate_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="cate_id" name="cate_id" id="cate_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="c_id">c_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="c_id" name="c_id" id="c_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="description">description</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="description" name="description" id="description" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_effect">is_effect</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_effect" name="is_effect" id="is_effect" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_delete">is_delete</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_delete" name="is_delete" id="is_delete" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="sort">sort</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="sort" name="sort" id="sort" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="type_id">type_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="type_id" name="type_id" id="type_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="icon">icon</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="icon" name="icon" id="icon" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="borrow_amount">borrow_amount</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="borrow_amount" name="borrow_amount" id="borrow_amount" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="repay_time">repay_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="repay_time" name="repay_time" id="repay_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="rate">rate</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="rate" name="rate" id="rate" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="loantype">loantype</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="loantype" name="loantype" id="loantype" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="create_time">create_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="create_time" name="create_time" id="create_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="update_time">update_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="update_time" name="update_time" id="update_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="repay_money">repay_money</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="repay_money" name="repay_money" id="repay_money" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="repay_start_time">repay_start_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="repay_start_time" name="repay_start_time" id="repay_start_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="last_repay_time">last_repay_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="last_repay_time" name="last_repay_time" id="last_repay_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="next_repay_time">next_repay_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="next_repay_time" name="next_repay_time" id="next_repay_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="deal_status">deal_status</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="deal_status" name="deal_status" id="deal_status" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_check">is_check</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_check" name="is_check" id="is_check" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="enddate">enddate</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="enddate" name="enddate" id="enddate" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="services_fee">services_fee</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="services_fee" name="services_fee" id="services_fee" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="publish_wait">publish_wait</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="publish_wait" name="publish_wait" id="publish_wait" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="send_three_msg_time">send_three_msg_time</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="send_three_msg_time" name="send_three_msg_time" id="send_three_msg_time" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_send_contract">is_send_contract</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_send_contract" name="is_send_contract" id="is_send_contract" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="repay_time_type">repay_time_type</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="repay_time_type" name="repay_time_type" id="repay_time_type" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="risk_rank">risk_rank</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="risk_rank" name="risk_rank" id="risk_rank" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="risk_security">risk_security</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="risk_security" name="risk_security" id="risk_security" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="manage_fee">manage_fee</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="manage_fee" name="manage_fee" id="manage_fee" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="manage_impose_fee_day1">manage_impose_fee_day1</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="manage_impose_fee_day1" name="manage_impose_fee_day1" id="manage_impose_fee_day1" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="manage_impose_fee_day2">manage_impose_fee_day2</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="manage_impose_fee_day2" name="manage_impose_fee_day2" id="manage_impose_fee_day2" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="impose_fee_day1">impose_fee_day1</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="impose_fee_day1" name="impose_fee_day1" id="impose_fee_day1" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="impose_fee_day2">impose_fee_day2</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="impose_fee_day2" name="impose_fee_day2" id="impose_fee_day2" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="delete_msg">delete_msg</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="delete_msg" name="delete_msg" id="delete_msg" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="user_bid_rebate">user_bid_rebate</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="user_bid_rebate" name="user_bid_rebate" id="user_bid_rebate" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="guarantor_pro_fit_amt">guarantor_pro_fit_amt</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="guarantor_pro_fit_amt" name="guarantor_pro_fit_amt" id="guarantor_pro_fit_amt" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="guarantor_real_fit_amt">guarantor_real_fit_amt</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="guarantor_real_fit_amt" name="guarantor_real_fit_amt" id="guarantor_real_fit_amt" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="view_info">view_info</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="view_info" name="view_info" id="view_info" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="repay_start_date">repay_start_date</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="repay_start_date" name="repay_start_date" id="repay_start_date" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="bad_date">bad_date</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="bad_date" name="bad_date" id="bad_date" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="contract_id">contract_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="contract_id" name="contract_id" id="contract_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="tcontract_id">tcontract_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="tcontract_id" name="tcontract_id" id="tcontract_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_hidden">is_hidden</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_hidden" name="is_hidden" id="is_hidden" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="attachment">attachment</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="attachment" name="attachment" id="attachment" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="tattachment">tattachment</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="tattachment" name="tattachment" id="tattachment" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_index_show">is_index_show</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_index_show" name="is_index_show" id="is_index_show" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="loans_pic">loans_pic</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="loans_pic" name="loans_pic" id="loans_pic" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="admin_id">admin_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="admin_id" name="admin_id" id="admin_id" />
		</div>
	</div>	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" value="提交" class="btn btn-default" />
		</div>
	</div>
</form>								  </div>              
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