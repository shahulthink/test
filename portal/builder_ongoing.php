<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>

    <!-- Custom styles for this template -->
    <style type="text/css">
 

 

.navbar-sfixed {
     top: 0px !important;
     z-index: 11;
    position: fixed !important;
    width: 100%;

}

.navbar-filters{
      top: 50px !important;
    z-index: 11;
    position: fixed !important;
    width: 100%;
    background-color: #e7e7e7;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
}

 .top-section-wrap {
        width: 100%;
    background-color: rgba(0,0,0,.5);
    position: relative;
   
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

#nav_bar{
  background-color: #FFFFFF !important;
}
#filters .btn-default {
      background: #FFFFFF !important;
    border: none;
}

/*.card {
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
    background-color: #f7f7f9;
    border-bottom: 1px solid rgba(0,0,0,.125);
}.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
   /* padding: 1.25rem;*/
/*}.card-footer {
    padding: 0.50em 1rem;
    background-color: #f7f7f9;
    border-top: 1px solid rgba(0,0,0,.125);
}*/*/



/*.card-footer ul{
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
}*/




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




/*.card-product {
    margin-top: 30px;
}*/
.card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin: 25px 0;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
}
.card .card-image img{
  width: 100%;
    height: 280px;
 
    min-height: 100%;
    min-width: 100%;
}


.card .card-image {
/*    height: 50%;
    width: 50%;*/
        
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    z-index: 3;
    box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.card .card-content {
    padding: 8px;
    position: relative;
}
.card .card-footer {

    margin: 0px;
    border-top: 1px solid #eeeeee;
    padding: 8px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.card .builder_logo{
 width: 100%; 
}
.card .builder_logo ul{
  list-style: none;
}
.card .builder_logo li span{
  font-size: 0.9em;
color: rgb(128, 117, 117);
}
.card.builder_logo li p{
  text-align: center; 
}
.card .builder_logo li{
  float: left;
  padding-right: 12px;
text-align: center;
}
.card-footer ul{
  list-style: none;
  padding:4px;
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

.card-photo{
      position: absolute;
    right: 10px;
    bottom: 20px;
    color: #fff;
    background: linear-gradient(to bottom,rgba(0,0,0,.5) 10%,rgba(0,0,0,.6) 60%,rgba(0,0,0,.6) 100%);
    border-radius: 4px;
        padding: 4px;
    font-size: 18px;
    cursor: pointer;
}

.card-short{
  position: absolute;
    left: 10px;
    bottom: 20px;
    color: #fff;
    text-shadow: 2px 2px 4px #000000;
       font-size: 1em;
    border-radius: 4px;
    padding: 4px;
    cursor: pointer;
    border: 1px solid #FFF;
    text-transform: uppercase;
}


.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 12;
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

.flex-cont{
  display: flex;

}
.item-cont{
  width: 50%;
}
    </style>

  </head>
 
    <section class="clearfix top-section-wrap">
<section style="" class="city-main-wrap clearfix">
<div class="blacklayer"></div><i data-type="overview-toggle" class="icon-new-circle-arrow icon-slide-up js-overview-detail-toggle"></i>
<div  class="lastfollowers"><p style="text-align: center;">2</p><p>Followers</p>
<div class="followers_show">
  <div id="notificationTitle">
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">sent invite</span>
    Dinesh.k
  </li>
  <li class="list-group-item">
    <span class="badge">sent invite</span>
    Bala
  </li>
  <li class="list-group-item">
    <span class="badge">sent invite</span>
    Suresh kumar
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
      <li class="active"><a href="builder_ongoing.php"><b>3</b>&nbsp; Upcoming Projects</a></li>
      <li><a href="#"><b>3</b>&nbsp;Completed Projects</a></li>
      <li><a href="builder_category.php"><b>24</b>&nbsp; Category Units</a></li>
    </ul>
  </div>
</nav>
</div>
  <div id="filters" class="container">
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

   <div class="container" style="margin-top: 50px;">
    
      <div class="row">
     <div class="col-md-12">
     <div class="card card-product view">
     <div class="row">
         <div class="col-md-6"> <div class="card-image" data-header-animation="true">
                                    <a href="#">
                                        <img class="img" src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png">
                                    </a>
                                    <div onclick="openNav()" class="card-photo">
                                      <span>4</span> &nbsp; <i class="fa fa-camera" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-short"><span>shortlist</span></div>
                                    
                                </div></div>
       <div class="col-md-6"> <div class="card-content">
                                    <div class="flex-cont">
                                    <div class="item-cont">
                                    <h4 class="card-title">
                                        Nithya Gardens
                                    </h4>
                                    <h6>Location</h6>
                                    </div>
                                    <div class="item-cont">
                                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Enquiry Now</button>
<button type="button" class="btn btn-success btn-sm">Site Visit</button>
                                    </div>
                                    </div>
                                     <div class="card-description">
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                        
                                    </div>
                                    <div class="builder_logo">
          <ul>
          <li><p>24-sep-2017</p><span>Possession Date</span></li>
          <li><p>Apartment</p><span>Project Type</span></li>
          <li><p>Ready To Move</p><span>Project Status</span></li>
          <li><p>3400</p><span>Price</span></li>
          <li><p>1250-3450</p><span>Area sqft</span></li>
          </ul>
    </div>
   <br>
  
                                    
                                </div>
         
       </div>
       <div class="col-md-12">
       <div class="card-footer">
          <ul><li>Units : <b>105</b> </li><li>Bhk : <b>1 2 3 4 5</b> </li><li>Acres : <b>64</b> </li><li>Bank Approved : <b>Yes</b> </li><li>Furnished : <b>Semi</b> </li><li>Car Parking : <b>Yes</b> </li><li>Emi  : <b>Yes</b> </li><li><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;<b>12</b> </li><li><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<b>22</b> </li><li><i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp; Video</li><li><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Brochure</li></ul>

                                </div>

                                </div>
       </div>

       </div>
     </div>

    
</div>
<div class="row">
     <div class="col-md-12">
     <div class="card card-product view">
     <div class="row">
         <div class="col-md-6"> <div class="card-image" data-header-animation="true">
                                    <a href="#">
                                        <img class="img" src="http://www.sobhainternationalcity.ind.in/images/international-city-banner-2.jpg">
                                    </a>

                                    <div class="card-photo">
                                      <span>4</span> &nbsp; <i class="fa fa-camera" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-short"><span>shortlist</span></div>
                                </div></div>
       <div class="col-md-6"> <div class="card-content">
                                    
                                  <div class="flex-cont">
                                    <div class="item-cont">
                                    <h4 class="card-title">
                                        Nithya Gardens
                                    </h4>
                                    <h6>Location</h6>
                                    </div>
                                    <div class="item-cont">
                                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;Enquiry Now</button>
<button type="button" class="btn btn-success btn-sm">Site Visit</button>
                                    </div>
                                    </div>

                                     <div class="card-description">
                                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                        
                                    </div>
                                    <div class="builder_logo">
          <ul>
          <li><p>24-sep-2017</p><span>Possession Date</span></li>
          <li><p>Apartment</p><span>Project Type</span></li>
          <li><p>Ready To Move</p><span>Project Status</span></li>
          <li><p>3400</p><span>Price</span></li>
          <li><p>1250-3450</p><span>Area sqft</span></li>
          </ul>
    </div>
   <br>
  
                                    
                                </div>
         
       </div>
       <div class="col-md-12">
       <div class="card-footer">
          <ul><li>Units : <b>105</b> </li><li>Bhk : <b>1 2 3 4 5</b> </li><li>Acres : <b>64</b> </li><li>Bank Approved : <b>Yes</b> </li><li>Furnished : <b>Semi</b> </li><li>Car Parking : <b>Yes</b> </li><li>Emi  : <b>Yes</b> </li><li><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;<b>12</b> </li><li><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;<b>22</b> </li><li><i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp; Video</li><li><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Brochure</li></ul>

                                </div>

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







 <?php include 'footerdemo.php';?>
<?php include 'footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".card-title").click(function(){
             window.location.href = 'property_unit.php'; 
        });

        // $('.card-photo').click(function(){
        //     alert('ho');
        // });

    });

   $('.lastfollowers').mouseover(function () {

                $('.followers_show').show("slow");
            });
$('.followers_show').click(function()
  {
    $(this).hide('1000');
  });



function openNav() {
    document.getElementById("myNav").style.height = "100%";


}

function closeNav() {
    $('.card-short').show();
    document.getElementById("myNav").style.height = "0%";
}


 $("#TdSlide").find("li").click(function() {
                    var src = $("img", this).prop("src");
                    $('.pre_img').css('display','none');
                    $('#Tdimg ').css('background-image','url(' + src + ')');
                });



    $(window).scroll(function () { 

   //alert($(window).scrollTop());

    if ($(window).scrollTop() >= 50) {
        //alert('true');
      $('#nav_bar').addClass('navbar-sfixed');
      $('#filters').addClass('navbar-filters');
    }else{
       // alert('false');
    }

    if ($(window).scrollTop() < 50 ) {
      $('#nav_bar').removeClass('navbar-sfixed');
      $('#filters').removeClass('navbar-filters');
    }
  });



</script>

    </body>

    </html>