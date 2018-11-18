
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Task Manager</title>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <!--  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Brand Name</a>        

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('tasks/')}}">Tasks<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('summary/')}}">Summary</a>
            </li>           
          </ul>
        
        </div>
      </nav>
    </header>  -->

    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="./" class="navbar-brand">Bootstrap Menu</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li class="dropdown">
              <a href="{{url('tasks/')}}">Tasks 
              </a>
              <!-- <ul class="dropdown-menu">
                <li><a href="#">Mission</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Careers</a></li>
              </ul> -->
            </li>
            <li>
              <a href="{{url('summary/')}}">Summary</a>
            </li>
            <li>
              <a href="#">Services</a>
            </li>
            <li class="active">
              <a href="#">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="container"> 

   

   