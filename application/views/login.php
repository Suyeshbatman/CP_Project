<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = '';
   $error_page = basename(__FILE__);
   $database = './usersdb.php';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $fullname = '';
   $session_timeout = 600;
   if(filesize($database) > 0)
   {
      $items = file($database, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach($items as $line)
      {
         list($username, $password, $email, $name, $active) = explode('|', trim($line));
         if ($username == $_POST['username'] && $active != "0" && $password == $crypt_pass)
         {
            $found = true;
            $fullname = $name;
         }
      }
   }
   if($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      if (session_id() == "")
      {
         session_start();
      }
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['fullname'] = $fullname;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
<link href="login.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wb.slideshow.min.js"></script>
<script>
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 2000
   });
});
</script>
</head>
<body>
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:130px;z-index:10;">
<div id="SlideShow1" style="position:absolute;left:172px;top:0px;width:324px;height:130px;z-index:0;">
<img class="image" src="images/2.jpg" alt="" title="">
<img class="image" src="images/restaurant1.jpg" style="display:none;" alt="" title="">
</div>
<div id="NavigationBar1" style="position:absolute;left:576px;top:80px;width:246px;height:30px;z-index:1;">
<ul class="navbar">
<li id="NavigationBar1_item0"><a href=""><img alt="" src="images/img0002_over.png" class="hover"><span><img alt="" src="images/img0002.png"></span></a></li>
<li id="NavigationBar1_item1"><a href=""><img alt="" src="images/img0003_over.png" class="hover"><span><img alt="" src="images/img0003.png"></span></a></li>
<li id="NavigationBar1_item2"><a href=""><img alt="" src="images/img0004_over.png" class="hover"><span><img alt="" src="images/img0004.png"></span></a></li>
<li id="NavigationBar1_item3"><a href=""><img alt="" src="images/img0005_over.png" class="hover"><span><img alt="" src="images/img0005.png"></span></a></li>
</ul>
</div>
<div id="wb_Text1" style="position:absolute;left:576px;top:8px;width:239px;height:52px;z-index:2;">
<span style="color:#FFA07A;font-family:Impact;font-size:21px;">Online Restaurant Management System</span></div>
<div id="wb_Image1" style="position:absolute;left:16px;top:28px;width:147px;height:83px;z-index:3;">
<img src="images/Capture.PNG" id="Image1" alt=""></div>
</div>
<a href="http://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250"></a>
<div id="wb_Login1" style="position:absolute;left:576px;top:143px;width:193px;height:214px;z-index:6;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Log In</td>
</tr>
<tr>
   <td class="label"><label for="username">User Name</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Log In" id="login"></td>
</tr>
</table>
</form>
</div>
<div id="wb_TextArt1" style="position:absolute;left:805px;top:143px;width:151px;height:69px;z-index:7;">
<a href=""><img class="hover" src="images/img0001_hover.png" alt="Not Registered Yet!!" title="Not Registered Yet!!" style="border-width:0;width:151px;height:69px;"><span><img src="images/img0001.png" id="TextArt1" alt="Not Registered Yet!!" title="Not Registered Yet!!" style="width:151px;height:69px;"></span></a></div>
<input type="submit" id="Button1" name="Register" value="Register Now" style="position:absolute;left:805px;top:282px;width:167px;height:43px;z-index:8;">
<div id="wb_Text2" style="position:absolute;left:26px;top:151px;width:482px;height:352px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Short Description :<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></span></div>
</body>
</html>