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
<link href="__PUBLIC__/js/bootstrap/bootstrap.min.js" rel="stylesheet">
<!--<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" /> -->

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
       <volist name="list" id="vo">
			     <tr>
				      <td>{$vo.id}</td>
					  <td>
					  <?php
					  echo "<a href='__ROOT__/index.php/Home/Investfirminfo/Investfirminfo/?firm_name=".$vo['invest_firm_name']."'>$vo[invest_firm_name]</a>";
					  ?>
					  </td>
					  <td>{$vo.score}</td>
				 </tr>		
	   </volist>
	             <tr>
				      <td></td>
					  <td></td>
					  <td><a href="__ROOT__/index.php/Home/Moreinfo/moreinfo">更多..</a></td>
				 </tr>	
	   </table>
   </div>
   <div class="project_list">
       <table border="1" class="table table-striped table-bordered table-hover">
	              <tr>
				      <td>project_name</td>
					  <td>project_manager</td>
					  
				 </tr>	
       <volist name="project_list" id="vo">
			     <tr>
				      <td>{$vo.project_name}</td>
					  <td>
					  <?php
					  echo "<a href='__ROOT__/index.php/Home/Project/project_manager/?manager_name=".$vo['manager_name']."'>$vo[manager_name]</a>";
					  ?>
					  </td>
					  
				 </tr>		
	   </volist>
	             <tr>
				      
					  <td></td>
					  <td><a href="__ROOT__/index.php/Home/Moreinfo/moreinfo">更多..</a></td>
				 </tr>	
	   </table>
   </div>

</body>
</html>
