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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/cd2c380d56.js" crossorigin="anonymous"></script>
    <link href="headers.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="alseadcss.css">
    <link rel="stylesheet" type="text/css" href="enfineer.css">
    <link rel="stylesheet" type="text/css" href="enginerinmangercss.css">
    <link rel="stylesheet" href="engineer2css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="engineer2.js"></script>
    <script src="style-js-eng.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body style="height: 1500px;" >
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
                    <a href="#projects" class="nav-link px-2 link-dark"><span class="he3 font1">Projects</span></a>
                </li>
                <li class="nav-item">
                    <a href="#clients" class="nav-link px-2 link-dark"><span class="he3 font1">Clients</span></a>
                </li>
                <li class="nav-item">
                    <a href="#staff" class="nav-link px-2 link-dark"><span class="he3 font1">Staff</span></a>
                </li>

            </ul>
        </div>


        <div class="col-md-3 text-end mt-2 p-3" >
            <div class="pagemanger1-1 ">
                <a href="#" class="text-light text-decoration-none " data-bs-toggle="modal" data-bs-target="#pfpp-info">
                    <div class="text-nowrap w-auto" style="display: flex";
                    >
                        <i class="fa-regular fa-address-card d-block p-3 mx-0" id="icon1f">

                        </i>
                        <div class="font2 p-3 mx-0">
                            <?php
                            echo "Eng.".$_SESSION["username"];
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
<section class="pag4-4">

</section>
<div class="em1-1">
    <div>
        <p class="font2 h1" id="projects">PROJECTS</p>
    </div>
    <div>
        <hr>
    </div>

    <div class="em1-2">
        <div>
            <p >The thousands of full-time professionals and tradesmen on Alsaad work sites and in our offices in the various country operations share a common goal: to deliver projects that delight our clients and strengthen our communities. We know that to be the reference contractor in the Middle East & Africa, we need the best people. Alsaad is committed to attracting and developing the industry's top talent.</p>
        </div>
    </div>

</div>
<!--
projects cards
-->
<div class="cardff1-1" id="cards-container">

    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 " >
<!--        <div class="column ">-->
<!--            <div class="incolumn">-->
<!--                <div>-->
<!--                    <img class="img-fluid w-auto " src="/photos/project1.svg" alt="project">-->
<!--                </div>-->
<!---->
<!--                <div class="editdiv1-1">-->
<!--                    <p>Merdeka 118</p>-->
<!--                    <hr>-->
<!--                    <p class="p-3">After topping out, construction on this 679-meter-tall build became the world’s second tallest skyscraper, earning it the tenth spot on our list of largest construction projects. The building symbolizes Malaysian independence\</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!--........-->
        <?php
        $db=new mysqli('localhost','root','','alsaadcompany_db');
        $qryS="select * from `projects` where `Engineer_ID`=".$_SESSION["id"];
        $res=$db->query($qryS);
        for($i=0;$i<$res->num_rows;$i++) {
            $row1=$res->fetch_array();
            ?>
            <div class="column">
                <div class="incolumn cardditem"data-card-id="<?php echo $row1[0]; ?>"data-card-name="<?php echo $row1[1]; ?>">
                    <a class="text-decoration-none menu1 " style="position: relative">
                        <div>
                            <img class="img-fluid w-auto " src="/photos/project1.svg" alt="project">
                        </div>

                        <div class="editdiv1-1">
                            <p>
                                <?php
                                echo "$row1[1]";
                                ?>
                            </p>
                            <hr>
                            <p class="p-3">
                                <?php
                                echo "$row1[2]";
                                ?>
                            </p>
                            <hr>
                            <p class="pb-4">
                                Start Date:<?php
                                echo "$row1[3]";
                                ?>
                                <br>
                                End Date: <?php
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
    </div>
</div>
<!--
projects cards
-->
<!--............-->
<div>
    <div class="row align-items-center justify-content-center flex-row-reverse bg-dark text-light p-5 mx-auto text-lg-start w-auto">
        <div class="col-md mx-auto">
            <img class="img-fluid " src="/photos/program.svg" alt="#">
        </div>
        <div class="col-md py-4">
            <h2 >Our Company's Employees satisfaction is a priority</h2>
            <p > Since The very beginning we sat our working environment according to the ILO's standards (ILS)</p>
            <br>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto consectetur culpa eaque fuga impedit laudantium, nemo odit qui quia quo ratione sapiente ullam!</p>
        </div>
    </div>
</div>
<!--
CLIENTS
-->
<div class="em1-1">
    <div>
        <p class="font2 h1" id="clients">CLIENTS</p>
    </div>
    <div>
        <hr>
    </div>

    <div class="em1-2">
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquid aspernatur doloremque, dolores et fugiat mollitia nemo nisi, obcaecati placeat porro possimus quisquam ut! Animi autem cumque doloribus earum est ipsa ipsam iusto natus nesciunt, nostrum nulla obcaecati perferendis, perspiciatis, quae quis repudiandae vero. Aspernatur consectetur ducimus iste molestiae nostrum optio, quas quo recusandae reprehenderit sed soluta tempora temporibus? Saepe.</p>
        </div>
    </div>

</div>
<!--
projects cards
-->
<div class="cardff1-1">
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
        <?php
        $db=new mysqli('localhost','root','','alsaadcompany_db');
        $qryS="select * from `client` where `Engineer_ID`=".$_SESSION["id"];
        $res=$db->query($qryS);
        for($i=0;$i<$res->num_rows;$i++) {
        $row1=$res->fetch_array();
        ?>
        <div class="column "">
        <div class="incolumn cardditem" data-card-id="<?php echo $row1[0]; ?>"data-card-name="<?php echo $row1[1]; ?>">
            <a class="text-decoration-none menu1 ">
                <div>
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
                    <p class="pb-4"">
                        <?php
                        echo "$row1[2]";
                        ?>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <?php
    }
    ?>
        <!--.........-->
    </div>
</div>
<!--
projects cards
-->
<!--............-->
<div>
    <div class="row align-items-center justify-content-center flex-row bg-dark text-white p-5 mx-auto text-lg-start w-auto">
        <div class="col-md mx-auto">
            <img class="img-fluid w-auto" src="/photos/workingoncomputers.svg" alt="#">
        </div>
        <div class="col-md py-4">
            <h2>Managing work Remotely is now Possible!!</h2>
            <p> Since the blow of COVID-19 we worked ourselves through and managed to get on
                the remote working management temporarily.</p>
            <br>
            <p> Afterwards we found how environment friendly and helpful it could be to manage work and data
                remotely, so we're making that available now.</p>
        </div>
    </div>
</div>
<!--............-->
<!--
STAFF
-->
<div class="em1-1">
    <div>
        <p class="font2 h1" id="staff">STAFF</p>
    </div>
    <div>
        <hr>
    </div>

    <div class="em1-2">
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquid aspernatur doloremque, dolores et fugiat mollitia nemo nisi, obcaecati placeat porro possimus quisquam ut! Animi autem cumque doloribus earum est ipsa ipsam iusto natus nesciunt, nostrum nulla obcaecati perferendis, perspiciatis, quae quis repudiandae vero. Aspernatur consectetur ducimus iste molestiae nostrum optio, quas quo recusandae reprehenderit sed soluta tempora temporibus? Saepe.</p>
        </div>
    </div>

</div>
<!--
projects cards
-->
<!--<div class="cardff1-1">-->
<!--    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">-->
<!--        <div class="column ">-->
<!--            <div class="incolumn">-->
<!--                <div>-->
<!--                    <img class="img-fluid w-auto " src="/photos/male.svg" alt="project">-->
<!--                </div>-->
<!---->
<!--                <div class="editdiv1-1">-->
<!--                    <p>Saeed Al-Ashqar</p>-->
<!--                    <hr>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, doloribus!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="cardff1-1">
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
        <?php
        $db=new mysqli('localhost','root','','alsaadcompany_db');
        $qryS="select * from `staff` where `Engineer_ID`=".$_SESSION["id"];
        $res=$db->query($qryS);
        for($i=0;$i<$res->num_rows;$i++) {
        $row1=$res->fetch_array();
        ?>
        <div class="column "">
        <div class="incolumn cardditem" data-card-id="<?php echo $row1[0]; ?>"data-card-name="<?php echo $row1[1]; ?>">
            <a class="text-decoration-none menu1 ">
                <div>
                    <img class="img-fluid w-auto " src="/photos/male2.svg" alt="project">
                </div>

                <div class="editdiv1-1">
                    <p>
                        <?php
                        echo "$row1[1]";
                        ?>
                    </p>
                    <hr>
                    <p class="p-3">
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
    <!--.........-->
</div>
</div>
<!--
projects cards
-->
<!--............-->
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
                            <p class="h5">
                                <?php
                                echo $_SESSION["username"];
                                ?>
                                </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <?php
                            echo $_SESSION["specialization"];
                            ?>
                        </td>
                        <td >
                            <img class="img-fluid w-auto d-sm-block mx-auto " src="/photos/engineer.svg" alt="picture-1"
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
<!--    modal-->
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
        <div class="column text-center" >
            <button id="delete-card" class="w-100 button1-2m buttonetid1-1 button-48"> <span class="text">Delete</span></button>
        </div>
    </div>
</div>
<script type="text/javascript"> window.addEventListener("scroll",function(){
        let nav = document.getElementById("divnav1");
        nav.classList.toggle("sticky",window.scrollY >0)
    })</script>
</body>
</html>