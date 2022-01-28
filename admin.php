<?php
if(isset($_COOKIE['admin'])){
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
    if($_COOKIE['admin'] == "mahdi")echo $admin = "مهدی";
    if($_COOKIE['admin'] == "yacn")echo $admin =  "یاسین";
    if($_COOKIE['admin'] == "local")echo $admin =  "لوکال";
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
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>login form</title>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
            *, *:before, *:after {
                box-sizing: border-box;
            }

            body {
                min-height: 100vh;
                font-family: "Raleway", sans-serif;
            }

            .container {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
                margin-left: 200px;
                transform-origin: -200px 50%;
                transition-delay: 0s;
            }
            .container:hover .center, .container:active .center {
                opacity: 1;
                transition-delay: 0.2s;
            }

            .top:before, .top:after, .bottom:before, .bottom:after {
                content: "";
                display: block;
                position: absolute;
                width: 200vmax;
                height: 200vmax;
                top: 50%;
                left: 50%;
                margin-top: -100vmax;
                transform-origin: 0 50%;
                transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
                z-index: 10;
                opacity: 0.65;
                transition-delay: 0.2s;
            }

            .top:before {
                transform: rotate(45deg);
                background: #e46569;
            }
            .top:after {
                transform: rotate(135deg);
                background: #ecaf81;
            }

            .bottom:before {
                transform: rotate(-45deg);
                background: #60b8d4;
            }
            .bottom:after {
                transform: rotate(-135deg);
                background: #3745b5;
            }

            .center {
                position: absolute;
                width: 400px;
                height: 400px;
                top: 50%;
                left: 50%;
                margin-left: -200px;
                margin-top: -200px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
                opacity: 0;
                transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
                transition-delay: 0s;
                color: #333;
            }
            .center input {
                width: 100%;
                padding: 15px;
                margin: 5px;
                border-radius: 1px;
                border: 1px solid #ccc;
                font-family: inherit;
            }
        </style>
    </head>
    <body>

    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Please Sign In</h2>
            <form method="post" action="">
            <input type="username" name="user" placeholder="username"/>
            <input type="password" name="pass" placeholder="password"/>
            <input type="submit" name="btnadmin" value="login">
            </form>
            <h2>&nbsp;</h2>
        </div>
    </div>
    </body>
    </html>

<?php
    if (isset($_POST['btnadmin'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "yacn" && $pass == "yAcn2020@14"){
            setcookie("admin",$user,time()+3600);
            echo "ok";
            header("location:admin.php");
        }
        if ($user == "mahdi" && $pass == "android601"){
            setcookie("admin",$user,time()+3600);
            echo "ok";
            header("location:admin.php");
        }
    }
}
?>
