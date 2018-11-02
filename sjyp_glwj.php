<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>设备查询</title>
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
        <li class="active">设备查询</li>
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
                  <p><span>大类：<input type="text"></span>
                  <span>小类：<input type="text"></span>
                  <span>能源类型：<input type="text"></span>
                  <span>生产厂家：<input type="text"></span>
                  <input type="submit" value="重置" class="in_sub">
                  <input type="submit" value="统计查询" class="in_sub">
                  <input type="submit" value="设备查询" class="in_sub">
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
      <td>设备编号</td>
      <td>设备大类</td>
      <td>设备小类</td>
      <td>能源类型</td>
      <td>生产厂家</td>
      <td>采购批次</td>
      <td>采购日期</td>
      <td>设备单价</td>
      <td>设备状态</td>
      <td>使用单位</td>
      <td>安装地址</td>
      <td>更多信息</td>
    </tr>
    </tr>
  </thead>
    <tbody>
    <tr><td>SIM199</td><td>生产</td><td>sim卡</td><td>电</td><td>项目</td><td>201503180001</td><td>2015-03-11</td><td>105.20</td><td>库存</td><td></td><td></td><td></td></tr>
    <tr><td>SIM198</td><td>生产</td><td>sim卡</td><td>电</td><td>项目</td><td>201503180001</td><td>2015-03-11</td><td>105.20</td><td>库存</td><td></td><td></td><td></td></tr>
    <tr><td>SIM197</td><td>生产</td><td>sim卡</td><td>电</td><td>项目</td><td>201503180001</td><td>2015-03-11</td><td>105.20</td><td>安装</td><td>项目</td><td>项目</td><td></td></tr>
    <tr><td>SIM196</td><td>生产</td><td>sim卡</td><td>电</td><td>项目</td><td>201503180001</td><td>2015-03-11</td><td>105.20</td><td>库存</td><td>项目</td><td>项目</td><td></td></tr>
    <tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr>
    <tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr>
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