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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/css/bootstrap-slider.css" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />

    <!-- Custom styles for this template -->
    <style type="text/css">
    body{
background: #ECEAEA;
}

 

 
.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card-header .builder_logo .builder_name{font-size: 1.2em;
font-weight: 600;}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    display: flex;
    flex-flow: row wrap;
    background-color: rgba(247, 247, 249, 0.74);
    border-bottom: 1px solid rgba(0,0,0,.125);
    position: absolute;
    top: 20px;
    margin: 0;
    z-index: 1;
    width: 100%;

}.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    position: relative;
   /* padding: 1.25rem;*/
}.card-footer {
        position: absolute;
    /* padding: 0.50em 1rem; */
    background-color: rgba(62, 62, 62, 0.68);
    border-top: 1px solid rgba(0,0,0,.125);
    margin: 0;
    bottom: 10px;
    color: #fff;
}

.builder_logo{
 width: 50%; 
}
.builder_logo ul{
  list-style: none;
}
.builder_logo li span{
  font-size: 0.9em;
color: rgb(128, 117, 117);
}
.builder_logo li p{
  text-align: center; 
}
.builder_logo li{
  float: left;
  padding-right: 12px;
text-align: center;
}
.builder_image img{
  width: 100%;
  height: 200px;

}
.card-footer ul{
  list-style: none;
}
.card-footer li{
  float: left;
  padding-right: 8px;
  padding-left: 8px;
  border-right: 1px solid #e77;
}
.card-footer li:last-child{
  border-right: 0px solid rgba(0,0,0,.125);
}

.navbar-sfixed {
     top: 50px;
     z-index: 100;
    position: fixed;
    width: 100%;

}



.followers_show:before {
    content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    color: transparent;
    border: 10px solid black;
    border-color: transparent transparent white;
    margin-top: -20px;
    margin-left: 320px;
}

.followers_show{
  background-color: #fff;
   display: none;
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
    overflow: visible;
    position: fixed;
    top: 130px;
    margin-left: -300px;
    width: 370px;
    z-index: 0;
}
.lastfollowers.followers_show{
  display: none;
}
.lastfollowers.show .followers_show{
  display: block;
}

#notificationTitle {
    padding: 8px;
    font-size: 14px;
    background-color: #ffffff;
    position: fixed;
    z-index: 1000;
    width: 355px;
    color: #0e0c0c;
    border-bottom: 1px solid #dddddd;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 400;
}

#units_map .card-inverse p{
  color: #fff;
    padding-left: 12px;
}
#units_map .card-inverse .card-title {
    color: #fff;
    padding-left: 10px;

}

#units_map .card-inverse{
    background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 120px;

}

#units_map .card-inverse .card_data {
     background-color: rgba(49, 37, 37, 0.77);
    color: #fff;
}



#units_map .card-inverse .card_data ul{
  list-style: none;

}
#units_map .card-inverse .card_data li{
      float: left;
    padding-right: 20px;
  
}

#units_map .card-title {
    margin-bottom: .75rem;
}

#units_map{
    height: 640px;
    overflow-y: scroll;
}

    </style>

  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div style="margin-left: 15px; margin-right: 15px;" class="container-fuild">
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
    

  <div  class="container-fluid" style="
    margin-top: 30px;
    background-color: #fff;
">
  <p> Filters</p>
    <div style="margin-top: 1px;background-color: #fff;" id="nav_bar" class="row">

     <div class="col-md-2"><div class="form-group">
  
  <select title="Project Type" class="selectpicker form-control" multiple>
  <option>Apartment</option>
  <option>Villa</option>
  <option>Row houses</option>
</select>
</div></div>
<div class="col-md-2"><div class="form-group">
  
  <select title="Project Status" class="selectpicker form-control" multiple>
 
  <option>Ready to Move</option>
  <option>Under Construction</option>
  <option>Completed</option>
</select>
</div></div>
<div class="col-md-2"><div class="form-group">
  
  <select  title="Choose BHK" class="selectpicker form-control" multiple>
  <option>1 BHK</option>
  <option>2 BHK</option>
  <option>3 BHK</option>
</select>
</div></div>
<div class="col-md-2"><div class="form-group">
 
  <select  title="Area sqft" class="selectpicker form-control" multiple>
  <option>800-1500 sqft</option>
  <option>1200-1850 sqft</option>
  <option>1600-3520 sqft</option>
</select>
</div></div>
<div class="col-md-2"><div class="form-group">
  
  <select  title="Possession within" class="selectpicker form-control" multiple>
  <option>2 months</option>
  <option>6 months</option>
  <option>1 yrs</option>
</select>
</div></div>

      <div class="col-md-2"> <a href="builderpreview.php"><i class="fa fa-th-large" aria-hidden="true"></i> &nbsp; Grid View</a></div>
      

      </div>
</div>

      <div style="margin-top:10px;" class="container-fluid">
      <div class="row">
        <div class='col-md-9'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.8899194573396!2d76.96425065051076!3d11.046879392099735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85862cd88d5a9%3A0x88dcbe6699269d26!2sNithya+Gardens!5e0!3m2!1sen!2sin!4v1505467516567" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      
        <p>List of Projects</p>
   <div class="row">
        <div class="col-md-4">
          <div class="card">
  <div class="card-header">
    
    <div class=builder_logo><p class="builder_name">Nithya Gardens</p><span>Location</span></div>
    <div class=builder_logo>
          <ul>
          
          <li><p>Apartment</p><span>Project Type</span></li>
         
          </ul>
    </div>
  </div>
  <div class="card-block">
    <div class="builder_image"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png" class=""></div>
  </div>
  <div class="card-footer text-muted">
    <ul><li>Units : <b>105</b> </li><li>Bhk : <b>1 2 3 4 5</b> </li><li>Acres : <b>64</b> </li><li>Bank Approved : <b>Yes</b> </li><li>Furnished : <b>Semi</b> </li><li>Car Parking : <b>Yes</b> </li><li>Emi  : <b>Yes</b> </li></ul>
  </div>
</div>
        </div>
     
     
        <div class="col-md-4">
          <div class="card">
  <div class="card-header">
    
    <div class=builder_logo><p class="builder_name">Nithya Gardens</p><span>Location</span></div>
    <div class=builder_logo>
          <ul>
          
          <li><p>Apartment</p><span>Project Type</span></li>
         
          </ul>
    </div>
  </div>
  <div class="card-block">
    <div class="builder_image"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png" class=""></div>
  </div>
  <div class="card-footer text-muted">
    <ul><li>Units : <b>105</b> </li><li>Bhk : <b>1 2 3 4 5</b> </li><li>Acres : <b>64</b> </li><li>Bank Approved : <b>Yes</b> </li><li>Furnished : <b>Semi</b> </li><li>Car Parking : <b>Yes</b> </li><li>Emi  : <b>Yes</b> </li></ul>
  </div>
</div>
        </div>
        <div class="col-md-4">
          <div class="card">
  <div class="card-header">
    
    <div class=builder_logo><p class="builder_name">Nithya Gardens</p><span>Location</span></div>
    <div class=builder_logo>
          <ul>
          
          <li><p>Apartment</p><span>Project Type</span></li>
         
          </ul>
    </div>
  </div>
  <div class="card-block">
    <div class="builder_image"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png" class=""></div>
  </div>
  <div class="card-footer text-muted">
    <ul><li>Units : <b>105</b> </li><li>Bhk : <b>1 2 3 4 5</b> </li><li>Acres : <b>64</b> </li><li>Bank Approved : <b>Yes</b> </li><li>Furnished : <b>Semi</b> </li><li>Car Parking : <b>Yes</b> </li><li>Emi  : <b>Yes</b> </li></ul>
  </div>
</div>
        </div>
      
        </div>

        </div>
          <div id="units_map" class="col-md-3">
            <div class="row">
               <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>

              <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h3 class="card-title">Property Name </h3>
    <p>Location</p>
    
    
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li></ul></div>
</div>
                </div>
            </div>
          </div>

        </div>
       
      </div>
     
     
      
    
    

  </div>









    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".card").click(function(){
             window.location.href = 'property_unit.php'; 
        });


    });

   $('.lastfollowers').mouseover(function () {

                $('.followers_show').show("slow");
            }).mouseleave(function()
  {
    $('followers_show ').hide();
  });;

// $(".lastfollowers").mouseover(function()
//   {
//     $(this).addClass("show");
//   }).mouseleave(function()
//   {
//     $(this).removeClass("show");
//   });





    $(window).scroll(function () { 

   //alert($(window).scrollTop());

    if ($(window).scrollTop() >= 120) {
        //alert('true');
      $('#nav_bar').addClass('navbar-sfixed');
    }else{
       // alert('false');
    }

    if ($(window).scrollTop() < 120 ) {
      $('#nav_bar').removeClass('navbar-sfixed');
    }
  });



</script>

    </body>

    </html>