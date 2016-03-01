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
	<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			  管理deal			  </div>
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
<th><center>id</center></th><th><center>deal_sn</center></th><th><center>name</center></th><th><center>sub_name</center></th><th><center>cate_id</center></th><th><center>c_id</center></th><th><center>description</center></th><th><center>is_effect</center></th><th><center>is_delete</center></th><th><center>sort</center></th><th><center>type_id</center></th><th><center>icon</center></th><th><center>borrow_amount</center></th><th><center>repay_time</center></th><th><center>rate</center></th><th><center>loantype</center></th><th><center>create_time</center></th><th><center>update_time</center></th><th><center>repay_money</center></th><th><center>repay_start_time</center></th><th><center>last_repay_time</center></th><th><center>next_repay_time</center></th><th><center>deal_status</center></th><th><center>is_check</center></th><th><center>enddate</center></th><th><center>services_fee</center></th><th><center>publish_wait</center></th><th><center>send_three_msg_time</center></th><th><center>is_send_contract</center></th><th><center>repay_time_type</center></th><th><center>risk_rank</center></th><th><center>risk_security</center></th><th><center>manage_fee</center></th><th><center>manage_impose_fee_day1</center></th><th><center>manage_impose_fee_day2</center></th><th><center>impose_fee_day1</center></th><th><center>impose_fee_day2</center></th><th><center>delete_msg</center></th><th><center>user_bid_rebate</center></th><th><center>guarantor_pro_fit_amt</center></th><th><center>guarantor_real_fit_amt</center></th><th><center>view_info</center></th><th><center>repay_start_date</center></th><th><center>bad_date</center></th><th><center>contract_id</center></th><th><center>tcontract_id</center></th><th><center>is_hidden</center></th><th><center>attachment</center></th><th><center>tattachment</center></th><th><center>is_index_show</center></th><th><center>loans_pic</center></th><th><center>admin_id</center></th><td>操作</td>
</tr>
</thead>
<?php if(is_array($dealList)): $i = 0; $__LIST__ = $dealList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["deal_sn"]); ?></td><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["sub_name"]); ?></td><td><?php echo ($vo["cate_id"]); ?></td><td><?php echo ($vo["c_id"]); ?></td><td><?php echo ($vo["description"]); ?></td><td><?php echo ($vo["is_effect"]); ?></td><td><?php echo ($vo["is_delete"]); ?></td><td><?php echo ($vo["sort"]); ?></td><td><?php echo ($vo["type_id"]); ?></td><td><?php echo ($vo["icon"]); ?></td><td><?php echo ($vo["borrow_amount"]); ?></td><td><?php echo ($vo["repay_time"]); ?></td><td><?php echo ($vo["rate"]); ?></td><td><?php echo ($vo["loantype"]); ?></td><td><?php echo ($vo["create_time"]); ?></td><td><?php echo ($vo["update_time"]); ?></td><td><?php echo ($vo["repay_money"]); ?></td><td><?php echo ($vo["repay_start_time"]); ?></td><td><?php echo ($vo["last_repay_time"]); ?></td><td><?php echo ($vo["next_repay_time"]); ?></td><td><?php echo ($vo["deal_status"]); ?></td><td><?php echo ($vo["is_check"]); ?></td><td><?php echo ($vo["enddate"]); ?></td><td><?php echo ($vo["services_fee"]); ?></td><td><?php echo ($vo["publish_wait"]); ?></td><td><?php echo ($vo["send_three_msg_time"]); ?></td><td><?php echo ($vo["is_send_contract"]); ?></td><td><?php echo ($vo["repay_time_type"]); ?></td><td><?php echo ($vo["risk_rank"]); ?></td><td><?php echo ($vo["risk_security"]); ?></td><td><?php echo ($vo["manage_fee"]); ?></td><td><?php echo ($vo["manage_impose_fee_day1"]); ?></td><td><?php echo ($vo["manage_impose_fee_day2"]); ?></td><td><?php echo ($vo["impose_fee_day1"]); ?></td><td><?php echo ($vo["impose_fee_day2"]); ?></td><td><?php echo ($vo["delete_msg"]); ?></td><td><?php echo ($vo["user_bid_rebate"]); ?></td><td><?php echo ($vo["guarantor_pro_fit_amt"]); ?></td><td><?php echo ($vo["guarantor_real_fit_amt"]); ?></td><td><?php echo ($vo["view_info"]); ?></td><td><?php echo ($vo["repay_start_date"]); ?></td><td><?php echo ($vo["bad_date"]); ?></td><td><?php echo ($vo["contract_id"]); ?></td><td><?php echo ($vo["tcontract_id"]); ?></td><td><?php echo ($vo["is_hidden"]); ?></td><td><?php echo ($vo["attachment"]); ?></td><td><?php echo ($vo["tattachment"]); ?></td><td><?php echo ($vo["is_index_show"]); ?></td><td><?php echo ($vo["loans_pic"]); ?></td><td><?php echo ($vo["admin_id"]); ?></td><td><a href="<?php echo U('Deal/edit/id/'.$vo[id]);?>">编辑</a> |
<a href="<?php echo U('Deal/delete/id/'.$vo[id]);?>" onclick='return confirm("确定删除吗？")'>删除</a>
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