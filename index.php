<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="rwd.css" rel="stylesheet">
    
    
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
        #carouselExampleControls img
        {
            width: 100% !important; 
        }
        footer{
             font-size: 0.8rem;
             text-align: center;
             background-color: #eeeeee;
             color:gray;  
             width: 100%;
             padding: 8px;
             left: 0px;
             bottom: 0px;
          }
          
          .container button
          {
              margin-bottom: 50px;
          }
          
          .qty
          {
              margin-bottom: 10px;
          }
          
          #a123
          {
              margin-bottom: 30px;
          }
          .card-img-top img
          {
              width: 100% !important;
          }

    </style>
    <script>
 
  var putItThere = null;
  var chasm = screen.availWidth;
  var mount = screen.availHeight;
  function openwindow() {
   var w = 500;//視窗的寬
   var h = 500;//視窗的高
   var popf = "line.php";
    putItThere = window.open(popf,'posB','width=' + w + ',height=' + h + ',left=' + ((chasm - w - 10) * .5) + ',top=' + ((mount - h - 30) * .5));
    if (putItThere.blur) putItThere.focus();
  }

</script>
    </head>
    <body>

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
            
            <!-- LINE Button -->
           <div onclick="openwindow()"><img src="icon.png" width="40" height="40"/></div>

            
            &nbsp;
            <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '211405947337130',
      cookie     : true,
      xfbml      : true,
      version    : 'v10.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
 
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v10.0&appId=211405947337130&autoLogAppEvents=1" 
nonce="Sa6hljrh"></script>
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
<script>
      function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
            &nbsp;
            <!-- 購物袋 -->
            <button type="button" class="btn btn-outline-warning" onclick="fun1()">
            <i class="bi bi-bag-fill">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
            </svg>
            </i>
        </button>
            &nbsp;
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
        

        
<!-- 形象廣告輪播區 -->     

        <!-- 指示器 -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" col-">
            
            <!-- 圖片區 -->
          <div class="carousel-inner">
              <!-- 第一張 -->
            <div class="carousel-item active">
                <img src="cheesecake1.jpg" class="d-block" alt="...">
            </div>
              <!-- 第二張 -->
            <div class="carousel-item">
              <img src="cheesecake2.jpg" class="d-block " alt="...">
            </div>
              <!-- 第三張 -->
            <div class="carousel-item">
              <img src="cheesecake3.jpg" class="d-block" alt="...">
            </div>
              
          </div>
            
            <!-- 上一張箭頭 -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
            <!-- 下一張箭頭 -->
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
        <p>

<!-- 內容區 -->      
        <form id="f1" name="f1" method="post" action="index2.php" > 
        <!-- Cheesecake -->  
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h4>CheeseCake </h4>
            </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-4">
                  <div class="card" style="width:100%;">
                      <a href="nk.html"><img src="newyork.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title"> New York Cheesecake</h5>
                      <p class="card-text">$1,050</p>
                    </div>
                  </div><br>
                  Qty:<input type='number' min="0" max="100" step="1"  id="qty1" name="qty1">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn1" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
                  
              </div>
              
              <div class="col-12 col-md-4">
                  <div class="card" style="width:100%;">
                    <a href="oreo.html"><img src="oreo.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title"> Oreo-Cheesecake</h5>
                      <p class="card-text">$1,200</p>
                    </div>
                  </div><br>
                   Qty:<input type='number' min="0" max="100" step="1"  id="qty2" name="qty2">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn2" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
              </div>
              
              <div class="col-12 col-md-4">
                  <div class="card" style="width:100%;">
                    <a href="bal.html"><img src="berry1.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title">Baileys Cheesecake</h5>
                      <p class="card-text">$1,200</p>
                    </div>
                  </div><br>
                  Qty:<input type='number' min="0" max="100" step="1"  id="qty3" name="qty3">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn3" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
              </div>
            </div>
          </div>
        <p>
        
        
        <!-- Birthdaycake -->  
        <div class="container">
          <div class="row">
            <div class="col-12">
                <h4>Birthday Cake </h4>
            </div>
              
              <div class="col-12 col-md-4" id="a123">
                  <div class="card" style="width:100%;">
                      <a href="dp.html"><img src="cake1.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title">Dear Princess</h5>
                      <p class="card-text">$1,250</p>
                    </div>
                  </div><br>
                  Qty:<input type='number' min="0" max="100" step="1"  id="qty4" name="qty4">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn4" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
              </div>
              
              <div class="col-12 col-md-4">
                  <div class="card" style="width:100%;">
                      <a href="pink.html"><img src="cake2.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title">Lady Pink</h5>
                      <p class="card-text">$1,200</p>
                    </div>
                  </div><br>
                  Qty:<input type='number' min="0" max="100" step="1"  id="qty5" name="qty5">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn5" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
              </div>
              
              <div class="col-12 col-md-4">
                  <div class="card" style="width:100%;">
                      <a href="choco.html"><img src="cake3.jpg" class="card-img-top"></a>
                    <div class="card-body">
                      <h5 class="card-title">Chocolate Birthdaycake</h5>
                      <p class="card-text">$1,200</p>
                    </div>
                  </div><br>
                  Qty:<input type='number' min="0" max="100" step="1"  id="qty6" name="qty6">
                  <p><p>
                  <button type="button" class="btn btn-outline-warning" id="btn6" onclick="add(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                          Add to Cart 
                  </button>
              </div>
              </div>
          </div>
        </form>    
        
        

        
        
<!--Messenger 洽談外掛程式 -->
       <div id="fb-root"></div>
       <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
       <!-- Your 洽談外掛程式 -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="102124831985974">
      </div>
       
               <!-- 載入FB SDK -->
        <script src="fb.js"></script>
        
        <!-- 載入JS SDK 非同步的來源網址 -->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js"></script>
        
<!-- 頁尾區 -->
<footer>COPYRIGHT © 2015 - 2021 Cheese Factory | PRIVACY POLICY</footer>
        
                <script language="javascript" >
                    
                     function add(obj){
                       var id=obj.id;
                       var no=id.substring(3);
                       var pid="qty" + no;
                       var pvalue=document.getElementById(pid).value;
                       document.cookie=pid+ "=" + pvalue  + ";max-age=3600;path=/";
                       document.getElementById(pid).value=" ";
                       alert('已加入購物車');
                       
                   }
                       
                function fun1()
                {
                  location.href='cart.php';
                }

    </script>   

    </body>
</html>
