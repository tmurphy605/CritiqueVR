<?php
    session_start();
    include("account.php");
    include("functions.php");

//DB Connection

//get data
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


//hash password
    $pass = md5($pass);

    if (!auth($email, $pass)){
        echo"
            <script>
                alert(\"Not logged in...\");
            </script>";
        redirect("index.html");
    }
    redirect("accountPage.php");

?>