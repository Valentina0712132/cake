<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="rwd.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <title>Cheesecake Factory</title>
    <style>
        nav
        {
             top:0px;
             left: 0px;
             position:  fixed;
        }
        .navbar
        {
            background-color: transparent !important;
        }
        nav a:hover
        {
            color: Gold !important;
        }
        nav .nav-item active
        {
            background-color: transparent !important;
        }
        .dropdown-menu a:hover
        {
            background-color: LightYellow !important;
            color: black !important;
            font-size: 18px;
        }
        nav
        {
            top: 0px;
            left: 0px;
            position: fixed;
        }
        footer{
             font-size: 0.8rem;
             text-align: center;
             background-color: #eeeeee;
             color:gray;  
             width: 100%;
             padding: 8px;
          }
          #tal
          {
              margin-bottom: 30px;
          }
          
          #putdb
          {
              margin-bottom: 50px;
          }

    </style>
    </head>
    <body>

        <?php
        $total=0;
        if(isset($_COOKIE['qty1']))
        {
            
            $qty1=$_COOKIE['qty1'];
            $nktotal=$qty1*1050;
            $total=$total+$nktotal;
        }
        ?>
        <?php
        if(isset($_COOKIE['qty2']))
        {
            $qty2=$_COOKIE['qty2'];
            $ortotal=$qty2*1200;
            $total=$total+$ortotal;
        }
        ?>
        
        <?php
        if(isset($_COOKIE['qty3']))
        {
            $qty3=$_COOKIE['qty3'];
            $batotal=$qty3*1200;
            $total=$total+$batotal;
        }
        ?>
        
        <?php
        if(isset($_COOKIE['qty4']))
        {
            $qty4=$_COOKIE['qty4'];
            $yutotal=$qty4*1250;
            $total=$total+$yutotal;
        }
        
        ?>
        
        <?php
        if(isset($_COOKIE['qty5']))
        {
            $qty5=$_COOKIE['qty5'];
            $latotal=$qty5*1100;
            $total=$total+$latotal;
        }
        ?>
        
        <?php
        if(isset($_COOKIE['qty6']))
        {
            $qty6=$_COOKIE['qty6'];
            $chtotal=$qty6*1200;
            $total=$total+$chtotal;
        }
        ?>


        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>        
    <!--導覽區 -->
    
        <!--企業、組織的品牌宣示 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CheeseCake Factory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- 三明治 -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
            
            <!-- 下拉式選單 -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DESSERT
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">ALL</a>
                <a class="dropdown-item" href="#">CheeseCake</a>
                <a class="dropdown-item" href="#">BirthdayCake</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Hand-made cookies</a>
              </div>
            </li>
          </ul>
            
            <!-- The JS SDK Login Button -->
                    
                    <div class="fb-login-button" data-width="" data-size="small" data-button-type="login_with" 
                         data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="true"></div>
                    
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" 
                    src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v10.0" nonce="6TPoo5JV"></script>

            <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                FACEBOOK LOGIN
            </fb:login-button>
            
            <!-- 購物袋 -->
            <button type="button" class="btn btn-outline-warning" onclick="fun1()">
            <i class="bi bi-bag-fill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
            </svg>
            </i>
        </button>
            
            <!-- 搜尋表單區 -->
            <form class="form-inline my-2 my-lg-0" action="https://www.google.com/search" method="get" target="_blank">
                <input class="form-control mr-sm-2" type="search" placeholder="Google Search" aria-label="Search" name="q">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btnk" >
                 <i class="bi bi-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                 </i>  
                </button>
          </form>
        </div>
      </nav>
    
        
<!-- 購物車 -->        
      <!-- New York Cheesecake -->  
      
<table class="table">
  <thead>
    <tr>
        <th scope='col' colspan='4' bgcolor='beige' width="150px"></th>
      <th scope='col' colspan='4' bgcolor='beige' width="150px">Your Order</th>
      <th scope='col' colspan='4' bgcolor='beige' width="30px">Your Total: $<?php echo $total?></th>
    </tr>
  </thead>
</table>  

<?php

    if(isset($_COOKIE['qty1']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='newyork.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p01<p>";
        echo "Product Name:&nbsp;New York Cheesecake";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty1']."<p>";
        echo "Price:&nbsp;$1050";
        echo "<h6>Total:&nbsp;".$nktotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
       
    }
    if(isset($_COOKIE['qty2']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='oreo.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p02<p>";
        echo "Product Name:&nbsp;Oreo Cheesecake";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty2']."<p>";
        echo "Price:&nbsp;$1200";
        echo "<h6>Total:&nbsp;".$ortotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    
    }
    if(isset($_COOKIE['qty3']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='bal.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p03<p>";
        echo "Product Name:&nbsp;Baileys Cheesecake";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty3']."<p>";
        echo "Price:&nbsp;$1200";
        echo "<h6>Total:&nbsp;".$batotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    
    }
    if(isset($_COOKIE['qty4']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='cake1.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p04<p>";
        echo "Product Name:&nbsp;Dear Princess";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty4']."<p>";
        echo "Price:&nbsp;$1250";
        echo "<h6>Total:&nbsp;".$yutotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
 
    }
    if(isset($_COOKIE['qty5']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='cake2.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p05<p>";
        echo "Product Name:&nbsp;Lady Pink";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty5']."<p>";
        echo "Price:&nbsp;$1100";
        echo "<h6>Total:&nbsp;".$latotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }
    if(isset($_COOKIE['qty6']))
    {
        echo "<table class='table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'></th>";
        echo "<td>";
        echo "<img src='cake3.jpg' width='150' height='150'>";
        echo "</td>";
        echo "<td width='600px'>";
        echo "Product Id:&nbsp;p06<p>";
        echo "Product Name:&nbsp;Chocolate Birthdaycake";
        echo "</td>";
        echo "<td>";
        echo "Quantity:&nbsp;";echo $_COOKIE['qty6']."<p>";
        echo "Price:&nbsp;$1200";
        echo "<h6>Total:&nbsp;".$chtotal."</h6>";
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>"; 
    }

?>
<table class="table">
  <thead>
    <tr>
        <th scope='col' colspan='4' bgcolor='beige' width="150px"></th>
      <th scope='col' colspan='4' bgcolor='beige' width="150px">Submit Order</th>
    </tr>
  </thead>
</table>   
     &nbsp;&nbsp;Your name:&nbsp;<input type="text" id="name" name="name" size="20">
    <button type="button" id="confirm" name="confirm">Confirm</button><p>
    &nbsp;&nbsp;Order Total: $<?php echo $total?><p>
    &nbsp;&nbsp;<button type="button" class="btn btn-warning" id="putdb" name="putdb" onclick="fun1()">Submit Order</button>
   

          <script>
             const confirm=document.getElementById('confirm');
             const name=document.getElementById('name');            
                confirm.onclick=function(){
                    document.cookie="name=" + name.value + ";max-age=3600;path=/";
                    document.getElementById('name').value=" ";
                    alert('姓名已紀錄!')
                };
                function fun1()
                {
                    location.href='confirm.php';
                }
                

          </script>
 
        <!-- 頁尾區 -->
        <footer>COPYRIGHT © 2015 - 2021 Cheese Factory | PRIVACY POLICY</footer>
        
    </body>
</html>
