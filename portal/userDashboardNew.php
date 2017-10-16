<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>

<style type="text/css">
  
.contain{
 /* margin-top: 50px;*/
  background-color: rgb(43, 80, 117);
  height: 50px;
  padding: 5px;
  color:#fff;
  position: absolute;
  width: 100%;

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
      margin-top: 20px;

}

.profile{
  position: absolute;
  z-index: 9;

}
/* Profile sidebar */


.profile-sidebar {
    padding: 4px;
    background: rgba(255, 255, 255, 0.87);
    position: absolute;
    bottom: 0;
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
    display: flex;
}

.profile-usertitle {
  width: 50%;
  text-align: center;
/*  margin-top: 20px;*/
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
  height: 240px;
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
  padding: 4px;
  position: absolute;
  bottom: 0;
  width: 100%;
      background: rgba(51,51,51,.9);
}
.card .card-action a {
  color:#fff;
  margin-right: 3px;
  transition: color 0.3s ease;
  text-transform: uppercase;
  font-size: 12px;
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
    
   font-size:0.7em;
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
   font-size:0.9em;
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
   font-size:0.9em;
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
    position: absolute;
    z-index: 999;
    top: 60px;
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


.flex-center{
  position: absolute;
z-index: 99;
top: 100px;
left: 35%;
color: #fff;

text-shadow: 2px 2px 4px #000000;
}


#slider12b{
  width: 100%;
}

.start-search{
position: absolute;
z-index: 999;
top: 80px;
left: 35%;
color: #fff;
text-shadow: 2px 2px 4px #000000;
background-color: rgba(43, 80, 117, 0.37);
padding: 8px;
border-radius: 4px;
cursor: pointer;
}

.profile-center{
  position: absolute;
z-index: 99;
top: 100px;
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
    border-radius: 20px;
}

.gal-image{
  position: relative;
}
 
.gal-image span{
      top: 0;
  
    padding: 8px;
    color: #fff;
    height: 1.5em;
    line-height: 1.5em;
    position: absolute;
    bottom: 25px;
    margin: auto;
    font-size: 2em;
    font-weight: 500;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-transform: capitalize;
    text-align: center;
    width: 100%;
    text-shadow: 2px 2px 4px #000000;
}



.profiles{
   background-image: url("http://bbkgeojit.com/images/properties-banner.jpg");
    background-color: #cccccc;
    background-size: 100% 40vh;
}

.profile-userpic img {
  float: none;
margin: 0 auto;
width: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.userProfile{
  position: absolute;
bottom: 0;
background: rgba(56, 52, 52, 0.9);

border-top-right-radius: 4px;
border-top-left-radius: 4px;

}
.userProfile a{ 
      text-shadow: 2px 2px 4px rgb(0, 0, 0);
      color:#fff;
}

.prop-inc{
    text-align: center;
    position: absolute;
    margin-top: 75px;
    left: 35%;
    color: #fff;
    text-shadow: #000 2px;
    text-shadow: 2px 2px 4px #000000;
}
.nav-pills > li{
color: #fff;
text-shadow: 2px 2px 4px #000000;
margin: 4px;
padding: 4px;
}


.loc_drop{
  position: relative;
  display: inline-block;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.show {display:block;}


.parallex ul{
  list-style: none;
  display:flex;

}
.parallex li{
 
  float: left;
      flex: 1;
      text-align: center;
}

.parallex li p{
/*  font-size: 1.2em;*/
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;

}

.parallex li .counter{
  font-size: 1.3em;
    font-weight: 600;
    line-height: 1em;
    letter-spacing: 1px;
    margin: 0 0 5px;
    color: #3cbce7;
}

.parallex li .plus{
  font-size: 2em;
  color: #3cbce7;
}.parallex li .con{
  font-size: 2em;
  color: #3cbce7;
}


 .panel-body::after{
   
  font-family: FontAwesome;
    content: "\f105";
    position: absolute;
    margin: 0;
    right: 40px;
    top: 14px;
    font-size: 18px;
    cursor: pointer;
}
#list-panel a:hover{
color: #fff;
}
.listing-btn{
      background: rgba(158,158,158,.2);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #2b5076;
    padding: 12px;
    border-radius: 4px;
    font-family: "Roboto","Helvetica","Arial",sans-serif;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0;
    overflow: hidden;
    will-change: box-shadow;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);
    color: #fff;
    cursor: pointer;
    margin-top: 20px;
}

</style>

  
  

    <!-- <div class="container-fuild contain" style="display:none">
 
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
     
    </div> -->




<div class="container-fulid">
    <div class="text-center prop-inc">
  <h3>Properties for you in Coimbatore </h3>
  <p onclick="openNav()"><i class="fa fa-filter fa-2x" aria-hidden="true"></i></p>
  <p onclick="openNav()">Start filter</p>
 </div>
 <img src="http://bbkgeojit.com/images/properties-banner.jpg" alt="" style="width: 100%;height: 40vh;">




<div class="container-fuild listing">
  <div class="row">
    <div class="col-md-2">sds</div>
    <div class="col-md-4">cc</div>
    <div class="col-md-6">ji</div>
</div>
<div class="container-fuild listing">



  <div class="row">
  
  <div class="col-md-9">

    <div style="margin-top: -8px;" class="row">
   
    <h4 style="margin-left: 10px">Trending Properties</h4>
      <div class="col-md-4">
           <div class="card">
                <a href="property_unit.php"><div class="card-image">
                    <img class="img-responsive" src="https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg">
                    <div class="card-action">
                    <a href="#">Villa</a>
                    <a href="#">2Bhk</a>
                    <a href="#">2512 sqft</a>                    
                    <a href="#">North</a>
                    <a href="#">Rs 2,50,0000</a>
                  
                </div>
               
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
                
            </div>
      </div>
     <div class="col-md-4">
           <div class="card">
                <a href="property_unit.php"><div class="card-image">
                    <img class="img-responsive" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg">
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
                
            </div>
      </div>
      <div class="col-md-4">
           <div class="card">
                <a href="property_unit.php"><div class="card-image">
                    <img class="img-responsive" src="img/pro.jpg">
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
                
            </div>
      </div>
      <div class="col-md-4">
           <div class="card">
                <a href="property_review.php"><div class="card-image">
                    <img class="img-responsive" src="img/pro.jpg">
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
                
            </div>
      </div>
     <div class="col-md-4">
           <div class="card">
                <a href="property_review.php"><div class="card-image">
                    <img class="img-responsive" src="img/pro.jpg">
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
                
            </div>
      </div>
      <div class="col-md-4">
           <div class="card">
                <a href="property_review.php"><div class="card-image">
                    <img class="img-responsive" src="img/pro.jpg">
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
                
            </div>
      </div>
      
     

</div>
        
    
  </div>
  <div class="col-md-3">
  
   
        <ul class="list-group">
  <li class="list-group-item"><h4>Home Loan</h4>
      <p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
  <li class="list-group-item"><h4>Realestate News</h4><p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
  <li class="list-group-item"><h4>EMI Details</h4><p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
   <li class="list-group-item"><h4>Best Offers</h4><p>In metro cities, many people who invested in properties looking for rental income,<br>read more...</p></li>
</ul> 
        

  
  </div>
</div>


</div>

<div  class="container-fuild parallex">

<div style="color: #ddd;background-color:#282E34;text-align:center;padding:50px;text-align: justify;">
<div class="" style="margin-bottom: 50px;">
  <h3 class="text-center">Property in coimbatore</h3>
  <p class="text-center">Real estate Property in around Coimbatore are </p>
</div>
    
  <ul>
    
<li><p><span class="plus">+</span><span class="con">485</span></p><p>Under Contruction</p><span>in Coimbatore</span></li>
    <li><p><span class="plus">+</span><span class="con">585</span></p><p>Ready To Move</p><span>in Coimbatore</span></li>

     <li><p><span class="plus">+</span><span class="con">1250</span></p><p>Ongoing Project</p><span>in Coimbatore</span></li>
     <li><p><span class="plus">+</span><span class="con">680</span></p><p>Budget Flats</p><span>in Coimbatore</span></li>
     <li><p><span class="plus">+</span><span class="con">385</span></p><p>Top Category</p><span>in Coimbatore</span></li>

    
    </ul>
</div>



</div>


<div style="margin-top: 20px;margin-bottom: 20px;" class="container">

  <div id="list-panel" class="row">
    <div style="margin-bottom: 50px;" class="text-center"><h4 >Latest Property by Builders</h4></div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Nithya Gardens</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Electronic City</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Fairyland</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Royal Shelter</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">TVH</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Casagrand Builders</div>
        </div>
    </div>
     <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Electronic City</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">Fairyland</div>
        </div>
    </div>

    <div style="margin-top: 20px;" class="text-center"><a href="builderpage.php" class="listing-btn">Load More</a></div>
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
  

<?php include 'footerdemo.php';?>
<?php include 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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


function chooseLocation() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


$("#ex12b").slider({ id: "slider12b", min: 0, max: 100, range: true, value: [40, 60], tooltip:'always' });




    </script>
  </body>

</html>
