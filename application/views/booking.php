<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<link href="login.css" rel="stylesheet">
<link href="Bookings.css" rel="stylesheet">
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
   $("#SlideShow2").slideshow(
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
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:130px;z-index:18;">
<div id="SlideShow1" style="position:absolute;left:172px;top:0px;width:324px;height:130px;z-index:0;">
<img class="image" src="images/2.jpg" alt="" title="">
<img class="image" src="images/restaurant1.jpg" style="display:none;" alt="" title="">
</div>
<div id="NavigationBar1" style="position:absolute;left:576px;top:80px;width:340px;height:30px;z-index:1;">
<ul class="navbar">
<li id="NavigationBar1_item0"><a href=""><img alt="" src="images/img0010_over.png" class="hover"><span><img alt="" src="images/img0010.png"></span></a></li>
<li id="NavigationBar1_item1"><a href=""><img alt="" src="images/img0011_over.png" class="hover"><span><img alt="" src="images/img0011.png"></span></a></li>
<li id="NavigationBar1_item2"><a href=""><img alt="" src="images/img0012_over.png" class="hover"><span><img alt="" src="images/img0012.png"></span></a></li>
<li id="NavigationBar1_item3"><a href=""><img alt="" src="images/img0013_over.png" class="hover"><span><img alt="" src="images/img0013.png"></span></a></li>
<li id="NavigationBar1_item4"><a href=""><img alt="" src="images/img0014_over.png" class="hover"><span><img alt="" src="images/img0014.png"></span></a></li>
</ul>
</div>
<div id="wb_Text1" style="position:absolute;left:576px;top:8px;width:239px;height:52px;z-index:2;">
<span style="color:#FFA07A;font-family:Impact;font-size:21px;">Online Restaurant Management System</span></div>
<div id="wb_Image1" style="position:absolute;left:16px;top:28px;width:147px;height:83px;z-index:3;">
<img src="images/Capture.PNG" id="Image1" alt=""></div>
</div>
<a href="http://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250"></a>

<form action="<?php echo site_url('user/booking') ?>" method="post">
<div id="wb_Form1" style="position:absolute;left:339px;top:279px;width:476px;height:336px;z-index:14;">

<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
<label for="" id="Label1" style="position:absolute;left:25px;top:25px;width:155px;height:16px;line-height:16px;z-index:4;">Available Tables</label>
<select name="Tables" size="1" id="Combobox1" style="position:absolute;left:234px;top:23px;width:214px;height:28px;z-index:5;">
<option>Double Seater</option>
<option>Four People</option>
<option>Six People</option>
<option>Family</option>
</select>
<label for="" id="Label2" style="position:absolute;left:27px;top:91px;width:153px;height:16px;line-height:16px;z-index:6;">Menu Selection</label>
<select name="Menu" size="1" id="Combobox2" style="position:absolute;left:234px;top:91px;width:214px;height:28px;z-index:7;">
<option>Italian $50</option>
<option>French $40</option>
<option>Continental $50</option>
<option>Indian $30</option>
<option>Nepali Thali $40</option>
<option>Burger, Chips & Fries $35</option>
<option>For Kids $20</option>
<option>Chef's Special $60</option>
</select>
<label for="" id="Label3" style="position:absolute;left:27px;top:156px;width:153px;height:16px;line-height:16px;z-index:8;">Drinks</label>
<select name="Drinks" size="1" id="Combobox3" style="position:absolute;left:234px;top:154px;width:214px;height:28px;z-index:9;">
<option>Red Wine $20</option>
<option>White Wine $20</option>
<option>Beer $10</option>
<option>Whiskey $30</option>
<option>Cocktails $10</option>
<option>Vodka $20</option>
<option>Fruit Juice $5</option>
<option>Coffee $5</option>
</select>
<input type="submit" id="Button1" name="Confirm" value="Confirm Order" style="position:absolute;left:266px;top:265px;width:180px;height:42px;z-index:10;">
<div id="wb_Text2" style="position:absolute;left:37px;top:217px;width:223px;height:48px;z-index:11;">
<span style="color:#000000;font-family:Arial;font-size:13px;">The Prices for the menu are for a whole course and drinks can be ordered as needed.</span></div>
</form>
</div>
<div id="SlideShow2" style="position:absolute;left:0px;top:279px;width:316px;height:336px;z-index:15;">
<img class="image" src="images/12.jpg" alt="" title="">
<img class="image" src="images/13.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/14.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/11.jpg" style="display:none;" alt="" title="">
<img class="image" src="images/41.jpg" style="display:none;" alt="" title="">
</div>
<label for="" id="Label4" style="position:absolute;left:28px;top:159px;width:118px;height:40px;line-height:40px;z-index:16;">Available Bookings</label>
<input type="text" id="Editbox1" style="position:absolute;left:172px;top:159px;width:55px;height:38px;line-height:38px;z-index:17;" name="Editbox1" value="" spellcheck="false">
</body>
</html>