<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Young Moroccan 23 years old. i have a degree in scinece economics, and i also have an accounting technician certificate. 
I turned to the computer studies domain, because i have always been passionate about this field.and i started my career with YouCode as much as web developer to strengthen my background and develop my knowledge">
  <meta name="keywords" content="Portfolio,Web Devlopper,Walid Harzafi,fullstack">
  <meta name="author" content="Walid Harzafi">
    <title>Harzafi</title>
    <link rel="shortcut icon" href="img/avatar.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        html {
  scroll-behavior: smooth;
}
    
    </style>
</head>

<body>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!--------------------------------------- nav bar -------------------------------------------------->
    <!-- ------------------------------------------------------------------------------------------- -->
    <nav id="theme" class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" style="background-color:#3498db !important;">
        <img id="LOGO1" src="img/harzafi.png" alt="avatar" srcset="">
        <a class="navbar-brand ml-2" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol1">WORK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol2">SKILLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol3" tabindex="-1" aria-disabled="true">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!-------------------------------------------------- home ------------------------------------------>
    <!-- ------------------------------------------------------------------------------------------- -->
    <div class="myyimg">
        <center><img id="myimg" onclick="left1()" src="img/walidwalid.jpg" ondblclick="left2()" alt="avatar" srcset="">
        </center>
    </div>
    <center>
        <h1 id="INFO1">WALID HARZAFI</h1>
    </center>
    <div class="script">
        <center>
            <p> Young Moroccan 23 years old. i have a degree in scinece economics, and i also have an accounting technician certificate. <br>
            I turned to the computer studies domain, because i have always been passionate about this field.and i started my career with YouCode as much as web developer to strengthen my background and develop my knowledge </p>
        </center>
    </div>
    <div class="text-center"> <a id="cv" href="https://drive.google.com/file/d/1nLKgqpgR-U0cuWrbUsdXyLeho8-yB00Z/view?usp=sharing">downlod cv</a>
</div>
    <hr id="scrol1" #3498db !important;>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!------------------------------------------works----------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1">W O R K</h1>
    </center>
    <div class="container justify-content-centers">
    	<div class="row justify-content-center">
        
        <?php
  $add = new PDO("mysql:host=localhost;dbname=portfolio","root","");
  $rep = $add->query('SELECT * FROM work ORDER BY id' );
  while($x = $rep->fetch()){
    
    echo "<div class='col-md-5 mb-5'>";
    echo "<div class='card' style='width: 25rem;'>";
    echo "<img src='img/$x[1]' class='card-img-top' alt='...'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$x[2]</h5>";
    echo "<a href='$x[3]' class='btn btn-primary d-flex justify-content-center'>$x[4]</a>";
    echo "</div></div></div>";
  }
    ?>

           
            </div>
        </div>
    </div>
    <hr id="scrol2" class="mt-5">

   

    <!-- ------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------skils--------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1">S K I L L S</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        HTML
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        CSS
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        javascript
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        adobe XD
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        BOOTSTRAP
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        Microsoft Office
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <div class="container SKIL">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        PHOTOSHOP
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        JQUERY
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        MySQL
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr id="scrol3">
    <!-- ------------------------------------------------------------------------------------------- -->
    <!------------------------------------------contact--------------------------------------------- -->
    <!--------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1">C O N T A C T</h1>
    </center>
    <div class="container conta">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a href="#" class=""> <i class="fab fa-whatsapp icone"></i>0613041159</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a href=https://www.google.com/maps/place/R204/@32.2368094,-8.5317003,17.95z/data=!4m5!3m4!1s0xdafa377e9dfdeb9:0xa5a5a9d48db1c594!8m2!3d32.106321!4d-8.7788329><i class="fas fa-home icone"></i>YOUSSOUFIA</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a href="mailto:harzafi55@gmail.com"><i
                                class="fas fa-mail-bulk icone"></i>Walid Harzafi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
<form action="main.php" method="POST" class=" mx-auto w-50">
  <div class="form-group">
    <label for="exampleInputEmail1">Your name</label>
    <input type="text" class="form-control" name="sender" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
   <div class="form-group">
   <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" name="subject" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="subject">
  </div>
    <label for="exampleFormControlTextarea1">Your Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div style="text-align:center;">
  <input type="submit" name="submit" value="Send" class="text-primary">
  </div>
</form>
</div>
    <!----------------------------------------------------------------------------------------------->
    <!------------------------------------------fotter----------------------------------------------->
    <!----------------------------------------------------------------------------------------------->
    <div class="fotter d-flex justify-content-center" style="background-color:#3498db !important;">
        <!-- <p>copyright 2019</p> -->
        <a href="https://www.facebook.com/harzafi"><i class="fab fa-facebook"></i></a>
        <a
            href="https://www.instagram.com/oualid.har/"><i
                class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/walid-harzafi-90a894173/"><i class="fab fa-linkedin"></i></a>
   </div>
       <!----------------------------------------------------------------------------------------------->
    <!------------------------------------------src js----------------------------------------------->
    <!----------------------------------------------------------------------------------------------->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>