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
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    
<style type="text/css">

 .pro_image{
      background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(http://www.sobhainternationalcity.ind.in/images/international-city-banner-2.jpg);

}
.img-banner {
    height: 475px;
    
}


body{
      background: #ebebeb;
     font-family: 'Roboto', sans-serif;
    text-transform: none;
}
.navbar-default {
    background-color: rgba(255, 255, 255, 0.7) !important;
}

.ongoing_details{

position: relative;
z-index: 1;
    margin-top: -180px;

}

.ongoing_preview{
  background: rgba(255, 255, 255, 0.78);
/*padding: 4px;*/
margin-bottom: 8px;
border-radius: 3px;
height: 180px;
box-shadow: 0 0 6px rgba(0,0,0,.1);
position: relative;
}

.ongoing_details h2 {
 text-shadow: 2px 2px 4px rgb(41, 37, 37);
color: rgb(255, 255, 255);

}
.ongoing_details p {
 text-shadow: 2px 2px 4px rgb(41, 37, 37);
color: rgb(255, 255, 255);
padding-left: 18px

}
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
      background-color: rgba(0, 0, 0, 0.58);
    color: #fff;
    box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);
    position: absolute;
    top: -15px;
    right: 15px;

}



.margin-lisit{
  margin-top: 51px;
}
.breadhome{
  padding:10px;
}

.righttag{
  color: rgb(255, 255, 255);
  text-shadow: 2px 2px 4px rgb(41, 37, 37);
  position: absolute;
top: 75px;
right: 0;
}


.righttag a{
  display: flex;
justify-content: center;
color:#fff;
text-shadow: 2px 2px 4px rgb(41, 37, 37);
text-decoration: none;
}

.righttag p{
  background-color: rgba(0, 0, 0, 0.58);
  border-radius: 4px;
  padding: 4px;
  margin-top: 10px;
  text-shadow: 2px 2px 4px rgb(41, 37, 37);
  cursor: pointer;
}

.righttag .fa{
  text-shadow: 2px 2px 4px rgb(41, 37, 37);
  font-size: 1.2em;
}


.breadcrumb:after {
   font-family: FontAwesome;
   content: "\f105";
   padding-left: 4px;
}


  .breadcrumb {
    padding: 0px 0px !important;
    margin-bottom: 0px !important;
    background-color: rgba(255, 255, 255, 0) !important;
}

.project_card{
  display: flex;
  justify-content:flex-start;
}
.card-item{
  width: 50%
} 

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
background-color: rgba(0, 0, 0, 0.58);
min-width: 300px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
padding: 8px 8px;
z-index: 1;
right: 0px;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.share-link{
  font-size: 1.8em;
   color: rgb(255, 255, 255);
  text-shadow: 2px 2px 4px rgb(41, 37, 37);
  cursor: pointer;
}
.like-comment p a{
cursor: pointer;
color:#fff;
}

.card-item p{
  color: #000;
  text-shadow: none !important;
}
.like-comment p a .fa{
  font-size: 1.4em;
}

.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}


.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google-plus:hover,.btn-google-plus:focus,.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,0.2)}




.btn-linkedin{color:#fff;background-color:#007BB6;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:hover{color:#fff;background-color:#007BB6;border-color:rgba(0,0,0,0.2)}


#units .card-block h3{
font-size: 18px;
}

#units .card ul{
  list-style: none;
  padding-left: 4px;

}

#units .card li{
  float: left;
  padding:4px;

}

.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    height: 150px;
    margin-bottom: 2rem;
}
.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1em;
    color: #fff;
    text-shadow: 2px 2px 4px #000000;
    background-color: rgba(53, 49, 49, 0.29);

}


.sidenav {
    height: 100%;
    width: 0;
   position: fixed;
z-index: 1;
top: 51px;
right: 0;
background-color: #FEFEFE;
overflow-x: hidden;
transition: 0.5s;
padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.pro_card li h5{
  text-align: center;
font-size: 1.2em;
text-transform: uppercase;
    font-weight: bolder;
}

.pro_card span{
  color: rgba(77, 73, 73, 0.9);
}

.pro_card .list-inline > li{
  padding-right: 15px!important;
padding-left: 15px!important;
}
.nav-tabs { border-bottom: 0px solid #DDD!important; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666;font-size: 16px; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card-tab{background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }


.enq-card{
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;

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

.enq-card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f7f7f9;
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.enq-card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-detail{

    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;

}
.card-header-detail {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f7f7f9;
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.card-block-detail{
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
  }

#group li{
  font-size: 14px;
}
     
</style>
  </head>

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
    <li><a href="#">Profile</a></li>
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
<div class="container-fuild" style="position: relative;">
       <div class="pro_image img-banner"></div>
<div class="pull-right righttag">
  <ul class="list-inline">
  <div class="dropdown">
<li class="location"><a href='#'><i class="fa fa-share-alt" aria-hidden="true"></i>
</a><p>Share</p></li>
<div class="dropdown-content">
<label>Share Page</label>
 <input type="text" class="form-control" placeholder=""  value="http://realitindia.com/propertyName" id="usr">
 <br>

 <ul class="list-inline" style="text-align: center;">
<li class="list-inline-item"><a class="btn btn-block btn-social btn-facebook">
        <i class="fa fa-facebook"></i> 
      </a></li>
<li class="list-inline-item"> <a class="btn btn-block btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i> 
      </a></li>
<li class="list-inline-item"><a class="btn btn-block btn-social btn-linkedin">
        <i class="fa fa-linkedin"></i> 
      </a></li>
 </ul>

    
     
     
  </div>
</div>

              <li onclick="loc_nav()" class="home"><i class="fa fa-users" aria-hidden="true"></i>
<p>Join Group</p></li>
              <li onclick="openNav()" class="location"><a href='#'><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a><p>Write Review</p></li>

            </ul>
    </div>

</div>

<div class="container-fulid ongoing_details" style="margin-right: 15px;margin-left: 15px;">
  <h2 style="text-align: center;">Project Name</h2>
  <p style="text-align: center;">Location</p>
 <!-- <div class="col-md-3"></div> -->
 <div class="col-md-2"></div>
 <div class="col-md-7 ongoing_preview">
       <div class="breadhome">
            <ul class="list-inline">
              <li class="breadcrumb"><a href='#'>Home</a></li>
              <li class="breadcrumb"><a href='#'>location</a></li>
              <li class="breadcrumb"><a href='#'>Project Name</a></li>
            </ul>
         </div>
         <div class="row">
           
            <div class="col-md-12 pro_card">
               
<ul class="list-inline">
  <li class="list-inline-item"><h5>25 Aug 2018</h5> <span>Possession Date</span></li>
  <li class="list-inline-item"><h5>Villa</h5><span>Project Type</span></li>
  <li class="list-inline-item"><h5>406</h5><span>No of Units</span></li>
  <li class="list-inline-item"><h5>64 </h5><span>Acres</span></li>
  
  <li class="list-inline-item"><h5>1 2 3 4</h5><span>Bhk</span></li>
  <li class="list-inline-item"><h5>3400</h5><span>Price</span></li>
  <li class="list-inline-item"><h5>1250-4850</h5><span>sqft</span></li>
  
  
 
  
</ul>
<hr>
<ul class="list-inline">
 
  <li class="list-inline-item"><strong>Bank Approved</strong></li>
  <li class="list-inline-item"><strong>Furnished</strong></li>
  <li class="list-inline-item"><strong>Car Parking</strong></li>
  <li class="list-inline-item"><strong>Check EMI</strong></li>
  </ul>
            </div>
            

         </div>
         
<button type="button"  onclick="compare()" data-toggle="tooltip" data-placement="top" title="Compare" class="btn btn-default btn-circle"><i class="fa fa-exchange"></i></button>


  </div>
 <div class="col-md-3 like-comment">
 <ul class="list-inline">
  <li class="list-inline-item"><p class="share-link">12</p><p><a href=""><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></a></p></li>
  <li class="list-inline-item"><p class="share-link">12</p> <p><a href=""><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a></p></li>
  <li class="list-inline-item"><p class="share-link">15 </p><p><a href=""><i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i></a></p></li>
  <li class="list-inline-item"><p class=""> Video</p><p><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i></a></p></li>
  </ul>

 </div>
</div>

<section>
  
 <div class="container" style="margin-top: 15px">
    <div class="row">
        <div style="margin-top: 35px" class="col-md-3">
            <img src="img/realitindia_logo.png" alt="">
        </div>

        <div class="col-md-9">

          
            <blockquote>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.</blockquote>
        </div>
    </div>
  </div>
</section>


  <div class="container-fulid" style="margin-right: 15px;margin-left: 15px;margin-top: 15px">
<!-- <nav class="navbar navbar-default">
  <div class="container">
   
    <ul class="nav navbar-nav">
      
      <li class="active"><a href="#">About Property</a></li>
      <li><a href="#">Amenities</a></li>
      <li><a href="#">Features</a></li>
      <li><a href="#">Specification</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Loaction</a></li>
      <li><a href="#">Enquiry</a></li>
      <li><a href="#">Write Comment</a></li>
    </ul>
  </div>
</nav> -->

<div class="row">
  <div class="col-md-9">
    <div class="card-detail">
  <div class="card-header-detail">
  <h5> Amenities </h5> 
   </div>
  <div class="card-block-detail">
    <div class="amentDiv "> 
                        <div class="col-md-2">
                            <img onmousedown="return false" src="img/Amenities/Intercom.png">
                            <div><span>Intercom</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img onmousedown="return false" src="img/Amenities/lift.png">
                            <div><span>lift</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img onmousedown="return false" src="img/Amenities/Landscape_ Gardens.png">
                            <div><span>Garden</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img onmousedown="return false" src="img/Amenities/Badminton_ Court.png">
                            <div><span>Game</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img onmousedown="return false" src="img/Amenities/security.png">
                            <div><span>Security</span></div>
                        </div>  <div class="col-md-2" id="amens">
                            <img onmousedown="return false" src="img/Amenities/security.png">
                            <div><span>Security</span></div>
                        </div>   

                           

                <div class="more-search-options relative">
                    <div class="more-search-options-container">


                        <div class="col-md-2" id="amenstatic">
                            <img onmousedown="return false" src="img/Amenities/Clubhouse.png">
                            <div><span>Clubs</span></div>
                        </div>

                       

                            <div class="col-md-2" id="amenstatic">
                                <img onmousedown="return false" src="img/Amenities/Tennis _Court.png">
                                <div><span>Sports</span></div>
                            </div>                 
                            <div class="col-md-2" id="amenstatic">
                                <img onmousedown="return false" src="img/Amenities/gym.png">
                                <div><span>Gymnasium</span></div>
                            </div> 
                      
                        </div>
                        </div>

                         

                    </div>
  </div>
  <div class="card-footer text-muted text-center">
    <a href="#" class="more-search-options-trigger margin-top-10" data-open-title="More Amenities" data-close-title="Less Amenities">Read more..</a>
  </div>
</div>

<br>
<div class="card-detail">
  <div class="card-header-detail">
  <h5> Floor Plans </h5> 
   </div>
  <div class="card-block-detail">
    <div id="units" class="row">
   <div class="col-md-4"><div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 101</h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    
   <div class="col-md-4"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 102</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
   <div class="col-md-4"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 103</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
     <div class="col-md-4"><div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 104</h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
     <div class="col-md-4"><div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 105</h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    <div class="col-md-4"><div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 106 </h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
 </div>
  </div>
  <div class="card-footer text-muted text-center">
    <a href="#" class="more-search-options-trigger margin-top-10" data-open-title="More Amenities" data-close-title="Less Amenities">Read more..</a>
  </div>
</div>


  </div>
  <div class="col-md-3">
    <div class="enq-card text-center">
  <div class="enq-card-header">
    Enquiry
  </div>
  <div class="enq-card-block">
   <div class="form-group">
  
  <input type="text" placeholder="Name" class="form-control" id="usr">
</div>
 <div class="form-group">

  <input type="text" placeholder="email_id" class="form-control" id="usr">
</div>
 <div class="form-group">
  
  <input type="text" placeholder="mobile" class="form-control" id="usr">
</div><div class="form-group">
  
  <input type="text" placeholder="message" class="form-control" id="usr">
</div>

    <a href="#" class="btn btn-primary">Submit</a>
  </div>
    
</div>

<br>

 <div class="enq-card text-center">
  <div class="enq-card-header">
    Similar Properties
  </div>
  <div id="unit" class="enq-card-block">
  <div class="row" id="units">
   <div class="col-md-12">
<div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 106 </h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div>
    </div>
  </div>
    
</div>
  </div>
</div>
  </div>





<!-- <div class="container-fulid" style="margin-right: 15px;margin-left: 15px;margin-top: 15px">
  <div class="row">
      <div class="col-md-12">
        <div id="units" class="row">
   <div class="col-md-2"><div class="card" style="background : url('http://anandpromoters.in/wp-content/uploads/2016/03/Anand-Promoters.jpg') no-repeat center;background-size: 100% 100%;" >
      <div class="card-block">
        <h3 class="card-title">Unit 101</h3>
        <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    
   <div class="col-md-2"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 102</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
   <div class="col-md-2"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 103</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    <div class="col-md-2"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 103</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    <div class="col-md-2"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 103</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    <div class="col-md-2"><div class="card" style="background : url('http://teja1.kuikr.com/realtycompass/realtycompass/property_attachments/7865671428389625.jpg') no-repeat center;background-size: 100% 100%;">
      <div class="card-block">
        <h3 class="card-title">Unit 103</h3>
       <ul class="card-text" ><li>2BHk</li><li>1570 sqft</li><li>North</li><li>Rs: 5,00,000.00</li></ul>
        
      </div>
    </div></div>
    </div>
      </div>
       
      </div>
      </div> -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h4 class="text-center">Join Groups</p>
  <div class="">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Near by Place</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Category</a></li>
                                        <li role="presentation"><a href="#group" aria-controls="profile" role="tab" data-toggle="tab">Create Group</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                          <div id="menu">
          <ul class="list-inline">
    <li>Studio</li>
    <li>Affordable</li>
    <li>Independent House</li>
    <li>Townships</li>
    <li>Ready To Move-in</li>
   

  </ul>
  </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="group">
                                        <div class="form-group">
  
  <input type="text" placeholder="Group Name" class="form-control" id="usr">
</div>
<div class="row">
    <div class="col-md-6"> <ul class="list-group checked-list-box">
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Multipurpose Hall">Multipurpose Hall
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Rain Water Harvesting">Rain Water Harvesting
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Solar water heater">Solar water heater
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="24 hours Security">24 hours Security
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Swimming Pool">Swimming Pool
                                            </label>
                                        </li>
                                    </ul></div>
    <div class="col-md-6">
<ul class="list-group checked-list-box">
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" value="Club House">Club House
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Lift">Lift
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Sports facility">Sports facility
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Waterplant">Waterplant
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Intercom">Intercom
                                            </label>
                                        </li>
                                    </ul>
    </div>

</div>

<br>

  <div id="menu">
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
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                          
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
</div>
</div>





    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   



});

function loc_nav(){
  
  window.location.href = 'group_creation.php'; 
  
}
function openNav() {
    document.getElementById("mySidenav").style.width = "500px";

    document.body.style.backgroundColor = "#ebebeb";
}


function compare(){
  window.location.href="property_compare.php";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
   
    document.body.style.backgroundColor = "#ebebeb";
}
</script>

  </body>
  </html>