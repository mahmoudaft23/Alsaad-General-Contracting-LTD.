<?php
session_start();
if(isset($_POST["uname"]) && isset($_POST["password"])){
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    $_SESSION["isUser"]=0;
    try{
        $db=new mysqli('localhost','root','','alsaadcompany_db');
        $qryS="select * from `engineers`";
        $res=$db->query($qryS);

        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_array();
            if($row[0]==$uname && $row[3]==sha1($password)){
                $_SESSION["username"]=$row[1];
                $_SESSION["id"]=$row[0];
                $_SESSION["specialization"]=$row[5];
                $_SESSION["Sex"]=$row[6];
                $_SESSION["isUser"]=1;
                header("Location:engineer-2.php");
                $db->close();
//                switch ($row[2]){
//                    case 0:
//                        header("Location:engineer-2.php");
//                        break;
//                    case 1:
//                        header("Location:engineerinmanager.php");
//                        break;
//                    default:
//                }
            }
        }
        $qryS="select * from `managers`";
        $res=$db->query($qryS);

        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_array();
            if($row[0]==$uname && $row[3]==sha1($password)){
                $_SESSION["id"]=$row[0];
                $_SESSION["username"]=$row[1];
                //$_SESSION["specialization"]=$row[5];
                $_SESSION["email"]=$row[2];
                $_SESSION["isUser"]=1;
                header("Location:engineerinmanager.php");
                $db->close();
//                switch ($row[2]){
//                    case 0:
//                        header("Location:engineer-2.php");
//                        break;
//                    case 1:
//                        header("Location:engineerinmanager.php");
//                        break;
//                    default:
//                }
            }
        }
        //$db->close();
    }
    catch (Exception $e){

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/cd2c380d56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="alseadcss.css">
    <link rel="stylesheet" href="engineer2css.css">
    <title></title>
</head>
<body style="height: 800px">

<!--<nav class="he1">
  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 " >
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><a href="alsead.html"><img src="324067931_1228446594438947_6091785809727316368_n.png"width="45" height="62"></a> </svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="alsead.html#About" class="nav-link px-2 link-secondary"><span class="he3">ABOUT</span> </a></li>
          <li><a href="alsead.html#work" class="nav-link px-2 link-dark"><span class="he3">WORK</span></a></li>
          <li><a href="#" class="nav-link px-2 link-dark"><span class="he3">CAPABILIES</span></a></li>
          <li><a href="alsead.html#fqas" class="nav-link px-2 link-dark"><span class="he3">FAQs</span></a></li>
          <li><a href="page3alsead.html" class="nav-link px-2 link-dark"><span class="he3">Contant us</span></a></li>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2 "  style="  border-color:#ffffff  " > <span style="color: #ffffff; ">Login</span>  </button>
          <button class="button1-1">Sign-up</button>
        </div>
      </header>
    </div>
  </nav>-->
<nav id="divnav1"class=" navbar navbar-expand-md navbar-dark  text-white fixed-top"
>
    <div id="divnav"class="container me-5 he3">
        <a href="#" class="navbar-brand text-light h1 me-0" style="font-family: 'Berlin Sans FB';
font-size: 25px;
">
            AlSaad COMPANY &copy</a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-target="#main_menu"
                data-bs-toggle="collapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="main_menu" >
            <ul class="navbar-nav mx-auto p-3" style="font-size: 20px">


                <li><a href="alsead.html#About" class="nav-link px-2 link-secondary"><span class="he3">ABOUT</span> </a></li>
                <li><a href="alsead.html#work" class="nav-link px-2 link-dark"><span class="he3">WORK</span></a></li>
                <li><a href="alsead.html#ur Partners" class="nav-link px-2 link-dark"><span class="he3">Our Partners</span></a></li>
                <li><a href="alsead.html#fqas" class="nav-link px-2 link-dark"><span class="he3">FAQs</span></a></li>
                <li><a href="page3alsead.html" class="nav-link px-2 link-dark"><span class="he3">Contant us</span></a></li>

            </ul>
        </div>


        <!--<div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2 btn-expand-hov"  style="  border-color:#ffffff  " > <span style="color: #ffffff; ">Login</span>  </button>
          <button type="button "class="btn btn-outline-primary me-2 btn-expand-hov" style="  border-color:#ffffff  "><span style="color: #ffffff; ">Sign in</span></button>
        </div>-->
        <a href="alsead.html" class="mt-2 p-0">
            <i class="bi bi-box-arrow-right  h4 text-white" >
            </i>
        </a>

    </div>

</nav>



<!-- Section: Design Block -->
<section style="padding-top: 100px;" class="ppp" >
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10;">
                <h1 class="my-5 display-4 fw-bold  font1" style="color:#ffffff; font-size: 70px; ">
                    Collaborate  <br />
                    <span style="font-size: 46px; color:#ffffff;" class="my-5 display-4 fw-bold  font1">& Conquer With us today</span>
                </h1>
                <p class="mb-4 opacity-70" style="color: #ffffff; font-family: 'Calibri'; font-size: 21px">
                    Welcome to our contractor login page! Access your account securely to manage your construction projects, view plans, track progress, collaborate with your team, and more. Our construction management platform makes it easy to stay organized and productive. Login now to get started!
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="login.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!--<div class="row">-->
                            <!--<div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control form-text" placeholder="Michael" />
                                <label class="form-label mx-2" for="form3Example1">First name</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control form-text" placeholder="Johnson" />
                                <label class="form-label mx-2" for="form3Example2">Last name</label>
                              </div>
                            </div>-->
                            <!--</div>-->

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label for="form3Example3" class="form-label mx-2">ID</label>
                                <input type="text" id="form3Example3" name="uname"class="form-control" placeholder="9512042" required/>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label mx-2" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" name="password" class="form-control" placeholder="************" required/>
                            </div>

                            <!-- Checkbox -->


                            <!-- Submit button -->
                            <div style="display: flex; justify-content: center;">
                                <button type="submit" class="btn btn-primary btn-block mb-4 " style="width: 300px; background-color: #1f1f1f; border-color: #1f1f1f;">
                                    login
                                </button>
                            </div>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or login with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1 ">
                                    <i class="fab fa-facebook-f fb-logo"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1 ">
                                    <i class="fab fa-google g-logo" ></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1 ">
                                    <i class="fab fa-twitter tw-logo" ></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1 ">
                                    <i class="fab fa-github gh-logo"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<script type="text/javascript"> window.addEventListener("scroll",function(){
        let nav = document.getElementById("divnav1");
        nav.classList.toggle("sticky",window.scrollY >0)
    })</script>
<script type="text/javascript" src="engineer2.js"></script>
</body>
