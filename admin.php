<?php
if($_SERVER['REMOTE_ADDR'] == "46.182.32.2" or $_SERVER['REMOTE_ADDR'] == "5.122.112.150" or $_SERVER['REMOTE_ADDR'] == "127.0.0.1"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admins</title>
    <style>
        .bod{
            margin: auto 30%;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>


<div class="alert alert-primary" role="alert">
    <center>
    ادمین <?php
    if($_SERVER['REMOTE_ADDR'] == "46.182.32.2")echo $admin = "مهدی";
    if($_SERVER['REMOTE_ADDR'] == "5.122.112.150")echo $admin =  "یاسین";
    if($_SERVER['REMOTE_ADDR'] == "127.0.0.1")echo $admin =  "لوکال";
    ?> خوش امدید
        </center>
</div>
<div class="dropdown">
    <center>
    <button style="font-size: 20px" class="btn col-10 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        گزینه های ادمین <?php echo $admin?>
    </button>
    <ul class="col-10 dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li class="btn col-12"><a style="font-size: 20px" class="dropdown-item" href="api/Create.php">پست جدید</a></li>
        <li class="btn col-12"><a style="font-size: 20px"  class="dropdown-item" href="api/info.php">وضعیت سایت (بزودی)</a></li>
        <li class="btn col-12"><a style="font-size: 20px"  class="dropdown-item" href="api/note.php">اضافه کردن یادداشت (بزودی)</a></li>
        </a></li>
    </ul>
    </center>
</div>
</body>
</html>
<?php }else{
echo "bache bia paiin";
}
?>
