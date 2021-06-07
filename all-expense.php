<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

//code deletion
if(isset($_GET['delid']))
{
$rowid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from tblexpense where ID='$rowid'");
if($query){
echo "<script>alert('Record successfully deleted');</script>";
echo "<script>window.location.href='manage-expense.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Expense</title>
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
	button{background-color:#867980; color:white;}
	.btn{background-color:#867980; color:white;}
	
	</style>
</head>
<body>
<form name="f1" method="post">
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
	<!--	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Expense</li>
			</ol>
		</div>--><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
						<div class="form-group has-success"  >
									<!--<input type="submit" class="btn btn" style="" name="day" value="Day">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<input type="submit" class="btn btn" name="week" value="Week">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<input type="submit" class="btn btn" name="year"value="Year">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<input type="submit" class="btn btn" name="month" value="Month">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<input type="submit" class="btn btn" name="all" value="All">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<input type="submit" class="btn btn" name="interval" value="Interval">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									-->
									
                    			<?php
                        		$records = mysqli_query($con, "SELECT * From item_category");
                        		while($data = mysqli_fetch_array($records)){
                            	echo "<option value='". $data['id'] ."'>" .$data['name'] ."</option>"; // displaying data in option menu
                        		}	
                    			?> 
               					</select></button>
								</div>
								
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
            
              <thead style="background-color: #867980;">
                <tr>
                  <th style="text-align: center;color: white">S.NO</th>
                  <th style="text-align: center;color: white">Expense Item</th>
                  <th style="text-align: center;color: white">Expense Cost</th>
                  <th style="text-align: center;color: white">Expense Date</th>
                  <th style="text-align: center;color: white">Action</th>
                </tr>
              </thead>
              <?php
			 echo "Current Year is :"; 
  
             // Store the year to
             // the variable
             $year = date("Y"); 
               
             // Display the year
             echo $year;
			$ret=mysqli_query($con,"select * from tblexpense 'Username' LIKE _['Username']");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr align="center">
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ExpenseItem'];?></td>
                  <td><?php  echo $row['ExpenseCost'];?></td>
                  <td><?php  echo $row['ExpenseDate'];?></td>
                  <td><a href="manage-expense.php?delid=<?php echo $row['ID'];?>"><i class="fa fa-edit" style="font-size:20px;color:dodgerblue;"></i>
                  	  &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o" style="font-size:20px;color:red"></i></a>
                </tr>
                <?php 
$cnt=$cnt+1;https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css
}?>

               
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