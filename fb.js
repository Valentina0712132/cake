function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('~~~statusChangeCallback~~~');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   //判斷是否已經登入FB或本網站
      testAPI(); //已登入則呼叫API()函數
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = '請用FB帳號登入此站';
    }
  }

//3.檢查登入狀態的函數
  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }

//1.設訂初始化 FB JS SDK
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '211405947337130',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v10.0'           // Use this Graph API version for this call.
    });

//2.取得登入的狀態
    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
 //5.已登入處理
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
     console.log('歡迎~我們將截取您的資料...');
    //FB.api('/me', function(response) {
    //FB.api('/me',{fields:'id,name,email,last_name'}, function(response) {
    FB.api('/me?fields=id,name,email,last_name,picture', function(response) {
      console.log(response);
      console.log('登入成功: ' + response.name);
      /*document.getElementById('status').innerHTML =response.name+'歡迎蒞臨本站';
      document.getElementById('demo1').innerHTML ='您的id:'+response.id;
      document.getElementById('demo2').innerHTML ='您的姓名:'+response.name;
      document.getElementById('demo3').innerHTML ='您的信箱:'+response.email;
      document.getElementById('demo4').innerHTML ='您的姓氏:'+response.last_name;*/
     
        //將大頭貼新增至頁面
        var image= document.createElement('img');  //新增圖片<img>標籤
        image.src=response.picture.data.url;   //將大頭貼網址指定給<img>的來源
        document.querySelector('#fbimg').appendChild(image);   //將圖片置於<div>內
       
        document.getElementById('fbimg').style.backgroundColor="purple";
    });
  }

