<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LaPose</title>
<link href="__PUBLIC__/css/systemload.css" rel="stylesheet"/>
<link href="__PUBLIC__/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery-1.11.2.min.js"></script>
<script src="__PUBLIC__/js/systemload.js"></script>
<script src="__PUBLIC__/js/d3/d3.min.js"></script>


<link href="__PUBLIC__/js/bootstrap/bootstrap.min.js" rel="stylesheet">
<!--<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" /> -->

</head>

<body>
   <h>这是invest_firm_info页</h>
   <div class="invest_firm_info">
       <table border="1" class="table table-striped table-bordered table-hover">
              <tr>
	          	<td>机构</td>
	          	<td>机构信息</td>
	          	<td>机构网址</td>
	          </tr>
	          <tr>
	          	<td>{$invest_firm_name}</td>
	          	<td>{$intro}</td>
	          	<td>{$official_link}</td>
	          </tr>
	   </table>
   </div> 
   <div class="firm_detailinfo">
       <table border="1" class="table table-striped table-bordered table-hover">
              <tr>
	          	<td>投资机构名</td>
	          	<td>投资项目名</td>
	          	<td>投资时间</td>
	          	<td>投资轮次</td>
	          	<td>投资金额</td>
	          	<td>投资领域</td>
	          	<td>投资人</td>
	          	
	          </tr>
	          
	    <volist name="firm_detailinfo" id="vo">
			<tr>
				 <td>{$vo.invest_firm_name}					  
				 </td>
				 <td>
				     <?php
					  echo "<a href='__ROOT__/index.php/Home/Project/project/?project_name=".$vo['project_name']."'>$vo[project_name]</a>";
					  ?>
				 </td>
				 <td>{$vo.invest_time}</td>
		    	 <td>{$vo.round}</td>
				 <td>{$vo.amount}</td>
			     <td>{$vo.area}</td>
				 <td>
				     <?php
					  echo "<a href='__ROOT__/index.php/Home/Investor/investor/?investor_name=".$vo['investor_name']."'>$vo[investor_name]</a>";
					  ?>
				 </td>
			 </tr>		
	   </volist>
	   </table>
   </div> 

     <script src="__PUBLIC__/js/Bar_Chart.js"></script>
     <script src="__PUBLIC__/js/Bar_Chart1.js"></script>
     <script src="__PUBLIC__/js/Sector_Graph.js"></script>
     <script src="__PUBLIC__/js/highcharts/highcharts.js"></script>
     <script src="__PUBLIC__/js/highcharts/highcharts-3d.js"></script>
     <script src="__PUBLIC__/js/highcharts/modules/exporting.js"></script>


     <script type="text/javascript">
     
          
    var num1="{$invest_firm_features['1999数量']}";
    var num2="{$invest_firm_features['2000数量']}";
    var num3="{$invest_firm_features['2002数量']}";
    var num4="{$invest_firm_features['2003数量']}";
    var num5="{$invest_firm_features['2004数量']}";
    var num6="{$invest_firm_features['2005数量']}";
    var num7="{$invest_firm_features['2006数量']}";
    var num8="{$invest_firm_features['2007数量']}";
    var num9="{$invest_firm_features['2008数量']}";
    var num10="{$invest_firm_features['2009数量']}";
    var num11="{$invest_firm_features['2010数量']}";
    var num12="{$invest_firm_features['2011数量']}";
    var num13="{$invest_firm_features['2012数量']}";
    var num14="{$invest_firm_features['2013数量']}";
    var num15="{$invest_firm_features['2014数量']}";
    var num16="{$invest_firm_features['2015数量']}";
    	//var dataset = [num1, num2, num3, num4, num5, num6, num7, num8, num9, num10, num11, num12, num13, num14, num15];
    	var dataset = [parseInt(num1), parseInt(num2),parseInt(num3),parseInt(num4),parseInt(num5),parseInt(num6),parseInt(num7),];
    	//var dataset = [0, 0, 1,4, 1, 3, 0, 0, 4, 0, 5, 6, 0];
            
               //Bar_Chart(dataset);
               Bar_Chart1(dataset);
               Sector_Graph(dataset);
     </script>
     <div id="container"></div>
<div id="sliders">
	<table >
		<tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/> </td><td><span id="R0-value" class="value"></span></td></tr>
		<tr><td>&nbsp</td><td>&nbsp</td></tr>
	    <tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/></td><td> <span id="R1-value" class="value"></span></td></tr>
	</table>
</div>
	</body>
</body>
	
</html>
