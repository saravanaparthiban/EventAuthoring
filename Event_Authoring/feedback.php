<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Event_Authoring_Feedback</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header" style="height:60px;">
<div class="col-lg-6">
<span class="logo" style="color:#999999;">Event_Authoring_Feedback</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1" style="background-image:url(image/load.jpg); min-height:430px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background: rgba(0,0,0,.3); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#ffffff">FEEDBACK / REPORT A PROBLEM</h2><br>
<div style="font-size:14px; color:#ffffff">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true" ></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
You can send us your feedback through e-mail on the following e-mail id:<br /><br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:saravanaparthiban555@gmail.com" style="color:#ffffff">saravanaparthiban555@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p style="color:#ffffff">Or you can directly submit your feedback by filling the enteries below:-</p><br>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3" style="color:#ffffff"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3" style="color:#ffffff"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="Event_Authoring_for_pdf_final.pdf" style="color:#999999">Event_Authoring_IEEE_Paper</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login" style="color:#999999">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers" style="color:#999999">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank" style="color:#999999">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content" style="background: rgba(0,0,0,.3);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:#999999">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-2">
		 </div>
		 <div class="col-md-7">
     <h4 style="color:#ffffff; font-size:18px; font-family:'typo' ">Team_Leader :</h4>
     <img src="image/saravana_parthiban.jpg" width=100 height=100 alt="Team Daredevils" class="img-rounded"><br>
     <a href="https://www.instagram.com/saravana_parthiban/" style="color:#ffffff; font-family:'typo' ; font-size:18px" title="Find on Instagram">S Saravana Muthu Kumar</a>
		<h4 style="color:#ffffff; font-family:'typo' ;font-size:16px" class="title1">+91 8248029445</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">saravanaparthiban555@gmail.com</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">Panimalar Engineering College,Chennai</h4>
    <h4 style="color:#ffffff; font-size:18px; font-family:'typo' ">Team_Mates :</h4>
    <img src="image/bheema.jpg" width=100 height=100 alt="Team Daredevils" class="img-rounded"><br>
    <a href="https://www.instagram.com/sachin_s_saravanan/" style="color:#ffffff; font-family:'typo' ; font-size:18px" title="Find on Instagram">S Saravanan</a>
    <h4 style="color:#ffffff; font-family:'typo' ;font-size:16px" class="title1">+91 9345645951</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">mr.saravanan02@gmail.com</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">Panimalar Engineering College,Chennai</h4>
    <img src="image/suraj.jpg" width=100 height=100 alt="Team Daredevils" class="img-rounded"><br>
    <a href="https://www.instagram.com/_.surajprasad._/" style="color:#ffffff; font-family:'typo' ; font-size:18px" title="Find on Instagram">Suraj R Prasad</a>
    <h4 style="color:#ffffff; font-family:'typo' ;font-size:16px" class="title1">+91 8072674973</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">surajraghu.321@gmail.com</h4>
		<h4 style="color:#ffffff; font-family:'typo' ">Panimalar Engineering College,Chennai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
