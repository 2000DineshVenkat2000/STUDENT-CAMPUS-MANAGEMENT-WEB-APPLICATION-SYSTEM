<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.html');
}

?>

<html class="animated fadeIn">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">
  h1{
    font-family: 'Montserrat', sans-serif;
    font-size: 28px;
    font-stretch: 20%;
    margin: 280px;
    letter-spacing: 0.31em;
    text-align: center;
    animation: animate 2s;
    animation-duration: 5s;  
  }

   .welcome{ 
            color:#242424;
            font-size: 15px;
            margin-top: 100px;
            font-family: 'Caveat', cursive;
            text-align: center;
            letter-spacing: 3px;
            text-align:center;
            animation: animatetext 5s; 
            animation-duration: infinite;
          
          }

  
  @keyframes animate
          {
              0%
              {
                  opacity: 0;
              }
              50%
              {
                  opacity: 0.8;
              }
              100%
              { 
                  opacity: 1; 
              }
              
          }

@keyframes animatetext
          { 
            0%
            {
                opacity: 0;
            }
            50%
            {
                opacity: 0;
            }
            100%
            { 
                opacity: 1; 
            }
              
          }
        
      .usrnm{
        color: #fc4e03;
      }
</style>

<head>
	<title>Home</title>
</head>
<body class="container-fluid">
<div>
  <div>
      <h1>welcome <lable class="usrnm"><?php echo $_SESSION['username']; ?></lable></h1>
  </div>

  <div class="welcome">
      <a href="logout.php">LOGOUT</a>
  </div>
</div>
</body>
</html>