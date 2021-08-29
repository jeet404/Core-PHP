<html>
<head>
    <title>Welcome to MY FORM</title>    
</head>
<body>
<h1>Form</h1>
<form action="Form.php" method="post">
<!--<form action="Form.php" method="get">-->
<pre>
<label><font size="4"><b>First Name:</b></font>
<input type="text" name="fname"  id="fname">
</label> 
</pre>
<pre>
<label><font size="4"><b>Last Name:</b></font>
<input type="text" name="lname" id="lname">
</label> 
</pre>
<pre>
<label><font size="4"><b>Password:</b></font>
<input type="password" name="pass" id="pass">
</label> 
</pre>
<br>
<input type="submit" name="detail" value="Submit">
<input type="reset" name="detail" value="Clear">
</form>
</body>
</html>
<?php
    if(isset($_POST['fname']))
    #if(isset($_GET['fanme']))
    {
    echo "<br> Name is : " . $_POST['fname'] ." " . $_POST['lname'];
    echo "<br> Password is : " . $_POST['pass'];
    
    #echo "<br> Name is : " . $_GET['fname'] ." " . $_GET['lname'];
    #echo "<br> Password is : " . $_GET['pass'];
    }
?>