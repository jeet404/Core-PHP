  <?php
    
    session_start();

    $username = $_POST['usrnm'];
    $password = $_POST['pass'];

    if ($username =='JeetP' AND $password=='jap123')
    {
        $_SESSION["usrnm"]=$username;
        header("Location: Disp.php");
    }
    if ($username =='secondusr' AND $password=='user123') 
    {
        $_SESSION["usrnm"]=$username;
        header("Location: Disp.php");
    }
    else 
    {
        echo "You have not requested a login form!";
    } 
?>