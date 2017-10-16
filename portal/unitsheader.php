<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>

<style type="text/css">
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
}


.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.buil-img{
   background-repeat: no-repeat;
   background-size: cover;
  background-position: center;
height: 160px;
}
.buil-img p:first-child{
  color: rgb(255, 255, 255);
display: inline-block;
text-transform: uppercase;
text-shadow: 2px 2px 4px rgb(0, 0, 0);
font-size: 1.1em;
font-weight: 600;
}
.buil-img p{
  color: rgb(255, 255, 255);

text-transform: uppercase;
text-shadow: 2px 2px 4px rgb(0, 0, 0);
font-size: 0.9em;
font-weight: 600;
}
.buil-img span{
  color: rgb(255, 255, 255);

text-transform: uppercase;
text-shadow: 2px 2px 4px rgb(0, 0, 0);
font-size: 0.9em;
font-weight: 500;
}

.buil-img .panel-flex{
  display: flex;
  justify-content: space-around;
}
.panel-different{
  position: relative;

}
.panel-different .panel-footer{
  position: absolute;
  bottom: 0px;
  width: 100%;
    background-color: rgba(255, 255, 255, 0.88);
    padding: 4px 8px;
    text-align: center;
}

#map-detail{
  display: none;
}

 #map-detail .affix {
      top: 0;
      width: 100%;
  }

  #map-detail .affix + .container-fluid {
      padding-top: 70px;
  }

  .left .right {
position: fixed;
  }
 .left{left:0;}
  .right{right:0;}

  .builder-details ul{
    display: flex;
    list-style: none;
    justify-content: space-around;
  }

  .builder-details li p:first-child{
    text-align: center;
  }

  .builder-details li p:nth-child(2){
      color: #423232;
    text-align: center;
    font-weight: 600;
  }

  .main-points {
    list-style: outside none none;
    display: flex;
    justify-content: space-around;
    padding: 8px;
}
.main-points li {
    border: 1px solid !important;
    padding: 8px;
    border-radius: 4px;
}
.expand-icon{
  position: absolute;
right: 10px;
bottom: 30px;
color: #fff;
cursor: pointer;
background: rgba(0, 0, 0, 0.4);
border-radius: 100%;
border: 3px solid #fff;
box-shadow: 0 1px 10px rgba(0, 0, 0, 0.46);
color: #fff;
display: table-cell;
font-size: 24px;
height: 45px;
padding: 25px;
text-align: center;
transition: .5s;
vertical-align: middle;
width: 45px;
padding-left: 8px;
padding-top: 3px;

}

.expand-icon-send{
     position: absolute;
    right: 10px;
    bottom: 20px;
    color: #fff;
    cursor: pointer;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 100%;
    border: 3px solid #fff;
    box-shadow: 0 1px 10px rgba(0, 0, 0, 0.46);
    color: #fff;
    display: table-cell;
    font-size: 16px;
    height: 38px;
    padding: 25px;
    text-align: center;
    transition: .5s;
    vertical-align: middle;
    width: 26px;
    padding-left: 6px;
    padding-top: 5px;
}

.expand-icon-left{
position: absolute;
left: 0px;
    bottom: -12px;
color: #fff;
cursor: pointer;
}


.expand_ul{
  display: flex;
list-style: none;
}

.expand_ul li{
  padding-right: 20px;
font-size: 18px;
text-align: center;
color: #fff;
text-shadow: 4px 4px 4px rgb(0, 0, 0);
}

.expand-image{
position: relative;
}

#hover-content {
    display:none;
           margin-top: -75px;
}
.expand-icon-send:hover #hover-content{
    display:block;
    

}

#hover-content span{
  font-size: 0.9em;
  text-align: center;
  margin-left: -18px;
  color: #fff;
  text-shadow: 4px 4px 4px rgb(0, 0, 0);
}


.enquirylay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 9994;
    bottom: 0;
    left: 0;
    background-color: rgb(0,0,0);
   background-color: rgba(11, 10, 10, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.enquirylay .overlay-content {
    position: relative;
    bottom: 25%;
    width: 100%;
    text-align: center;
    margin-top: 60px;
}

.enquirylay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.enquirylay a:hover, .enquirylay a:focus {
    color: #f1f1f1;
}

.enquirylay .closebtn {
    position: absolute;
    z-index: 1;
    right: 45px;
    font-size:30px;
}

@media screen and (max-height: 450px) {
  .enquirylay {overflow-y: auto;}
  .enquirylay a {font-size: 20px}
  .enquirylay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

#enq_card{
      background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 160px;
}

.enq-flex {
      display: flex;
    position: absolute;
    bottom: 0px;
    color: #fff;
  text-shadow: 4px 4px 4px rgb(0, 0, 0);
}
.enq-flex a{
 color: #fff;
  text-shadow: 4px 4px 4px rgb(0, 0, 0);
 font-size: 1em;
 background-color: rgba(0, 0, 0, 0.84);
}


#enq_card .enq-flex p{
 color: #fff;
  text-shadow: 4px 4px 4px rgb(0, 0, 0);
}

#enq_resend p{
  font-size: 1em;
   color: #fff;
}

.flex-cardImage ul{
display: flex;
list-style: none;
    padding: 6px 0px;
}
.flex-cardImage li{
padding-right: 10px;
}
.flex-cardImage li img{
width: 90px;
height: 90px;
}
</style>

<div style="margin-top: 15px;position: relative;" class="container-fluid">
  <div class="row">
     
      <div class="col-md-4 left">
    
<div class="panel panel-default">
  <div class="panel-heading">
      <div class="row">
        <div style="padding-left: 15px;" class="pull-left">
          <img src="img/realitindia_logo.png?width=140&amp;height=140" alt="Nithya" width="120px">
        </div>
        
        
 <div style="padding-right: 15px;" class="pull-right">
      <p onclick="filter()">Apply Filter </p>
    </div>
      </div>

  </div>
  <div class="panel-body allunits">
            <div class="row">
              <div class="col-md-6">
              <div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
    
    <div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>


  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>
</div>
</div>
<div class="col-md-6">


  <div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
<div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>

  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>
  </div>


</div>
<div class="col-md-6">


  <div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
<div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>

  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>
  </div>
</div>




<div class="col-md-6">
<div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
<div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>

  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>
  </div>
</div>


<div class="col-md-6">


  <div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
<div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>

  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>


  </div>
</div>

<div class="col-md-6">


  <div class="panel panel-default panel-different">
  <div class="panel-body buil-img" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
<div class="pull-left">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
    <div class="pull-right">
    <span>Under Construction</span>
    <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p>
    </div>

  </div>
  <div class="panel-footer"><div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div></div>
  </div>
</div>
</div>
</div>

<div style="display: none;" class="panel-body filters">
  <div class="row">
      <p class="text-center">Choose Bhk</p>
       <ul class="main-points"><li class="dep-rate"><span class="rate bigtxt">1 Bhk</span></li><li class="avg-rate"><span class="bigtxt">2 bhk</span></li><li class="total-projects"><span class="bigtxt">3 bhk</span></li><li class="total-projects"><span class="bigtxt">4 bhk</span></li><li class="total-projects"><span class="bigtxt">5 bhk</span></li></ul>
<p class="text-center">Project Type</p>
      
      <ul class="main-points"><li class="dep-rate"><span class="rate bigtxt">Apartment</span></li><li class="avg-rate"><span class="bigtxt">Villa</span></li><li class="total-projects"><span class="bigtxt">Row Houses</span></li></ul>
      <p class="text-center">Project Status</p>
       
      <ul class="main-points"><li class="dep-rate"><span class="rate bigtxt">Ready To Move</span></li><li class="avg-rate"><span class="bigtxt">Under Construction</span></li><li class="total-projects"><span class="bigtxt">Completed</span></li></ul>
        <div class="text-center">
          <button type="button" id='filterShow' class="btn btn-primary">Show</button>
        </div>
      </div>
      </div>


<div style="padding: 10px 5px 0px 10px !important;" class="panel-footer builder-details">
<ul>
        <li><span>Ongoing Project : </span>2</li>
        
        <li><span>Project type :</span> Apartment</li>
        <li><span>Status :</span>Ready To Move</li>
      </ul>
   
      </div>
      </div>
      </div>


<div id="map-detail" class="col-md-8 right">

<div class="container-fluid" style="background-color:#fff;color:#000;height:80px;padding:16px;">
  <div class="row">
    <div class="col-md-2">
      <img width="120px" src="img/realitindia_logo.png?width=140&amp;height=140" alt="Nithya">

    </div>
    <div class="col-md-10 builder-details">
      <ul>
        
        <li><p>Project type</p><p>Apartment</p></li>
        <li><p>Status</p><p>Ready To Move</p></li>
        <li><p>Bhk</p><p>2</p></li>
        <li><p>Area</p><p>1450 sqft</p></li>

      </ul>

    </div>
    
  </div>
 <!--  <div class="col-md-12">
    <img src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg">
  </div> -->
</div>



<!-- <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#anenities"> Amenities </a></li>
    <li><a href="#specification">Specification</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Features</a></li>
    <li><a href="#">Location</a></li>
    <li><a href="#">Enquiry</a></li>
  </ul>
</nav> -->

<div class="container-fluid" style="height: 510px; background-color: rgb(255, 255, 255);">

<div class="expand-image">
 <img width="100%" height="340px" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg">

 <div class="expand-icon-left">
 <ul class="expand_ul">
   
<li><p>0</p> <p><i class="fa fa-eye" aria-hidden="true"></i></p>
</li>
 <li> <p>0 </p>
      <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
    </li>
 </ul>
 <!-- <p><span>0 <i class="fa fa-heart-o" aria-hidden="true"></i>
</span><span>12 <i class="fa fa-eye" aria-hidden="true"></i>
</span></p> -->

 </div>
 <!-- <div class="expand-icon">
   <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    
</div>
 -->

 <div onclick="openEnq()" class="expand-icon-send">
   <i class="fa fa-paper-plane" aria-hidden="true"></i>
   <div id="hover-content">
        <span>Enquiry us</span>
</div>
</div>

</div>
<div class="flex-cardImage">
    <ul>
      <li> <img width="120px" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg" alt="Nithya"></li>
      <li> <img width="120px" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg" alt="Nithya"></li>
      <li> <img width="120px" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg" alt="Nithya"></li>
      <li> <img width="120px" src="https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg" alt="Nithya"></li>
    </ul>
  
</div>



<nav style="background-color: rgb(222, 227, 231); color: rgb(255, 255, 255);" class="navbar">
 <ul class="nav navbar-nav">
    <li class="active"><a href="#anenities"> Amenities </a></li>
    <li><a href="#specification">Specification</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Features</a></li>
    <li><a href="#">Location</a></li>
    <li><a href="#">Enquiry</a></li>
  </ul>
  </nav>               
</div>

<div class="panel-footer builder-details">
    <div class="text-center"><a href="property_unit.php">Expand Units Details</a></div>
   
      </div>

</div>


<div id="map-View" class="col-md-6">
          <div class="row">
              <div class="col-md-12">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.8899194573396!2d76.96425065051076!3d11.046879392099735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85862cd88d5a9%3A0x88dcbe6699269d26!2sNithya+Gardens!5e0!3m2!1sen!2sin!4v1505467516567" style="border:0" allowfullscreen="" width="100%" frameborder="0" height="450"></iframe>
              </div>

              
          </div>
      </div>

  </div>
</div>




<div id="myEnq" class="enquirylay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeEnq()">&times;</a>
  
  

   <div class="container overlay-content">
     <div style="padding-top: 20px;" class="row">
       <div class="col-md-4">
      <div id="enq_card" class="card" style="background-image: url('https://lscdn.azureedge.net/biz-live/img/4565989-151751-16092016201909.jpeg');">
  
  <div class="card-block">
  <div class="pull-left" style="
    color: #fff;
    text-shadow: 4px 4px 4px rgb(0, 0, 0);
    font-size: 1.2em;
    font-weight: 600;
">
      <p>Nithya Estates</p>
    <p>Location</p>
    </div>
   <div class="enq-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div>
    
  </div>
</div>
       </div>
       <div  id="enq_resend" class="col-md-6">
       <div class="row">
       <p>Please Check your Personal Details. 
       Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
       <div class="col-md-6">
        <div class="form-group">
 
  <input type="text" placeholder="UserName" class="form-control" id="usr">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
 
  <input type="password" placeholder="mobile" class="form-control" id="pwd">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
 
  <input class="form-control" id="inputlg" placeholder="Message" type="text">
</div>
</div>
 

<div class="text-center">
<button onclick="closeEnq()" type="button" class="btn btn-default">Send</button>
</div>
</div>
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



function openEnq() {
    document.getElementById("myEnq").style.height = "34%";
}

function closeEnq() {
    document.getElementById("myEnq").style.height = "0%";
}



function filter() {

    $('.allunits').hide('1000');
    $('.filters').show('1000');
}

$('#filterShow').click(function(){
  
      $('.allunits').show('1000');
      $('.filters').hide('1000');
});

$(function(){

  $('#menu li').click(function(){
        $(this).addClass('sel');
        $('#alltext').append($(this).text());
        // var val = $('#alltext').append($(this).text());
         
  });


});


$('.panel-different').click(function(){
      $('#map-View').hide('1000');
      $('#map-detail').show('1000');
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
