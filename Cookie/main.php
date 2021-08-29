<form action="../main.php" method="post" style="border: 2px dotted blue;text-align: center;width: 400px;">

Username :
<input name="username" type="text" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];} ?>"><br>
    
Password :
<input name="password" type="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];} ?>"><br>
    
<input type="checkbox" name="remember" />Remember me
<input type="submit" value="Login">
</form>
<?php

if(!empty($_POST["remember"]))
{
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["password"],time()+3600);
    echo "Cookies Set Successfuly";
}
else
{
    setcookie("username","");
    setcookie("password","");
    echo "Cookies Not Set";
}

?>
<a href="../main.php">Go to Login Page </a>