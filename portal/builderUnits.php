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

<div style="margin-top: 10px;" class="container-fluid">
  <div class="row">
    <div class="col-md-12"></div>
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      
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


  </body>

</html>
