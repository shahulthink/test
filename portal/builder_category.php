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

 
 .top-section-wrap {
        width: 100%;
    background-color: rgba(0,0,0,.5);
    position: relative;
    margin-top: 50px;
   height: 40vh;

}
.top-section-wrap .blacklayer {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    max-height: 40vh;
 /*   background: rgba(0,0,0,.6);*/
    z-index: 1;
     background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(img/build.jpg);
    background-position: center;
    }
.top-section-wrap .city-main-wrap .icon-slide-up {
    font-size: 24px;
    color: #fff;
    position: absolute;
    bottom: 30px;
    right: 30px;
    z-index: 2;
    font-weight: 700;
    cursor: pointer;
    -webkit-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}
.lastUpdated {
    position: absolute;
    right: 40px;
    top: 20px;
    color: #fff;
    z-index: 9;
    cursor: pointer;
}
.lastfollowers {
    position: absolute;
    right: 130px;
    top: 20px;
    color: #fff;
    z-index: 9;
    cursor: pointer;
}
.top-section-wrap .city-main-wrap h2.heading {
     margin: 90px auto 0;
    padding: 0 0 8px;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    color: #fff;
    border-bottom: 1px solid #9b9b9b;
    max-width: 420px;
    position: relative;
    z-index: 10;
    text-transform: capitalize;
    text-shadow: 2px 2px 4px #000000;
}

.top-section-wrap .builderImg {
        position: absolute;
    top: -30px;
    left: 45%;
    height: 140px;
    width: 140px;
   /* background-color: #fff;*/
    border-radius: 4px 4px 0 0;
    overflow: hidden;
    z-index: 1;
}

.top-section-wrap .builderImg img {
    max-height: 100%;
    max-width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
background-color: rgba(255, 255, 255, 0.5);
padding: 8px;
border-radius: 4px;
}
.top-section-wrap .city-main-wrap ul.three-points {
    text-align: center;
    position: relative;
    z-index: 10;
}

.top-section-wrap .city-main-wrap ul.three-points li {
    display: inline-block;
    vertical-align: middle;
    color: #fff;
    font-size: 14px;
    text-align: left;
    padding: 0 15px;
    border-right: 1px solid #fff;
    margin-top: 12px;
      text-shadow: 2px 2px 4px #000000;
}
.top-section-wrap .city-main-wrap ul.main-points{
     text-align: center;
    position: relative;
    z-index: 10;
}

.top-section-wrap .city-main-wrap ul.main-points li:hover{
  background-color: rgba(0, 0, 0, 0.44);
  cursor: pointer;
}
.top-section-wrap .city-main-wrap ul.main-points li {
    display: inline-block;
    vertical-align: middle;
    color: #fff;
    
    text-align: center;
    padding: 0 15px;
    border: 1px solid #fff;
    font-size: 16px;
padding: 8px 12px;
margin: 0 8px 8px 0;
border-radius: 4px;
text-align: center;
    margin-top: 12px;

    text-shadow: 2px 2px 4px #000000;
}

.top-section-wrap .city-main-wrap ul.three-points li:last-child {
    border-right: 0;
}

.lastfollowers p:last-child {
background-color:rgba(26, 17, 17, 0.71);
padding: 3px;
border-radius: 4px;
font-size: 0.9em;
}

.lastUpdated p:last-child {
background-color: rgb(221, 68, 68);
padding: 3px;
border-radius: 4px;
font-size: 0.9em;
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
.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
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
    position: absolute;
    top: 130px;
    margin-left: -300px;
    width: 370px;
    z-index: 0;
}

.lastfollowers:hover .followers_show{
  display: block;
}

.lastfollowers:hover .followers_show ul li{
  display: block;
  float: none;
}
/*.lastfollowers.followers_show{
  display: none;
}
.lastfollowers.show .followers_show{
  display: block;
}*/

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

.gal {

  -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
    
  
  } 
  .gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {
    
    .gal {
  -webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;
 }
    
  }

.gal img {
    width: 100%;
    padding: 8px 0;
    
}

.gal-image{
  position: relative;
  cursor: pointer;
}
 
.gal-image .cat_detail {
  position: absolute;
    margin: 0;
    top: 20px;
    left: 30px;
    font-size: 1.8em;
    color: #fff;
    text-shadow: 2px 2px 4px #000000;
}

.gal-image .cat_bottom {
     position: absolute;
    margin: 0;
    bottom: 20px;
    /* left: 30px; */
    font-size: 1.2em;
    color: #fff;
    text-shadow: 2px 2px 4px #000000;
    background-color: rgba(56, 45, 45, 0.84);
    width: 100%;
    padding:4px;
}
  .gal-image .cat_bottom ul{
    list-style: none;
  }

.gal-image .cat_bottom ul li{
  float: left;
  padding-right: 6px;
  
}.gal-image .cat_bottom ul li::before{
  font-family: FontAwesome;
   content: "\f105";
    padding-right: 4px;
}

.card-photo{
      position: absolute;
    right: 10px;
        top: 20px;
    color: #fff;
    background: linear-gradient(to bottom,rgba(0,0,0,.5) 10%,rgba(0,0,0,.6) 60%,rgba(0,0,0,.6) 100%);
    border-radius: 4px;
        padding: 4px;
    font-size: 18px;
    cursor: pointer;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 999;
    bottom: 0;
    left: 0;
    background-color: #000;
  
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
   top: 35px;
    right: 45px;
    font-size: 45px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

.overlay .pro_image img {
width: 100%;
height: 540px;
}

.overlay .thum_image ul{
list-style: none;
}
.overlay .thum_image li{
float: left;
padding-right: 4px;
cursor: pointer;
}

.card-short{
  display: none;
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
    <section class="clearfix top-section-wrap">
<section style="" class="city-main-wrap clearfix">
<div class="blacklayer"></div><i data-type="overview-toggle" class="icon-new-circle-arrow icon-slide-up js-overview-detail-toggle"></i>
<div onclick="follow_hide();" class="lastfollowers"><p style="text-align: center;">2</p><p>Followers</p>
<div class="followers_show">
  <div id="notificationTitle">
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
</ul>
  </div>
</div>

</div>



<div class="lastUpdated"><p style="text-align: center;">22</p><p>Join Groups</p></div>
<h2 class="heading">Nithya Builder Private Limited</h2><div class="builderImg"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png?width=140&amp;height=140" alt="Images for Logo of Nithya Builder Private Limited" class=""></div><!-- <ul class="three-points"><li class="dep-rate"><span class="rate bigtxt">13 Years of Experience</span></li><li class="avg-rate"><span class="bigtxt">74 Total Projects</span></li><li class="total-projects"><span class="bigtxt">21 Ongoing Projects</span></li></ul> -->
<ul class="main-points"><li class="dep-rate"><span class="rate bigtxt">Apartment</span></li><li class="avg-rate"><span class="bigtxt">Villa</span></li><li class="total-projects"><span class="bigtxt">Row Houses</span></li></ul>

</section>

</section>  


<div style="padding-right: 0px;padding-left: 0px;" class="container-fluid">
  <nav id="nav_bar" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Our Projects </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="builderpreview.php"><b>2</b>&nbsp;Ongoing Projects</a></li>
      <li><a href="builder_ongoing.php"><b>3</b>&nbsp; Upcoming Projects</a></li>
      <li><a href="#"><b>3</b>&nbsp;Completed Projects</a></li>
      <li class="active" ><a href="builder_category.php"><b>24</b>&nbsp; Category Units</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
  <p> Filters</p>
    <div class="row">

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

      <div class="col-md-2"> <a href="builder_map.php"><i class="fa fa-map-o" aria-hidden="true"></i> &nbsp; Map View</a></div>
      

      </div>
</div>
</div>
      
<div class="container">
    <div class="text-center">
      <h3>Nithya Gardens Category</h3>
    </div>
  <div class="row">
  <div class="col-md-12">
  <div class="gal">
  

    <div class="gal-image">
      <img src="img/studio.png" alt="">
    <div class="cat_detail">
        <p class="cat_name">Studio</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2 BHk</li><li>1250 sqft</li><li>North</li></ul>
       
      </div>
       <div onclick="openNav()" class="card-photo">
                                      <span>4</span> &nbsp; <i class="fa fa-camera" aria-hidden="true"></i>
                                    </div>
    </div>
    <div class="gal-image">
      <img src="https://is1-2.housingcdn.com/4f2250e8/5dd07c0e04f2e443c08ff5cf819a9d63/v5/_m/png_ocean_drive_surat-surat-png_developers.jpg" alt="">
      <div class="cat_detail">
        <p class="cat_name">Apartment </p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>1,2,3 BHk</li><li>980-1250 sqft</li></ul>
       
      </div>
      
      </div>
      <div class="gal-image">
       
    <img src="https://www.biggerpockets.com/rei/wp-content/uploads/2012/12/Duplex.png" alt="">
      <div class="cat_detail">
        <p class="cat_name">Multi-family house</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>1,2,3 BHk</li><li>1250-3880 sqft</li></ul>
       
      </div>
    </div>
    <div class="gal-image">
 <img src="http://www.beaverealty.com/wp-content/uploads/2013/10/MP1.jpg" alt="">
   <div class="cat_detail">
        <p class="cat_name">Terraced house</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2 BHk</li><li>1250 sqft</li><li>North</li></ul>
       
      </div>
    </div>

    <div class="gal-image">
      <img src="img/studio.png" alt="">
    <div class="cat_detail">
        <p class="cat_name">Studio</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2 BHk</li><li>1250 sqft</li><li>North</li></ul>
       
      </div>
    </div>
    <div class="gal-image">
      <img src="http://arulhomes.com/wp-content/uploads/2016/01/Indigo-Condominiums.png" alt="">
      <div class="cat_detail">
        <p class="cat_name">Condominiums</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2,3  BHk</li><li>1250-4520 sqft</li></ul>
       
      </div>
       </div>

<div class="gal-image">
      <img src="http://amazingarchitecture.net/wp-content/uploads/2016/02/Screen-Shot-2016-02-16-at-3.03.50-AM.png" alt="">
      <div class="cat_detail">
        <p class="cat_name">Duplex</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2 BHk</li><li>1250 sqft</li><li>North</li></ul>
       
      </div>
       </div><div class="gal-image">
      <img src="http://images.adsttc.com/media/images/55b5/bd5b/e58e/ceb3/3000/0459/slideshow/4.jpg?1437973846" alt="">
      <div class="cat_detail">
        <p class="cat_name">Penta houses</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>2 BHk</li><li>1250 sqft</li><li>North</li></ul>
       
      </div>
       </div>
        <div class="gal-image">
       
    <img src="https://www.biggerpockets.com/rei/wp-content/uploads/2012/12/Duplex.png" alt="">
      <div class="cat_detail">
        <p class="cat_name">Multi-family house</p>
       
      </div>
      <div class="cat_bottom">
        <ul><li>1,2,3 BHk</li><li>1250-3880 sqft</li></ul>
       
      </div>
    </div>

      </div>

     </div> 
    
  </div>
</div>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="padding-top: 50px;" class="container-fluid">
    <div class="col-md-9">

      <!-- <div style="margin-top: 50px;" class="pro_image">
        <img src="">
      </div> -->
      <style type="text/css">
        #Tdimg{
          height: 460px;margin-top: 44px; background-size: cover;background-position: center top; background-repeat: no-repeat;
        }
      </style>
      <div  id="Tdimg">
            <div class="pre_img" style="background-image: url(http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png); height: 460px;margin-top: 44px;   background-size: cover;background-position: center top; background-repeat: no-repeat;">

            </div>
        </div>

      <div class="thum_image">
     <ul id="TdSlide"> <li class="slide"><img width="100px" height="100px" src="http://192.168.1.240/Nithya/Media/ProjectWizard//3Dimage/enry_28072017_1043.jpg"></li> <li class="slide"><img width="100px" height="100px" src="http://192.168.1.240/Nithya/Media/ProjectWizard//3Dimage/elewwe_28072017_1043.jpg"></li> <li class="slide"><img width="100px" height="100px" src="http://192.168.1.240/Nithya/Media/ProjectWizard//3Dimage/villasasa_28072017_1312.jpg"></li> <li class="slide"><img width="100px" height="100px" src="http://192.168.1.240/Nithya/Media/ProjectWizard//3Dimage/villah_28072017_1706.jpg"></li></ul>
      </div>
    </div>    
   <div class="col-md-3" style="margin-top: 51px;">
      <div class="panel panel-default">
    <div class="panel-heading">Nithya Gardens</div>
    <div class="panel-body">
      <div class="form-group">
  
  <input type="text" placeholder="Name" class="form-control" id="usr">
</div>
<div class="form-group">
 
  <input type="text" placeholder="91 80009 80009" class="form-control" id="pwd">
</div>
<div class="form-group">
 
  <input type="text" placeholder="email id" class="form-control" id="pwd">
</div>
<div class="form-group">
  <textarea class="form-control" placeholder="Message" rows="2" id="comment"></textarea>
  
</div>
    </div>
    <div class="panel-footer">
      <button type="button" class="btn btn-primary">Connect Builder Now</button>
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
        $(".cat_name").click(function(){
             window.location.href = 'property_unit.php'; 
        });

   

    });

//    $('.lastfollowers').mouseover(function () {

//                 $('.followers_show').show("slow");
//             });


// function follow_hide(){
// $('.followers_show').hide();
// }



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

function openNav() {
    document.getElementById("myNav").style.height = "100%";


}

function closeNav() {
    $('.card-short').show();
    document.getElementById("myNav").style.height = "0%";
}



</script>

    </body>

    </html>