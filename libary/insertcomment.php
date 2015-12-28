<?php

$name    = $_POST['name'];
$comment = $_POST['comment'];
$submit  = $_POST['submit'];
mysql_set_charset('utf8', $con);


if ($submit) {
    if ($name && $comment) {
        $insert = mysql_query("INSERT INTO comments (name,comment) VALUES ('$name','$comment') ");
        header("refresh:5;url=#page5");
    } else {
        echo "please fill out all fields";
    }
}