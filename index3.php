<?php
if (!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
<head>

    <title i18n-content="title">uni-SCHOOL</title>
<link rel="stylesheet" href="../../fhcss.css">
<link href="css/materialize.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="css">
.titlelogo{
    display:none;
}
body{
    overflow:hidden;
}
input[type=email], input[type=password] {
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:1px solid whitesmoke;
    width:90%;
    position:relative;
    top:120px;
    left:15px;
    margin-top:20px;
    padding:5px;
    color:black;
    transition:0.5s cubic-bezier(0,-0.29, 0.05,-0.29) out;
    }
input[type=submit]{
    position:absolute;
    bottom:3%;
    left:38%;
    height:10%;
    border:none;
    background-color:transparent;
    }
input[type=email]:focus, input[type=password]:focus{
    outline:none;
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:3px solid #ff9800;
    }

.logform{
    background-color:white;
    position:absolute;
    top:30%;
    left:40%;
    height:36%;
    width:300px;
    padding:20px;
    border:none;
    transition:1s cubic-bezier(0.6, -0.28, 0.74, 0.05) all;
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
    top:20px;
    left:35%;
    border-radius:100%;
    height:100px;
    width:100px;
    }
    .a{
color:black;
position:absolute;
bottom:30%;
left:45.3%;
text-decoration:none;
transition:2s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
}
.logo{
    background-color:transparent;
    position:absolute;
    top:5%;
    left:40%;
    transition:1.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
}
.error{
    height:100%;
    width:100%;
    position:absolute;
    left:0px;
    top:0px;
    display:none;
}
</style>
<style>
@media (max-width: 1024px) {
  .logform {
    height: 39%;
    width:300px;
    left:35%;
  }
  .rotatedevice{
      left:25%;
      }
      .a{
          left:44.7%;
          bottom:25%;
      }
      .logo{
          height:24%;
          width:25%;
          left:38%;
      }
}
@media (max-width:1020px) {
      .error{
          display:block;
          height:100%;
          width:100%;
      }
}

</style>
</head>
<body i18n-content="body" style="background-color:white;" onload="readDeviceOrientation()">
<img class="logo" alt="img" src="logo.png">
<div class="ut-card ut-card-4 ut-red ut-animate-top" id="warbox" style="display:none;position:absolute;width:50%;left:25%;top:2%;height:6%;border:none;">
<center>
<p>Sorry, The username or password you entered dosen't match.Please recheck them.</p>
</center>
</div>
<div class="orchng ut-card ut-blue" style="display:none;" id="body2">
<p>Please rotate your device anticlockwise till its in landscape mode.If you are already in landscape mode try refreshing the page. </p>
<img id="img" class="rotatedevice" src="../../iphone5.png">
</div>
<div class="logform ut-third ut-card ut-card-8" id="logform">
<form novalidate="false" onsubmit="return form_check()" method="post" action="<?=$_SERVER['PHP_SELF']?>" >
<input type="hidden" name="varname" value="<?php echo "{$my}" ?>">
<input type="email" id="username" name="username" class="ut-card" placeholder="Username" required>
<input type="password" id="password" class="ut-card" name="password" placeholder="Password" required>
<input type="submit" value="Continue" name="submit" class="ut-text-green" id="sibtn">
<img src="http://uni-tap.com/avatar1.png" id="pp" name="pp">
<div style="display:none;" class="ut-card  ut-card-2 ut-animate-zoom req" id="req">
<p>It is required.</p>
</div>
</form>
</div>
<a href="#" onclick="signupbox()" class="a">Create Account</a>
<div class="ut-card ut-card-2" id="signupbox" style="background-color:#f1f1f1f1;border:none;position:absolute;top:0px;right:-35px;width:0;height:100%;transition:0.5s ;">
<p class="ut-card-2"  onclick="removesignupbox()" style="position:absolute;left:-25px;top:-15px;height:25px;width:25px;background-color:white;text-align:center;">X</p>
<iframe src="../../signup.php" style="border:none;height:100%;width:100%;position:absolute;top:0px;left:0px;"></iframe>
</div>
<div id="error" class="error ut-card ut-red">
<p style="position:absolute;top:40%;left:4%;">This page is incompatible with your device's screen size. Use another device with a screen size of 7" or above or try tilting your device in Landscape mode or refresh the page.</p>
</div>
<?php

}else {
  ob_start();
  session_start();
  $my = md5(session_id());
  $mysqli = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($mysqli,"uni-tap");
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
  // Function to get the client ip addres
  // This will print user's real IP Address
  // does't matter if user using proxy or not.

  //$ip = $_SERVER['REMOTE_ADDR'];

	$username = $_POST['username'];
	$password = $_POST['password'];
  $shown_pass = md5($password);
  $shown_name = md5($username);

	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<script>window.location.replace('../../');</script>";
  }else {
      echo "success";
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = $username;
     echo "<script>window.location.replace('../../usr/u/0/?session={$my} and reg-id={$shown_name} reg-key={$shown_pass}');</script>";
   }
}


?>
<script>
var usr = document.getElementById("username");
var pass = document.getElementById("password");
var btn = document.getElementById("sibtn");

function form_check() {
       if(usr.vaue == "") {
     //document.getElementById("warbox").style.display = "block";
       }else{
        return true;
    }
    return false;
        }
</script>
</body>
<script>
var p = document.getElementById("p");
var body2 = document.getElementById("body2");
function winsize() {
    setTimeout(winsize,1);
    var w = window.innerWidth;
    var h = window.innerHeight;
    p.innerHTML = w + "," + h;
}
</script>
<script>
var rotated = false;
function readDeviceOrientation() {
    document.getElementById("username").focus;
if(window.innerHeight > window.innerWidth){
    body2.style.display = "block";
    var phone = document.getElementById('img'),
        deg = rotated ? 0 : -90;

    img.style.webkitTransform = 'rotate('+deg+'deg)';
    img.style.mozTransform    = 'rotate('+deg+'deg)';
    img.style.msTransform     = 'rotate('+deg+'deg)';
    img.style.oTransform      = 'rotate('+deg+'deg)';
    img.style.transform       = 'rotate('+deg+'deg)';
    rotated = !rotated;
}else{
    body2.style.display = "none";
    }
setTimeout(readDeviceOrientation2,1);
}
function readDeviceOrientation2() {
    if(window.innerwidth > window.innerheight){
    body2.style.display = "none";
}
setTimeout(readDeviceOrientation,1);
    }
  function signupbox() {
  //document.getElementById("signupbox").style.display = "block";
  document.getElementById("signupbox").style.width = "35%";
  }
function removesignupbox() {
    //document.getElementById("signupbox").style.display = "none";
    document.getElementById("signupbox").style.width = "0px";
    }
</script>
<script>
(function (global) {

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };
    }

})(window);
</script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
</html>
