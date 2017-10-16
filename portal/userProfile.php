<?php include 'mainheader.php';?>

  <style type="text/css">
    .contain{
       width: 100%;
      position: relative;
      }

      .bg{
      display: block;
    
    }

    /* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
    background: #fff;
    position: absolute;
       margin-top: -80px;
    
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


.userProfile{
  padding: 20px 10px 10px 20px;
background: #fff;
position: absolute;
top: -80px;
width: 97%;
}



 fieldset 
  {
    border: 1px solid #ddd !important;
    margin: 0;
    min-width: 0;
    padding: 10px;       
    position: relative;
    border-radius:4px;
    background-color:#f5f5f5;
    padding-left:10px!important;
        margin-top: 15px;
  } 
  
    legend
    {
      font-size:14px;
      font-weight:bold;
      margin-top: 10px;
      margin-bottom: 10px; 
      width: auto; 
      border: 1px solid #ddd;
      border-radius: 4px; 
      padding: 5px 10px 5px 10px; 
      background-color: #ffffff;
    }
    
      #menu ul li {
    width: auto;
    height: auto;
    cursor: pointer;
    font-size: 14px;
    padding: 6px 14px;
    margin: 0 6px 6px 0;
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
.selected{
  background-color: rgb(43, 80, 117);
color: rgb(255, 255, 255);
/*transition-delay: 1s;*/
}

    .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}


.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google-plus:hover,.btn-google-plus:focus,.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,0.2)}




.btn-linkedin{color:#fff;background-color:#007BB6;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:hover{color:#fff;background-color:#007BB6;border-color:rgba(0,0,0,0.2)}


.builderheader{
  display: none;
}

  </style>


   
<div class="userheader">
 <?php include 'userheader.php';?>
</div>
<div class="builderheader">
 <?php include 'builderheader.php';?>
</div>


    <div class="container-fulid">
    
 <img src="https://teja8.kuikr.com/cfassets/images/superagent_banner.jpg" alt="" style="width: 100%;height: 40vh;">


    <div class="container-fulid">
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
      <div class="col-md-10">
          <div class="userProfile">
                <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="pill" href="#home">About Me</a></li>
    <li><a data-toggle="pill" href="#menu1">Life Style</a></li>
    <li><a data-toggle="pill" href="#menu2">Friends List</a></li>
    <li><a data-toggle="pill" href="#menu3">Group Details</a></li>
    <li><a data-toggle="pill" href="#menu4">Your Reviews</a></li>
    <li><a data-toggle="pill" href="#menu5">Your Shortlist</a></li>
    <li><a data-toggle="pill" href="#menu6">Home Loans</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
         <fieldset class="col-md-12">      
          <legend>About Me</legend>
            <div class="row">
                <div class="col-md-3 form-group">
                  <label for="email">Name</label>
                  <input class="form-control" id="username" placeholder="Name" type="text">
                </div>
                <div class="col-md-3 form-group">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" placeholder="abc@gmail.com" type="email">
                </div>
                <div class="col-md-3 form-group">
                  <label for="email">Phone No</label>
                  <input class="form-control" id="mobile" placeholder="99999999999" type="text">
                </div>
                
                <div class="col-md-3 form-group">
                  <label for="email">Date of Birth</label>
                  <input type="text" data-provide="datepicker" placeholder="Date of Birth" class="form-control">
                </div>
<div class="col-md-3 form-group">
                  <label for="email">Gender</label>
  <form>
    <label class="radio-inline">
      <input type="radio" name="optradio">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Female
    </label>
    
  </form>
                </div>
                <div class="col-md-3 form-group">
                  <label for="mobile">Designation</label>
                  <input class="form-control" id="mobile" placeholder="99999999999" type="text">
                </div>
                
                <div class="col-md-3 form-group">
                  <label for="exampleTextarea">Address</label>
                  <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
                </div>
                <div class="col-md-3 form-group">
                  <label for="exampleTextarea"> Other Contact Address</label>
                  <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
                </div>  
                <div class="col-md-6 form-group">
                  <label for="exampleTextarea"> Tell about You</label>
                  <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
                </div>
                
 <div class="col-md-6 form-group">
 <label for="exampleTextarea">Sell Your Property</label>
 <div style="padding-left: 8px;" id="menu">
          <ul class="list-inline">
            <li data-value="Owner" class="sel">Yes</li>
            <li data-value="Builder" class="sel">No</li>
            
          </ul>
        </div>
        <div style="display: none" class="sellProp">
<a href="addProperty.php">Post your Property Free</a>
</div>
 </div>



              </div>
          
        </fieldset> 
        <fieldset class="col-md-12">      
          <legend>Change Password</legend>
            <div class="row">
              <div class="col-md-3"><div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Old Password</label>
                       <input type="Password" class="form-control" id="exampleInputEmail2" placeholder="old Password" required>
                    </div></div>
              <div class="col-md-3"><div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">New Password</label>
                       <input type="Password" class="form-control" id="exampleInputEmail2" placeholder="New Password" required>
                    </div></div>
              <div class="col-md-3"><div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Confirm Password</label>
                       <input type="Password" class="form-control" id="exampleInputEmail2" placeholder="confirm password" required>
                    </div></div>
              <div class="col-md-3"><button type="button" class="btn btn-default">Submit</button></div>
            </div>
          
        </fieldset> 
        <fieldset class="col-md-12">      
          <legend>Share Social Connection</legend>
            <div class="row">
              <div class="col-md-3">
               <a class="btn btn-block btn-social btn-facebook">
        <i class="fa fa-facebook"></i> Sign in with Facebook
      </a>
      </div>
              <div class="col-md-3">
                 <a class="btn btn-block btn-social btn-google-plus">
        <i class="fa fa-google-plus"></i> Sign in with Google
      </a>
              </div>
              <div class="col-md-3"><a class="btn btn-block btn-social btn-linkedin">
        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
      </a></div>
              <div class="col-md-3"></div>
            </div>
          
        </fieldset> 
    </div>
    <div id="menu1" class="tab-pane fade">
      
      <form role="form" name="form5" id="form5">
            <div class="row" style="margin-top: 8px">
                                
                                <div class="col-md-4">
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
                                    </ul></div>
                                <div class="col-md-4">
                                    <ul class="list-group checked-list-box">
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
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-group checked-list-box">
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Gym">Gym
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Power Backup">Power Backup
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Multipurpose Hall">Multipurpose Hall
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Multipurpose Hall">Multipurpose Hall
                                            </label>
                                        </li>

                                        <li class="list-group-item">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="datavalue[]" id="datavalue" value="Piped Gas connection">Piped Gas connection
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
            
           
              </form>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Friends List</h3>
   <div class="col-md-3" style="border: 1px solid #989898;padding: 4px;">
        <div class="ui horizontal list col-md-16">

  <div class="item col-md-16">
      <a class="left" href="">
        <img class="ui mini avatar image" alt="MuthuKumar Kannappan" src="https://t4.ftcdn.net/jpg/01/05/72/55/240_F_105725565_vVl8Hc6kIRQsgquqdQYrz7fWFrfQAGCw.jpg" data-original="" style="display: inline-block;width: 50px">
      </a>
    
    <div class="content" style="float: right;padding:4px">

      <div class="header nowrap">
          <a href="#">
              Kannappan
          </a>
      </div>

        <span class="grey-text fontsize5">
             1 Review,1 Follower
        </span>
    </div>
</div>


</div>
      </div>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Group Details</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div> 
            
          </div>
      </div>
      </div>


    

<?php include 'footer.php';?>


<script type="text/javascript">

  $( document ).ready(function() {
 
  $('#menu li').on('click', function(){
   
    $('li').removeClass('selected');
    $(this).addClass('selected');
    var sell = $(this).attr('data-value');

     if(sell == 'Builder'){
        
      $('.sellProp').show();
      $('.userheader').hide();
      $('.builderheader').show();

}else {
  $('.sellProp').show();
      $('.userheader').hide();
      $('.builderheader').show();
     
}

});
});

</script>

          
    </body>
  </html>