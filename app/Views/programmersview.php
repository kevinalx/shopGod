<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>shop of the gods</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css">
</head>

<body class=" unique-color-dark">
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg  navbar-black  warning-color-dark fixed-top">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="storeview.php"><img src="" alt=""></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/store')?>">Home
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/record')?>">Users</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/product')?>">Product</a>
        </li>

             
            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

</header>
<br>
<br>
<br>


<main class="mt-15">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">


                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/m.jpg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>Madelen Soto Florez</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text text-justify"> I am a programmer who knows how to handle various
                            programming languages such as html,php,css,java, ect.
                            I consider myself a person trained to work as a team and fulfill
                            any function that I am given this is a bit of my. It handles SQL
                            Server Management Studio, MySql,Visual Studio Code,Visual Studio,NetBeans,
                            Android Studio.
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->


            </div>
            <div class="col-lg-4">
                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/kevin.jpg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>Kevin Alexis Torres Garcia</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text text-justify">
                            Hello, welcome to my portfolio, I am a Software Developer,
                            for now my experience is not very extensive but I will continue
                            to grow as a Developer, increase my knowledge and delve into them
                            to be able to offer you quality software for you and your company.
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->

            </div>
            <div class="col-lg-4">
                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/mauri.jpg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>Mauricio Alberto Velez Alvarez</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text text-justify">
                            Hi, I'm Mauricio. I like to learn every day things
                            that help me improve as a person and as a developer.
                            I really like the handling of code editors to solve
                            everyday problems, whether from mobile applications
                            to web pages.

                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->
            </div>
        </div>

    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/janner.jpg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>Janner Quinto Valencia </strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text text-justify " >
                        Technical bachelor in event operation with six months of
                        work experience, performing functions as merchandise, without
                        work experience, in the process of training in the area of 
                        Software Development with knowledge in handling programs such
                        as JAVA, JavaScript, Bootstrap, HTML, VIisual studio code, 
                        App inventor, MDBootstrap .. With skills for teamwork, creativity, 
                        recursion, free time management, Occupational interest: Webmaster 
                        assistant, Database Administration process assistant, Support the development of computer programs or packages of software.
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->

            </div>
            <div class="col-lg-4">
                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/foto.jpg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>Juan Fernando Restrepo Gonzalez </strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text text-justify">
                            Dedicated to study, work and family with knowledge
                            customer service and software developer with very good
                            willingness to work as a team.

                            Frontend and backend knowledge with capabilities
                            development in applications for programming languages such as:
                            java, C,NET, JavaScript, PHP, Android studio
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->

            </div>
            <div class="col-lg-4">
                <!-- Card Regular -->
                <div class="card card-cascade">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?php echo(base_url('public/img/deiver.jpeg'))?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title text-dark"><strong>deiver peña</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">Programmer</h6>
                        <!-- Text -->
                        <p class="card-text">
                        im a software developer 	
                        I handle the following languages and frameworks at a basic
                        and intermediate level HTML, CSS, JAVASCRIPT, BOOTSTRAP, java, PHP,
                        Python SQL SERVER, MYSql, git, github.
                        I also manage code editors and development environments like visual 
                        studio code, ATOM, Jcreator, netbeans and eclipse.
                        </p>

                        <!-- Facebook -->
                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                        <!-- Google + -->
                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

                    </div>

                </div>
                <!-- Card Regular -->

            </div>
        </div>
    </div>


</main>


<footer>
<div class="footer mt-5">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text">Shop  <span>of gods</span></h1>
        <p>
        we are a sports shop, inspired to give the best of sports brands
        </p>
        <!-- <br> -->
        <div class="contact">
          <i class="fa fa-phone"> &nbsp; 123-456-789</i>
          <i class="fa fa-envelope"> &nbsp; info@mywebsite.com</i>
        </div>
        <div class="social">
         <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-section quick-links">
        <h2>QUICK LINKS</h2>
        <ul>
          <a href="#">
            <li>Contact</li>
          </a>
          <a href="#">
            <li>Galleries</li>
          </a>
          <a href="#">
            <li>Write for us</li>
          </a>
          <a href="programmersview.php">
            <li>Terms and conditions</li>
          </a>
        </ul>
      </div>
     
    </div>
    <div class="footer-bottom">
      <p>© Shop of gods| Designed by FiveOfTeam G1</p>
    </div>
  </div>

</footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>

</html>