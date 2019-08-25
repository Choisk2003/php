<?php
    if($_POST['id'] == 'albert'){
        if($_POST['password'] == 1111){
            echo 'right';
        }else{
            echo 'password wrong';
        }
    }else{
        echo 'id wrong';
    }
?>