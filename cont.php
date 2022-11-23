<?php
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

?>
<h2>User Name: <?php if(isset($name)){
    echo $name;
} ?></h2>
<h2>User Email: <?php if(isset($email)){
    echo $email;
} ?></h2>
<h2>User Password: <?php if(isset($password)){
    echo $password;
} ?></h2>
