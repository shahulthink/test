
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Realitindia</title>

    <link rel="shortcut icon" href="images/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-light_blue.min.css">
    <link rel="stylesheet" href="http://realitindia.com/test/NewPage/styles.css">
   
  </head>

<style type="text/css">
  .mdl-layout__drawer-button .material-icons{
    margin-top:15px;
  }

  .groupName{
      display: flex;
justify-content: center;
padding-top: 18px;
padding-bottom: 3px;
}
 .groupInvite{
      display: flex;
justify-content: center;

padding-top: 100px;


}

.groupShare{
  display: flex;
justify-content: center;
}

.groupN{
  font-size: 24px;
line-height: 32px;
transition-duration: 0.3s;
transition-property: font-size;
transition-timing-function: ease;
color: rgb(255, 255, 255);
}




.mdl-chip__contact {
    height: 32px;
    width: 32px;
    border-radius: 16px;
    margin-right: -13px;
    font-size: 18px;
    line-height: 32px;
    }

 .demo-ribbon {
  height: 40vh;
  position: absolute;
 }

.demo-ribbon {
    width: 100%;
   
    background-color: #3F51B5;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    position: absolute;
}

 .demo-content {
    border-radius: 2px;
    position: absolute;
    top: 35px;
   padding:24px!important;
   /* bottom: 35px;*/
    height: auto!important;
    left: 15%;
}

input[type=text] {
    width: 550px;
    margin-top: 15px;
    box-sizing: border-box;
    border: 2px solid #3F51BE;
    border-radius: 5px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 11px 10px;
    background-repeat: no-repeat;
    padding: 9px 9px 9px 9px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.content-footer{
  position: absolute;
  bottom: 20px;
  right: 20px;
}

#form_part1{
  text-align: center;
}
#form_part2{
  text-align: center;
}

#form_part3{
  text-align: center;
}
#menu ul li {
  list-style: none;
    width: auto;
    height: auto;
    cursor: pointer;
    font-size: 18px;
    padding: 6px 12px;
    margin: 0 12px 12px 0;
    border-radius: 4px;
    text-align: center;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
}

#menu li{
  float: left;
}
.select{
  background-color: rgb(47, 84, 120);
color: rgb(255, 255, 255);
}
.sel{
 
  border-radius: 4px;
border: 1px solid;
transition: all .3s ease-in-out;
}

.addPeople{
  position: absolute;
  right: 20px;
  top: -28px;
}


.flex-invite{
  display: flex;
}
.invite-item:first-child { width: 15%;}
.invite-item:nth-child(2){
  width: 60%;
}
.invite-item:nth-child(3){
  width: 20%;
}
.wrap    { 
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}  

.card-invite{
  display: flex;
  margin-right: 4px;
}
.card-invite .card{
 
 display: flex;
 box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
 margin-right: 10px;
}
.card-invite .card-content{
width: 50%;
padding: 4px;
}


.card-invite img{

    padding: 3px;
    
}
</style>
  <body  onload="shows_form_part(1)" style="background-color: rgb(236, 239, 241);">

 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
     <img style="background-color: rgb(255, 255, 255);" src="img/realitindia_logo.png">
      <div class="mdl-layout-spacer"></div>
      <!-- Add spacer, to align navigation to the right -->
    <form>
  <input type="text" name="search" placeholder="Search..">
</form>
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">
          <span class="mdl-chip mdl-chip--contact">
    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">A</span>
    
</span>
        </a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Group</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
   <div class="demo-ribbon"></div>
    <main class="mdl-layout__content">

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col"></div>
        <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
          <form>

  <div class="section" id="form_part1">
  <div class="sec_cont">
   <h4>Create New Group</h4>
    <input type="text" name="search" placeholder="Group Name..">
    <input type="text" name="search" placeholder="Group Location..">
<div style="margin-top: 25px;" class="clear-fix">
     <img class="logobrand" src="img/map.png" >   
</div>

 <h4>What's your role in this group?</h4>
 <div style="text-align: center" id="menu">
<ul style="display: flex; justify-content: center;" class="list-inline">
            <li data-value="Rent house" class="sel">Admin</li>
           
            <li data-value="Owner Houses" class="sel">Members</li>
         
            
          </ul>
          </div>
 <br>
 <div class="content-footer">
    <button type="button"  class="btn btn-submit proceed mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(2)"> Proceed </button>
    </div>
    </div>
  </div>


<div class="section" id="form_part2">
  <div class="sec_cont">
  

      <h4> Project Type </h4>
      

           <div class="row sec_info" style="display: flex;justify-content: center;">
              <div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="sel">Apartment</li>
           
            <li data-value="Owner Houses" class="sel">Row Houses</li>
            <li data-value="Owner Houses" class="sel">Villa</li>
            
          </ul>
        </div> 
        </div>
        <div  class="" >
          <h5>Choose Bhk</h5>
          <div class="row sec_info" style="display: flex;justify-content: center;">
          <div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="sel">1 Bhk</li>
           
            <li data-value="Owner Houses" class="sel">2 Bhk</li>
            <li data-value="Owner Houses" class="sel">3 Bhk</li>
            <li data-value="Owner Houses" class="sel">4 Bhk</li>
            <li data-value="Owner Houses" class="sel">5 Bhk</li>
            
          </ul>
          </div>
        </div>
        </div>

        <div class="">
          <h5>Price</h5>
          <div class="row sec_info" style="display: flex;justify-content: center;">
          <p style="width:50%">
          <input class="mdl-slider mdl-js-slider" type="range"
  min="0" max="100" value="25" tabindex="0">
  <span class="price_val"></span>
  </p>
  </div>
        </div>
        <div class="">
          <h5>Status</h5>
          <div class="row sec_info" style="display: flex;justify-content: center;">
          <div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="sel">Ready To Move In</li>
            <li data-value="Owner Houses" class="sel">Completed</li>
            <li data-value="Owner Houses" class="sel">Under Construction</li>
          </ul>
          </div>
  </div>
        </div>
        
        <br>
        <div class="content-footer">
        <button type="button"  class="btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(1)">Previous</button>
    <button type="button"  class="btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(3)">Next</button>
   </div>
</div>
</div>

  <div class="section" id="form_part3">
  
  <div class="sec_cont">
    <h4>Life Style</h4>
    <div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="sel">Club House </li>
            <li data-value="Owner Houses" class="sel">Lift </li>
            <li data-value="Owner Houses" class="sel">Sports facility </li>
            <li data-value="Owner Houses" class="sel">Waterplant </li>
            <li data-value="Owner Houses" class="sel">Intercom  </li>
            <li data-value="Owner Houses" class="sel">Multipurpose Hall  </li>
            <li data-value="Owner Houses" class="sel">Rain Water Harvesting  </li>
            <li data-value="Owner Houses" class="sel">Solar water heater   </li>
            <li data-value="Owner Houses" class="sel">24 hours Security </li>
            <li data-value="Owner Houses" class="sel">Swimming Pool  </li>
            <li data-value="Owner Houses" class="sel">Gym    </li>
            <li data-value="Owner Houses" class="sel">Power Backup  </li>
            <li data-value="Owner Houses" class="sel">Piped Gas connection  </li>
          
          </ul>
          </div>
        
</div>


 <div class="content-footer">
        <button type="button"  class="btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(2)">Previous</button>
    <button type="button"  class="btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(4)">Next</button>
</div>
  </div>

<div class="section" id="form_part4">
  <div class="sec_cont">
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored addPeople">
   <i class="material-icons">person_add</i>
</button>
    <div class="flex-invite">
    <div class="invite-item">
   <h4>Invite Friends</h4>
   </div>
   <div class="invite-item"> <input type="text" name="search" placeholder="search.."></div>
   <div class="invite-item"> <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Facebook
    </a><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Google Plus
    </a></div>
   </div>
   <div class="card-invite wrap">
     <div class="card">
     <div class="card-content">
          <img src="http://placehold.it/100x100">
      </div>
      <div class="card-content">
     <p>Selva Kumar</p>mail@mail.com  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Invite
    </a> 
    </div>
    </div>
      <div class="card">
     <div class="card-content">
          <img src="http://placehold.it/100x100">
      </div>
      <div class="card-content">
     <p>Selva Kumar</p>mail@mail.com  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Invite
    </a> 
    </div>
    </div>
   </div>
 <br>
 <div class="content-footer">
    <button type="button"  class="btn btn-submit mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="shows_form_part(2)">Previous</button>
    <button type="button"  class="btn btn-submit proceed mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="groupPage()"> Completed </button>
    </div>
    </div>
  </div>


</form>


        </div>
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        
        
          
        
    </div>

    </main>
</div>



 <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

 <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>


 <script type="text/javascript">
  

function myFunction() {
    var h = window.innerHeight;
  
}

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

function groupPage(){
  window.location.href = 'group_page.php';
}

$(function(){

  $('#menu li').click(function(){
 
        $(this).addClass('select');
        
         
  });


});



 </script>
  </body>
  </html>