<style>
	footer{
		background-color: #282C35;
    border-top: 1px solid #eee;
    padding: 0;
    padding-bottom: 15px;

	}
	footer h4{
		margin: 12px 0;
font-size: 18px;
font-weight: 500;
color: #ADB0B6;
	}
	footer ul{
		
    padding: 0;
    margin: 0;
    list-style-type: none;

	}

	footer ul li{
margin-bottom: 6px;
	}
		footer ul li a{
		font-size: 14px;color: #cdcdcd;
		
	}
	footer ul li a:hover{
		font-size: 14px;color: #cdcdcd;
	}

	footer hr{
		border-top: 1px solid #3C3F46;
margin-top: 5px;
margin-bottom: 5px;
	}

    .copyright ul{
    display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
list-style: none;
padding-left: 0px;
}
.copyright li{
    padding-right: 8px;
margin: 2px 5px 0 0;
border-right: 1px solid rgba(255,255,255,0.55);
color: #cdcdcd;
cursor: pointer;
padding-left: 8px;
font-weight: 600;
}
.copyright li:last-child {
    border-right: 0px solid rgba(255,255,255,0.55);

}

#view-chat {
    position: fixed;
    display: block;
    right: 0;
    bottom: 0px;
    margin-right: 40px;
    margin-bottom: 30px;
    z-index: 901;
    border: 4px solid #1da1db;
   /* outline-style: dotted;*/
    outline-color: #00ff00;
    background-color: #1da1db;
    border-radius: 50%;
}
#view-source {
    position: fixed;
display: block;
right: 0;
bottom: 0;
margin-right: 40px;
margin-bottom: 40px;
z-index: 900;
background-color: #1da1db;
color: #fff;
text-align: center;
padding: 10px 20px;
border-radius: 8px 8px 0 8px;
line-height: 1.25em;
margin: 1em .5em 3px 0;
-ms-flex-item-align: end;
align-self: flex-end;
cursor: pointer;
    }

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 9002;
    top: 0;
    right: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    z-index: 1;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#mySidenav .chat-cont{
    position: relative;
        margin-left: 0px;
    margin-right: 0px;
    background-color: #2b5076;
    color: #fff;
    padding: 6px;
}

#mySidenav .chat-footer{
    position: absolute;
    bottom: 0px;
    background-color: #2b5076;
    color: #fff;
    width: 100%;
}
#mySidenav .chat-room{
    background-color: #dbdbdb;
   height: 70vh;
}
#mySidenav #menu ul li{
    position: relative;
}
#menu .online::before{

   content: '';
display: inline-block;
width: 15px;
height: 15px;
-moz-border-radius: 7.5px;
-webkit-border-radius: 7.5px;
border-radius: 7.5px;
background-color: #7fd569;
position: absolute;
top: -8px;
right: 0px;
}
#menu .offline::before{

   content: '';
display: inline-block;
width: 15px;
height: 15px;
-moz-border-radius: 7.5px;
-webkit-border-radius: 7.5px;
border-radius: 7.5px;
background-color: red;
position: absolute;
top: -8px;
right: 0px;

}

.sels {
    background-color: #2b5076;
    color: #fff;
}
#mySidenav #menu ul li {
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
}

</style>

<!-- sidebar Chat-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSide()">&times;</a>
  <div class="container-fluid chat-cont">
    <div class="row">
        <div class="col-md-3">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/b1/bb/ec/b1bbec499a0d66e5403480e8cda1bcbe.png" style="width: 45px;">
        </div>
        <div class="col-md-9">
            <p>Shahul</p>
            <p>Realitindia developer</p>

        </div>
    </div>
    

    
 </div>
  <div class="container-fluid">
 <div class="row">
    <div class="col-md-12">
        <h4>Builders online</h4>
        <div id="menu">
          <ul class="list-inline">
            <li data-value="nithya" class="sels online">Nithya</li>
            <li data-value="springField" class="sels offline">Spring Field</li>
            
            
          </ul>
        </div>
    </div>
    </div>
</div>
<div class="container-fluid chat-room">
 <div class="row">

    <div class="col-md-12">
         <div><h4><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Nithya</h4></div>
    </div>
    </div>
</div>

 <div class="container-fluid chat-footer">
 <div class="row" style="margin-top: 10px;">
 <div class="col-md-9">
       <div class="form-group">
  
  <input type="text" placeholder="type here message" class="form-control" id="usr">
</div> 
</div>
 <div class="col-md-2">
 <button type="button" class="btn btn-default">Send</button>
 </div>
 <div class="col-md-1"></div>
</div>
    </div>

</div>


<!-- <div>
<a id="view-chat" href=""><img src="https://s-media-cache-ak0.pinimg.com/originals/b1/bb/ec/b1bbec499a0d66e5403480e8cda1bcbe.png" style="width: 45px;"></a>
<button onclick="openSide()" type="button"  id="view-source" class="btn btn-default">Chat</button>
</div> -->

<footer class="container-fluid">
  <div class="container" style="margin-bottom: 10px;">
  	<div class="pull-left">
  		<img class="logobrand" style="background-color: rgb(255, 255, 255); margin-top: 8px;" src="img/realitindia_logo.png">
  	</div>

  	<div class="pull-right">
  		<h4 style="color: rgb(255, 255, 255);">Language</h4>	
  	</div>

  </div>

  <div class="container">
  <hr>
<div class="row">
	<div class="col-md-3">
		<h4>About Realitindia</h4>
		<ul class="footer-links--big">
                    <li>
                        <a href="#">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Culture
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Careers
                        </a>
                    </li>
                    <li class="contact-big-footer-link">
                        <a href="#">
                            Contact
                        </a>
                    </li>
                </ul>
	</div>
	<div class="col-md-3">
		<h4>For Project</h4>
		<ul class="footer-links--big">
                    <li>
                        <a href="#">
                            Lead Generation
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Live Chat Alerts 
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Online lead Management
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Run Campaign
                        </a>
                    </li>
                    <li class="contact-big-footer-link">
                        <a href="#">
                            Multiple Projects
                        </a>
                    </li>
                    <li class="contact-big-footer-link">
                        <a href="#">
                            Single Page Check Out
                        </a>
                    </li>
                </ul>
	</div>
	<div class="col-md-3">
		<h4>Property Listings</h4>
		<ul class="footer-links--big">
                    <li>
                        <a href="addProperty.php">
                            Add your Property
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Claim your Property 
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lead Traffic 
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Property Reviews
                        </a>
                    </li>
                    <li class="contact-big-footer-link">
                        <a href="#">
                            Projerty in Groups
                        </a>
                    </li>
                    
                </ul>
	</div>
	<div class="col-md-3">
<ul style="margin-top: 45px;" class="footer-links--big">
                    <li>
                        <a href="addProperty.php">
                            Add your Property
                        </a>
                    </li>
					<li>
                        <a href="#">
                           Track your Property Visitor
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Booking
                        </a>
                    </li>
                    </ul>
	</div>
</div>
</div>
<div class="container">
  <hr>

	<div class="row">
	<div class="col-md-12"><h4>India</h4></div>
	
	<div class="col-md-3">
	<ul class="footer-links--big">
   <li class="contact-big-footer-link">
                        <a title="Delhi / NCR Real Estate" href="">Delhi / NCR</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Mumbai Real Estate" href="">Mumbai</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Bangalore Real Estate" href="">Bangalore</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Chennai Real Estate" href="">Chennai</a></li>
                        <li class="contact-big-footer-link">
                        <a title="Kerala Real Estate" href="">Kerala</a></li>
                        </ul></div>
	<div class="col-md-3">
	<ul class="footer-links--big">
		<li class="contact-big-footer-link">
                        <a title="Hyderabad Real Estate" href="">Hyderabad</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Pune Real Estate" href="">Pune</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Kolkata Real Estate" href="">Kolkata</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Ahmedabad Real Estate" href="">Ahmedabad</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Chandigarh Real Estate" href="">Chandigarh</a></li>

                        </ul>
	</div>
	<div class="col-md-3">
		<ul class="footer-links--big">
		<li class="contact-big-footer-link">
                        <a title="Jaipur Real Estate" href="">Jaipur</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Nagpur Real Estate" href="">Nagpur</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Bhubaneswar Real Estate" href="">Bhubaneswar</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Coimbatore Real Estate" href="https://www.99acres.com/Coimbatore-Real-Estate.htm">Coimbatore</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Goa Real Estate" href="https://www.99acres.com/Goa-Real-Estate.htm">Goa</a></li>
                                             <li class="contact-big-footer-link">
                        
                        </ul>
	</div>
	<div class="col-md-3">
		<ul class="footer-links--big">
		 <li class="contact-big-footer-link">
                        <a title="Indore Real Estate" href="https://www.99acres.com/Indore-Real-Estate.htm">Indore</a></li>
                                             
                                             <li class="contact-big-footer-link">
                        <a title="Lucknow Real Estate" href="https://www.99acres.com/Lucknow-Real-Estate.htm">Lucknow</a></li>
<li class="contact-big-footer-link">
                        <a title="Ranchi Real Estate" href="https://www.99acres.com/Ranchi-Real-Estate.htm">Ranchi</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Raipur Real Estate" href="https://www.99acres.com/Raipur-Real-Estate.htm">Raipur</a></li>
                                             <li class="contact-big-footer-link">
                        <a title="Mangalore Real Estate" href="https://www.99acres.com/Mangalore-Real-Estate.htm">Mangalore</a></li>

        </ul>
	</div>
		
		
	</div>
</div>

<div class="container">
  <hr>

	 <div class="row">
<div class="copyright text-center">
    <ul>
        <li>Realitindia.com@2017</li>
        <li>User Agreement</li>
        <li>Privacy Policy</li>
        <li>Support</li>
        <li>Help Center</li>
    </ul>
</div>
</div>
	</div>

</footer>

<script type="text/javascript">
  function openSide() {
    document.getElementById("mySidenav").style.width = "400px";
}

function closeSide() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>