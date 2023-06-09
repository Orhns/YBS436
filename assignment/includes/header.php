<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Assignment</title>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3_booktheme/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme CSS -->
    <link href="bootstrap3_booktheme/theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap3_booktheme/assets/js/html5shiv.js"></script>
    <script src="bootstrap3_booktheme/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="bootstrap3_booktheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_booktheme/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap3_booktheme/assets/js/holder.js"></script>    
  </head>
  <body>
  <header>  
    <div class="navbar navbar-default ">
      <div class="container">
         <nav>
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> BookCRM</a>
           </div>
           <div class="navbar-collapse collapse navbar-right">
             <ul class="nav navbar-nav">
               <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             </ul>
             <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search Customer" name="search">
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
             </form>               
           </div><!-- end navbar collapse -->
         
        </nav>
      </div>
    </div>  <!-- end navbar -->
</header>