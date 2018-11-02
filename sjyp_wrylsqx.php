<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=10">
<title>设备报废</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="dist/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.css">
<link rel="stylesheet" href="vince/css/vince.css">
<link rel="stylesheet" href="vince/biao/css/font-awesome.min.css">
<!--[if lt IE 9]>
  <script src="dist/js/html5shiv.min.js"></script>
  <script src="dist/js/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="#" class="logo">
				<span class="logo-mini">
					<img src="vince/images/v01.png">
				</span>
				<span class="logo-lg">
					<img src="vince/images/v01.png">
					项目
				</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
				<span class="all_title">城市综合体能源优化调配及集群负荷控制系统</span>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">管理员</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<p>
										姓名：管理员
										<small>部门：信息部</small>
									</p></li>
								<li class="user-footer">
									<div class="pull-right">
										<a href="login.html" class="btn btn-default btn-flat">退出系统</a>
									</div>
								</li>
							</ul></li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						
					</div>
					<div class="pull-left info">
					</div>
				</div>
					<ul class="sidebar-menu">
					<?php include_once 'menu.php';?>
				</ul>
				</section>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<ol class="breadcrumb">
					<li><a href="#">
							<i class="fa fa-dashboard"></i>
							首页
						</a></li>
					<li class="active">设备报废</li>
				</ol>
			</section>
			<div class="content qqq">
				<div class="yjgl">
					<div class="ssjc_right_up">
						<div class="nei">
							<div class="ssjc_ru_title">
								<span class="left_ten"> 查询条件 </span>
								<div class="clear"></div>
							</div>
							<div class="sbaz_table">
								<p>
									<span>
										大类：
										<input type="text">
									</span>
									<span>
										小类：
										<input type="text">
									</span>
									<span>
										能源类型：
										<input type="text">
									</span>
									<span>
										设备编号：
										<input type="text">
									</span>
									<span>
										设备状态：
										<input type="text">
									</span>
									<input type="submit" value="重置" class="in_sub">
									<input type="submit" value="查询" class="in_sub">
									<input type="submit" value="批量操作" class="in_sub">
								</p>
							</div>
						</div>
						<div class="ssjc_right_bottom">
							<div class="nei">
								<p>查询结果</p>
								<div class="ssjc_rub_table">
									<table class="tj_table" border="0">
										<thead>
											<tr>
												<td>
													<input type="checkbox" class="table_check">
												</td>
												<td>设备编号</td>
												<td>设备大类</td>
												<td>设备小类</td>
												<td>能源类型</td>
												<td>设备厂家</td>
												<td>采购批次</td>
												<td>采购日期</td>
												<td>设备状态</td>
											</tr>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<input type="checkbox" class="table_check">
												</td>
												<td>166</td>
												<td>生产</td>
												<td>电表</td>
												<td>电</td>
												<td>项目</td>
												<td></td>
												<td>2015-02-01</td>
												<td>拆回</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" class="table_check">
												</td>
												<td>174</td>
												<td>生产</td>
												<td>电表</td>
												<td>电</td>
												<td>项目</td>
												<td></td>
												<td>2015-03-01</td>
												<td>拆回</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" class="table_check">
												</td>
												<td>175</td>
												<td>生产</td>
												<td>电表</td>
												<td>电</td>
												<td>项目</td>
												<td>20150303001</td>
												<td>2015-03-02</td>
												<td>拆回</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" class="table_check">
												</td>
												<td>177</td>
												<td>生产</td>
												<td>采集器</td>
												<td>水</td>
												<td>项目</td>
												<td></td>
												<td>2015-03-02</td>
												<td>拆回</td>
											</tr>
											<tr class="kongxian"></tr>
											<tr class="kongxian"></tr>
											<tr class="kongxian"></tr>
											<tr class="kongxian"></tr>
											<tr class="kongxian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
											<tr class="gao xian"></tr>
										</tbody>
									</table>
									<div class="t_fanye">
										<span class="upten"></span>
										<span class="up"></span>
										<span class="split"></span>
										<span class="page_info_one">第 1 / 1 页</span>
										<span class="split"></span>
										<span class="dowm"></span>
										<span class="downten"></span>
										<span class="page_info_two">页记录数 15</span>
										<span class="page_info_three">当前1-1条记录，共1条记录</span>
										<div class="clear"></div>
									</div>
								</div>
								<div class="cheng_ershi"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b></b>
			</div>
			<strong>Copyright &copy; 2014-2016</strong>
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="dist/js/app.min.js"></script>
	<script src="dist/js/demo.js"></script>
	<script src="vince/js/nicescroll.js"></script>
	<script src="vince/js/demo.js"></script>
	<div id="sss" style="display: none; height: 200px; width: 200px;"></div>
	<script src="vince/js/echarts.min.js"></script>
	<script type="text/javascript">
alert('json');
var myChart1 = echarts.init(document.getElementById('sss'));
option1 = {
series: [{data: [247, 179]}]};
myChart1.setOption(option1);












alert('json');

var json ='[
	{"id":"166"，
	"设备编号":"166"，
	"设备大类":"生产"，
	"设备小类":"电表"，
	"能源类型":"电"，
	"设备厂家":"项目1"，
	"采购批次":"2016023210"，
	"采购日期":"2015-03-01"，
	"设备状态":"拆回"},
	{"id":"167"，
	"设备编号":"167"，
	"设备大类":"生产"，
	"设备小类":"电表"，
	"能源类型":"电"，
	"设备厂家":"项目2"，
	"采购批次":"2016023210"，
	"采购日期":"2015-03-01"，
	"设备状态":"拆回"},
	{"id":"168"，
	"设备编号":"168"，
	"设备大类":"生产"，
	"设备小类":"电表"，
	"能源类型":"电"，
	"设备厂家":"项目3"，
	"采购批次":"2016023210"，
	"采购日期":"2015-03-01"，
	"设备状态":"拆回"}
]';

alert('json');
alert(json);
</script>
</body>
</html>