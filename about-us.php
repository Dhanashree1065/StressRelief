<?php 
include('navbar.php'); 
$page_title = 'About Us - Stress Relief';
?>

<!DOCTYPE html>
<html>
<head><title>Title of the document</title>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
  <style>
    .box-wrap{justify-content: center;margin: 0%;margin-left: 10%;width: 93%;}
    .box{padding:14px;margin:2%;background:white;width:30%;border:1px solid #d6d6d6;box-shadow:0 2px 3px 0px rgba(0,0,0,0.25);border-radius:3px;transition:.2s all; }
    .box-wrap:hover .box{transform: scale(.98);box-shadow:none;}
    .box-wrap:hover .box:hover{transform:scale(1);box-shadow:0 8px 20px 0px rgba(0,0,0,0.125);}
    .parent {position: relative;top: 20px;left: 133px}
    .image1 {position: relative;top: 187px;left: 569px;width: 27%;z-index: 3;border: 1px;box-shadow: 3px 1px 13px 3px grey;}
    .image2 {position: relative;top: 30px;left: 530px;border: 1px ;width: 25%;z-index: 2;box-shadow: 3px 1px 13px 3px grey;}
    .container{margin-top:-246px;margin-left:-45px;}
    .heading{background-color:#30a5ff;border: 1px solid black;border: none;margin-left: -6px;margin-top: -41px;margin-right: -10px;font-family:Times New Roman;color:white;font-size:35px;padding: 44px 51px 1px 101px;text-align:centre;}
  </style>
</head>
<body>
  <div class="heading">
  <h2 style="text-align:center;">Stress Relief Enable People Make Smart Decisions About their Money Everyday.</h2>
  </div>
  <div class="parent">
    <img class="image1"  src="images/about1.jpg" />
    <img class="image2"  src="images/about.jpg" />
  </div>
  <div class="container">
    <div class="box-wrap">
      <div class="box">
        <h4>Simple money tracker</h4>
        <p>It takes seconds to record daily transactions. Put them into clear and visualized categories such as Expense: Food, Shopping or Income: Salary, Gift.
      </div>
    </div>
    <div class="box-wrap">
      <div class="box">
        <h4>Painless Budgeting</h4>
        <p>Set budgets that are easy to stick to, based on your own spending habits. You’re one step closer to that stuff you want to buy.
      </div>
    </div>
    <div class="box-wrap">
      <div class="box">
        <h4>The whole picture in one place</h4>
        <p>One report to give a clear view on your spending patterns. Understand where your money comes and goes with easy-to-read graphs.</p>
      </div>
    </div>
  </div>
</body>
</html>