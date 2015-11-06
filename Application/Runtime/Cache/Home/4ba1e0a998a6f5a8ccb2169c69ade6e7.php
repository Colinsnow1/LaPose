<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LaPose</title>
<link href="/LaPose/Public/css/systemload.css" rel="stylesheet"/>
<link href="/LaPose/Public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="/LaPose/Public/js/jquery-1.11.2.min.js"></script>
<script src="/LaPose/Public/js/systemload.js"></script>
<link href="/LaPose/Public/js/bootstrap/bootstrap.min.js" rel="stylesheet">
<!--<link rel="shortcut icon" href="/LaPose/Public/images/favicon.ico" /> -->

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
	          	<td><?php echo ($invest_firm_name); ?></td>
	          	<td><?php echo ($intro); ?></td>
	          	<td><?php echo ($official_link); ?></td>
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
	          
	    <?php if(is_array($firm_detailinfo)): $i = 0; $__LIST__ = $firm_detailinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				 <td><?php echo ($vo["invest_firm_name"]); ?>					  
				 </td>
				 <td>
				     <?php
 echo "<a href='/LaPose/index.php/Home/Project/project/?project_name=".$vo['project_name']."'>$vo[project_name]</a>"; ?>
				 </td>
				 <td><?php echo ($vo["invest_time"]); ?></td>
		    	 <td><?php echo ($vo["round"]); ?></td>
				 <td><?php echo ($vo["amount"]); ?></td>
			     <td><?php echo ($vo["area"]); ?></td>
				 <td>
				     <?php
 echo "<a href='/LaPose/index.php/Home/Investor/investor/?investor_name=".$vo['investor_name']."'>$vo[investor_name]</a>"; ?>
				 </td>
			 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	   </table>
   </div> 

</body>
	
</html>