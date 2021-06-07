<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  	header('location:logout.php');
}
 	else{
	if(isset($_GET['delid'])){
		$rowid=intval($_GET['delid']);
		$query=mysqli_query($con,"delete from tblexpense where ID='$rowid'");
		if($query){
			echo "<script>alert('Record successfully deleted');</script>";
			echo "<script>window.location.href='manage-expense.php'</script>";
		} 
		else {
			echo "<script>alert('Something went wrong. Please try again');</script>";

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Day Expense</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
        body{background: #f1f4f7;padding-top: 60px;font-size: 14px;color: #444444;font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;}
	</style>
</head>
<body>
<form name="f1" method="post">
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Expense</li>
			</ol>
		</div><!--/.row-->
								
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Current Day Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){echo $msg;}  ?> </p>
						<div class="col-md-12">	
							<div class="table-responsive">
            					<table class="table table-bordered mg-b-0">
              						<thead style="background-color: #867980;">
                						<tr>
                  							<th style="text-align: center;color: white">S.NO</th>
                  							<th style="text-align: center;color: white">Expense Item</th>
                  							<th style="text-align: center;color: white">Expense Cost</th>
                  							<th style="text-align: center;color: white">Expense Date</th>
											<th style="text-align: center;color: white">UserId</th>
                  							<th style="text-align: center;color: white">Action</th>
               							</tr>
              						</thead>
              						<?php
			 							$date=date_create("l");
                						$date= date_format($date,"Y-m-d ");
										$userid=$_SESSION['detsuid'];
										$ret=mysqli_query($con,"select * from tblexpense where ExpenseDate='$date' And UserId='$userid'");
										$cnt=1;
										while ($row=mysqli_fetch_array($ret)) {
									?>
              						<tbody>
                						<tr align="center">
                  							<td><?php echo $cnt;?></td>
                  							<td><?php  echo $row['ExpenseItem'];?></td>
                  							<td><?php  echo $row['ExpenseCost'];?></td>
                  							<td><?php  echo $row['ExpenseDate'];?></td>
											<td><?php  echo $row['UserId'];?></td>  
                  							<td><a href="update-day-expense.php?ID=<?php echo $row['ID'];?>"><i class="fa fa-edit" style="font-size:20px;color:dodgerblue;"></i>
                  	  						&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete-day-expense.php?ID=<?php echo $row['ID'];?>"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></a></td>
                						</tr>
                						<?php 
											$cnt=$cnt+1;https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css
											}
										?>              
              						</tbody>
            					</table>
          					</div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</form>	
</body>
</html>
<?php }  ?>