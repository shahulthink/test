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

    <!-- Custom styles for this template -->
    

  </head>

<style type="text/css">
  
.contain{
  margin-top: 50px;
background-color: rgb(43, 80, 117);
height: 50px;
padding: 5px;
color:#fff;
}

body{
  background-color: rgba(225, 225, 225, 0.89);
}
.filter-header{
  list-style: none;
  padding:4px;
  display: flex;
justify-content: center;

}
.filter-header li{
 float: left;
padding-left: 4px;
}

.menu-large {
    position: absolute; !important;
}
.megamenu{
    padding: 20px 0px;
    width: 100%;
    position: initial;
}
.megamenu> li > ul {
    padding: 0;
    margin: 0;
}
.megamenu> li > ul > li {
    list-style: none;
    float: left;
}
.megamenu> li > ul > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.428571429;
    color: #333333;
    white-space: normal;

}
.megamenu> li ul > li > a:hover,
.megamenu> li ul > li > a:focus {
    text-decoration: none;
    color: #262626;
    background-color: #f5f5f5;
}
.megamenu.disabled > a,
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
    color: #999999;
}
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    cursor: not-allowed;
}
.megamenu.dropdown-header {
    color: #428bca;
    font-size: 18px;
}
@media (max-width: 768px) {
    .megamenu{
        margin-left: 0 ;
        margin-right: 0 ;
    }
    .megamenu> li {
        margin-bottom: 30px;
    }
    .megamenu> li:last-child {
        margin-bottom: 0;
    }
    .megamenu.dropdown-header {
        padding: 3px 15px !important;

    }
    .navbar-nav .open .dropdown-menu .dropdown-header{
        color:#fff;
    }
}



@media (min-width:480px) {

    .dropdown:hover .dropdown-menu {
        display: block;
    }

}

.img-list{
  width: 100%;
  height: 100%;
}

.listing{ 
  margin-right: 15px;
  margin-left:15px;
      margin-top: 50px;

}
/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}
.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}


.profile-content {

  background: #fff;
display: flex;
box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);

}

.profile-content .flex-list{
  flex-wrap: wrap;
  flex: 1;
}
.card{
    font-family: 'Roboto', sans-serif; 
    margin-top: 10px;
    position: relative;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  background-color: #fff; 
}
.card .card-reveal{    
    padding: 20px;
    position: absolute;
    background-color: #FFF;
    width: 100%;
    overflow-y: auto;
    /*top: 0;*/
    left:0;
    bottom:0;
    height: 100%;
    z-index: 1;
    display: none;    
}

.card .img-responsive{
  width: 100%;
  height: 280px;
}

.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 24px;
  font-size: 18px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 8px;
  position: absolute;
  bottom: 0;
  width: 100%;
      background: rgba(51,51,51,.9);
}
.card .card-action a {
  color:#fff;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {

  text-decoration: none;
}

/*.show-button{
      color: #fff;
    background-color: #337ab7;
    padding: 4px;
    text-align: center;
    cursor: pointer;
}*/

.card-image{
  position: relative;
}

.card .card-content{
  display: flex;
  flex-wrap: wrap;

}


.card-status{
    color: #fff;
    display: inline-block;
    /*padding: 1px 10px;*/
    float: right;
    top: 15px;
    right: 15px;
    position: absolute;
   text-transform: uppercase;
   text-shadow: 2px 2px 4px #000000;
   font-size:0.9em;
}
.card-social{
  color: #fff;
    display: inline-block;
    /*padding: 1px 10px;*/
    float: right;

    
    top: 35px;
    right: 15px;
    position: absolute;
   text-transform: uppercase;
text-shadow: 2px 2px 4px #000000;
   font-size:1em;
}

.prop-cards{
  color: #fff;
    display: inline-block;
    /*padding: 1px 10px;*/
    float: left;

    
    top: 15px;
    left: 15px;
    position: absolute;
   text-transform: uppercase;
text-shadow: 2px 2px 4px #000000;
   font-size:1.1em;
}

.social-share{
      /*border-top: 1px solid rgba(160, 160, 160, 0.2);*/
    padding: 8px;
    /* position: absolute; */
    bottom: 0;
    /*color: #fff;*/
    width: 100%;
   /* background: rgba(51,51,51,.9);*/
    text-align: center;
    cursor: pointer;
}
.social-share span{
  padding-right: 15px;
}

.profile-usermenu ul li span{
      float: right;
    font-size: 1.2em;
}



.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    background-color: #fff;
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
    font-size: 18px;
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
    right: 35px;
    font-size: 40px
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 14px;
    right: 35px;
  }
}

#myNav .container{
margin-top: 55px;
}


#menu ul li {
        width: auto;
    height: auto;
    cursor: pointer;
    font-size: 14px;
    padding: 6px;
    margin: 0px;
    border-radius: 4px;
    text-align: center;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    border: 1px solid;
}

.sel{
    background-color: #2b5076;
    color: #fff;
}

.flex-details{
  display: flex;   
  flex-wrap: wrap;
  margin-left: 20px;


}

.detail-flex{
  flex-grow: 1;
  justify-content: space-around;
}

.viewMap{
  background-color: rgb(221, 255, 255);
  border-radius: 8px;
  font-size: 1em;
  padding: 6px;


}

.viewMap:after{
    font-family: FontAwesome;
    content: "\f041";
    padding-left:10px;

}


#slider12b{
  width: 100%;
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
            <li onclick="openNav()"><a href="#"><i class="fa fa-filter" aria-hidden="true"></i> &nbsp;Filters</a></li>
              <li>
</li>

            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container-fuild contain" style="display:none">
 
      <ul class="filter-header">
          <li class="filter-item">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Coimbatore
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Erode</a></li>
                  
                </ul>
              </div> 
          </li>
          <li class="filter-item"> 
            <div class="form-group">
              <input class="form-control" id="inputdefault" placeholder="search area" type="text">
             </div>
          </li> 
          <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-building" aria-hidden="true"></i> &nbsp; Home Type
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
                
          <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-inr" aria-hidden="true"></i> &nbsp; Any Price
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
          <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-area-chart" aria-hidden="true"></i> &nbsp; Any Area
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
          <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-bed" aria-hidden="true"></i> &nbsp; BHk
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
              <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-building" aria-hidden="true"></i> &nbsp; Category
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
              <li class="filter-item"><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="fa fa-area-chart" aria-hidden="true"></i> &nbsp; More Filters
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <li><a href="#" class="small" data-value="apartment" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartment</a></li>
                   <li><a href="#" class="small" data-value="rowHouses" tabIndex="-1"><input type="checkbox"/>&nbsp;Row Houses</a></li>
                   <li><a href="#" class="small" data-value="villa" tabIndex="-1"><input type="checkbox"/>&nbsp;Villa</a></li>
                  
                </ul>
              </div></li>
              <li class="filter-item" onclick="openNav()"><a style="color: rgb(255, 255, 255); margin-top: 8px; position: absolute;" href="#">Reset All</a></li>

      </ul>
     
    </div>
<br>
<div class="container-fuild listing">
  <div class="row">
  <div class="col-md-2"><div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="https://www.w3schools.com/w3css/img_avatar3.png" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            Marcus Doe
          </div>
          <div class="profile-usertitle-job">
            Developer
          </div>
        </div>
       
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="userProfile.php">
              <i class="glyphicon glyphicon-home"></i>
              Followers <span>45</span>
              </a>
              
            </li>
            <li>
              <a href="#">
              <i class="glyphicon glyphicon-user"></i>
              Reviews <span>55</span></a>
            
            </li>
            <li>
              <a href="#">
              <i class="glyphicon glyphicon-user"></i>
              My Shortlist <span>55</span></a>
            
            </li>
            
          </ul>
        </div>
        <!-- END MENU -->
      </div></div>
  <div class="col-md-8">
    <div style="margin-top: -8px;" class="row">
    <div class="flex-details">
      <div class="detail-flex">Properties for you in Coimbatore</div>
      <div class="detail-flex"><span class="viewMap">View on Map</span></div>
      <div class="detail-flex">Sort by <a href="#">Realesed<i class="fa fa-caret-down" aria-hidden="true"></i></a></div>
      
    </div>
      <div class="col-md-6">
           <div class="card">
                <a href="property_review.php"><div class="card-image">
                    <img class="img-responsive" src="http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg">
                    <div class="card-action">
                    <a href="#">Villa</a>
                    <a href="#">2Bhk</a>
                    <a href="#">2512 sqft</a>                    
                    <a href="#">North</a>
                    <a href="#">Rs 2,50,0000</a>
                   <!--  <a href="#"  class="show-button">Read More</a> -->
                   <!--  <button type="button" class=" btn btn-custom pull-right" aria-label="Left Align">
                        <i class="fa fa-ellipsis-v"></i>
                    </button> -->
                </div>
               <!--  <span class="card-type">villa</span> -->
                <span class="card-status">Under Construction</span>
                <span class="card-social">
                    <span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-commenting-o" aria-hidden="true"></i>
</span>
</span>
                <div class="prop-cards">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>
                </div><!-- card image -->
                </a>
                

                <div class="card-reveal">
                    <span class="card-title">Property Name</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    <hr>
                    <span class="card-title">Amenities</span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <hr>
                       <span class="card-title">Specification</span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>



                </div><!-- card reveal -->
            </div>
      </div>
      <div class="col-md-6">
           <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/4262951361257072.jpg">
                    <div class="card-action">
                    <a href="#">Apartment</a>
                    <a href="#">2Bhk</a>
                    <a href="#">2512 sqft</a>                    
                    <a href="#">North</a>
                    <a href="#">Rs 2,50,0000</a>
                    <!-- <a href="#"  class="show-button">Read More</a> -->
                   <!--  <button type="button" class=" btn btn-custom pull-right" aria-label="Left Align">
                        <i class="fa fa-ellipsis-v"></i>
                    </button> -->
                </div>
               <!--  <span class="card-type">villa</span> -->
                <span class="card-status">Under Construction</span>
                </div><!-- card image -->
                
                <div class="card-content">
                    <div class="flex-cards">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>  
                    <div class="flex-cards">
                      <a class="btn" href="#">Enquiry Now</a>
                    
                    <button type="button" class="show-button btn btn-custom pull-right" aria-label="Left Align">
                       Read more
                    </button>
                    </div>                 
                    
                </div><!-- card content -->
                <!-- card actions -->
                <div class="social-share">

                <span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-commenting-o" aria-hidden="true"></i>
</span><span><i class="fa fa-share-alt" aria-hidden="true"></i>
</span>
                    
                  <!-- Read More -->
                </div>

                <div class="card-reveal">
                    <span class="card-title">Property Name</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>


                </div><!-- card reveal -->
            </div>
      </div>
      
     

</div>
        
     
    
  </div>
  <div class="col-md-2">
   <ul class="list-group">
  <li class="list-group-item"><h4>Home Loan</h4>
      <p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
  <li class="list-group-item"><h4>Realestate News</h4><p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
  <li class="list-group-item"><h4>EMI Details</h4><p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
</ul> 
  
  </div>
</div>


</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="container">
      <!-- <h3>More Filter</h3> -->
      
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
  <label for="usr">Searching For</label>
<!--   <input type="text" class="form-control" value="" id="alltext"> -->
<textarea class="form-control" rows="1" id="alltext"></textarea>
 <ul class="list">
    </ul> 
</div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
  <label for="usr">Category</label>
 <div id="menu">
          <ul class="list-inline">
    <li>Builder Floor</li>
    <li>Affordable Homes</li>
    <li>Luxury</li>
    <li>Townships</li>
    <li>Studio</li>
    <li>Ready To Move in</li>

  </ul>
  </div>
</div>
          </div>
         <div class="col-md-4">
            <div class="form-group">
                <label for="inputlg">Location</label>
                <input class="form-control" placeholder="location" id="inputlg" type="text">
              </div>
         </div>
         <div class="col-md-4">
           <div class="form-group">
                <label for="inputlg">Residing</label>
                <input class="form-control" placeholder="Residing location" id="inputlg" type="text">
              </div>
         </div>
         <div class="col-md-4">
           <div class="form-group">
                <label for="inputlg">Workplace</label>
                <input class="form-control" placeholder="Workplace location" id="inputlg" type="text">
              </div>
         </div>
      </div>

      <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
  <div class="panel-heading">Near by Place <span class="pull-right"><div class="dropdown">
  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Radius
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">1 Km</a></li>
    <li><a href="#">2 km</a></li>
    <li><a href="#">3 km</a></li>
  </ul>
</div> </span></div>

  <div class="panel-body"><div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="">selvapuram</li>
           
            <li data-value="Owner Houses" class="">town hall</li>
               <li data-value="Owner Houses" class="">Avinashi </li>
               <li data-value="Owner Houses" class=""> Peelamedu </li>
               <li data-value="Owner Houses" class=""> Race Course </li>
               <li data-value="Owner Houses" class="">Appusamy Layout </li>
            
          </ul>
        </div></div>
</div>
</div>
      </div>
      <hr>

      <div class="row">
<div class="col-md-4">
            <div class="form-group">
  <label for="usr"> Home Type</label>
 <div id="menu">
          <ul class="list-inline">
    <li>Apartment</li>
    <li>Row Houses</li>
    <li>Villa</li>
   

  </ul>
  </div>
</div>
          </div>

<div class="col-md-4">
            <div class="form-group">
  <label for="usr"> BHK</label>
 <div id="menu">
          <ul class="list-inline">
    <li>1 BHk</li>
    <li>2 BhK</li>
    <li>3 Bhk</li>
    <li>4 Bhk</li>
    <li>5 Bhk</li>
   

  </ul>
  </div>
</div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
  <label for="usr"> Status</label>
 <div id="menu">
          <ul class="list-inline">
    <li>Ready to Move In</li>
    <li>Under Condustruction</li>
    <li>Completed</li>
    
   

  </ul>
  </div>
</div>
          </div>


<div class="col-md-8">
  <div class="form-group">
  <label for="usr"> Facing</label>
   <div id="menu">
          <ul class="list-inline">
    <li>North</li>
    <li>South</li>
    <li>West</li>
    <li>East</li>
    <li>North - East</li>
    <li>North - West</li>
    <li>South - East</li>
    <li>South - West</li>
    
   

  </ul>
  </div>
</div>
</div>


<div class="col-md-4">
  <div class="form-group">
  <label for="usr"> Price Slider</label>
<br>
     <input id="ex12b" class="form-control" type="text"/>   
       </div>
       </div>

      
        
           
      </div>
<hr>


    <div class="row">
      <div class="col-md-12">
          <button type="button" onclick="search_result()" class="btn btn-default search">Search</button>
      </div>
    </div>


  </div>
</div>
  

<script   src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.js"></script>

<script type="text/javascript">


  $(function(){

    $('.show-button').on('click',function(){ 
        $(this).parent().parent().find('.card-reveal').slideToggle('slow');
    });
    
    $('.card-reveal .close').on('click',function(){
        $(this).parent().slideToggle('slow');
    });
});


function openNav() {
    document.getElementById("myNav").style.height = "100%";
}



function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}


$(function(){

  $('#menu li').click(function(){
        $(this).addClass('sel');
        $('#alltext').append($(this).text());
        // var val = $('#alltext').append($(this).text());
         
  });


});


function search_result() {
  document.getElementById("myNav").style.height = "0%";
  $('.contain').show();
  $('.listing').css("margin-top", "0px");
}


$("#ex12b").slider({ id: "slider12b", min: 0, max: 100, range: true, value: [40, 60], tooltip:'always' });
// Without JQuery


   // $('#show').on('click',function(){        
   //      $('.card-reveal').slideToggle('slow');
   //  });
    
   //  $('.card-reveal .close').on('click',function(){
   //      $('.card-reveal').slideToggle('slow');
   //  });



</script>
  </body>

</html>
