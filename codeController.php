<?php

session_start();
if (strtolower($_POST['code']) == strtolower($_SESSION['code']))
    echo 'Successfully :)';
else
    echo 'Wrong code, try again!';
