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
   <h>这是首页</h>
   <div class="rank_list">
       <table border="1" class="table table-striped table-bordered table-hover">
	              <tr>
				      <td>id</td>
					  <td>invest_firm_name</td>
					  <td>score</td>
				 </tr>	
       <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				      <td><?php echo ($vo["id"]); ?></td>
					  <td>
					  <?php
 echo "<a href='/LaPose/index.php/Home/Investfirminfo/Investfirminfo/?firm_name=".$vo['invest_firm_name']."'>$vo[invest_firm_name]</a>"; ?>
					  </td>
					  <td><?php echo ($vo["score"]); ?></td>
				 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	             <tr>
				      <td></td>
					  <td></td>
					  <td><a href="/LaPose/index.php/Home/Moreinfo/moreinfo">更多..</a></td>
				 </tr>	
	   </table>
   </div>
   <div class="project_list">
       <table border="1" class="table table-striped table-bordered table-hover">
	              <tr>
				      <td>project_name</td>
					  <td>project_manager</td>
					  
				 </tr>	
       <?php if(is_array($project_list)): $i = 0; $__LIST__ = $project_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				      <td><?php echo ($vo["project_name"]); ?></td>
					  <td>
					  <?php
 echo "<a href='/LaPose/index.php/Home/Project/project_manager/?manager_name=".$vo['manager_name']."'>$vo[manager_name]</a>"; ?>
					  </td>
					  
				 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	             <tr>
				      
					  <td></td>
					  <td><a href="/LaPose/index.php/Home/Moreinfo/moreinfo">更多..</a></td>
				 </tr>	
	   </table>
   </div>

</body>
</html>