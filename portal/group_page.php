
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
position: absolute;
bottom: -12px !important;
left: 30%;


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
.demo-content{
  background-image: url("http://media.istockphoto.com/photos/abstract-pattern-background-picture-id531000802?k=6&m=531000802&s=170667a&w=0&h=7CXYV8nZycdEogt5Ifr6MTQaDsn-f5jFpm7Kfijhv58=");

    background-repeat: no-repeat;
    background-size: cover;
    position: relative;

}
.demo-content .mdl-button--raised {
   background: rgb(255, 255, 255);
    box-shadow: 0 2px 2px 0 rgba(18, 7, 7, 0.5),0 3px 1px -2px rgba(254, 254, 254, 0.2),0 1px 5px 0 rgba(0,0,0,.12);
}
.mdl-chip__contact {
    height: 32px;
    width: 32px;
    border-radius: 16px;
    margin-right: -13px;
    font-size: 18px;
    line-height: 32px;
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

.mdl-list__item--two-line{
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
background-color: rgb(255, 255, 255);
margin-bottom: 2px;
}

.prop_card{
      box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    margin-top: 24px;
    width: 100%;
}

.prop_card .mdl-card__supporting-text{
  padding:6px;
}
.prop_card .mdl-card__supporting-text ul{
  list-style: none;
}
.prop_card .mdl-card__supporting-text li{
  float: left;
      padding-right: 10px
}


.timeline{list-style:none;padding:0 0 20px;position:relative;margin-top:-15px}.timeline>li,.timeline>li>.timeline-panel{margin-bottom:5px;position:relative}.timeline>li:after,.timeline>li:before{content:" ";display:table}.timeline>li:after{clear:both}.timeline>li>.timeline-panel{margin-left:15px;float:left;top:19px;padding:4px 10px 8px 15px;border:1px solid #ccc;border-radius:5px;width:90%}.timeline>li>.timeline-badge{color:#fff;width:36px;height:36px;line-height:36px;font-size:1.2em;text-align:center;position:absolute;top:26px;left:9px;margin-right:-25px;background-color:#fff;z-index:100;border-radius:50%;border:1px solid #d4d4d4}.timeline>li.timeline-inverted>.timeline-panel{float:left}.timeline>li.timeline-inverted>.timeline-panel:before{border-right-width:0;border-left-width:15px;right:-15px;left:auto}.timeline>li.timeline-inverted>.timeline-panel:after{border-right-width:0;border-left-width:14px;right:-14px;left:auto}.timeline-badge.primary{background-color:#2e6da4!important}.timeline-badge.success{background-color:#3f903f!important}.timeline-badge.warning{background-color:#f0ad4e!important}.timeline-badge.danger{background-color:#d9534f!important}.timeline-badge.info{background-color:#5bc0de!important}.timeline-title{margin-top:0;color:inherit}.timeline-body>p,.timeline-body>ul{margin-bottom:0;margin-top:0}.timeline-body>p+p{margin-top:5px}.timeline-badge>.glyphicon{margin-right:0px;color:#fff}.timeline-body>h4{margin-bottom:0!important}

.pro-show{
  display: flex;
  flex-wrap: row;
}

.pro-item{
width: 50%;
}

.prop-item{

  display: flex;
/*  flex-wrap: wrap;*/
}
.prop-item .mdl-card__supporting-text ul{
  list-style: none;
}
.prop-item .mdl-card__supporting-text {
  font-size: 1rem;
line-height: 16px;
overflow: hidden;
padding: 0!important;
width: 100%;
color: #fff;
background-color: rgba(15, 14, 14, 0.95);
}
.prop-item .mdl-card__supporting-text li{
float: left;
padding-left: 4px;
}

.prop-title {
    position: absolute;
    top: 0;
    padding: 10px;
    text-shadow: 2px 2px 4px #000000;
    color: #fff;
}

.prop-item .mdl-card__media{
  position: relative;
}

.wrap    { 
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}  

#invite{
  position: relative;
  padding:8px;
}
.addPeople{
  position: absolute;
  right: 20px;
  top: 0px;
}
.flex-invite{
  display: flex;
  padding:8px;
}
.invite-item:first-child { width: 20%;}
.invite-item:nth-child(2){
  width: 60%;
}
.invite-item:nth-child(3){
  width: 20%;
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

.mdl-card{
  width: 100%;
}


.pro-prop ul{
  list-style: none;
}

.pro-prop li{
  float: left;
  padding-left: 4px;
}

.pro-prop .mdl-card__supporting-text {
  padding:0px;
      width: 100%;
    color: #fdfdfd;
    background-color: #232121;
}
</style>
  <body style="background-color: rgb(236, 239, 241);">

 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
     <a href="http://localhost/portal/property_unit.php"><img style="background-color: rgb(255, 255, 255);" src="img/realitindia_logo.png"></a>
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
    <div class="demo-container mdl-grid">
      <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
          <div class="groupName"><div class="groupN">Luxury Villa</div></div>
            

          <div class="groupInvite"> 
            <button onclick="sendInivite()" class="mdl-button mdl-js-button mdl-button--raised"> SendInivite</button> &nbsp;
            <button class="mdl-button mdl-js-button mdl-button--raised"> 22 Followers</button>
          </div>
        </div>
        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        </div>
          <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone">
<h6>Similar Builders</h6>
 <ul class="demo-list-two mdl-list">
  <li class="mdl-list__item mdl-list__item--two-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Nithya Estate</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
      <span class="mdl-list__item-secondary-info">4.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">favorite_border</i></a>
    </span>
  </li>
  <li class="mdl-list__item mdl-list__item--two-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>White&Home</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
     <span class="mdl-list__item-secondary-info">3.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">favorite_border</i></a>
    </span>
  </li>
  <li class="mdl-list__item mdl-list__item--two-line">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Thulliam</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
     <span class="mdl-list__item-secondary-info">4.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">favorite_border</i></a>
    </span>
  </li>
</ul>
        </div>
        
        <div id="property_show" class="mdl-cell mdl-cell--6-col">
           
        <div class="pro-show">  
          <div class="pro-item"> 
        <h6>Property Tagged by this Groups</h6>  
        </div>
        <div class="pro-item" style="justify-content: flex-end;"> <h6 onclick="myFunction()" style="
    background-color: #fff;
    text-align: -webkit-center;
    padding: 4px;
    cursor: pointer;
">12 project</h6></div>
        

        </div>

        <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col pro-prop"> <div class="mdl-card mdl-shadow--2dp">
  <div class="mdl-card__media">
  <img src="img/pro.jpg" width="100%" height="200px" border="0"
   alt="" >
  <div class="prop-title">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>

  </div>
  
  <div class="mdl-card__supporting-text">
 <ul><li>Villa</li><li>2bhk</li><li>1250 sqft</li><li>North</li><li>Rs 2,50,00000</li></ul>
  </div>
</div></div>
  <div class="mdl-cell mdl-cell--6-col pro-prop"> <div class="mdl-card mdl-shadow--2dp">
  <div class="mdl-card__media">
  <img src="img/pro.jpg" width="100%" height="200px" border="0"
   alt="" >
  <div class="prop-title">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>

  </div>
  
  <div class="mdl-card__supporting-text">
 <ul><li>Villa</li><li>2bhk</li><li>1250 sqft</li><li>North</li><li>Rs 2,50,00000</li></ul>
  </div>
</div></div>
  <div class="mdl-cell mdl-cell--6-col pro-prop"> <div class="mdl-card mdl-shadow--2dp">
  <div class="mdl-card__media">
  <img src="img/pro.jpg" width="100%" height="200px" border="0"
   alt="" >
  <div class="prop-title">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>

  </div>
  
  <div class="mdl-card__supporting-text">
 <ul><li>Villa</li><li>2bhk</li><li>1250 sqft</li><li>North</li><li>Rs 2,50,00000</li></ul>
  </div>
</div></div>
  <div class="mdl-cell mdl-cell--6-col pro-prop"> <div class="mdl-card mdl-shadow--2dp">
  <div class="mdl-card__media">
  <img src="img/pro.jpg" width="100%" height="200px" border="0"
   alt="" >
  <div class="prop-title">
                      <span class="card-title">Property Name</span> <br>
                      <span >Location</span>
                    </div>

  </div>
  
  <div class="mdl-card__supporting-text">
 <ul><li>Villa</li><li>2bhk</li><li>1250 sqft</li><li>North</li><li>Rs 2,50,00000</li></ul>
  </div>
</div></div>
</div>
       




     <!--    <div class="mdl-card prop_card mdl-shadow--2dp">
  <div class="mdl-card__title">
     <h2 class="mdl-card__title-text">Property Name<br>Location</h2>
  </div>
  <div class="mdl-card__media">
    <img src="img/JG-Elevation-Banner3.jpg" width="100%" height="220" border="0" alt=""
     style="padding:0px;">
  </div>
  
  <div class="mdl-card__supporting-text">
<ul><li>Villa<p>Type</p></li><li>2bhk<p>BHk</p></li><li>1250 sqft<p>Area</p></li><li>North<p>Facing</p></li><li> Semi <p>Furnished</p></li><li>Yes <p>Bank Loan</p></li><li>1 <p>Car parking</p></li></ul>
 

  </div>
 
<div class="mdl-card__actions">
<input name="search" style="width: 100%; margin-bottom: 10px;" placeholder="Write Review.." type="text">
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
 Send
</button>
</div>

  <div class="mdl-card__actions mdl-card--border">

    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
       Review (208)
    </a>
       <ul class="timeline">
        <li>
          
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. </p>
              <a href="#"><i class="material-icons">thumb_up</i>&nbsp; like</a> &nbsp;<a href=""><i class="material-icons">comment</i> &nbsp;comment</a>
            </div>
          </div>
        </li>
        
          
    </ul>
 <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Show more
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">favorite</i>
    </button><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button> <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
     <i class="material-icons">videocam</i>
    </button>
  </div>
  </div> -->
  


</div>

  
<div style="display: none"  id="invite" class="mdl-cell mdl-cell--6-col">
       <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored addPeople">
   <i class="material-icons">person_add</i>
</button>
    <div class="flex-invite">
    <div class="invite-item">
   <h6>Invite Friends</h6>
   </div>
   <div class="invite-item"> <input type="text" style="width: 100%;" name="search" placeholder="search.."></div>
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
       </div>
</div>

           <div class="mdl-cell mdl-cell--3-col mdl-cell--hide-tablet mdl-cell--hide-phone">
            <h6>Followers</h6>
        <ul class="demo-list-two mdl-list">
  <li class="mdl-list__item mdl-list__item--two-line userProfile">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Suresh Kumar</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
      <span class="mdl-list__item-secondary-info">4.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
    </span>
  </li>
  <li class="mdl-list__item mdl-list__item--two-line userProfile">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Dinesh</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
     <span class="mdl-list__item-secondary-info">3.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
    </span>
  </li>
  <li class="mdl-list__item mdl-list__item--two-line userProfile">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Leo Simon</span>
      <span class="mdl-list__item-sub-title">location</span>
    </span>
    <span class="mdl-list__item-secondary-content">
     <span class="mdl-list__item-secondary-info">4.5</span>
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
    </span>
  </li>
</ul>
           </div>
        
    </div>

    </main>
</div>





 <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
 <script   src="https://code.jquery.com/jquery-3.2.1.js"></script>
 <script type="text/javascript">
   function myFunction() {
    $('.prop-item').show( "slow" );

}

function sendInivite(){

$('#property_show').hide();
$('#invite').show();
}

$(document).ready(function(){
    $(".userProfile").click(function(){
        location.href ="userProfile.php"
    });

    $('.pro-prop').click(function(){
        location.href ="group_page2.php";
    });
});
 </script>


 </style>
  </body>
  </html>