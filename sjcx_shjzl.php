<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10">
  <title>响应方案管理</title>
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


<div class="fuceng">
  <div class="fuqu">
    <div class="fuquzone">
      <div class="fuqulogo">
        
      </div>
      <p class="fuqutitle">
      方案管理
        <span class="fuclose">×</span>
      </p>
      <div class="fuqubiao">
        <p><span>方案名称</span><input type="text"></p>
        <p><span class="tiaoshijian">响应开始时间：</span>
        <input type="text" class="shi" id="xuanshi2" readonly value="2016-10-10">
        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></p> 
        <p><span class="tiaoshijian">调节结束时间: </span>
        <input type="text" class="shi" id="xuanshi3" readonly value="2016-10-10">
        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></p> 
        <p><span>调节目标:</span><input type="text"></p>
        <p><span>奖励金额:</span><input type="text"></p>
        
      </div>
      <div class="fuquqie">
        <p><span class="fuquqieone fuquxuanbai">控制策略列表</span><span class="fuquqietwo">推荐策略列表</span></p>
      </div>
      <div class="fuquqienei">
        <div class="fuquqieju fuquqiezuo">
          <p>总响应负荷2000KW，可满足调控要求。</p>
          <div class="fuqutable">
            <li><span>策略名称</span><span>目标负荷</span><span>操作</span></li>
            <li><span>策略1</span><span>1000KW</span><span><img src="vince/images/icon_27.png" alt=""></span></li>
            <li><span>策略2</span><span>1000KW</span><span><img src="vince/images/icon_27.png" alt=""></span></li>
          </div>
        </div>
        <div class="fuquqieju">
          <p>控制策略池：</p>
          <div class="fuqutable">
            <li><span>策略名称</span><span>目标负荷</span><span>操作</span></li>
            <li><span>策略1</span><span>1000KW</span><span><img src="vince/images/icon_27.png" alt=""></span></li>
            <li><span>策略2</span><span>1000KW</span><span><img src="vince/images/icon_27.png" alt=""></span></li>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="fuqusave">
        <input type="button" value="保存">
      </div>
    </div>
  </div>

  
</div>



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
                    <div class="nei">
                <div class="ssjc_ru_title xyfa_title">
                  <span>
                    响应策略：
                    <input type="text" class="shi">
                  </span>
                      <span class="tiaoshijian">
                    响应时间：
                    <input type="text" class="shi" id="xuanshi1" readonly value="2016-10-12">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                    <span class="float_right">
                    <input type="submit" value="导出" class="youcecha">
                  </span>
               
                   <span class="float_right">
                    <input type="submit" value="查询" class="youcecha">
                  </span>
                  
				  <div class="clear"></div>
                </div>
              
              </div>
              <div class="xyfagl_right_bottom">
                <div class="nei ">
                    <p>数据列表</p>
                <div class="ssjc_rub_table">
<table class="tj_table" border="0">
  <thead>
    <tr>
      <td>方案名称</td>
      <td>目标负荷</td>
      <td>策略组成</td>
      <td>目标负荷</td>
      <td>日累计响应</td>
      <td>操作</td>
      <td>起始时间</td>
      <td>备注</td>
    </tr>
  </thead>
  <tbody>
<tr>
  <td rowspan="4">方案01</td>
  <td rowspan="4">XX</td>
  <td>01策略</td>
  <td>XX</td>
  <td rowspan="3"></td>
  <td>删除</td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>02策略</td>
  <td>XX</td>
  <td>删除</td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>03策略</td>
  <td>XX</td>
  <td>删除</td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td colspan="4" class="text_al_rig"><a href="#" class="lindianjia">添加策略</a></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td rowspan="3">方案02</td>
  <td rowspan="3">XX</td>
  <td>01策略</td>
  <td>XX</td>
  <td rowspan="2"></td>
  <td>删除</td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>02策略</td>
  <td>XX</td>
  <td>删除</td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td colspan="4" class="text_al_rig"><a href="#" class="lindianjia">添加策略</a></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td colspan="8" class="text_al_rig lindianjia"><input type="submit" value="新建方案" class="anniu"></td>
</tr>
    <tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr><tr class="kongxian"></tr>
    <tr class="kongxian"></tr><tr class="kongxian"></tr>
    <tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr><tr class="gao xian"></tr>
    <tr class="gao xian"></tr><tr class="gao xian"></tr>
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
$('#xuanshi3').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
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