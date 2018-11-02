<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>预警管理</title>
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
      <span class="logo-lg"><img src="vince/images/v01.png">天津绿荫里</span>
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
        <li class="active">预警管理</li>
      </ol>
    </section>
    <div class="content qqq">
    <div class="yjgl">
                    <div class="ssjc_right_up">
                    <div class="nei">
                <div class="ssjc_ru_title">
                  <span class="left_ten">
                    预警查询
                  </span>
                  <span class="float_right">
                        <span class="tiaoshijian">
                    开始时间：
                    <input type="text" class="shi" id="xuanshi1" readonly value="2016-08-01">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                    <span class="tiaoshijian">
                    结束时间：
                    <input type="text" class="shi" id="xuanshi2" readonly value="2016-08-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar" style="left:86px;"></i></span>
                  <span>
                  预警级别
                    <select   class="biaoti_select">
                <option value="甲级">甲级</option>
                <option value="乙级">乙级</option>
                <option value="丙级">丙级</option>
              </select>
                  </span>
                  <span >
                  处理状态：
                    <select   class="biaoti_select">
                <option value="处理完成">处理完成</option>
                <option value="正在处理">正在处理</option>
                <option value="待处理">待处理</option>
              </select>
                  </span>

              <span class="right_ten">
                    <input type="submit" value="查询" class="youcecha">
                  </span>
                  </span>
              <div class="clear"></div>
                </div>
                <div class="yjgl_ru_table">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="echarts_yjgl_one" id="echarts_yjgl_one">            
                </div>
                    </div>
                    <div class="col-md-8">
                      <div class="echarts_yjgl_two" id="echarts_yjgl_two">            
                </div>
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
      <td>序号</td>
      <td>报警时间</td>
      <td>报警类型</td>
      <td>设备名称</td>
      <td>报警信息</td>
      <td>处理意见</td>
      <td>处理状态</td>
      <td>操作</td>
    </tr>
  </thead>
  <tbody>
    <tr><td>1</td><td>2016/8/1 11点30分</td><td>电压过高</td><td>冷却塔</td><td>冷却塔电压过高</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>2</td><td>2016/8/3 20点30分</td><td>非工作时间用电</td><td>会议室一</td><td>会议室一非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>3</td><td>2016/8/3 20点30分</td><td>非工作时间用电</td><td>7楼走廊</td><td>7楼走廊非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>4</td><td>2016/8/3 20点30分</td><td>非工作时间用电</td><td>1#电梯</td><td>1#电梯非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>5</td><td>2016/8/6 19点00分</td><td>非工作时间用电</td><td>会议室一</td><td>会议室一非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>6</td><td>2016/8/6 19点00分</td><td>非工作时间用电</td><td>7楼走廊</td><td>7楼走廊非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>7</td><td>2016/8/6 19点00分</td><td>非工作时间用电</td><td>1#电梯</td><td>1#电梯非工作时间用电</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>8</td><td>2016/8/11 11点30分</td><td>电流过高</td><td>冷却塔</td><td>冷却塔电流过高</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
<tr><td>9</td><td>2016/8/11 11点30分</td><td>电压过高</td><td>冷却塔</td><td>冷却塔电压过高</td><td></td><td>未处理</td><td> <a href="#">处理</a>  | <a href="#">忽略</a></td></tr>
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
<script src="vince/js/echarts.min.js"></script>
<script type="text/javascript">

      
/* 第一个图 */

var myChart1 = echarts.init(document.getElementById('echarts_yjgl_one')); 
option1 = {
tooltip: {
trigger: 'item',
formatter: "{a} <br/>{b}: {c} ({d}%)"},
title: {
text: '  预警管理',
left: 'left',
textStyle:{
color:'#fff',
fontSize:14,
fontWeight:'normal'},
padding:13},
textStyle:{color:'#fff'},
legend: {
orient: 'vertical',
right:'2%',
top:'5%',
data:['非工作时间用电','电压过高','电流过高'],
textStyle:{color:'#fff'}},
series: [{
name:'响应方案比例',
type:'pie',
radius: ['30%', '70%'],
center : ['35%', '50%'],
avoidLabelOverlap: false,
label: {
normal: {
show: false,
position: 'center'},
emphasis: {
show: true,
textStyle: {
fontSize: '20',
fontWeight: 'bold',
color:'#fff'}}},
data:[
{value:6, name:'非工作时间用电'},
{value:2, name:'电压过高'},
{value:1, name:'电流过高'},],
color:['#55c45f','#ff6b6b','#4eb7cd']}]};
myChart1.setOption(option1);    
  

/* 第二个图 */
var myChart2 = echarts.init(document.getElementById('echarts_yjgl_two'));
option2 = {
title: {
text: '  设备报警时间分析：2016年08日01日—2016年08日12日',
left: 'center',
textStyle:{
color:'#fff',
fontSize:14,
fontWeight:'normal'},
padding:13},
legend: {
bottom: '2%',
data: ['设备报警']},
textStyle:{color:'#fff'},
tooltip: {
trigger: 'item',
formatter: '{a} <br/>{b} : {c}'},
xAxis: {
type: 'category',
splitLine: {
show: true,
lineStyle:{
color:'rgba(43,46,56,0.8)'}},
data: ['1日','2日','3日','4日','5日','6日','7日','8日','9日','10日','11日','12日']},
yAxis: {
splitLine: {
show: true,
lineStyle:{
color:'rgba(43,46,56,0.8)'}},
scale:true},
grid: {
  top:'13%',
left: '3%',
right: '4%',
bottom: '15%',
containLabel: true},
series: [
{
name: '设备报警',
type: 'line',
data: [1,0,3,0,0,3,0,0,0,0,2,0],
symbol:'circle',
symbolSize:10,
lineStyle:{normal:{color:'#ff6b6b'}}}]};
myChart2.setOption(option2);

myChart1.resize();
myChart2.resize();
window.addEventListener("resize",function(){
myChart1.resize();
myChart2.resize();


});



  
</script>
</body>
</html>