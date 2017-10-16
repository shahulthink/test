<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>


<style type="text/css">
	.leftsideUnits {
background-color: #fff;
height: 690px;
position: relative;
box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
}
 .leftsideUnits{left:0;}
  .right{right:0;}

.panel-flex{
      display: flex;
    justify-content: space-around;
    margin-top: -22px;

}
.panel-flex a{
  color: rgb(255, 255, 255);
font-weight: 600: 
text-transform: uppercase;
text-shadow: 2px 2px 4px rgb(0, 0, 0);
}

.builder-details ul{
    display: flex;
    list-style: none;
    justify-content: space-around;
  margin-top: 8px;
  }

  .builder-details li p:first-child{
    text-align: center;
  }

  .builder-details li p:nth-child(2){
      color: #423232;
    text-align: center;
    font-weight: 600;
  }

  .rightsideUnits{
     background-color: #fff;
height: 690px;
box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
  }
 
 .card-inverse {
    background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 120px;
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
.card-title {
    margin-bottom: .75rem;
}
.card-inverse .card-title {
    color: #fff;
    padding-left: 10px;
}
 .card-inverse .card_data {
    background-color: rgba(49, 37, 37, 0.77);
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
}.card_data ul{
  display: flex;
  justify-content: space-around;
  list-style: none;padding-top: 4px;
}
.main-points{
  list-style: outside none none;
display: flex;
justify-content: space-around;
padding: 8px;
}

.main-points li{
  border: 1px solid !important;
  padding: 8px;
  border-radius: 4px;
}
</style>

<div style="position: relative; margin:5px;" class="container-fluid">
<div class="row">
	<div class="col-md-3 leftsideUnits">
  <div class="row">
  <div style="margin-top: 10px;" class="text-center">
   <img width="120px" src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png?width=140&amp;height=140" alt="Puravankara">
 </div>
<div style="margin-top: 10px;height:20vh;" class="">
 <img width="100%" src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png" alt="Puravankara">

 <div class="panel-flex">
      <a href="">Apartment</a>
      <a href="">2 Bhk</a>
      <a href="">1750 sqft</a>
      <a href="">North</a>
    </div>

</div>
<div class="col-md-12">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">All units</a></li>
    <li><a data-toggle="tab" href="#menu1">Filter</a></li>
    <li><a data-toggle="tab" href="#menu2">Location</a></li>
    <li><a data-toggle="tab" href="#menu3">Catergory</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


    <div style="margin-top: 10px;" class="row">
      <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
                </div>
<div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
                </div>
                <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
                </div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
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
    <div id="menu2" class="tab-pane fade">
     <ul class="main-points"><li class="dep-rate"><span class="rate bigtxt">Rs puram</span></li><li class="avg-rate"><span class="bigtxt">Place1</span></li><li class="total-projects"><span class="bigtxt">Place2 </span></li></ul>

    </div>
    <div id="menu3" class="tab-pane fade">
    <div style="margin-top: 10px;" class="row">
       <div class="col-md-12" style="margin-bottom: 8px;">
                  <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h3 class="card-title">Studio </h3>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
         </div>       </div>
    </div>
  </div>
</div>
</div>



 </div>

 

	<div class="col-md-9 rightsideUnits">
    <div class="row">
              <div class="col-md-12">
                <div class="col-md-12 builder-details">
      <ul>
        <li><p>2</p><p>Ongoing Project</p></li>
        <li><p>47</p><p>Availability</p></li>
        <li><p>Apartment</p><p>Project type</p></li>
        <li><p>Ready To Move</p><p>Status</p></li>
      </ul>

    </div>
    <div class="removeMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.8899194573396!2d76.96425065051076!3d11.046879392099735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85862cd88d5a9%3A0x88dcbe6699269d26!2sNithya+Gardens!5e0!3m2!1sen!2sin!4v1505467516567" style="border:0" allowfullscreen="" width="100%" frameborder="0" height="450"></iframe>
                </div>
    <div  style="display: none;" class="shortlinks">
      <div class="row">
          <div class="col-md-3">
            <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
          </div>
          <div class="col-md-3">
            <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
          </div>
          <div class="col-md-3">
            <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
          </div>
          <div class="col-md-3">
            <div class="card card-inverse" style="background-image: url('http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb1-1280x550-2400x840.png');">
  <div class="card-block">
    <h4 class="card-title">Property Name </h4>
  </div>
  <div class="card_data"><ul><li>Villa</li><li>2 BHk</li><li>980sqft</li> <li>North</li></ul></div>
</div>
          </div>
          
      </div>

    </div>         


    <div  style="display: none;" id="showUnits" class="row">
<div class='col-md-12'>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#section1"> Amenities </a></li>
    <li><a href="#section2">Specification</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Features</a></li>
    <li><a href="#">Location</a></li>
    <li><a href="#">Enquiry</a></li>
  </ul>
</nav>

    
<div id="section1" class="container-fluid">
  <div class="amentDiv "> 
                        <div class="col-md-2">
                            <img src="img/Amenities/Intercom.png">
                            <div><span>Intercom</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img src="img/Amenities/lift.png">
                            <div><span>lift</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img src="img/Amenities/Landscape_ Gardens.png">
                            <div><span>Garden</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img src="img/Amenities/Badminton_ Court.png">
                            <div><span>Game</span></div>
                        </div> 
                        <div class="col-md-2" id="amens">
                            <img src="img/Amenities/security.png">
                            <div><span>Security</span></div>
                        </div>  <div class="col-md-2" id="amens">
                            <img src="img/Amenities/security.png">
                            <div><span>Security</span></div>
                        </div>   

                           

                <div class="more-search-options relative">
                    <div class="more-search-options-container">


                        <div class="col-md-2" id="amenstatic">
                            <img src="img/Amenities/Clubhouse.png">
                            <div><span>Clubs</span></div>
                        </div>

                       

                            <div class="col-md-2" id="amenstatic">
                                <img src="img/Amenities/Tennis _Court.png">
                                <div><span>Sports</span></div>
                            </div>                 
                            <div class="col-md-2" id="amenstatic">
                                <img src="img/Amenities/gym.png">
                                <div><span>Gymnasium</span></div>
                            </div> 
                      
                        </div>
                        </div>
                    </div>
</div>
<div id="section2" class="container-fluid">
  <div class="col-md-2" id="amenstatic">
                                <img src="img/Amenities/Tennis _Court.png">
                                <div><span>Sports</span></div>
                            </div>                 
                            <div class="col-md-2" id="amenstatic">
                                <img src="img/Amenities/gym.png">
                                <div><span>Gymnasium</span></div>
                            </div>
</div>


    </div>
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
  		$(document).ready(function(){
  			// var w = window.innerWidth;
    	// 	var h = window.innerHeight;
     //     $(".leftsideUnits").css("height", h);
    	// 	 $(".rightsideUnits").css("height", h);

$('.card').click(function(){
      $('.removeMap').hide('1000');
      $('#showUnits').show('1000');
}); 
$('#filterShow').click(function(){
  $('.removeMap').hide('1000');
      $('.shortlinks').show('1000');
      $('#showUnits').show('1000');
});

	});

  </script>
  </body>
</html>
