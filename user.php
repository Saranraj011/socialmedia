<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from register where uname='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$qry=mysqli_query($conn,"select * from register where uname='$uname' && psw='$password'");
$row=mysqli_fetch_assoc($qry);
$_SESSION['id']=$row['id'];
echo "<script>alert('Welcome To User Home Page')</script>";

header("location:index.html");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?> 
<html>
<title></title>
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
  background:url("images/10.jpg");
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
  <li><a class="active" href="user.php">User Login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="register.php">User Registration</a></li>
</ul>
<div id="bg1"></div>
<form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">User Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
  </table>
</form>
<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>