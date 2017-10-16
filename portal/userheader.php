<link rel="stylesheet" href="css/header.css">
<style type="text/css">
  #navbar ul li a {
    color:#fff;
  }
  #navbar ul li ul.dropdown {
        min-width: 100%; /* Set width of the dropdown */
        background: #fff;
        display: none;
        position: absolute;
        z-index: 999;
        left: -30px;
        padding: 4px;
    /*margin-top: 20px;*/
       width: 180px;
       transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

#navbar ul li ul.dropdown.notification{
        min-width: 100%; /* Set width of the dropdown */
        background: #fff;
        display: none;
        position: absolute;
        z-index: 999;
        left: -285px;
        padding: 4px;
    /*margin-top: 20px;*/
       width: 400px;
       /*min-height: 350px;
overflow-y: scroll;
height: 100%;*/
transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

#navbar ul li ul.dropdown.notification span{
  color: #89959B;
height: auto;
font-size: 12px;
line-height: 22px;
cursor: default;
padding:8px;
}
#navbar ul li ul.dropdown.notification{
      box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
      border-radius: 4px;
}
#navbar ul li ul.dropdown.notification li:last-child{
  background-color: #e9eaed;
text-align: center;
border-top: 1px solid #dddddd;
}



#navbar .dropdown a{
  color: #000;
}

      
    #navbar ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */

    }
    #navbar  ul li ul.dropdown li{
        display: block;
    text-overflow: ellipsis;
    cursor: pointer;
    list-style: none;
    font-weight: 400;
    border-bottom: 1px solid #f0f0f0;
    font-size: 14px;
    color: #333;
    height: 42px;
    line-height: 42px;
    padding: 0 10px;
    overflow: hidden;
    white-space: nowrap;
    }
    .dropdown::before{
      content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    color: transparent;
    border: 10px solid black;
    border-color: transparent transparent white;
margin-top: -24px;
margin-left: 70px;
    }
.notification::before{
  content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    color: transparent;
    border: 10px solid black;
    border-color: transparent transparent white;
    margin-top: -24px;
    margin-left: 293px;
}

    #navbar  ul li ul.dropdown li:last-child{
      border-bottom: 0px solid #f0f0f0;
    }
    #navbar  ul li ul.dropdown li a{
      cursor: pointer;
    }

     #navbar  ul li ul.dropdown li:hover{
      background:#e0d7d7;
     cursor: pointer;
     }

     #navbar .badge{
      background-color: #40bde8;
    border-radius: 10px;
    margin-top: -22px;
     }
     
     #navbar ul li ul.dropdown .notification .friends li{
      line-height: 20px !important;
     }
     #navbar ul li ul.dropdown.notification .friends{
      height: 65px;
      border-top: 1px solid #000;
      border-bottom : 1px solid #000;
      padding:8px;
     }

#navbar ul li ul.dropdown .notification .builder li{
      line-height: 20px !important;

     }
     #navbar ul li ul.dropdown.notification .builder{
      height: 65px;
      border-top: 1px solid #000;
      border-bottom : 1px solid #000;
      padding:8px;
     }
      
</style>
<header class="header navbar" id="header">
            
            <div class="header__container">

                 <nav class="navbar navbar-default ">
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
           <li onclick="openSide()"><a href="#"><i class="fa fa-comments-o" aria-hidden="true" style="color: #fff;"></i><span class="badge">5</span></a></li>
             

            <li> <a href=""> <i style="color: #fff;" class="fa fa-bell-o"></i><span class="badge">5</span></a>
              <ul class="dropdown notification">
                <span>Friends Request</span>
               
                <li class="friends">
                  <div class="row">
                    <div class="col-md-2">
                      <img src="https://icon-icons.com/icons2/884/PNG/512/person_2_icon-icons.com_68896.png" width="50px;">
                    </div>
                   <div style="margin-top: -4px;" class="col-md-5"><p style="font-size: 12px;">Suresh</p><p style="margin-top: -35px;">location</p></div>
                    <div class="col-md-5 friends-action">
                      <button type="button" onclick="confirm()" class="btn btn-primary btn-xs">Confirm</button>&nbsp;<button type="button" class="btn btn-primary btn-xs">Not now</button>
                    </div>
                  </div>
                </li>
                <li class="friends">
                  <div class="row">
                    <div class="col-md-2">
                      <img src="https://icon-icons.com/icons2/884/PNG/512/person_2_icon-icons.com_68896.png" width="50px;">
                    </div>
                   <div style="margin-top: -4px;" class="col-md-5"><p style="font-size: 12px;">Suresh</p><p style="margin-top: -35px;">location</p></div>
                    <div class="col-md-5 friends-action">
                      <button type="button" onclick="confirm()" class="btn btn-primary btn-xs">Confirm</button>&nbsp;<button type="button" class="btn btn-primary btn-xs">Not now</button>
                    </div>
                  </div>
                </li>
<span>Builders</span>
                <li class="builder">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png" width="60px;">
                    </div>
                   <div style="margin-top: -4px;" class="col-md-6"><p style="font-size: 12px;">Builder Name</p><p style="margin-top: -35px;">location</p></div>
                    <div class="col-md-3 friends-action" style="float:none";>
                      <button type="button" class="btn btn-primary btn-xs">Show Page</button>
                    </div>
                  </div>
                </li>
 <span>Groups Request</span>
               
                <li class="friends">
                  <div class="row">
                    <div class="col-md-2">
                      <img src="https://image.flaticon.com/icons/png/512/33/33715.png" width="50px;">
                    </div>
                   <div style="margin-top: -4px;" class="col-md-5"><p style="font-size: 12px;">Suresh</p><p style="margin-top: -35px;">location</p></div>
                    <div class="col-md-5 friends-action">
                      <button type="button" onclick="confirm()" class="btn btn-primary btn-xs">Confirm</button>&nbsp;<button type="button" class="btn btn-primary btn-xs">Not now</button>
                    </div>
                  </div>
                </li>
                
                <li><a href="#">See All</a></li>
              </ul>
            </li>

            <li> <a href="">
    <i style="color: #fff;" class="fa fa-heart-o" aria-hidden="true"></i> <span class="badge">5</span></a>

    
  </li>

             <li><a href=""><i class="fa fa-user" aria-hidden="true"></i> &nbsp; Shahul <span class="caret"></span></a>
               <ul class="dropdown">
               <li><a href="userProfile.php"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; Profile</a></li>
                
                <li><a href="addProperty.php"><i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp; Sell Your Property</a></li>
               
                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> &nbsp; Settings</a></li>
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Log out</a></li>
            </ul>
            </li>
           
          
   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


            </div>


            <div class="header__navigation__container">
                <div class="header__navigation__wrapper clearfix">
                    <div class="left h100">
                        <a href="" class="header__navigation__link get-the-app">
                            <img src="https://b.zmtcdn.com/images/icons/get-the-app-plain.svg">
                            <span class="">Get the App</span>
                        </a>
                    </div>
                    <div class="right h100">
                        <a href="" id="header-order-food-btn" class="header__navigation__link left">
                        
                                <span class="">Sort By:</span>
                            </a>
                         <a href="userDashboard.php" style="background-color: rgb(28, 55, 80);
color: rgb(255, 255, 255);" id="unitsView" class="header__navigation__link left">
                                
                                <span class="">Units</span>
                            </a>
                            <a href="builderpage.php" id="buildersPages" class="header__navigation__link left">
                                
                                <span class="">Builders</span>
                            </a>
                            <a href="property_compare.php" id="comparePage" class="header__navigation__link left">
                                
                                <span class="">Compare</span>
                            </a>
                 </div>
            </div>
            </div>
        </header>

        <script>
          function confirm() {
    window.location="friendsPage.php";
}
        </script>