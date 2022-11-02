<?php
    if(isset($_POST['save'])){
        $titleVal = "";
        $phoneVal = "";
        $mailVal = "";
        $descVal = "";
        if(!preg_match("/^[a-zA-Z1-9]+\s?[a-zA-Z1-9]+$/", $_POST['task-title'])){
            $titleVal = "non valide";
        }
        if(!preg_match("/^0[5-8][0-9]{8}$/", $_POST['task-tel'])){
            $phoneVal = "non valide";
        }
        if(!preg_match("/^[aA-zZ]{2,50}[-]?[aA-zZ]{2,}@[aA-zZ]{2,}[.][aA-zZ]{2,}$/", $_POST['task-mail'])){
            $mailVal = "non valide";
        }
        if(!preg_match("/^[a-zA-Z1-9\s]{0,100}$/", $_POST['task-description'])){
            $descVal = "non valide";
        }
    }
?>