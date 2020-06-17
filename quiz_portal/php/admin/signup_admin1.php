<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>
 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top">
     <span class="style8">
     <img src="../image/reg_now.png">
     </span>
     </td>
     <td width="468" height="57">
     <h1 align="center"><span class="style8">New Centre Signup</span></h1>
     </td>
   </tr>
   <tr>
     <td>
     <form name="form1" method="post" action="signup_admin2.php">
       <table width="301" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid" required="required"></td>
         </tr>
         
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass" required="required"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password</td>
           <td><input type="password" name="cpass" required="required"></td>
         </tr>
         <tr>
           <td class="style7">Centre Name</td>
           <td><input name="cname" type="text" id="cname" required="required"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Centre Address</td>
           <td>
           <textarea name="caddress" id="caddress" required="required"></textarea>
           </td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input name="city" type="text" id="city" required="required"></td>
         </tr>
          <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone" required="required"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email" required="required"></td>
         </tr>
         <tr>
           <td class="style7">Centre Code</td>
           <td>
           <input name="cent_code" type="text" id="cent_code" required="required">
           </td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>
