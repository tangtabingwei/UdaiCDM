<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>[项目名]</title> 
  <meta name="keywords" content="ThinkphpHelper,Thinkphp代码自动生成" />
  <meta name="description" content="ThinkphpHelper,Thinkphp代码自动生成工具" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="sjj">
  <script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.js"></script> <!-- jQuery -->
  <!-- Stylesheets -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/widgets.css" rel="stylesheet">   
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/<?php echo MODULE_PATH;?>/View/Public/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="href="/<?php echo MODULE_PATH;?>/img/favicon/favicon.png">
</head>

<body>
<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="/index.php/Test ">[项目名]<span class="bold"></span></a></h1>
            <p class="meta">[项目描述]</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">
			
        </div>

        <!-- Data section -->

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">导航</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> CustomerBank<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/index.php/Test/CustomerBank/all">管理</a></li>
<li><a href="/index.php/Test/CustomerBank/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> CustomerInfo<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/index.php/Test/CustomerInfo/all">管理</a></li>
<li><a href="/index.php/Test/CustomerInfo/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Deal<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/index.php/Test/Deal/all">管理</a></li>
<li><a href="/index.php/Test/Deal/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> DealLoadRepay<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/index.php/Test/DealLoadRepay/all">管理</a></li>
<li><a href="/index.php/Test/DealLoadRepay/add">新建</a></li>
</ul>
</li>

        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar -->
	<div class="mainbar">
	<div class="container ">
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
</div>
	</div>
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->

<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->


<!-- jQuery Notification - Noty -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="/<?php echo MODULE_PATH;?>/View/Public/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/filter.js"></script> <!-- Filter for support page -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/custom.js"></script> <!-- Custom codes -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/charts.js"></script> <!-- Charts & Graphs -->


</body>
</html>