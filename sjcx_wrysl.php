<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>负荷响应分析</title>
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
        <li class="active">响应方案管理</li>
      </ol>
    </section>
    <div class="content qqq">
    <div class="ssjc">
          <div class="row">
           
            <div class="col-md-12 ssjc_right">
              
                    <div class="xyfagl_right_up">
                <div class="fhxyfx_title xyfa_title">
                      <span class="tiaoshijian">
                    数据时间：
                    <input type="text" class="shi" id="xuanshi1" readonly value="2016-10-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                   
               
                   <span class="float_right">
                    <input type="submit" value="查询" class="youcecha">
                  </span>
          <div class="clear"></div></div>
                <div class="xyfagl_one">
                <div class="row">
                <div class="col-md-6">
              	<div class="xyfagl_one_left">
                <p>当日响应完成情况</p>
                <div class="xyfagl_one_left_left"> 
                 <p><span>响应方案:    </span>2016-09-18响应方案</p>
                 <p><span>响应策略：</span>夏季空调控制策略</p>
                 <p><span>响应起止时间： </span>10:30-18:00</p>
                 <p><span>响应目标：</span>2000KW </p>
                 <p><span>实际响应负荷：</span>1800KW </p>
                 <p><span>奖励金额：</span>0元</p>
                </div>
				<div class="xyfagl_one_left_right">
				<div class="echarts_xyxgpj_one" id="echarts_xyxgpj_one">
				</div></div>
				<div class="clear"></div></div></div>
                <div class="col-md-6">
                 <div class="xyfagl_one_right">

<div class="fhxyfx_yuanqie">
<p>近5日响应情况对比</p>
<div class="fhxyfx_ri">
<p>2016-9-16</p>
<div class="baibikuang">
<div class="baibi"><span class="baibi77"></span>
</div><span class="baibishu">77%</span></div></div>
<div class="fhxyfx_ri">
<p>2016-9-15</p>
<div class="baibikuang">
<div class="baibi"><span class="baibi27"></span>
</div><span class="baibishu">27%</span></div></div>
<div class="fhxyfx_ri">
<p>2016-9-14</p>
<div class="baibikuang">
<div class="baibi"><span class="baibi67"></span>
</div><span class="baibishu">67%</span></div></div>
<div class="fhxyfx_ri">
<p>2016-9-13</p>
<div class="baibikuang">
<div class="baibi"><span class="baibi47"></span>
</div><span class="baibishu">47%</span></div></div>
<div class="fhxyfx_ri">
<p>2016-9-12</p>
<div class="baibikuang">
<div class="baibi"><span class="baibi87"></span>
</div><span class="baibishu">87%</span></div></div>
</div>

<div class="fhxyfx_qie">
<p>2016-09-16响应完成情况 <span class="fhxyfx_fan"></span></p>
<div class="xyfagl_one_left_left"> 
<p><span>响应方案:    </span>2016-09-16响应方案</p>
<p><span>响应策略：</span>夏季空调控制策略</p>
<p><span>响应起止时间： </span>10:30-18:00</p>
<p><span>响应目标：</span>1800KW </p>
<p><span>实际响应负荷：</span>1400KW </p>
<p><span>奖励金额：</span>0元</p>
</div>
<div class="xyfagl_one_left_right">
<div class="echarts_xyxgpj_three" id="echarts_xyxgpj_three">
</div></div>
<div class="clear"></div>
</div>

</div></div></div></div></div>
                <div class="echarts_two">
                	<p>
                		实时负荷响应
                	</p>

                	<div class="echarts_xyxgpj_two" id="echarts_xyxgpj_two"></div>

                </div>

                <div class="fhxyfx_table">
                 <div class="ssjc_ru_title xyfa_title">
                  <span style="padding:0;">
                    数据列表：
                  </span>
                   <span class="float_right">
                    <input type="submit" value="导出" class="youcecha">
                  </span>
                  
				  <div class="clear"></div>
                </div>
                	<table class="tj_table" border="0">
  <thead>
    <tr>
      <td>日期</td>
      <td>方案名称</td>
      <td>策略名称</td>
      <td>响应起止时间</td>
      <td>响应目标</td>
      <td>实际响应</td>
      <td>完成度</td>
      <td>实际奖励</td>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr><td>2016-05-04</td><td>2016年5月削峰方案</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td></tr>
    <tr><td>2016-05-05</td><td>2016年5月削峰方案</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td></tr>
    <tr><td>2016-05-06</td><td>2016年5月削峰方案</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td><td>q</td></tr>
    
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
                  
                </div>  <div class="cheng_ershi"></div>
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
});
</script>


















<script src="vince/js/echarts.min.js"></script>
<script type="text/javascript">
var myChart1 = echarts.init(document.getElementById('echarts_xyxgpj_one')); 
option1 = {
series: [{
name:'负荷完成度',
type:'pie',
radius: ['35%', '70%'],
center : ['50%', '50%'],
avoidLabelOverlap: false,
label: {
normal: {
show: true,
textStyle: {
fontSize: '24',
fontWeight: 'bold',
color:'#fff'},
position: 'center'},
emphasis: {
show: true,
textStyle: {
fontSize: '20',
fontWeight: 'bold',
color:'#fff'}}},
data:[
{value:67, name:'67%'},
{value:33, name:''},],
color:['#55c45f','#ff6b6b']}]};
myChart1.setOption(option1);  


/* 第二个图 */
var myChart2 = echarts.init(document.getElementById('echarts_xyxgpj_two'));
option2= {
textStyle:{color:'#fff'},
tooltip: {
trigger: 'item',
formatter: '{a} <br/>{b} : {c}'},
legend: {
orient: 'horizontal',
right:'3%',
top:'3%',
data:['基线负荷','实际负荷'],
textStyle:{color:'#fff'}},

xAxis: {
type: 'category',
splitLine: {
show: true,
lineStyle:{
color:'rgba(43,46,56,0.8)'}},
data: ['0时', '1时', '2时', '3时', '4时', '5时', '6时', '7时', '8时', '9时', '10时', '11时', '12时', '13时', '14时', '15时', '16时', '17时', '18时', '19时', '20时', '21时', '22时', '23时']},
yAxis: {
  axisLabel: {
            formatter: '{value} kw'
        },
splitLine: {
show: true,
lineStyle:{
color:'rgba(43,46,56,0.8)'}},
scale:true},
grid: {
left: '3%',
right: '4%',
bottom: '3%',
containLabel: true},
series: [
{
name: '基线负荷',
type: 'line',
data: [55,58,56,70,150,250,210,290,310,300,320,400,410,500,480,450,300,320,300,390,410,290,150,60],
markPoint: {
data: [
{ name: '策略1开启时间',
  coord: ['11时', 400],
     name: '11时0分0秒',
    value:'<br/>策略1开启',
label:{
  normal:{
    show:'true'
  }}},
{ name: '策略2开启时间',
  coord: ['14时', 480],
     name: '14时0分0秒',
    value:'<br/>策略2开启'},
{ name: '策略1关闭时间',
  coord: ['16时', 300],
     name: '16时0分0秒',
    value:'<br/>策略1关闭'},
{ name: '策略2关闭时间',
  coord: ['18时', 300],
     name: '18时0分0秒',
    value:'<br/>策略2关闭'},
] },
symbol:'circle',
symbolSize:10,
lineStyle:{normal:{color:'#ff6b6b'}}},
{
name: '实际负荷',
type: 'line',
data: [45,61,50,75,160,240,220,290,320,305,240,320,330,380,360,400,250,310,305,381,402,293,145,61],
symbol:'circle',
symbolSize:10,
lineStyle:{normal:{color:'#1571b0'}}}]};
myChart2.setOption(option2);

// 第三个图
var myChart3 = echarts.init(document.getElementById('echarts_xyxgpj_three')); 
option3 = {
series: [{
name:'负荷完成度',
type:'pie',
radius: ['35%', '70%'],
center : ['50%', '50%'],
avoidLabelOverlap: false,
label: {
normal: {
show: true,
textStyle: {
fontSize: '24',
fontWeight: 'bold',
color:'#fff'},
position: 'center'},
emphasis: {
show: true,
textStyle: {
fontSize: '20',
fontWeight: 'bold',
color:'#fff'}}},
data:[
{value:67, name:'67%'},
{value:33, name:''},],
color:['#55c45f','#ff6b6b']}]};
myChart3.setOption(option3);    
myChart1.resize();
myChart2.resize();


$(".fhxyfx_ri").click(function(){
  $(".fhxyfx_qie").css({"display":"block"})
  $(".fhxyfx_yuanqie").css({"display":"none"})
  myChart3.resize();
})
$(".fhxyfx_fan").click(function(){
  $(".fhxyfx_qie").css({"display":"none"})
  $(".fhxyfx_yuanqie").css({"display":"block"})
})





window.addEventListener("resize",function(){
myChart1.resize();
myChart2.resize();
 myChart3.resize();
});



</script>
</body>
</html>