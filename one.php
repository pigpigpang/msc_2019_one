<?php
    if(!empty($_GET['name'])) 
        echo "hello ". $_GET['name'];
    else 
        echo "hello world";