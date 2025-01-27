<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry1=mysqli_query($conn,"select * from register where uname='$uname'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{

$qry=mysqli_query($conn,"insert into register(name,gender,age,email,phone,loc,address,uname,psw) values('$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	
	
}

}

?>






<html>
<title>Cattle Management</title>
<style>
#navbar {
  padding: 35px;
  background:#248f24;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  text-align:center;
  text-decoration:blink;
  text-color:#cc4400;
   font-family: Arial;
   font-size:35px;
}

p
{
	color:#ffffff;
	text-align: center;
	text-transform: uppercase;
	 font-size:20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #888844;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

#footer {
  border: 2px solid #888844;
  padding: 45px;
  background: #888844;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/5.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  250px;
  border-radius:5px;
   font-size:35px;
}

</style>
</head>

<div id="navbar"><p></p></div>

<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	   <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	    <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  href="index.html">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="user.php">User Login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="register.php">User Registration</a></li>
</ul>
<div id="bg1"></div>

	 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="100%" border="0" align="center">
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="10%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="25%">&nbsp;</td>
      <br />
      <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
      <td width="23%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
    </tr>
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Name</span></td>
      <td><label>
        <input name="name" type="text" id="name" onChange="return name ()" required />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" required />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Age</span></td>
      <td><label>
        <input name="age" type="text" id="age" onChange="return age ()" required  />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td height="32">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Email Id </span></td>
      <td><input name="email" type="text" id="email" onChange="return email()" required  /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" required /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Location</span></td>
      <td><input type="text" name="loc" id="loc" required ></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		
	
	   <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Address</span></td>
      <td><textarea name="address" id="address" required ></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	

    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">User Name</span></td>
      <td><input name="uname" type="text" id="uname" required  /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Password</span></td>
      <td><input name="psw" type="password" id="psw" required /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>