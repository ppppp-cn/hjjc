<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>电能质量分析</title>
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
        <li class="active">电能质量分析</li>
      </ol>
    </section>
    <div class="content qqq">
		<div class="ssjc">
          <div class="row">
          	<div class="col-md-3 ssjc_left">
          		<div class="ssjc_title">
          			<p>选择能耗对象<span class="ssjc_title_right">
          				<span class="ssjc_littlesel check">建筑</span>
          				<span class="ssjc_littlesel">分项</span>
          				<span class="ssjc_littlesel">支路</span>
          			</span></p>
          		</div>
          	
          		<div class="tree_menu">
<!-- 树形导航一 -->
                <div class="tree well tree_one">
<ul class="none_margin">
  <li>
    <span><i class="icon-folder-open"></i> <input type="checkbox" class="tree_check" checked="checked"> <em> 项目项目</em></span> 
    <ul>
      <li><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>办公楼</em></span> 
        <ul class="spe_margin">
          <li style="display: none;"><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>高区</em></span>
            <ul class="spe_margin">
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>空调</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>照明及插座</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>动力</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>其他</em></span></li>
            </ul>
          </li>
          <li style="display: none;"><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>低区</em></span>
            <ul class="spe_margin">
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>空调</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>照明及插座</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>动力</em></span></li>
              <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>其他</em></span></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>商场</em></span>
        <ul>
          <li style="display: none;">
            <span> <input type="checkbox" class="tree_check"> 空调</span> 
          </li>
          <li style="display: none;">
            <span><input type="checkbox" class="tree_check">照明及插座</span>
          </li>
          <li style="display: none;">
            <span> <input type="checkbox" class="tree_check">动力</span>
          </li>
          <li style="display: none;">
            <span> <input type="checkbox" class="tree_check">其他</span>
          </li>
          </ul>
      </li>
    </ul>
  </li>

</ul>
</div>
<!-- 树形导航 -->

<!-- 树形导航二 -->
<div class="tree well tree_two">
<ul class="none_margin">
  <li>
    <span><i class="icon-folder-open"></i> <input type="checkbox" class="tree_check"  checked="checked"> <em> 分项</em></span> 
    <ul>
      <li><span><input type="checkbox" class="tree_check"> <em>空调</em></span> </li>
      <li><span><input type="checkbox" class="tree_check"> <em>照明及插座</em></span> </li>
      <li><span><input type="checkbox" class="tree_check"> <em>动力</em></span> </li>
      <li><span><input type="checkbox" class="tree_check"> <em>其他</em></span> </li>
    </ul>
  </li>

</ul>
</div>
<!-- 树形导航 -->
<!-- 树形导航三 -->
<div class="tree well tree_three">
<ul class="none_margin">
  <li>
    <span><i class="icon-folder-open"></i> <input type="checkbox" class="tree_check"  checked="checked"> <em> 总配</em></span> 
    <ul>
      <li><span><i class="icon-plus-sign"></i> <input type="checkbox" class="tree_check"> <em>办公楼</em></span> 
        <ul class="spe_margin">
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>新风机组</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路1-2</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路1-3</em></span></li>
        </ul>
      </li>
      <li><span><input type="checkbox" class="tree_check"> <em>支路2</em></span></li>
      <li><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>支路3</em></span> 
        <ul class="spe_margin">
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路3-1</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路3-2</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路3-3</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路3-4</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路3-5</em></span></li>
        </ul>
      </li>
      <li><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>支路4</em></span> 
        <ul class="spe_margin">
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路4-1</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路4-2</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路4-3</em></span></li>
        </ul>
      </li>
      <li><span><i class="icon-plus-sign"></i><input type="checkbox" class="tree_check"> <em>支路5</em></span> 
        <ul class="spe_margin">
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路5-1</em></span></li>
          <li style="display: none;"><span><input type="checkbox" class="tree_check"> <em>支路5-2</em></span></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
</div>
<!-- 树形导航 -->
          		</div>
          		<div class="ssjc_left_bottom">
          			<div class="ssjc_lbshare"><span class="ssjc_left_bottom_one"></span></div>
          			<div class="ssjc_lbshare"><span class="ssjc_left_bottom_two"></span></div>
          			<div class="ssjc_lbshare"><span class="ssjc_left_bottom_three"></span></div>
          		</div>
          	</div>
          	<div class="col-md-9 ssjc_right">
          		
          					<div class="ssjc_right_up">
          					<div class="nei">
          			<div class="ssjc_ru_title">
                 <span class="tiaoshijian">
                    数据时间：
                    <input type="text" class="shi" id="xuanshi1" readonly value="2016-10-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>


                <span class="yaqie">
                <label for="dianya">电压</label>
<input type="radio" name="dnzlfx" id="dianya" checked="checked" />
              </span>
                <span class="liuqie">

                <label for="dianliu">电流</label>
<input type="radio" name="dnzlfx" id="dianliu"  />
                </span>
          			   <span class="float_right">
                    <input type="submit" value="查询" class="youcecha">
                  </span>
          			
          			
          			
          			</div>
          			<div class="ssjc_ru_table">
          				<div class="echarts_ssjc_one" id="echarts_ssjc_one">            
                </div>

<div class="echarts_ssjc_two" id="echarts_ssjc_two">            
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
      <td>用户名称</td>
      <td>设备名称</td>
      <td>时间</td>
      <td>A相电压</td>
      <td>B相电压</td>
      <td>C相电压</td>
      <td>A相电流</td>
      <td>B相电流</td>
      <td>C相电流</td>
    </tr>
  </thead>
  <tbody>
  <tr><td>项目</td><td>冷却泵</td><td>00点</td><td>223</td><td>234</td><td>211</td><td>0.2</td><td>0.19</td><td>0.21</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>01点</td><td>224</td><td>213</td><td>225</td><td>0.22</td><td>0.23</td><td>0.22</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>02点</td><td>233</td><td>234</td><td>216</td><td>0.32</td><td>0.32</td><td>0.35</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>03点</td><td>214</td><td>203</td><td>235</td><td>0.21</td><td>0.22</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>04点</td><td>203</td><td>231</td><td>231</td><td>0.3</td><td>0.26</td><td>0.26</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>05点</td><td>234</td><td>253</td><td>215</td><td>0.21</td><td>0.2</td><td>0.23</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>06点</td><td>228</td><td>224</td><td>219</td><td>0.33</td><td>0.33</td><td>0.34</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>07点</td><td>229</td><td>219</td><td>235</td><td>0.2</td><td>0.21</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>08点</td><td>223</td><td>234</td><td>211</td><td>0.27</td><td>0.26</td><td>0.29</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>09点</td><td>224</td><td>213</td><td>225</td><td>0.22</td><td>0.23</td><td>0.22</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>10点</td><td>233</td><td>234</td><td>216</td><td>0.32</td><td>0.32</td><td>0.35</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>11点</td><td>214</td><td>203</td><td>235</td><td>0.21</td><td>0.22</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>12点</td><td>203</td><td>231</td><td>231</td><td>0.3</td><td>0.26</td><td>0.26</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>13点</td><td>234</td><td>253</td><td>215</td><td>0.21</td><td>0.2</td><td>0.23</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>14点</td><td>228</td><td>224</td><td>219</td><td>0.33</td><td>0.33</td><td>0.34</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>15点</td><td>229</td><td>219</td><td>235</td><td>0.2</td><td>0.21</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>16点</td><td>223</td><td>234</td><td>211</td><td>0.27</td><td>0.26</td><td>0.29</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>17点</td><td>224</td><td>213</td><td>225</td><td>0.22</td><td>0.23</td><td>0.22</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>18点</td><td>233</td><td>234</td><td>216</td><td>0.32</td><td>0.32</td><td>0.35</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>19点</td><td>214</td><td>203</td><td>235</td><td>0.21</td><td>0.22</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>20点</td><td>203</td><td>231</td><td>231</td><td>0.3</td><td>0.26</td><td>0.26</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>21点</td><td>234</td><td>253</td><td>215</td><td>0.21</td><td>0.2</td><td>0.23</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>22点</td><td>228</td><td>224</td><td>219</td><td>0.33</td><td>0.33</td><td>0.34</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>23点</td><td>229</td><td>219</td><td>235</td><td>0.2</td><td>0.21</td><td>0.19</td></tr>
<tr><td>项目</td><td>冷却泵</td><td>24点</td><td>229</td><td>219</td><td>235</td><td>0.27</td><td>0.28</td><td>0.26</td></tr>
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
/* 第一个图 */
var myChart1 = echarts.init(document.getElementById('echarts_ssjc_one'));
option1 = {
title: {
text: '  电能质量分析',
textStyle:{
color:'#fff',
fontSize:14,
fontWeight:'normal'},
padding:13},
legend: {
bottom: '2%',
data: ['电压']},
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
data: ['0时', '1时', '2时', '3时', '4时', '5时', '6时', '7时', '8时', '9时', '10时', '11时', '12时', '13时', '14时', '15时', '16时', '17时', '18时', '19时', '20时', '21时', '22时', '23时']},

yAxis: {
  axisLabel: {
            formatter: '{value} V'
        },  
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

legend: {
orient: 'horizontal',
right:'3%',
top:'3%',
data:['电压'],
textStyle:{color:'#fff'}},

series: [
{
name: '电压',
type: 'line',
data: [190, 120, 105, 300, 130, 247, 179, 222, 111, 300, 130, 247,190, 120, 105, 300, 130, 247, 179, 222, 111, 300, 130, 247],
symbol:'circle',
symbolSize:10,
lineStyle:{normal:{color:'#ff6b6b'}}}]};
myChart1.setOption(option1);

myChart1.resize();


/* 第二个图 */
var myChart2 = echarts.init(document.getElementById('echarts_ssjc_two'));
option2 = {
title: {
text: '  电能质量分析',
textStyle:{
color:'#fff',
fontSize:14,
fontWeight:'normal'},
padding:13},
legend: {
bottom: '2%',
data: ['电流']},
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
data: ['0时', '1时', '2时', '3时', '4时', '5时', '6时', '7时', '8时', '9时', '10时', '11时', '12时', '13时', '14时', '15时', '16时', '17时', '18时', '19时', '20时', '21时', '22时', '23时']},
yAxis: {
    axisLabel: {
            formatter: '{value}A'
        },  
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

legend: {
orient: 'horizontal',
right:'3%',
top:'3%',
data:['电流'],
textStyle:{color:'#fff'}},

series: [
{
name: '电流',
type: 'line',
data: [20, 22, 32, 21, 30, 21,33, 20, 27, 22, 32, 21,30, 21, 33, 20, 27, 22,32,30,21, 33, 20, 27],
symbol:'circle',
symbolSize:10,
lineStyle:{normal:{color:'#55c45f'}}}]};


myChart1.setOption(option1);





window.addEventListener("resize",function(){
myChart1.resize();
myChart2.resize();
});


// 电能质量分析页面图标切换
$(".yaqie input").click(function(){
  myChart1.setOption(option1);
  $(".echarts_ssjc_one").css({"display":"block"});
  $(".echarts_ssjc_two").css({"display":"none"});
myChart1.setOption(option1);
  myChart1.resize();

})
$(".liuqie input").click(function(){

  $(".echarts_ssjc_one").css({"display":"none"});

  $(".echarts_ssjc_two").css({"display":"block","height":"100%","width":"100%"});
  myChart2.setOption(option2);
  myChart2.resize();
})
// 电能质量分析页面图标切换



  
</script>
</body>
</html>