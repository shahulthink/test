
<?php include 'mainheader.php';?>
<link href="css/header.css" rel="stylesheet">
<style type="text/css">
  
 .searchbackgorund {
    background-color: #2F4E78;
    height: 480px !important;
    color: #fff;
}
.container_content{
  margin-top:50px;  
}

 body{
    background: radial-gradient(#254571 35%, #254571 45%, #272927 150%);
}
.section{
  text-align: center;
}
.sec_cont {
  display: flex;
  justify-content: center;
 color: #fff;
   position:relative;
    display:inline-block;
    top:30%;
    transform:translateY(-30%);
}
.sec_cont h3,h4,h5 p{
  color: #fff;
}
.sec_cont h4{
  font-size: 28px;
  letter-spacing: 0.04em;
}
.sec_cont p{
  font-size: 22px;
  letter-spacing: 0.04em;
}
.sec_cont ul {
  list-style: none;
}
.sec_cont li{
  float:left;
  padding:4px;
}
.btn{
  color: #000;
}

.proceed:hover{
  background-color: #fff;
  color:#000;
}
#menu ul li {
    width: auto;
    height: auto;
    cursor: pointer;
    font-size: 20px;
    padding: 12px 24px;
    margin: 0 12px 12px 0;
    border-radius: 4px;
    text-align: center;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
}
.sel{
  border-radius: 4px;
border: 1px solid;
transition: all .3s ease-in-out;
}
label {
font-weight: 400;
}

.sec_info{
  text-align: left;
}
</style>

  
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
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div  class="container-fulid container_content">
<form>

  <div class="section" id="form_part1">
  <div class="sec_cont">
   <h3>Hi, Shahul</h3>
   <h4> Welcome to Realitindia </h4>
   <p> Let's go through the easy process of creating a personalized experience together</p>
 <!--    <a href="#" > Sign in</a> -->
 <br>
    <button type="button"  class="btn btn-submit proceed" onclick="shows_form_part(2)"> Proceed </button>
    </div>
  </div>


<div class="section" id="form_part2">
  <div class="sec_cont">
  

      <h4> Where are you  residing? </h4>
      

           <div class="row sec_info" style="display: flex;justify-content: center;">
              <div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="sel">Rent Houses</li>
           
            <li data-value="Owner Houses" class="sel">Owner Houses</li>
            
          </ul>
        </div> 
        </div>
        <div class="residing-address" style="display: none">
<h4> Where your are  staying ?</h4>
        <div class="row sec_info">
         
              <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Enter Location</label>
                  <input type="text" class="form-control" id="" placeholder="type address">
              </div>
            <img class="logobrand" src="img/map.png" >    
         
        </div>
        </div>
        <br>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(1)">Previous</button>
    <button type="button"  class="btn btn-submit" onclick="shows_form_part(3)">Next</button>
   
</div>
</div>

  <!--  <div class="section" id="form_part3">
  <div class="sec_cont">
  

      <h4> Where your are  staying ?</h4>
     
<br>
        
        <br>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(2)">Previous</button>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(4)">Next</button>
   
   
</div>
</div>   --> 

   <div class="section" id="form_part3">
  <div class="sec_cont">
  

      <h4>Enter the Workplace Address ?</h4>
     
<br>
<div class="row sec_info">
         
              <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Enter Location</label>
                  <input type="text" class="form-control" id="" placeholder="type address">
              </div>
            <img class="logobrand" src="img/map.png" >    
         
        </div>
        <!-- <div class="row sec_info">
              <div id="menu">
          <ul class="list-inline">
            <li data-value="publicsector" class="sel">Public Sector</li>
            <li data-value="Owner Houses" class="sel">Private Sector</li>
            <li data-value="Owner Houses" class="sel">Governments Sector</li>
            <li data-value="Owner Houses" class="sel">Business</li><br>
            <li data-value="Owner Houses" class="sel">Manufacturing</li>
            <li data-value="Owner Houses" class="sel">Real Estate</li>
            <li data-value="Owner Houses" class="sel">Stock Broker</li>
            <li data-value="Owner Houses" class="sel">Agriculture</li>
            <li data-value="Owner Houses" class="sel">Other</li>
            
          </ul>
        </div> 
        </div> -->
        
        <br>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(3)">Previous</button>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(4)">Next</button>
   
   
</div>
</div> 
 <div class="section" id="form_part4">
  <div class="sec_cont">
  

      <h4>what you looking for ? </h4>
     
<br>
        <div class="row sec_info">
              <div id="menu">
          <ul class="list-inline">
            <li data-value="apartment" class="sel">Apartment</li>
            <li data-value="villa" class="sel">Villa</li>
            <li data-value="Rowhouses" class="sel">Rowhouses</li>
            
          </ul>
        </div> 
        </div>
        
        <br>
        <button type="button"  class="btn btn-submit" onclick="shows_form_part(3)">Previous</button>
        <button type="button"  class="btn btn-submit" onclick="submit_form()">Complete</button>
   
   
</div>
</div>

</form>
</div>



<?php include 'footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.js"></script>


    <script type="text/javascript">
    function showWidow(){
          var windowWidth = window.innerWidth;
          var windowHeight = window.innerHeight - 51;
          $(".section").css({"height": windowHeight});
        }
showWidow();

      function shows_form_part(n){

  var i = 1, p = $("#form_part"+(i).toString());
  while (p.length != 0){

      if (i == n){
          p.show("slow");
      }
      else{
          p.hide("slow");        
      }
      i++;
      p = $("#form_part"+(i).toString());
  }

}



$("#ex8").slider({
  tooltip: 'always'
});

$("#ex12b").slider({ id: "slider12b", min: 0, max: 50, range: true, value: [0, 4], tooltip:'always' });
// Without JQuery

$('.sel').click(function(){
      $('.residing-address').show();
});
//change accordingly, just an example
function submit_form() {
 window.location.href = 'userDashboard.php'; 
}
    </script>
  </body>
  </html>