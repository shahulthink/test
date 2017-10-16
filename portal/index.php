
<?php include 'mainheader.php';?>
<link href="css/header.css" rel="stylesheet">
<style type="text/css">
  
  .btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;

}

.btn-gp{
   color: #fff;
   background-color:#d34836;
}
.btn-submit{
  color: #fff;
    background-color:#3b5998;
}

.btn-submit:hover{
  color: #fff;
    background-color:#3b5998;
}
.btn-joinus{
  color: #fff;
    background-color:#3b5998;
}
.btn-joinus:hover{
  color: #fff;
    background-color:#3b5998;
}

 .searchbackgorund {
    background-color: #2F4E78;
    height: 480px !important;
    color: #fff;
}

.banr-head {
    background: url(http://www.realtyfact.com/wp-content/uploads/2015/07/Real-estate-and-property-blogs-india.jpg)no-repeat center;
    padding: 80px 0;
   
    background-size: cover;
}

.banr-head .text-area {
    position: relative;
    text-align: center;
    min-height: 350px;
}
.banr-head .text-area h1 {
    font-size: 38px;
    font-weight: 600;
    text-shadow: 0px 2px 3px #000000;
    color: #fff;
}

.banr-head .text-area h2 {
    font-size: 38px;
    font-weight: 600;
    text-shadow: 0px 2px 3px #000000;
    color: #fff;
}.banr-head .text-area h6 {
    font-weight: normal;
    line-height: 24px;
}h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    line-height: 1.25em;
    color: #333333;
    margin-top: 24px;
    margin-bottom: 24px;
}
/*.pro_image{
      background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(img/main-bg.jpg);


}*/

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
.flip3D .front {
  position: absolute;
  transform: perspective(600px) rotateY(0deg);
  
  border-radius: 8px;
  backface-visibility: hidden;
  transition: transform .5s linear 0s;
}
.flip3D .back {
  position: absolute;
  transform: perspective(600px) rotateY(180deg);
  
  border-radius: 8px;
  backface-visibility: hidden;
  transition: transform .5s linear 0s;
}
.flip3D {
  width: 0;
  height: 0;
  margin: 10px;
  float: left;
}
.newlogin{
   background: #304863 none repeat scroll 0% 0% !important;
    color: #FFF !important;
    width: 100%;
    border-radius: 0px;
    margin-bottom: 15px;
    font-size: 18px;
}
   
   .position-center-center{
        background-color: rgba(0, 0, 0, 0.61);
    border-radius: 6px;
    margin-top: 10px;
   }

</style>

 
  <header>
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
          
         <!--  <ul class="nav navbar-nav navbar-right">
            <li style="padding: 8px;">
            <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary">Login</button></li>
            
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

</header>
<div class="container-fulid" style="margin-top: 50px;">
<div class="banr-head">
      <div class="container">
        <div class="row"> 
          
          <!-- CONTENT -->
          <div class="col-md-7">
            <div class="text-area">
              <div class="position-center-center col-md-10">
                <h1> Here comes the realestate platform that you’ve been waiting for</h1>
                <h2>Dream house </h2>
              </div>
            </div>
          </div>
          
          <!-- FORM SECTION -->
          <div class="col-md-5">
            <div class="login-sec"> 
            <div class="flip3D">
                <div class="front">
                <div class="card">
                  <div class="card-block">
                    <h4  style="text-align: center;" class="card-title">Join Us</h4>
<div class="col-md-12">
                  <div style="text-align: center;" class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                  <a href="#" class="btn btn-gp"><i class="fa fa-google-plus"></i> Google</a>
                </div>
                               <div style="text-align: center;" > or</div>
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">User Name or Email Id</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="User Name or Email Id" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div style="text-align: center;" class="form-group">
                        <a href="userListing.php" class="btn btn-submit"> Sign in</a>
                        
                    </div>
                    
                 </form>
                  
                    <a href="#" class="newlogin btn">Join Now</a>
                  </div>
                </div>
                </div>
                </div>

                <div class="back">
                <div class="card">
             <div class="card-block" style="width: 340px;">
                  <h4  style="text-align: center;" class="card-title">Join Now</h4>
                
                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">User Name</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Email</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="email" required>
                                            
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Mobile No</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="mobile no" required>
                                            
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Confirm Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required>
                                            
                    </div>
                    <div style="text-align: center;" class="form-group">
                        <a href="userListing.php" class="btn btn-submit"> Sign in</a>
                        
                    </div>
                    
                 </form>

                  </div>
                </div>
              </div>

             </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>


    

<?php include 'loginfooter.php';?>
<?php include 'footer.php';?>
   


<script type="text/javascript">
  $(document).ready(function() {

  $(".newlogin").on('click', function() {
;
    if ($(this).attr('data-click-state') == 1) {
      $(this).attr('data-click-state', 0)
      frontFlip();
    } else {
      $(this).attr('data-click-state', 1)
      backFlip();
    }
  });

});

function frontFlip() {
  $(".front")
    .css('transform', 'perspective(600px) rotateY(0deg)')
  $(".back")
    .css('transform', 'perspective(600px) rotateY(180deg)')
}

function backFlip() {
  $(".back")
    .css('transform', 'perspective(600px) rotateY(0)')
  $(".front")
    .css('transform', 'perspective(600px) rotateY(-180deg)')
}
</script>
  </body>

</html>
