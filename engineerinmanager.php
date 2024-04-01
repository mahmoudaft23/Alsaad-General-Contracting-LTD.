<?php
session_start();
if( !(isset($_SESSION["isUser"])) || !($_SESSION["isUser"])  ){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cd2c380d56.js" crossorigin="anonymous"></script>
    <link href="headers.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="alseadcss.css">
    <link rel="stylesheet" type="text/css" href="enginerinmangercss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="style-js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Responsive Card Slider</title>-->
    <link rel="stylesheet" href="engineer2css.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body >

<!--<nav class="he1">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 " >
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><a href="alsead.html"><img src="324067931_1228446594438947_6091785809727316368_n.png"width="45" height="62"></a> </svg>
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">


            <li><a href="page3alsead.html" class="nav-link px-2 link-dark"><span class="he3">Engineers</span></a></li>
            <li><a href="page3alsead.html" class="nav-link px-2 link-dark"><span class="he3">Projects</span></a></li>
            <li><a href="page3alsead.html" class="nav-link px-2 link-dark"><span class="he3">Clients</span></a></li>

          </ul>

          <div class="col-md-3 text-end">
            <div class="pagemanger1-1">
                <i class="fa-regular fa-address-card" id="icon1f"></i>
            <p id="icon2f">the name of manger</p>
            </div>
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


                <li class="nav-item"><a href="#Team" class="nav-link px-2 link-dark"><span class="he3">Engineers</span></a></li>
                <li class="nav-item"><a href="Project.php" class="nav-link px-2 link-dark"><span class="he3">Projects</span></a></li>
                <li class="nav-item"><a href="#Client" class="nav-link px-2 link-dark"><span class="he3">Clients</span></a></li>
                <li class="nav-item"><a href="#Staff" class="nav-link px-2 link-dark"><span class="he3">Staff</span></a></li>

            </ul>
        </div>


        <div class="col-md-3 text-end mt-2 p-3" >
            <div class="pagemanger1-1 ">
                <a href="#" class="text-light text-decoration-none " data-bs-toggle="modal" data-bs-target="#pfpp-info">
                    <div class="text-nowrap w-auto" style="display: flex";
                    >
                        <i class="fa-regular fa-address-card d-block p-3 mx-0" id="icon1f">

                        </i>
                        <div class="font2 p-3 mx-0 h5">
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
<section class="pag3-3">

</section>

<section>
    <div class="em1-1">
        <div class="em2-1">
            <p>WORKING AT SGC</p>
        </div>
        <div>
            <hr>
        </div>

        <div class="em1-2">
            <div>
                <p>The thousands of full-time professionals and tradesmen on Alsaad work sites and in our offices in the various country operations share a common goal: to deliver projects that delight our clients and strengthen our communities. We know that to be the reference contractor in the Middle East & Africa, we need the best people. Alsaad is committed to attracting and developing the industry's top talent.</p>
            </div>
        </div>

    </div>



    <div class="em1-1 r1-1" id="ourteam">
        <div class="em2-1" id="Team">
            <p>Our Team</p>
<!--            <button style="background-color: lightgreen; color:black; border: black 1px solid;" class="btn mx-5 ADD-BTN" data-id="engineer">ADD</button>-->
        </div>
        <div>
            <hr>
        </div>

    </div>
    <div style="display: flex; justify-content: flex-end; margin-right: 50px;">
        <button style="width: 200px;" class="btn mx-5 ADD-BTN button-84" data-id="engineer">ADD</button>
    </div>

    <div class="cardff1-1">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            <!--  Adding Cards   -->
            <?php
            $db=new mysqli('localhost','root','','alsaadcompany_db');
            $qryS="select * from `engineers` where `Manager_ID`=".$_SESSION["id"];
            $res=$db->query($qryS);
            for($i=0;$i<$res->num_rows;$i++) {
                $row1=$res->fetch_array();
                ?>
                <div class="column pb-3">
                    <div class="incolumn cardditem" data-card-id="<?php echo $row1[0]; ?>" data-card-name="<?php echo $row1[1]; ?>">
                        <a class="text-decoration-none menu1">
                            <div>
                                <!--<img class="img-fluid w-auto " src="324067931_1228446594438947_6091785809727316368_n.png" alt="project">-->
                                <?php
                                if($row1[6]=='M'){
                                    echo '<img class="img-fluid w-auto " src="/photos/male2.svg" alt="project">';
                                }
                                else{
                                    echo '<img class="img-fluid w-auto " src="/photos/female.svg" alt="project">';
                                }
                                ?>
                            </div>

                            <div class="editdiv1-1">
                                <p>
                                    <?php
                                    echo "$row1[1]";
                                    ?>
                                </p>
                                <hr>
                                <p>
                                    <?php
                                    echo "$row1[5]";
                                    ?>
                                </p>
                                <hr>
                                <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dolorum eos odit perspiciatis porro quis reiciendis sint. A explicabo, repellat! </p>
                            </div>
                        </a>
                    </div>
                </div>
                    <?php
            }
            ?>
        </div> <!-- end of class row-->
    </div> <!--  the end of card class-->
    <hr>
    <div class="em1-1 r1-1" id="Client">
        <div class="em2-1">
            <p>Our Clients</p>
<!--            <button style="background-color: lightgreen; color:black; border: black 1px solid;" class="btn mx-5 ADD-BTN" data-id="client">ADD</button>-->
        </div>
        <div>
            <hr>
        </div>
    </div>
    <div style="display: flex; justify-content: flex-end; margin-right: 50px;">
        <button style="width: 200px;" class="btn mx-5 ADD-BTN button-84" data-id="client">ADD</button>
    </div>

    <div class="cardff1-1">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            <!--  Adding Cards   -->
            <?php
            $db=new mysqli('localhost','root','','alsaadcompany_db');
            $qryS="select * from `client` ";
            $res=$db->query($qryS);
            for($i=0;$i<$res->num_rows;$i++) {
                $row1=$res->fetch_array();
                ?>
                <div class="column pb-3">
                    <div class="incolumn cardditem"data-card-id="<?php echo $row1[0]; ?>"data-card-name="<?php echo $row1[1]; ?>">
                        <a  class="text-decoration-none menu1 ">
                            <div>
                                <!--<img class="img-fluid w-auto " src="324067931_1228446594438947_6091785809727316368_n.png" alt="project">-->
                                <?php
                                if($row1[5]=='M'){
                                    echo '<img class="img-fluid w-auto " src="/photos/male2.svg" alt="project">';
                                }
                                else if ($row1[5]=='F'){
                                    echo '<img class="img-fluid w-auto " src="/photos/female.svg" alt="project">';
                                }
                                else{
                                    echo '<img class="img-fluid w-auto " src="/photos/coop.svg" alt="project">';
                                }
                                ?>
                            </div>

                            <div class="editdiv1-1">
                                <p>
                                    <?php
                                    echo "$row1[1]";
                                    ?>
                                </p>
                                <hr>
                                <p>
                                    <?php
                                    echo "$row1[2]";
                                    ?>
                                </p>
                                <hr>
                                <p class="pb-4">
                                    <?php
                                    echo "$row1[4]";
                                    ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div> <!-- end of class row-->
    </div> <!--  the end of card class-->
    <hr>
    <div class="em1-1 r1-1" id="Staff">
        <div class="em2-1">
            <p>Our Staff</p>
<!--            <button style="background-color: lightgreen; color:black; border: black 1px solid;" class="btn mx-5 ADD-BTN" data-id="staff">ADD</button>-->
        </div>
        <div>
            <hr>
        </div>
    </div>
    <div style="display: flex; justify-content: flex-end; margin-right: 50px;">
        <button style="width: 200px;" class="btn mx-5 ADD-BTN button-84" data-id="staff">ADD</button>
    </div>

    <div class="cardff1-1">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
            <!--  Adding Cards   -->
            <?php
            $db=new mysqli('localhost','root','','alsaadcompany_db');
            $qryS="select * from `staff` ";
            $res=$db->query($qryS);
            for($i=0;$i<$res->num_rows;$i++) {
                $row1=$res->fetch_array();
                ?>
                <div class="column pb-3">
                    <div class="incolumn cardditem"data-card-id="<?php echo $row1[0]; ?>"data-card-name="<?php echo $row1[1]; ?>">
                        <a class="text-decoration-none menu1">
                            <div>
                                <!--<img class="img-fluid w-auto " src="324067931_1228446594438947_6091785809727316368_n.png" alt="project">-->
                                <img class="img-fluid w-auto " src="/photos/male2.svg" alt="project">
                            </div>

                            <div class="editdiv1-1">
                                <p>
                                    <?php
                                    echo "$row1[1]";
                                    ?>
                                </p>
                                <hr>
                                <p>
                                    <?php
                                    echo "$row1[2]";
                                    ?>
                                </p>
                                <hr>
                                <p class="pb-4">
                                    <?php
                                    echo "$row1[3]";
                                    ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div> <!-- end of class row-->
    </div> <!--  the end of card class-->
    <div id="pfpp-info" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="model-header column-gap-0 position-relative">
                    <button class="btn-close position-absolute px-4 py-3" style="top: 0; right:0;" data-bs-dismiss="modal" data-bs-target="#pfpp-info"></button>
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
<!--    <div id="card-options" style="display: none;-->
<!--  position: absolute;-->
<!--  top: 0;-->
<!--  left: 0;-->
<!--  z-index: 999;-->
<!--border-radius: 50px;" >-->
<!--        <div class="row row-cols-1 pedit1-1" style=" width: 200px;">-->
<!--            <div class="column text-center" >-->
<!--                <button id="edit-card" class="w-100 button1-2">Edit</button>-->
<!--            </div>-->
<!--            <div class="column text-center" >-->
<!--                <button id="delete-card" class="w-100 button1-2">Delete</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div id="card-options" class="rdiv1-1" style="display: none;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 999;
border-radius: 12px;
width: 296px;
height: 265px;
transition: 420ms;
" >
        <div class="row row-cols-1 pedit1-1" style=" width: 200px; margin-top: 80px;
        margin-left: 50px; ">
            <div class="column text-center"  style="margin-bottom: 20px;">
                <button id="edit-card" class="w-100 button1-2m button-48"><span class="text">Edit</span></button>
            </div>
            <div class="column text-center" >
                <button id="delete-card" class="w-100 button1-2m buttonetid1-1 button-48"> <span class="text">Delete</span></button>
            </div>
        </div>
    </div>


</section>
<footer class="py-4 bg-dark text-white text-center mt-3">
    <div class="container position-relative">
        <!--relative doesn't change unless you change it,but it's changeable
        absolute should be contained in a relative positioned container-->
        <p class="lead">
            Copyright &copy 2023
        </p>
        <hr>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga incidunt molestiae perferendis, quisquam quo saepe suscipit voluptatem? Accusantium autem deleniti, maiores nulla quidem voluptatibus.
        </p>
        <a href="#">
            <i class="bi bi-arrow-up-circle h2 btn btn-dark h2"></i>
        </a>
    </div>
</footer>
<div id="modal-container"></div>
<div id="modal-add-container"></div>
<script type="text/javascript"> window.addEventListener("scroll",function(){

        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY >0)

        var icon1 =document.getElementById("icon1f");
        icon1 .classList.toggle("coloricon",window.scrollY >0)
        var icon2 =document.getElementById("icon2f");
        icon2.classList.toggle("coloricon1",window.scrollY >0)
    })</script>
</body>
</html>
