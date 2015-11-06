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
   <h>这是project_detailinfo页</h>
   <div class="project_detailinfo">
       <table border="1" class="table table-striped table-bordered table-hover">
	          <tr>
	          	<td>project_name</td>
	          	<td>official_link</td>
	          	<td>company_name</td>
	          	<td>registration_time</td>
	          	<td>location</td>
	          	<td>project_status</td>
	          	<td>project_stage</td>
	          	<td>area</td>
	          	<td>sub_area</td>
	          	<td>intro</td>
	          	<td>registration_amount</td>
	          </tr>
	          <tr>
	          	<td><?php echo ($project_name); ?></td>
	          	<td><?php echo ($official_link); ?></td>
	          	<td><?php echo ($company_name); ?></td>
	          	<td><?php echo ($registration_time); ?></td>
	          	<td><?php echo ($location); ?></td>
	          	<td><?php echo ($project_status); ?></td>
	          	<td><?php echo ($project_stage); ?></td>
	          	<td><?php echo ($area); ?></td>
	          	<td><?php echo ($sub_area); ?></td>
	          	<td><?php echo ($intro); ?></td>
	          	<td><?php echo ($registration_amount); ?></td>
	          </tr>
	   </table>
   </div>

</body>
</html>