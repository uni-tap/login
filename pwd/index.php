<?php
$ip = $_SERVER['REMOTE_ADDR'];
if (!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html ng-app>
<head>
<title >uni-SCHOOL</title>
<link rel="stylesheet" href="../../fhcss.css">
<link rel="stylesheet" href="input.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript">
    var queryString = new Array();
    $(function () {
        if (queryString.length == 0) {
            if (window.location.search.split('?').length > 1) {
                var params = window.location.search.split('?')[1].split('&');
                for (var i = 0; i < params.length; i++) {
                    var key = params[i].split('=')[0];
                    var value = decodeURIComponent(params[i].split('=')[1]);
                    queryString[key] = value;
                }
            }
        }
        if (queryString["username"] != null) {
            //var data = "Hi";
            var data = " " + queryString["username"];
            $("#K3M451C").html(data);
            $("#user2").val(data);
        }
    });
    function validateForm() {
        var x = document.forms["K2C498B"]["pwd"].value;
        if (x == "") {
            //alert("Name must be filled out");
            document.getElementById("username").focus();
            document.getElementById('21R').className = " red";
            document.getElementById('394GA7').className += " label";
            document.getElementById('45Z801').style.display = "block";
            document.getElementById('LM390CN').style.opacity = '0';
            return false;
        }else{
          document.getElementById('LM390CN').style.opacity = '1';
          //return false;
          //return false;
          setTimeout(1000, transfer());
        }
    }
</script>
<style>
.titlelogo{
    display:none;
}
body{
    overflow:hidden;
    background-color:whitesmoke;
    font-family: Arial, sans-serif;
}
input[type=text], input[type=password] {
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:1px solid whitesmoke;
    width:87%;
    position:relative;
    margin-top:20px;
    padding:5px;
    color:black;
    background: transparent;
    transition:0.5s cubic-bezier(0,-0.29, 0.05,-0.29) out;
    }
input[type=submit]{
    position:relative;
    float:right;
    line-height: 20px;
    height: 36px;
    width:88px;
    min-width: 4em;
    font-family: Arial, sans-serif;
    cursor: pointer;
    border-radius:3px;
    border: 1px solid transparent;
    color: #fff;
    text-shadow: 0 1px rgba(0,0,0,0.1);
    background-color: #4d90fe;
    box-sizing: border-box;
    margin: 8px;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    text-transform: uppercase;
    -webkit-tap-highlight-color: transparent;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
    }
input[type=text]:focus, input[type=password]:focus{
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
  }

.logform{
    flex-shrink: 0;
    background: #fff;
    margin: 0 auto;
    position:absolute;
    top:225px;
    bottom:225px;
    left:37%;
    height:500px;
    width:450px;
    padding: 24px 24px 36px;
    border:none;
    box-sizing: border-box;
    max-width: 100%;
    flex-direction: column;
    transition:1s cubic-bezier(0.6, -0.28, 0.74, 0.05) all;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.3), 0 0 0 0px rgba(0,0,0,0.08) !important;
}

form{
    }
::-moz-selection { /* Code for Firefox */
    background: #4CAF50;
}

::selection {
   background: #4CAF50;
   color:white;
}
::-webkit-input-placeholder{
    color:gray;
    }
    ::-webkit-overflow{
        background-color:transparent;
        width:100px;
    }
::-moz-input-placeholder{
    color:gray;
    }
:-ms-input-placeholder{
    color:gray;
    }
.req{
    height:50px;
    width:100px;
    border-bottom:none;
    border-right:none;
    border-left:none;
    border-top:5px solid red;
    z-index:10;
    background-color:#bfbfbf;
    }

.orchng{
    position:absolute;
    top:0px;
    left:0px;
    z-index:2;
    height:100%;
    width:100%;
    }
.rotatedevice{
    position:absolute;
    top:40%;
    left:45%;
    transition:0.6s;
transform: rotate(-90deg);
    }
#pp{
    position:absolute;
    top: 99px;
    left: 77%;
    border-radius:100%;
    height:50px;
    width:50px;
    }
    .a{
      color: #4285f4;
      cursor: pointer;
      float: left;
      line-height: 36px;
      margin-top: -6px;
      padding: 6px 0;
      position: relative;
      outline: none;
      text-decoration:none;
}
.logo{
    background-color:transparent;
    position:absolute;
    top:27%;
    left:38%;
    transition:1.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
    z-index:1;
}
.error{
    height:100%;
    width:100%;
    position:absolute;
    left:0px;
    top:0px;
    display:none;
    z-index:2;
}
.btmbar{
  width:100%;
  height:5%;
  line-height: 40px;
  position:absolute;
  bottom:0px;
  left:0px;
  padding-left:20px;
  padding-top:5px;
  background-color:white;
  border:none;
}
.subbox{
  position:absolute;
  margin-top: 32px;
  min-height: 48px;
  border:none;
  width:90%;
  bottom:200px;
}
.heading{
  padding-bottom: 0;
  padding-top: 47px;
  padding-left:13px;
  font-size: 24px;
  font-weight: 400;
  line-height: 32px;
  margin: 0;
}
.BUfzDd{
  position: absolute;
  top:0px;
  left:0px;
  width:100%;
  height:100%;
}
.h1289CM{
      padding-bottom: 0;
      padding-top: 47px;
      padding-left: 40px;
      font-size: 24px;
      font-weight: 400;
      line-height: 32px;
      margin-top: -80px;
      text-transform: uppercase;
}
</style>
<style>
@media (max-width: 1024px) {
  .rotatedevice{
      left:25%;
    }
  #pp{
    top: 68px;
  }
  #signupbox{
    width:-50px !important;
  }
}
@media (max-width:601px) {
      /*.error{
          display:block;
          height:100%;
          width:100%;
      }*/
      .logform{
        height:100%;
        width:100%;
        top:0px;
        left:0px;
      }
      .logo{
        top:5%;
        left:4%;
      }
      .group{
        bottom:431px;
      }
      .heading{
        padding-left:7px
      }
      .subbox{
        bottom:362px;
      }
}
</style>
</head>
<body style="background-color:whitesmoke;" onload="readDeviceOrientation()">
  <svg class="BUfzDd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 810" preserveAspectRatio="xMinYMin slice" aria-hidden="true">
    <path fill="#efefee" d="M592.66 0c-15 64.092-30.7 125.285-46.598 183.777C634.056 325.56 748.348 550.932 819.642 809.5h419.672C1184.518 593.727 1083.124 290.064 902.637 0H592.66z"></path>
    <path fill="#f6f6f6" d="M545.962 183.777c-53.796 196.576-111.592 361.156-163.49 490.74 11.7 44.494 22.8 89.49 33.1 134.883h404.07c-71.294-258.468-185.586-483.84-273.68-625.623z"></path>
    <path fill="#f7f7f7" d="M153.89 0c74.094 180.678 161.088 417.448 228.483 674.517C449.67 506.337 527.063 279.465 592.56 0H153.89z"></path>
    <path fill="#fbfbfc" d="M153.89 0H0v809.5h415.57C345.477 500.938 240.884 211.874 153.89 0z"></path>
    <path fill="#ebebec" d="M1144.22 501.538c52.596-134.583 101.492-290.964 134.09-463.343 1.2-6.1 2.3-12.298 3.4-18.497 0-.2.1-.4.1-.6 1.1-6.3 2.3-12.7 3.4-19.098H902.536c105.293 169.28 183.688 343.158 241.684 501.638v-.1z"></path>
    <path fill="#e1e1e1" d="M1285.31 0c-2.2 12.798-4.5 25.597-6.9 38.195C1321.507 86.39 1379.603 158.98 1440 257.168V0h-154.69z"></path>
    <path fill="#e7e7e7" d="M1278.31,38.196C1245.81,209.874 1197.22,365.556 1144.82,499.838L1144.82,503.638C1185.82,615.924 1216.41,720.211 1239.11,809.6L1439.7,810L1439.7,256.768C1379.4,158.78 1321.41,86.288 1278.31,38.195L1278.31,38.196z"></path>
  </svg>
<img class="logo" alt="img" src="../../splashscreen.png" height="35" width="100">
<div class="ut-card ut-card-4 ut-red ut-animate-top" id="warbox" style="display:none;position:absolute;width:50%;left:25%;top:2%;height:6%;border:none;">
<center>
<p i>Sorry, The username or password you entered dosen't match.Please recheck them.</p>
</center>
</div>
<div class="orchng ut-card ut-blue" style="display:none;" id="body2">
<p>Please rotate your device anticlockwise till its in landscape mode.If you are already in landscape mode try refreshing the page. </p>
<img id="img" class="rotatedevice" src="../../iphone5.png">
</div>
<div class="logform ut-third ut-card" id="logform">
<form id="K2C498B" onsubmit="return validateForm()" action="index.php" method="post">
  <h1 id="K3M45OC" class="heading">Hi</h1>
  <h1 id="K3M451C"  class="h1289CM"></h1>
  <input id="user2" type="text" name="user2">
<div id="group1" class="group ut-animate-right">
<input type="password" autofocus="true" id="pwd" class="validate" required id="pwd" name="password">
<span class="bar"></span>
<label for="password">Password</label>
</div>
<div class = "subbox ut-card">
<input type="submit" value="Next" name="submit"  id="sibtn">
<a href="#" onclick="signupbox()"  class="a">Create Account</a>
</div>
<img src="http://uni-tap.com/avatar1.png" id="pp" name="pp">
<div style="display:none;" class="ut-card  ut-card-2 ut-animate-zoom req" id="req">
<p>It is required.</p>
</div>
</form>
</div>
<div class="ut-card ut-card-2" id="signupbox" style="background-color:#f1f1f1f1;border:none;position:absolute;top:0px;right:-35px;width:0;height:100%;transition:0.5s ;">
<p class="ut-card-2"  onclick="removesignupbox()" style="position:absolute;left:-25px;top:-15px;height:25px;width:25px;background-color:white;text-align:center;">X</p>
<iframe src="" style="border:none;height:100%;width:100%;position:absolute;top:0px;left:0px;"></iframe>
</div>
<div id="error" class="error ut-card ut-red">
<p style="position:absolute;top:40%;left:4%;">This page is incompatible with your device's screen size. Use another device with a screen size of 7" or above or try tilting your device in Landscape mode or refresh the page.</p>
</div>
<div id="btmbar" class="ut-card btmbar">
 <a style="color:gray;">About Us</a>
</div>
<?php

}else {
  ob_start();
  session_start();

  $password = $_POST['password'];
  $user = $_POST['user2'];

  $shown_name = md5($password);

  $my = md5(session_id());
  $mysqli = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($mysqli,"uni-tap");

	# check connection

	if ($mysqli->connect_errno) {
		echo "<script>window.location.replace('http://localhost/login/pwd');</script>";
		exit();
	}

	$sql = "SELECT * from users1 WHERE username = '$user' AND password = '$password' ";

	$result = $mysqli->query($sql);

	if (!$result->num_rows == 1) {
    return(false); 
}
  else {
  //  $_SESSION['valid'] = true;
  //  $_SESSION['timeout'] = time();
   echo "<script>window.location.replace('../../usr/u/0?');</script>";
   }
}
?>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
var usr = document.getElementById("username");
var pass = document.getElementById("password");
var btn = document.getElementById("sibtn");

function form_check() {
       if(usr.vaue == "") {
        return false;
       }else{
        return true;
    }
    return false;
        }
</script>
<script src="../../orientation.js"></script>
<script>
  function signupbox() {
  //document.getElementById("signupbox").style.display = "block";
  document.getElementById("signupbox").style.width = "35%";
  }
function removesignupbox() {
    //document.getElementById("signupbox").style.display = "none";
    document.getElementById("signupbox").style.width = "0px";
    }
function pass_show(){
  document.getElementById('group1').style.display = "none";
  document.getElementById('group2').style.display = "block";
}
</script>

</html>
