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
			  新建customer_info			  </div>
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
		<label class="col-md-2 control-label" for="real_name">real_name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="real_name" name="real_name" id="real_name" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="idno">idno</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="idno" name="idno" id="idno" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="mobile">mobile</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="mobile" name="mobile" id="mobile" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="mobile2">mobile2</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="mobile2" name="mobile2" id="mobile2" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="email">email</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="email" name="email" id="email" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="is_delete">is_delete</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="is_delete" name="is_delete" id="is_delete" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="n_province_id">n_province_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="n_province_id" name="n_province_id" id="n_province_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="n_city_id">n_city_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="n_city_id" name="n_city_id" id="n_city_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="province_id">province_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="province_id" name="province_id" id="province_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="city_id">city_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="city_id" name="city_id" id="city_id" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="sex">sex</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="sex" name="sex" id="sex" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="byear">byear</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="byear" name="byear" id="byear" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="bmonth">bmonth</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="bmonth" name="bmonth" id="bmonth" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="bday">bday</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="bday" name="bday" id="bday" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="address">address</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="address" name="address" id="address" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="content">content</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="content" name="content" id="content" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="customer_type">customer_type</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="customer_type" name="customer_type" id="customer_type" />
		</div>
	</div><div class="form-group">
		<label class="col-md-2 control-label" for="manager_id">manager_id</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="manager_id" name="manager_id" id="manager_id" />
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