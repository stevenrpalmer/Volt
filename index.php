<?php $thisPage="landing"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Volt - Spark your Business Potential">
    <meta name="author" content="Techworks">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <title>Volt - <?php if ($thisPage=="about") echo "Spark your Business Potential"; ?>
                  <?php if ($thisPage=="landing") echo "Spark your Business Potential"; ?>
    </title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Superslides -->
    <link rel="stylesheet" href="css/superslides.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <script>
  // GOOGLE ANALYTICS CODE
  </script>

  <body>
   <div id="slides">
      <ul class="slides-container">
        <li>      
        <img src="images/home.jpg" alt="home">
          <div class="container" style="">
            <h1>SPARK YOUR BUSINESS POTENTIAL</h1>
            <div class="form-group">
                <a href="/volt/overview/introduction">
                  <button type="submit" class="btn">Learn More</button>
                </a>
            </div>
          </div>
        </li>
      </ul> 
  </div>    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>

    
    <!-- Superslides JavaScript
    ================================================== -->
    <script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    <script>
      $(function() {
        $('#slides').superslides({
          hashchange: true
        });
      });
    </script>

  </body>
</html>


