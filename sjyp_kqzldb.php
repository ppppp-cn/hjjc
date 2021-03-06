<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>报表查询</title>
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
		  <span class="logo-mini"><img src="vince/images/v01.png"></span>
		  <span class="logo-lg"><img src="vince/images/v01.png">项目</span>
		</a>
		<nav class="navbar navbar-static-top">
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
		  <span class="all_title">城市综合体能源优化调配及集群负荷控制系统</span>
		  <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">管理员</span>
					</a>
					<ul class="dropdown-menu">
					  <li class="user-header">
						
						<p>
						  姓名：管理员
						  <small>部门：信息部</small>
						</p>
					  </li>
					  <li class="user-footer">
						<div class="pull-right">
						  <a href="login.html" class="btn btn-default btn-flat">退出系统</a>
						</div>
					  </li>
					</ul>
				</li>
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
          
      <p class="menu_time">
          </p>
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
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">报表查询</li>
      </ol>
    </section>
    <div class="content qqq">
    <div class="yjgl">
      <div class="ssjc_right_up">
        <div class="nei">
          <div class="ssjc_ru_title">
                  <span class="left_ten">
                    查询条件
                  </span>
                <div class="clear"></div>
                </div>
                <div class="sbaz_table">
                  <p>
                  <span class="float-left"><span>设备名称： <input type="text"></span>

                  <span class="tiaoshijian">
                    开始时间：
                    <input type="text" class="shi" id="xuanshi1" readonly value="2016-10-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar" style="top:14px;"></i></span> 
 <span class="tiaoshijian">
                    结束时间：
                    <input type="text" class="shi" id="xuanshi2" readonly value="2016-10-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"  style="top:14px;"></i></span>


                     </span>

                  <span class="float-right">
                  <a href="bbcx.html">
                    <input type="submit" value="采集数据查询" class="in_sub"></a>
                    <a href="lsdlcx.html">
                    <input type="submit" value="历史电量查询" class="in_sub"></a>
                    
                  <input type="submit" value="导出" class="in_sub">
                  </span>
                  <div class="clear"></div>
                  </p>
                </div>
              </div>
              <div class="ssjc_right_bottom">
                <div class="nei">
                    <p>数据列表</p>
                <div class="ssjc_rub_table">
      
<table class="tj_table" border="0">
  <thead>
    <tr>
      <td>用户名称</td>
      <td>设备名称</td>
      <td>时间段</td>
      <td>累计电量</td>
    </tr>
    </tr>
  </thead>
  <tbody>
<tr><td>项目</td><td>冷却泵</td><td>00点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>01点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>02点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>03点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>04点</td><td>61</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>05点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>06点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>07点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>08点</td><td>61</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>09点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>10点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>11点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>12点</td><td>61</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>13点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>14点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>15点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>16点</td><td>61</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>17点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>18点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>19点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>20点</td><td>61</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>21点</td><td>50</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>22点</td><td>75</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>23点</td><td>45</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>24点</td><td>61</td></tr>

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
                    
                </div><div class="cheng_ershi"></div>
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

<script src="vince/datapick/js/moment.js"></script>
<script src="vince/datapick/js/daterangepicker.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#xuanshi1').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);});
$('#xuanshi2').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);});

});
</script>

<div id="sss" style="display:none;height:200px;width:200px;"></div>
<script src="vince/js/echarts.min.js"></script>
<script type="text/javascript">
var myChart1 = echarts.init(document.getElementById('sss'));
option1 = {
series: [{data: [247, 179]}]};
myChart1.setOption(option1);
</script>
</body>
</html>