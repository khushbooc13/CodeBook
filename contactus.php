<html>
<script type="text/javascript">
   <!--
      function validate()
      {
        if( document.myForm.fname.value == "" )
         {
            alert( "Please provide your  First name!" );
            document.myForm.fname.focus() ;
            return false;
         }
         if( document.myForm.lastname.value == "" )
         {
            alert( "Please provide your  Last name!" );
            document.myForm.lname.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.gender.value == "" )
         {
            alert( "Please select Gender" );
            return false;
         }
          if( document.myForm.comment.value == "" )
         {
            alert( "Please Enter Comments" );
            document.myForm.comment.focus() ;
            return false;
         }
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
         
        }
   //-->
</script>

<style>
input[type=text], select {
    width: 500px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 500px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-size: cover;
    padding: 40px;
    background-image: url("image.jpg");
}
img {
    max-width: 100%;
    height: auto;
}
</style>
<body>
<center>    <div><img src="E:\WPI Project\CODE BOOK LOGO.png" width="300" height="200">
  <form action="contactus.html" method="post" name="myForm">
    <table>
        <tr>
    <td><label for="fname"><b>First Name</b></label></td>
    <td><input type="text" id="fname" name="firstname"><br></td>
</tr>
    <tr>
    <td><label for="lname"><b>Last Name</b></label></td>
    <td><input type="text" id="lname" name="lastname"><br></td>
</tr>
<tr>
    <td><label for="email"><b>Email</b></label></td>
    <td><input type="email" id="email" name="e-mail"><br></td>
</tr>
<tr>
    <td><label for="Gender"><b>Gender</b></label></td>
    <td><input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male" >Male
        <input type="radio" name="gender" value="other" >Other<br></td>
</tr>
<tr>
    <td><label for="country"><b>Country</b></label></td>
    <td><select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></td>
</tr>
<tr>
    <td><label for="comment"><b>Comment</b></label></td>
    <td><textarea rows="5" cols="50" name="comment"></textarea></td>
</tr>

  
    
</table>
<input type="submit" value="Submit" onClick="validate();">
  </form>
<?php
    $to='motu@phpkemail.comli.com';
    $subject='feedback form user';
    $body=$_POST['comment']."\n";
    $headers='From: $_POST['e-mail']';

    if(mail($to,$subject,$body,$headers))
    {
        echo "feedback send,Thank you!";
    }

?>

  <footer><p>&copy; CODEBOOK.COM</footer>
</div></center>
</body>
</html>
