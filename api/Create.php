<?php
require ('dbconfig.php');
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $caption = $_POST['caption'];
    $image = $_POST['image'];
    $link = $_POST['link'];
    $cat = $_POST['cat'];
    $time = $_POST['time'];

    $sql = "INSERT INTO post (title, discription, image, link,cat,time) VALUES (:title, :caption, :img, :link,:cat,:time)";
    $query = $conn->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':caption', $caption, PDO::PARAM_STR);
    $query->bindParam(':cat', $cat, PDO::PARAM_STR);
    $query->bindParam(':img', $image, PDO::PARAM_STR);
    $query->bindParam(':link', $link, PDO::PARAM_STR);
    $query->bindParam(':time', $time, PDO::PARAM_STR);
    $query->execute();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            margin: 100px !important;
        }
    </style>
    <meta charset="UTF-8">
    <title>Create</title>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="alert alert-primary form-control-lg" role="alert">
    <center>
        ادمین <?php
        if($_SERVER['REMOTE_ADDR'] == "46.182.32.2")echo $admin = "مهدی";
        if($_SERVER['REMOTE_ADDR'] == "5.122.112.150")echo $admin =  "یاسین";
        if($_SERVER['REMOTE_ADDR'] == "127.0.0.1")echo $admin =  "لوکال";
        ?> خوش امدید
    </center>
</div>
    <form method="post" class="" action="">
        <div class="form-group mb-2">

        <input type="text" name="title" style="text-align: center" class="form-control form-control-lg" placeholder="نام پست">
        <input type="text" name="caption" style="text-align: center" class="form-control form-control-lg" placeholder="توضیحات">
        <input type="text" name="image" style="text-align: center" class="form-control form-control-lg" placeholder="عکس">
            <input type="text" name="link" style="text-align: center" class="form-control form-control-lg" placeholder="لینک" >
            <input type="text" name="cat" style="text-align: center;" class="form-control form-control-lg" placeholder="دسته بندی" >
            <input type="text" name="time" style="text-align: center" class="form-control form-control-lg" placeholder="زمان مطالعه" >
        <input type="text" style="text-align: center" class="form-control form-control-lg" value="ادم باش همشو پر کن خطا نده" readonly>
        </div>
        <input type="submit" name="submit" class="form-control btn btn-primary col-12" value="ثبت">
    </form>

</body>
</html>