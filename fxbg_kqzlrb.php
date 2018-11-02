<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>设备入库</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="vince/css/vince.css">
  <link rel="stylesheet" href="vince/biao/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="vince/datapick/css/daterangepicker-bs3.css" />
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
        <li class="active">设备入库</li>
      </ol>
    </section>
    <div class="content qqq">
		<div class="yjgl">
          					<div class="ssjc_right_up">
          					<div class="nei">
          			<div class="ssjc_ru_title">
          				<span class="left_ten">
          					设备入库
          				</span>
                  
            
          			<div class="clear"></div>
          			</div>
          			<div class="sbrk_table">
                  <div class="row">
                    <div class="col-md-4">
                      <li><p><span>设备大类：</span>
                              <select  class="sdrk_select">
                              <option value=""></option>
                              <option value="01">生产</option>
                              <option value="02" selected="selected">监测</option>
                              </select></p></li>





                      <li><p><span>生产厂家：</span>
                              <select  class="sdrk_select">
                              <option value=""></option>
                              <option value="1" selected="selected">项目</option>
                              <option value="2">项目</option>
                              <option value="3">项目</option>
                              <option value="4">项目</option>
                              <option value="5">项目</option>
                              </select></p></li></p></li>
                      <li><p><span>设备厂牌：</span><input type="text" value=""></p></li>
                      <li><p><span>设备原值：</span><input type="text" value=""></p></li>
                      <li><p><span>设备原值：</span><input type="text" value=""></p></li>
                      <li><p><span>设备单价：</span><input type="text" value="300"></p></li>
                      <li><p><span>设备数量：</span><input type="text" value="10"></p></li>
                    </div>
                    <div class="col-md-4">
                      <li><p><span>设备子类：</span>
                              <select  class="sdrk_select">
                              <option value=""></option>
                              <option value="1"  selected="selected">电表</option>
                              <option value="5">集中器</option>
                              <option value="2">采集器</option>
                              <option value="4">终端</option>
                              <option value="3">sim卡</option>
                              </select></p></li>
                      <li><p><span>设备型号：</span><input type="text" value=""></p></li>
                      <li><p><span>设备规格：</span><input type="text" value=""></p></li>
                      <li><p><span>出厂日期：</span><input type="text" readonly class="shixuan_input" id="ccrq" value="2016-10-01" /></p><i class="shixuan glyphicon glyphicon-calendar fa fa-calendar"></i></li>
                      <li><p><span>采购人：</span><input type="text" value=""></p></li>
                      <li><p><span>设备用途：</span><input type="text" value=""></p></li>
                      <li><p><span>设备编号：</span>
                              <span class="sbbh_radio">
                             
                              <input type="radio" name="sbbh" id="xtsc" checked="checked" />
                               <label for="xtsc">系统生成</label>  </span>
                             <span class="sbbh_radio">
                               <input type="radio" name="sbbh" id="rgsz"/>
                               <label for="rgsz">人工设置</label></span>
                             </span>
                              
                               </p></li>
                    </div>
                     <div class="col-md-4">
                      <li><p><span>能源类型：</span>
                              <select  class="sdrk_select">
                              <option value=""></option>
                              <option value="01"  selected="selected">电</option>
                              <option value="02">水</option>
                              <option value="03">气</option>
                              <option value="04">热</option>
                              </select></p></li>
                      <li><p><span>隶属单位：</span><input type="text" value=""></p></li>
                      <li><p><span>设备功率：</span><input type="text" value=""></p></li>
                      <li><p><span>采购日期：</span><input type="text" readonly class="shixuan_input" id="cgrq" value="2016-10-11" /></p><i class="shixuan glyphicon glyphicon-calendar fa fa-calendar"></i></li>
                      
                      <li><p><input type="submit" value="生成批量信息" class="in_sub">
                      <input type="submit" value="重置" class="in_sub">
                      <input type="submit" value="设备入库" class="in_sub">


                      </p></li>
                    </div>


                  </div>
              
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
      <td>设备子类</td>
      <td>能源类型</td>
      <td>生产厂家</td>
      <td>设备型号</td>
      <td>隶属单位</td>
      <td>设备厂牌</td>
      <td>设备规格</td>
      <td>设备功率</td>
      <td>设备原值</td>
      <td>出厂日期</td>
      <td>采购批次</td>
      <td>采购人</td>
      <td>采购日期</td>
      <td>设备单价</td>
      <td>设备用途</td>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr><td>399</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>400</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>401</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>402</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>403</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>404</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>405</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>406</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>407</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

    <tr><td>408</td>
    <td><select  class="biao_select"><option value=""></option><option value="1">生产</option><option value="2"  selected="selected">监测</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1"  selected="selected">电表</option><option value="5">集中器</option><option value="2">采集器</option><option value="4">终端</option><option value="3">sim卡</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="01"  selected="selected">电</option><option value="02">水</option><option value="03">气</option><option value="04">热</option></select></td>
    <td><select  class="biao_select"><option value=""></option><option value="1" selected="selected">项目</option><option value="2">项目</option><option value="3">项目</option><option value="4">项目</option><option value="5">项目</option></select></td>
    <td>DL645</td><td>项目</td><td></td><td></td><td></td><td></td><td>2016-10-09</td><td></td><td></td><td>2016-10-09</td><td>300</td><td></td></tr>

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
  </div></div>
  <div class="cheng_ershi"></div></div></div></div></div></div></div>
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
$('#ccrq').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);});
$('#cgrq').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);});


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