<?php
//Connecting to sql db.
$connect = mysqli_connect("https://patrmitch.000webhostapp.com/","id3460448_admin","Pjrjm090402","id3460448_orders");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>