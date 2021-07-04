<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

                if(isset($_COOKIE['qty1']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty1=$_COOKIE['qty1'];
                    $nktotal=1050*$qty1;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p01','New York Cheesecake',".$qty1.",".$nktotal.")";
                    $result=$mysqli->query($sql);
                }    
                
                if(isset($_COOKIE['qty2']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty2=$_COOKIE['qty2'];
                    $ortotal=1200*$qty2;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p02','Oreo Cheesecake',".$qty2.",".$ortotal.")";
                    $result=$mysqli->query($sql);
                }
                
                if(isset($_COOKIE['qty3']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty3=$_COOKIE['qty3'];
                    $batotal=1200*$qty3;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p03','Baileys Cheesecake',".$qty3.",".$batotal.")";
                    $result=$mysqli->query($sql);
                }
                
                if(isset($_COOKIE['qty4']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty4=$_COOKIE['qty4'];
                    $yutotal=1250*$qty4;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p04','Dear Princess',".$qty4.",".$yutotal.")";
                    $result=$mysqli->query($sql);
                }

                
                if(isset($_COOKIE['qty5']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty5=$_COOKIE['qty5'];
                    $latotal=1200*$qty5;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p05','Lady Pink',".$qty5.",".$latotal.")";
                    $result=$mysqli->query($sql);
                }
                
                if(isset($_COOKIE['qty6']))
                {
                    $name=$_COOKIE['name'];
                    $mysqli=new mysqli("localhost","root","","productcartdb");
                    $mysqli->query("SET NAMES 'UTF8'");
                    $qty6=$_COOKIE['qty6'];
                    $chtotal=1200*$qty6;
                    $sql="insert into cart3(cusname,pid,pname,qty,total)values('".$name."','p06','Chocolate Birthdaycake',".$qty6.",".$chtotal.")";
                    $result=$mysqli->query($sql);
                }
        
        ?>
        <h4>THANKS FOR YOUR ORDER</h4>
        <button type="button" class="btn btn-warning" onclick="fun1()">Go Home</button>
        <script>
              function fun1()
              {
                  document.cookie="name="  + ";max-age=-3600;path=/";
                  document.cookie="qty1="  + ";max-age=-3600;path=/";
                  document.cookie="qty2="  + ";max-age=-3600;path=/";
                  document.cookie="qty3="  + ";max-age=-3600;path=/";
                  document.cookie="qty4="  + ";max-age=-3600;path=/";
                  document.cookie="qty5="  + ";max-age=-3600;path=/";
                  document.cookie="qty6="  + ";max-age=-3600;path=/";
                  location.href='index.php';
              }
          </script>
    </body>
</html>
