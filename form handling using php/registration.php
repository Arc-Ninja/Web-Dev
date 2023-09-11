<?php if (isset($_POST['submit'])):?>
 <h1>Thank you for registering <?php echo $_POST['fname'];?> </h1>
 <h4>You have been recorded as 
 <?php echo $_POST['fname'] .' ' . $_POST['lname'];?></h4>
 <p>First Name: <?php echo $_POST['fname'];?><br><br>
  Last Name: <?php echo $_POST['lname'];?><br><br>
  E-mail Id: <?php echo $_POST['email'];?><br><br>
  Gender:
  <?php
  $radioVal=$_POST["gender"];
  if($radioVal=="male")
  {
  echo("Male");
  }
  else
  {
  echo("Female");
  }
  ?><br> <br>
  Phone Number: <?php echo $_POST['phno'];?>
  </p>
  <link rel="stylesheet" href="registration.css">
  <?php endif; ?>