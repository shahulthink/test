<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    

  </head>

<style type="text/css">
  
 .searchbackgorund {
    background-color: #2F4E78;
    height: 480px !important;
    color: #fff;
}

.container_content{
    width: 100%;
    background-color: #fff;
    padding: 0 12%;
    box-shadow: 0 3px 5px 0 rgba(0,0,0,.1);
    font-size: 15px;
    margin-top: 50px;
    position: relative;
    z-index: 9;
    padding-top: 10px;
}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color: #2b5075;
}

.pro_image{
      background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(http://www.sobha.com/project/current/Bangalore/sobha-silicon-oasis/images/oasis-banner-1.jpg);

}
.img-banner {
    height: 475px;
    
}
.builder_det{
  padding-left: 45px;
}
.builder_det{
  position: absolute;
  
    width: auto;
   
    color: #fff;
    z-index: 1;
    font-family: proxima_nova_rgregular,Arial,Helvetica,sans-serif;

}
.proj_name{
  font-size: 28px;
    line-height: 1;
    font-weight: 700;
    text-shadow: 0 2px 3px rgba(60,60,60,.8);
    color: #fff;
    max-width: 420px;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.loc-name {
    font-size: 22px;
    text-shadow: 0 2px 3px rgba(60,60,60,.8);
    font-weight: 400;
        margin-top: 100px;
}

.builder-name {
    display: inline-block;
    margin-top: 5px;
    font-size: 16px;
}

.gradient-fill {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-image: -webkit-linear-gradient(top,rgba(0,0,0,.35)20%,rgba(255,255,255,.1)75%,transparent 100%,transparent 100%);
    background-image: linear-gradient(to bottom,rgba(0,0,0,.35)20%,rgba(255,255,255,.1)75%,transparent 100%,transparent 100%);
}
.locality-scores{
      position: absolute;
    color: #fff;

    right: 11px;
   z-index: 1;
        padding-right: 150px;
    margin-top: 100px;
    background-color: rgba(43, 80, 117, 0.65);
padding: 28px;
}
</style>

  <body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="logobrand" src="img/realitindia_logo.png" ></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a style="background-color: rgb(43, 80, 117); color: rgb(255, 255, 255);" href="addProperty.php">Add Property</a></li>
           
            <li style="padding: 8px;">
            <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="fa fa-user" aria-hidden="true"></i> &nbsp; User Name
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="userProfile.php">Profile</a></li>
    <li><a href="#">Notifications</a></li>
    <li><a href="#">Find Friends</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">My home</a></li>
    <li><a href="#">Log out</a></li>
  </ul>
</div>  
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container-fulid container_content">

        


           <div style="display: flex;justify-content: center;padding-bottom: 8px;" class="row">
           <div class="col col-md-3">

<div class="input-group">
  <span class="input-group-addon groupinput" id="sizing-addon2"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
  <input type="text" list="areaSuggestion" class="form-control" placeholder="Area List" aria-describedby="sizing-addon2">

</div>  
<datalist id="areaSuggestion">
  <option value="Rs puram">
  <option value="selvapuram">
  <option value="townhall">

</datalist>       
        
          </div>
          <div class="col col-md-5">

<div class="input-group">
  <span class="input-group-addon groupinput" id="sizing-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
  <input type="text" list="areaSuggestion" class="form-control" placeholder="Start type to Search" aria-describedby="sizing-addon2">

</div>  
<datalist id="areaSuggestion">
  <option value="Rs puram">
  <option value="selvapuram">
  <option value="townhall">

</datalist>       
        
          </div>
<div class="col col-md-1">
          <button type="button" class="btn btn-primary">Search</button>
          </div>
          </div>
      </div>

<div class="container-fulid">
  <div class="pro_image img-banner">
  <div class="gradient-fill"></div>
      <div class="builder_det">
        <div class="proj-name"><h1 class="loc-name">
          <span class="proj-name">Casablanca</span><br>
        <span class="builder-name">by DNR Group</span></h1></div>
      </div>
<div class="locality-scores"><p>This Property is awaiting <br>for approval</p></div>

  </div>
  
</div>



    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>