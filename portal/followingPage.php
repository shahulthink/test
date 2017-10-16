<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>

<style type="text/css">
	
.navbar-sfixed {
     top: 0px !important;
     z-index: 11;
    position: fixed !important;
    width: 100%;

}
#nav_bars{
	    background-color: #fff !important;
}
#nav_bars li{
	font-weight: 600;
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
}
.card-block {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center;
}
.card img{
	height: 150px;
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
    margin-bottom: 6px;
}
#addComment input[type=text] {
    width: 100%;
padding:8px;
box-sizing: border-box;
border: none;
position: relative;

}


#addComment input[type=text]:focus {
   border-bottom: 1px solid rgb(43, 80, 117);
}

#post ul{
      list-style: outside none none;
    display: flex;
    justify-content: space-between;
    padding: 0px;
    cursor: pointer;


}

#post li{
  padding-top: 8px;
}

#left {
    width: 100px;
    position: fixed;
    top: 0;
    left: 0;
    background: red;
}

.builder-details ul {
    display: flex;
    list-style: none;
    justify-content: space-around;
}

#postUser{
  background-color: rgb(255, 255, 255);
padding: 4px;
text-align: center;
}
</style>
<div style="padding-right: 0px;padding-left: 0px;" class="container-fluid">
  <nav id="nav_bars" class="navbar navbar-default">
  <a style="position: absolute;padding: 18px;cursor: pointer;" href="friendsPage.php">Home</a>
 <div class="container" style="
    display: flex;
    justify-content: center;
">
    
    
    <ul class="nav navbar-nav">
      <li ><a href="friendsPage.php">Find Peoples</a></li>
      <li class="active"><a href="followingPage.php"> Following</a></li>
      <li><a href="#">Followers</a></li>
      
    </ul>
  </div>
</nav>
</div>



<div style="margin-top: 15px;" class="container-fluid">
	<div class="row">
		<div class="col-md-3">
    <div style="width: 24%;" class="affix">
		<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Near by Areas</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<div id="menu">
          <ul class="list-inline">
            <li data-value="Rent house" class="">selvapuram</li>
           
            <li data-value="Owner Houses" class="">town hall</li>
               <li data-value="Owner Houses" class="">Avinashi </li>
               <li data-value="Owner Houses" class=""> Peelamedu </li>
               <li data-value="Owner Houses" class=""> Race Course </li>
               <li data-value="Owner Houses" class="">Appusamy Layout </li>
            
          </ul>
        </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Near by Home</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><div id="menu">
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
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Near by WorkPlaces</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><div id="menu">
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
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Life Style</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><div id="menu">
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
    </div>

  </div> 
		

			<ul class="list-group">
     <li class="list-group-item">Frineds List <span class="badge">12</span></li>
  <li class="list-group-item">Following <span class="badge">5</span></li>
  <li class="list-group-item">Followers<span class="badge">3</span></li>
  </ul>
  </div>
		</div>



		<div class="col-md-6">
			<div class="row">
				<div class="col col-md-12 searchFriends text-center">
					 <form>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form> 
				</div>
				</div>
				<div class="row" style="
    margin-top: 15px;
    margin-bottom: 15px;
"><div class="col col-md-12">
				<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-md-1">
<img class="card-img-top" style="width: 45px;" src="https://www.louisvillewebgroup.com/sites/default/files/styles/team-member/public/avatar-circle-blue.png?itok=UmUsBb4f" alt="Card image cap">

      </div>
      <div class="col-md-8"><h5>Gowtham Raj<br>Tagged units</h5></div>
     
      <div class="col-md-2">
      <span>Join Group <br> Oct 2016</span>
       

      </div>
 <div class="col-md-1" style="
    padding-top: 10px;
"> <i class="fa fa-share-alt fa-lg" aria-hidden="true"></i></div>
    </div>
  </div>
    <div class="panel-body">
<div style="position: absolute; text-shadow: 2px 2px 4px rgb(0, 0, 0); font-size: 1.1em;  color: rgb(255, 255, 255); padding: 16px;" class="row">
    <div class="col-md-2">
      <img src="img/realitindia_logo.png?width=140&amp;height=140" alt="Nithya" width="120px">

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
    <img class="img" width="100%" height="280px" src="http://www.propchill.com/project_image/gurgaon/shoba_international_city.png"></div>
    <div class="panel-body">
      <p><b>Shahul Hameed</b> Super Apartment  We welcome u </p>
      <p><b>Shahul Hameed</b> Super Apartment  We welcome u </p>
    </div>

    <div class="panel-footer">
      <div class="row">
       <div id="postUser" class="col-md-1"><i class="fa fa-user fa-2x" aria-hidden="true"></i></div>
          <div id="addComment" class="col-md-8">
            <input type="text" placeholder="Add Comments" id="fname" name="fname">
          </div>
          <div id="post" class="col-md-3">
            <ul>
              
              <li><i class="fa fa-comments-o" aria-hidden="true"></i> <span>+2</span>

</li>
              
              <li><button type="button" class="btn btn-primary btn-sm">Send</button></li>


            </ul>
          </div>
      </div>
    </div>
</div>
</div>
	<div class="col col-md-12">
        <div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
      <div class="col-md-1">
<img class="card-img-top" style="width: 45px;" src="https://www.louisvillewebgroup.com/sites/default/files/styles/team-member/public/avatar-circle-blue.png?itok=UmUsBb4f" alt="Card image cap">

      </div>
      <div class="col-md-8"><h5>Gowtham Raj<br>Tagged units</h5></div>
     
      <div class="col-md-2">
      <span>Join Group <br> Oct 2016</span>
       

      </div>
 <div class="col-md-1" style="
    padding-top: 10px;
"> <i class="fa fa-share-alt fa-lg" aria-hidden="true"></i></div>
    </div>
  </div>
    <div class="panel-body"><img class="img" width="100%" height="280px" src="http://www.propchill.com/project_image/gurgaon/shoba_international_city.png"></div>
    <div class="panel-body">
      <p><b>Shahul Hameed</b> Super Apartment  We welcome u </p>
      <p><b>Shahul Hameed</b> Super Apartment  We welcome u </p>
    </div>

    <div class="panel-footer">
      <div class="row">
          <div id="addComment" class="col-md-8">
            <input type="text" placeholder="Add Comments" id="fname" name="fname">
          </div>
          <div id="post" class="col-md-4">
            <ul>
              <li><i class="fa fa-camera" aria-hidden="true"></i>
</li>
              <li><i class="fa fa-comments-o" aria-hidden="true"></i> <span>+2</span>

</li> <li><i class="fa fa-ellipsis-h" aria-hidden="true"></i>
</li>
              
              <li><button type="button" class="btn btn-primary btn-sm">Post</button></li>


            </ul>
          </div>
      </div>
    </div>
</div>
</div>			
				
</div>
			</div>

    <div class="col-md-3">
      <div class="card">
  <img class="card-img-top" src="http://www.transcom.com/Global/Scaled2/600x20000x2/Global-Our%20people-Executive%20Management-2013-Christian-Hult%C3%A9n.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Biju Bala</h4>
    <ul style="display: flex; list-style: outside none none; justify-content: space-around; padding-left: 6px;">
      <li>10<p>Reviews</p></li>
      <li>5<p>Groups</p></li>
      <li>10<p>Followers</p></li>
    </ul>

      
  </div>
</div>

<div class="card">
 
  <div class="card-block">
   <h5 class="card-title" style="
    text-align: left;
    font-weight: 600;
">Suggested to follow</h5>
    <div class="row">
      <div class="col-md-2">
      <img class="card-img-top" style="width: 45px; height: 45px" src="https://www.louisvillewebgroup.com/sites/default/files/styles/team-member/public/avatar-circle-blue.png?itok=UmUsBb4f" alt="Card image cap">
      </div>
      <div class="col-md-6" style="
    text-align: left;
">
      <h5>Gowtham Raj</h5>
      
      <span>2 Units</span>&nbsp;<span>2 follows</span>
      </div>
      <div class="col-md-2" style="text-align: left;padding-top: 10px;">
      <button type="button" class="btn btn-default">Invite</button>
      </div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-2">
      <img class="card-img-top" style="width: 45px; height: 45px" src="https://www.louisvillewebgroup.com/sites/default/files/styles/team-member/public/avatar-circle-blue.png?itok=UmUsBb4f" alt="Card image cap">
      </div>
      <div class="col-md-6" style="
    text-align: left;
">
      <h5>Gowtham Raj</h5>
      
      <span>2 Units</span>&nbsp;<span>2 follows</span>
      </div>
      <div class="col-md-2" style="text-align: left;padding-top: 10px;">
      <button type="button" class="btn btn-default">Invite</button>
      </div>
      <div class="col-md-2"></div>
    </div>

      
  </div>
</div>

    </div>

		</div>
	</div>






<?php include 'footerdemo.php';?>
<?php include 'footer.php';?>



<script type="text/javascript">
    $(document).ready(function(){
       
        $(".fa-share-alt").click(function(){
             alert('ho');
        });

    $(window).scroll(function () { 

   // alert($(window).scrollTop());

    if ($(window).scrollTop() >= 50) {
        // alert('true');
      $('#nav_bars').addClass('navbar-sfixed');
     
    }else{
       // alert('false');
    }

    if ($(window).scrollTop() < 50 ) {
      $('#nav_bars').removeClass('navbar-sfixed');
      
    }
})
  });


</script>