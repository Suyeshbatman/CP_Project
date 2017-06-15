<!DOCTYPE html>
<html>
<head>
	<title> Registration Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> </link>
		</head>
	<body>
	
		<div class="container">
			
			<img src="<?php echo base_url();?>assets/img/signup.png" width="49">
			<form action="<?php echo site_url('user/register') ?>" method="post">
				<div id="wb_Form1" style="position:absolute;left:111px;top:193px;width:418px;height:562px;z-index:26;">

<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
<label for="" id="Label1" style="position:absolute;left:25px;top:49px;width:103px;height:19px;line-height:19px;z-index:4;">User Type</label>
<select name="Usertype" size="1" id="Combobox1" style="position:absolute;left:181px;top:42px;width:176px;height:34px;z-index:5;">
<option>Admin</option>
<option>Customer</option>
</select>
<label for="" id="Label2" style="position:absolute;left:25px;top:93px;width:103px;height:16px;line-height:16px;z-index:6;">First Name</label>
<input type="text" id="Editbox1" style="position:absolute;left:182px;top:91px;width:165px;height:16px;line-height:16px;z-index:7;" name="FirstName" value="" maxlength="15" spellcheck="false" placeholder="Firstname">
<label for="" id="Label3" style="position:absolute;left:23px;top:143px;width:99px;height:16px;line-height:16px;z-index:8;">Last Name</label>
<input type="text" id="Editbox2" style="position:absolute;left:183px;top:141px;width:164px;height:16px;line-height:16px;z-index:9;" name="LastName" value="" maxlength="15" spellcheck="false" placeholder="LastName">
<label for="" id="Label4" style="position:absolute;left:26px;top:190px;width:94px;height:16px;line-height:16px;z-index:10;">Address</label>
<input type="text" id="Editbox3" style="position:absolute;left:183px;top:188px;width:164px;height:16px;line-height:16px;z-index:11;" name="Address" value="" maxlength="20" spellcheck="false" placeholder="Address">
<label for="" id="Label5" style="position:absolute;left:25px;top:232px;width:95px;height:16px;line-height:16px;z-index:12;">Contact No.</label>
<input type="number" id="Editbox4" style="position:absolute;left:183px;top:230px;width:164px;height:16px;line-height:16px;z-index:13;" name="Contact" value="" maxlength="10" spellcheck="false" placeholder="Number">
<label for="" id="Label6" style="position:absolute;left:26px;top:278px;width:94px;height:16px;line-height:16px;z-index:14;">Email</label>
<input type="email" id="Editbox5" style="position:absolute;left:181px;top:276px;width:166px;height:16px;line-height:16px;z-index:15;" name="Email" value="" maxlength="25" spellcheck="false" placeholder="Email">
<label for="" id="Label7" style="position:absolute;left:29px;top:332px;width:93px;height:17px;line-height:17px;z-index:16;">Username</label>
<input type="text" id="Editbox6" style="position:absolute;left:181px;top:331px;width:166px;height:16px;line-height:16px;z-index:17;" name="Username" value="" maxlength="10" spellcheck="false" placeholder="Username">
<label for="" id="Label8" style="position:absolute;left:29px;top:377px;width:91px;height:16px;line-height:16px;z-index:18;">Password</label>
<input type="password" id="Editbox7" style="position:absolute;left:181px;top:376px;width:166px;height:16px;line-height:16px;z-index:19;" name="Password" value="" maxlength="10" spellcheck="false" placeholder="Pwd">
<input type="submit" id="Button1" name="Sign Up" value="Sign UP" style="position:absolute;left:128px;top:506px;width:113px;height:42px;z-index:20;">
<div id="wb_Text2" style="position:absolute;left:0px;top:0px;width:418px;height:25px;text-align:center;z-index:21;">
<span style="color:#000000;font-family:Impact;font-size:20px;">Sign Up form</span></div>
<hr id="Line1" style="position:absolute;left:1px;top:26px;width:417px;height:7px;z-index:22;">
<div id="wb_Captcha1" style="position:absolute;left:29px;top:434px;width:324px;height:34px;z-index:23;">
<img src="captcha1.php" alt="Click for new image" title="Click for new image" style="cursor:pointer;float:left;width:100px;height:38px;" onclick="this.src='captcha1.php?'+Math.random()">
<span><input type="text" id="Captcha1" style="margin-top:20px;width:100%;height:16px;line-height:16px;" name="captcha_code" value="" spellcheck="false"></span></div>
				
			</form>
		</div>
	</body>
</html>	