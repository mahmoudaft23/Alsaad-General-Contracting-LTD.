<?php
session_start();
if( !(isset($_SESSION["isUser"])) || !($_SESSION["isUser"])  ){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/cd2c380d56.js" crossorigin="anonymous"></script>
    <link href="headers.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="alseadcss.css">
    <link rel="stylesheet" type="text/css" href="enfineer.css">
    <link rel="stylesheet" type="text/css" href="enginerinmangercss.css">
    <link rel="stylesheet" href="page2alseadcss.css">
    <link rel="stylesheet" href="engineer2css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="engineer2.js"></script>
    <script src="projectjs.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title></title>
</head>
<body>

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
            <ul class="navbar-nav mx-auto " style="font-size: 20px">


                <li class="nav-item">
                    <a href="engineerinmanger.php" class="nav-link px-2 link-dark"><span class="he3 font1">Engineer</span></a>
                </li>
                <li class="nav-item">
                    <a href="Project.php" class="nav-link px-2 link-dark"><span class="he3 font1">Projects</span></a>
                </li>
                <li class="nav-item">
                    <a href="engineerinmanager.php#Client" class="nav-link px-2 link-dark"><span class="he3 font1">Clients</span></a>
                </li>

            </ul>
        </div>


        <div class="col-md-3 text-end mt-2 p-3" >
            <div class="pagemanger1-1 ">
                <a href="#" class="text-light text-decoration-none " data-bs-toggle="modal" data-bs-target="#pfp-info">
                    <div class="text-nowrap w-auto" style="display: flex";
                    >
                        <i class="fa-regular fa-address-card d-block p-3 mx-0" id="icon1f">

                        </i>
                        <div class="font2 p-3 mx-0">
                            <?php
                            echo "M.".$_SESSION["username"];
                            ?>
                        </div>
                    </div>

                </a>
                <!-- <p id="icon2f" class="font2"style="border: 1px white solid">Eng. Sami Massoud</p>-->
            </div>
        </div>
        <a href="alsead.php" class="mt-2 p-0">
            <i class="bi bi-box-arrow-right  h4 text-white" >
            </i>
        </a>

    </div>

</nav>
<section class="pag1-1">

</section>


<section class="pag2-1">
    <h1>PUBLIC FACILITIES & OFFICE BUILDINGS</h1>
    <p>One of the region's premier civil contractors, Alsaad has delivered tens of commercial and government spaces - from multi-faceted mixed-use facilities to landmark corporate headquarters - each built to suit our clients' specialized business requirements.</p>
</section>




<section style="display: flex; justify-content: center; margin-top: 150px;" >

    <div style="width: 500px; margin-right: 150px;">
        <h1>
            <?php
            echo $_SESSION["projectname"];
            ?>
        </h1>
        <p style=" font-family: 'Courier New', monospace;">
            <?php
            echo $_SESSION["projectdescription"];
            ?>
        </p>
        <ul style="list-style-type:square;  font-family: 'Courier New', monospace;">
            <li style=" font-family: 'Courier New', monospace;">Plot Area: <span style="font-weight: bold;"><?php
                    echo $_SESSION["projectplotarea"];
                    ?></span></li>
            <li style=" font-family: 'Courier New', monospace;">Built-up Area: <span style="font-weight: bold;"><?php
                    echo $_SESSION["projectbuiltarea"];
                    ?></span> </li>
        </ul>
        <img src="https://png.pngtree.com/template/20191014/ourmid/pngtree-building-and-construction-logo-design-template-image_317780.jpg" style="margin-top: 20px;">
    </div>


    <div style="width: 400px; " class="boxfprprijet1-1">

        <div>
            <p style="color: gray;">PROJECT NAME</p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["projectname"];
                ?>
            </p>
        </div>

        <div>
            <p style="color: gray;">LOCATION</p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["projectlocation"];
                ?>
            </p>
        </div>

        <div>
            <p style="color: gray;">CLIENT</p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["ClientName"];
                ?>
            </p>
        </div>

        <div>
            <p style="color: gray;">SCOPE</p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["projectscope"];
                ?>
            </p>
        </div>

        <div>
            <p style="color: gray;">DURATION<p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["projectduration"];
                ?>
            </p>

        </div>

        <div>
            <p style="color: gray;">DATE OF COMPLETION</p>
            <p style="color: gray;">
                <?php
                echo $_SESSION["endDate"];
                ?>
            </p>
        </div>




    </div>








</section>





















<br>

<!--<div id="carouselExampleIndicators" class="carousel slide" style="height: 720px; margin-top: 100px;" data-bs-ride="carousel">-->
<!---->
<!--    <div class="carousel-inner" style="height: 500px;">-->
<!--        <div class="carousel-item active" style=" background-color: white;">-->
<!--            <img src="https://abaad.ps/assets/Picture-7-(1).jpg" class="d-block w-100" alt="..." style="  width: 200px;-->
<!--      height: 500px;-->
<!--      object-fit: none; ">-->
<!--        </div>-->
<!--        <div class="carousel-item" style=" background-color: white;">-->
<!--            <img src="https://abaad.ps/assets/Picture-6.jpg" class="d-block w-100" alt="..."  style="  width: 200px;-->
<!--      height: 500px;-->
<!--      object-fit: none">-->
<!--        </div>-->
<!--        <div class="carousel-item" style=" background-color: white;">-->
<!--            <img src="https://abaad.ps/assets/Picture-2-(3).jpg" class="d-block w-100" alt="..."  style="  width: 200px;-->
<!--      height: 500px;-->
<!--      object-fit: none">-->
<!--        </div>-->
<!--    </div>-->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!---->
<!--    <div class="carousel-indicators" style="height: 200px;">-->
<!--        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active thumbnail" aria-current="true" aria-label="Slide 1" style="height: 100px;" >-->
<!--            <img src="https://abaad.ps/assets/Picture-7-(1).jpg" class="d-block w-100" alt="..." >-->
<!--        </button>-->
<!--        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="thumbnail" aria-label="Slide 2"  style="height: 100px;">-->
<!--            <img src="https://abaad.ps/assets/Picture-6.jpg" class="d-block w-100" alt="...">-->
<!--        </button>-->
<!--        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="thumbnail" aria-label="Slide 3"  style="height: 100px;">-->
<!--            <img src="https://abaad.ps/assets/Picture-2-(3).jpg" class="d-block w-100" alt="...">-->
<!--        </button>-->
<!--    </div>-->
<!--</div>-->

<div id="pfp-info" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="model-header column-gap-0 position-relative">
                <button class="btn-close position-absolute px-4 py-3" style="top: 0; right:0;" data-bs-dismiss="modal" data-bs-target="#pfpinfo"></button>
                <h4 class="px-4 py-3">Profile</h4>
                <hr>
            </div>
            <div class="modal-body px-3">
                <table>
                    <tr class="row-cols-2">
                        <td>
                            <p style="font-weight: bold; font-size: 28px; padding-left: 0px">
                                <?php
                                echo $_SESSION["username"];
                                ?>
                            </p>
                            <br>
                            Manager
                            <br>
                            <br>
                            <br>
                            <?php
                            echo $_SESSION["email"]
                            ?>
                        </td>
                        <td >
                            <img class="img-fluid w-auto d-sm-block mx-auto " src="/photos/manager.svg" alt="picture-1"
                            >
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-center">
                Copyrights are preserved Al-Saad Company&copy
                <hr>
            </div>
            <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        </div>
    </div>
</div>





<!---->
<!---->
<!--<script>-->
<!--    let slideIndex = 1;-->
<!--    showSlides(slideIndex);-->
<!---->
<!--    function plusSlides(n) {-->
<!--        showSlides(slideIndex += n);-->
<!--    }-->
<!---->
<!--    function currentSlide(n) {-->
<!--        showSlides(slideIndex = n);-->
<!--    }-->
<!---->
<!--    function showSlides(n) {-->
<!--        let i;-->
<!--        let slides = document.getElementsByClassName("mySlides");-->
<!--        let dots = document.getElementsByClassName("dot");-->
<!--        if (n > slides.length) {slideIndex = 1}-->
<!--        if (n < 1) {slideIndex = slides.length}-->
<!--        for (i = 0; i < slides.length; i++) {-->
<!--            slides[i].style.display = "none";-->
<!--        }-->
<!--        for (i = 0; i < dots.length; i++) {-->
<!--            dots[i].className = dots[i].className.replace(" active", "");-->
<!--        }-->
<!--        slides[slideIndex-1].style.display = "block";-->
<!--        dots[slideIndex-1].className += " active";-->
<!--    }-->
<!--</script>-->
<!---->
<!---->
<!---->











<script type="text/javascript"> window.addEventListener("scroll",function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY >0)
    })</script>
</body>
</html>

