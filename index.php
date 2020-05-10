<?php 
session_start();
if(!isset($_SESSION['mail_id']))
{
  header('location:index.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HOME-SCMS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Profile_pic</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="h1.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">EVENTS & NOTIFICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">CLEANLINESS AND PROPERTIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education" >ORDER FOOD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">LOST & FOUND</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">REPORT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">REWARDS</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
         <h1 class="mb-0">EVENTS &
          <span class="text-primary">NOTIFICATIONS</span>
        </h1>  
  <hr>
  <b><h3>NOTIFICATIONS:</h3></b>
Your complain has been successfully registered.It will be finsihed within 19/11/2019.-HOD CS.
<br><br>
You have successfully logged in...!!!
<br><br>
  <hr>
  <b><h3>EVENTS:</h3></b>

<b>
Time Table and Seating Arrangements for CAT - I ( SECOND YEAR STUDENTS)
</b>
<br><br>
Schedule of CAT-1 for Second Year Students (3rd Semester) Click here to view the Schedule Click here to view the Seating Arrangement
<br><br>
<b>
  TRANSPORT ARRANGEMENT FOR CALIBRATIONS 2019
</b>

<br><br>
  Date Morning  trip to college Return trip at 3.30 19-08-19 1/14,4/2,3/11,7,16/10(ViaKorattur),9A,17/1215, 12/20,21/55,22/23,25/55,27/29/55A, 28,36 39/30,31/37,41/55,45/42,46/55,50/55, 56 58, 60 1/14,4/2,3/11,7,16/10(Via Korattur),9A, 17/12,15,12/20,21/55,22/23,25/55, 29/55A,27/28,3.
<br><br>
<b>
Revaluation review - [Revaluation result published on 09.08.2019.]
</b>
<br><br>
1. If a student not satisfied the result of revaluation, he/she can apply for review. The students should pay Rs. 3000/- (Rupees Three thousand only) per  subject, only in the form of DD, in favor of “SVCE – CONTROLLER OF EXAMINATION”, payable at Chennai.
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="">KNOW MORE.</a>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">CLEANLINESS AND PROPERTIES MANAGEMENT</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <!--<i class="fas fa-fw fa-comments"></i>-->
                </div><form action="cleanregs.php" method=post name="cl">
                <div class="mr-5">Location & Area</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" >
                <!--<span class="float-left">Select</span>-->
                <div class="btn-group dropright">
<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black">
    Select
  </button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" name="d">
              <option class="dropdown-item" value="1st Block" name="d">1st Block</option>
              <option class="dropdown-item" value="2nd Block" name="d">2nd Block</option>
              <option class="dropdown-item" value="3rd Block" name="d">3rd Block</option>
              <option class="dropdown-item" value="4th Block" name="d">4th Block</option>
              <option class="dropdown-item" value="5th Block" name="d">5th Block</option>
              <option class="dropdown-item" value="Canteen" name="d">Canteen</option>
              <option class="dropdown-item" value="CCD" name="d">CCD</option>
              <option class="dropdown-item" value="Chill OutBlock" name="d">Chill Out Block</option>
              <option class="dropdown-item" value="Food Court" name="d">Food Court</option>
              </div>
  <div class="dropdown-menu">
  </div>
</div>
               <!-- <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>-->

              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <!-- <i class="fas fa-fw fa-list"></i>-->
                </div>
                <div class="mr-5">Landmarks</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" >
                <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black" value="l">
                Select
              </button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <input type="text-black" rows="10" cols="10" name="b">
              </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <!--<i class="fas fa-fw fa-shopping-cart"></i>-->
                </div>
                <div class="mr-5">Problems</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" >
                <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black" value="p">
                Select
              </button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <input type="text-white" name="c">
              </div>
                </div>
                <!--<span class="float-left">Select</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>-->
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <!-- <i class="fas fa-fw fa-life-ring"></i>-->
                </div>
                <div class="mr-5">Attach Image</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black">
                Select
              </button>

                </div>
                <!--<span class="float-left">Select</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>-->
              </a>
            </div>
          </div>
        </div>
        <br><br><center>
        <button>SUBMIT</button></center>
      </div>
     </form>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">ORDER FOOD</h2>
        ENTER THE PLACE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <select name="o"><option>-----------------------</option>
        <option>CAFE COFFEE DAY</option>
        <option>FOOD COURT</option>
        <option>CANTEEN</option>
        <option>CHILL OUT</option>
        </select>
        <br><br><br>
        ENTER THE TIME TO BE READY:
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" value=BREAKFAST name="a">BREAKFAST&nbsp&nbsp&nbsp&nbsp
        <input type="radio" value=LUNCH name="a">LUNCH&nbsp&nbsp&nbsp&nbsp
        <input type="radio" value=DINNER name="a">DINNER&nbsp&nbsp&nbsp&nbsp
        <br><br><br>
        Enter your food menu:<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <textarea rows="10" cols="30">
        </textarea><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button>ORDER</button>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <center><h2>LOST & FOUND</h2></center>

        <form action="lostorfoundregs.php" method=post name="laf">
        <br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLOCATION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="location"><br><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTYPE:&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <input type="radio" value="LOST" name="q">LOST&nbsp&nbsp
        <input type="radio" value="FOUND" name="q">FOUND&nbsp&nbsp
        <br><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLANDMARK:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="landmark">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPROPERTY NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="property">&nbsp&nbsp<br>
        <br>
        <center><button>SUBMIT</button></center></form>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
         <h2 class="mb-5">REPORT</h2>
         <form action="reportregs.php" method="post" name="rep">
        <p><b>Submit your problems to:</b></p><br>
        <input type="radio" value=SC name=a>STUDENT COUNCIL&nbsp&nbsp
        <input type="radio" value=PRINCIPAL name=a>PRINCIPAL&nbsp&nbsp
        <input type="radio" value=CSE name=a>CSE HOD&nbsp&nbsp
        <input type="radio" value=IT name=a>IT HOD&nbsp&nbsp
        <input type="radio" value=ECE name=a>ECE HOD&nbsp&nbsp
        <input type="radio" value=CSE name=a>CSE HOD&nbsp&nbsp
        <input type="radio" value=MECH name=a>MECH HOD&nbsp&nbsp
        <br><br>
        <p><b>Report your problem here.It will be responded as soon as possible</b></p>
        <br>
        <textarea rows="10" cols="70" name="comments">
        </textarea><br><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       
        <button>SUBMIT</button>&nbsp &nbsp
        <button>RESET</button></form>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <center>
        <h2 class="mb-5">Rewards &amp; Certifications</h2>
        <br><br><br><br><br>
        LEVEL:1<br>
        <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<h4>POINTS:16.0</h4>

<i class="fa fa-trophy" style="font-size:48px;color:yellow"></i>
<i class="fa fa-trophy" style="font-size:48px;color:yellow"></i>
<i class="fa fa-trophy" style="font-size:48px;color:yellow"></i>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
