<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Registration Form</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="openproject.php">
  <table width="537" height="199" border="1" cellpadding="8" cellspacing="0">
    <caption>
     <h3> Registration Form </h3>
    </caption>
    <tbody>
      <tr>
        <td width="251">Name</td>
        <td width="266"><input type="text" name="name" id="textfield"></td>
      </tr>
      <tr>
        <td>Email </td>
        <td>   <input type="email" name="email" id="textfield2"></td>
      </tr>
      <tr>
        <td>Phone number</td>
        <td><input type="p_number" name="p_number" id="textfield3"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="u_name" id="textfield4"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" id="textfield5"></td>
      </tr>
      <tr>
        <th colspan="2"><input type="submit" name="submit" id="submit" value="Submit"></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('my_database', $con)or die(mysql_error());
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$p_number=$_POST['p_number'];	
$u_name=$_POST['u_name'];
$password=$_POST['password'];

if($name==''){
echo "<script>alert('Enter Your Name')</script>";
}
if($email==''){
echo "<script>alert('Enter Your Email')</script>";
}
if($p_number==''){
echo "<script>alert('Enter Your phone number')</script>";
}	
if($u_name==''){
echo "<script>alert('Enter Your username')</script>";
}
if($password==''){
echo "<script>alert('Enter Your password')</script>";
}

else{
$query="insert into registration(name,email,p_number,u_name,password) values ('$name','$email','$p_number',$u_name','$password')";
if(mysql_query($query)){
echo "<script>alert('You are Successfully registered')</script>";
echo "<script>window.open('welcome.php','_self')</script>";
}

}

?>