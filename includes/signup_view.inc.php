<?php

declare(strict_types=1);

function check_signup_errors(){
    if(isset($_SESSION["signup_errors"])){
        $errors = $_SESSION["signup_errors"];

        echo "<br/>";

        foreach ($errors as $error){
            echo '<p style="color:red;">'. $error .'</p>';
        }

        unset($_SESSION["signup_errors"]);
    }
}
 