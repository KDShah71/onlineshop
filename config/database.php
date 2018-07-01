<?php

$conn = new mysqli("localhost","root","","onlineshop");

    if(!$conn){
        die('query Failed'.mysqli_error());
    }
