<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CID Assignment</title>

<!--

CID Name Assignment

The user can select from three descriptions of pictures using radio buttons. Once submitted, the data will be sent to the server thru a GET for processing and return a page with the selected picture. Pick a theme and be creative! You can get a free, open source images from Wikimedia Images (see the link in Resources section.) Use CSS to create a pleasing presentation. Submit a link to a Github repository that contains the 2 files (an HTML and a PHP file) for this project. See the rubric below for grading criteria.

What objectives are you demonstrating?

Receive data via GET method
Building HTML markup using print command in PHP

-->

<style>


</style>

</head>
<body>

<?php
    if(isset($_GET["pic"])) {$pic = $_GET["pic"]; } else {$pic = ""; }
    if($pic == "a")
        {
            print
            "<img src='Dj_santa_2.jpg'>"
        ;}
    if($pic == "b")
        {
            print
            "<img src='Viktor_Pfeifer.JPG'>"
        ;}
    if($pic == "c")
        {
            print
            "<img src='Gandhi_spinning_1942.JPG'>"
        ;}
?>
</body>
</html>