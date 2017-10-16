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

.searchFriends{

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
</style>
<div style="padding-right: 0px;padding-left: 0px;" class="container-fluid">
  <nav id="nav_bars" class="navbar navbar-default">
  <a style="position: absolute;padding: 18px;cursor: pointer;" href="userDashboard.php">Home</a>
 <div class="container" style="
    display: flex;
    justify-content: center;
">
    
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="friendsPage.php">Find Peoples</a></li>
      <li ><a href="followingPage.php"> Following</a></li>
      <li><a href="#">Followers</a></li>
      
    </ul>
  </div>
</nav>
</div>

<div style="margin-top: 15px;" class="container-fluid">
	<div class="row">
		<div class="col-md-3">
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
  </div> 
		

			<ul class="list-group">
     <li class="list-group-item">Frineds List <span class="badge">12</span></li>
  <li class="list-group-item">Following <span class="badge">5</span></li>
  <li class="list-group-item">Followers<span class="badge">3</span></li>
  </ul>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col col-offset-md-2 col-md-8 searchFriends text-center">
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
">
				<div class="col col-md-3">
					<div class="card">
  <img class="card-img-top" src="https://www.accountingweb.com/sites/default/files/styles/banner/public/executive_peopleimages.jpg?itok=DwoIhcbG" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Biju Bala</h4>
    <p class="card-text">10 followers</p>
     <div class="btn-group">
  <button type="button" class="btn btn-primary">Confirm</button>
  <button type="button" class="btn btn-primary">NotNow</button>
  
</div> 
  </div>
</div>
				</div>
				<div class="col col-md-3">
					<div class="card">
  <img class="card-img-top" src="http://www.transcom.com/Global/Scaled2/600x20000x2/Global-Our%20people-Executive%20Management-2013-Christian-Hult%C3%A9n.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Biju Bala</h4>
    <p class="card-text">10 followers</p>
    <button type="button" class="btn btn-default">Following</button>
      
  </div>
</div>
				</div>
				<div class="col col-md-3">
					<div class="card">
  <img class="card-img-top" src="http://www.transcom.com/Global/Scaled2/600x20000x2/Global-Our%20people-Executive%20Management-2013-Christian-Hult%C3%A9n.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Biju Bala</h4>
    <p class="card-text">10 followers</p>
  <a href="followingPage.php">  <button type="button" class="btn btn-default">Following</button></a>
      
  </div>
</div>
				</div>
				<div class="col col-md-3">
					<div class="card">
  <img class="card-img-top" src="https://www.aristocrat.com/sites/corp.aristocratlive.com/files/images/about-us/people/trevor-croker.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Biju Bala</h4>
    <p class="card-text">10 followers</p>
    <button type="button" class="btn btn-default">Join Groups</button>
      
  </div>
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