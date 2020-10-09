<?php

$users = 'pages/users.txt';

function register($name, $pass, $email)
{
    //data validation block
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));
    if ($name == '' || $pass == '' || $email == '') {
        echo "<h3/><span style='color:red;'>
Fill All Required Fields!</
span><h3/>";
        return false;
    }
    if (
        strlen($name) < 3 || strlen($name) > 30 ||
        strlen($pass) < 3 || strlen($pass) > 30
    ) {
        echo "<h3/><span style='color:red;'>
Values Length Must Be Between 3 And
30!</span><h3/>";
        return false;
    }
    //login uniqueness check block
    global $users;
    $file = fopen($users, 'a+');
    while ($line = fgets($file)) {
        $readname = substr($line, 0, strpos($line, ':'));
        if ($readname == $name) {
            echo "<h3/><span style='color:red;'> Such Login Name Is Already Used!</span><h3/>";
            return false;
        }
    }
    //new user adding block
    $line = $name . ':' . md5($pass) . ':' . $email . "\r\n";
    fputs($file, $line);
    fclose($file);
    return true;
}

function login()
{
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $hashed_password = md5($password);

    if (is_login_valid($login, $hashed_password)) {
        $_SESSION['registered_user'] = $login;
        header('Location: index.php?page=1');
    } else {
        header('Location: index.php?page=4&error=1');
    }
}    

function is_login_valid($login, $hashed_password)
{
    global $users;
    $file = fopen($users, 'r');
    while ($line = fgets($file)) {
        $first_colon_pos = strpos($line, ':');
        $read_login = substr($line, 0, $first_colon_pos);

        $second_colon_pos = strpos($line, ':', $first_colon_pos+1);
        $len = $second_colon_pos - $first_colon_pos - 1;
        $read_hashed_password = substr($line, $first_colon_pos + 1, $len);

        $registered = ($read_login == $login) && ($read_hashed_password == $hashed_password);
        if ($registered) {
            return true;
        }
    }

    return false;
}

    