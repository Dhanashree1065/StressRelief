<?php
$page_title = 'Contact Us - Stress Relief';
include('navbar.php');
include('includes/dbconnection.php');
   $msg = "";
    if (isset(($_POST['submit']))){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        
        $sql="insert into contactus(fullname,email,msg,city,contact)
        values('$fullname','$email','$msg','$city','$contact')";
             
        if(mysqli_query($con,$sql)){
            echo"insert";
        }
        else{
            echo "Error".$sql."<br>".$con->connect_error;
        }
   }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="/StressRelief/dets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .contact-us{width: 55%;background-color: #30a5ff;color: white;margin: 44px 156px;border-radius: 17px;height: 46px;}
        .textbox{width: 58%;height: 52px;margin-bottom: 30px;border-radius: 10px;margin-left: 151px;margin-top: -119px;}
        #label{max-width: 183%;margin-bottom: 91px;font-weight: 700;font-size: 20px;}
    </style>
   
</head>
<title>Contact Us</title>
<body>
<h2 style="margin-bottom: 20px;margin-left: 36%;font-size:37px;font-family:Times New Roman;color:#30a5ff;">Get in touch with us</h2>
<div class ="col-md-2 " ></div>

<div class ="col-md-8 dashboard-content" style="width: 71.666667%;margin-left:295px;">
   <form action="" method="post">
     
     
        <div class="form-group w-100 p-3">
            <div class="col-sm-10" >
               <label id="label">Your name:</label>
               <input type="text" class="form-control w-10 p-3 textbox " name="fullname"  required>
            </div>
        </div>

        <div class="form-group w-100 p-3">
            <div class="col-sm-10" >
               <label id="label">Email:</label>
               <input type="email" class="form-control w-10 p-3 textbox " name="email"  required>
            </div>
        </div>
        <div class="form-group w-100 p-3">
            <div class="col-sm-10" >
                <label id="label">Contact:</label>
                <input type="text"  class="form-control w-10 p-3 textbox" id="contact" name="contact">
            </div>
        </div>
        <div class="form-group w-100 p-3">
            <div class="col-sm-10" >
               <label id="label">City:</label>
               <input type="text" class="form-control w-10 p-3 textbox " name="city"  required>
            </div>
        </div>
        <div class="form-group w-100 p-3">
            <div class="col-sm-10" >
               <label id="label">Your Message:</label>
               <textarea type="text" class="form-control w-10 p-3  textbox" name="msg"  required></textarea>
            </div>
        </div>     
        <div class="form-group1">
        <div class="col-sm-10"  >
              <button type="submit" class="form-control contact-us" name="submit" >Submit</button>
            </div>
        </div>
        <div class="form-group1">
        <div class="col-sm-10" style="font-size: 54px;margin-left: 5px;">
            <div style="margin-left:66px;">
                <i class="far fa-envelope" style="padding: 12px 62px;"></i>
                <i class="fas fa-phone-alt" style="padding: 12px 62px;"></i>
                <i class="fas fa-at" style="padding: 12px 62px;"></i>
            </div>
        </div>
      
    </form>
</div>
<div class ="col-md-3" >
    
</div>

</body>
</html>