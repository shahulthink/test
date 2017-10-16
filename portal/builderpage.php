<?php include 'mainheader.php';?>
<?php include 'userheader.php';?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/css/bootstrap-slider.css" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <style type="text/css">
  

        .bg_img{
            position: relative;
        }
        .bg-cont{
            position: absolute;
            margin: 0;
            top: 80px;
            color: #fff;
            left: 35%;
            color: #fff;
            text-shadow: 2px 2px 4px #000000;
        }
        .panel{
            position: relative;
            cursor: pointer;
            background-color:#fff;
                box-shadow: 0 1px 6px #acacac;
        }
        /*.panel-body::after{
   font-family: FontAwesome;
   content: "\f105";
   position: absolute;
    margin: 0;
    right: 20px;
    top: 14px;
}
*/

.panel-body{
    display: flex;
    flex-direction:row;
}
.flex-panel{
    flex: 1;

}

.panel-body .flex-panel img {
    max-width: 100%;
    max-height: 100%;
}


.panel-body .flex-panel img  {
   height: 50px;
width: 130px;
}

.pro-flex{
  display: flex;
padding-left: 8px;
padding-top: 8px;
border-top: 1px solid #e0e0e0;
}


#inputsm::before {
    font-family: FontAwesome;
   content: "\f105";
   
}

.change_location{
  cursor: pointer;
}

.panel-image{
    background-position: center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: auto;

}
.panel-image .flex-panel{
      background-color: rgba(210, 204, 204, 0.77);

    padding: 5px;
    border-radius: 4px;
}

.price-range ul{
list-style: none;
}

.price-range li{
  float: left;
  padding-right: 4px;
}

.price-range ul li {
    width: auto;
    height: auto;
    cursor: pointer;
    font-size: 14px;
    padding: 8px;
    margin: 0 12px 12px 0;
    border:1px solid #000; 
    border-radius: 4px;
    text-align: center;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
}

.parallex ul{
  list-style: none;
  display:flex;

}
.parallex li{
 
  float: left;
      flex: 1;
      text-align: center;
}

.parallex li p{
/*  font-size: 1.2em;*/
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;

}

    </style>

 
 
<div class="container-fulid">
  <div class="bg_img">  
 <img src="http://bbkgeojit.com/images/properties-banner.jpg" alt="" style="width: 100%;height: 40vh;">
 <div class="bg-cont text-center">
  <h3>Properties for you in Coimbatore </h3>
  <p><i class="fa fa-map-marker fa-2x"></i></p>
  <p class="change_location">Change location</p>
  <div style="display: none;" class="enter_location form-group">
  
    <input list="browsers" class="form-control input-sm" placeholder="Type City" id="inputsm" type="text">
    <datalist id="browsers">
  <option value="Chennai">
  <option value="Salem">
  <option value="Coimbatore">
  <option value="Erode">
  <option value="Banglore">
</datalist>
  </div>

 </div>
</div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png?width=140&height=140" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>Nithya Estates</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/100046/13/puravankara-4491843.jpeg?width=155&amp;height=50" alt="Images for Logo of Puravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Puravankara</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                  <div class="pro-flex">
<div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
<div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
</div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link">
                <img src="https://im.proptiger.com/3/108804/13/springfield-shelters-539095.jpeg?width=155&height=50" alt="Images for Logo ofPuravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Sobha</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                  <div class="pro-flex">
<div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
<div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
</div>
            </div>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.sobha.com/landing/logo.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>

</div>
    </div>

    <h3 class="text-center">Luxury Builders</h3>
    <div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png?width=140&height=140" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>Nithya Estates</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/100046/13/puravankara-4491843.jpeg?width=155&amp;height=50" alt="Images for Logo of Puravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Puravankara</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                  <div class="pro-flex">
<div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
<div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
</div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link">
                <img src="https://im.proptiger.com/3/108804/13/springfield-shelters-539095.jpeg?width=155&height=50" alt="Images for Logo ofPuravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Sobha</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                  <div class="pro-flex">
<div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
<div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
</div>
            </div>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.sobha.com/landing/logo.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>

</div>
    </div>
<div  class="container-fuild parallex">

<div style="color: #ddd;background-color:#282E34;text-align:center;padding:50px;text-align: justify;">
<div class="" style="margin-bottom: 50px;">
  <h3 class="text-center">Leading Property</h3>
  <p class="text-center">Real estate Property in around Coimbatore </p>
</div>
    
  <ul>
    <li><p style="
    font-size: 1.3em;
    font-weight: 600;
    line-height: 1em;
    letter-spacing: 1px;
    margin: 0 0 5px;
    color: #3cbce7;
"><span class="plus" style="
    font-size: 2em;
">+</span><span class="con" style="
    font-size: 2em;
">4586</span></p><p>Under Contruction</p><span>in Coimbatore</span></li>
    <li><p><i class="fa fa-building fa-3x" aria-hidden="true"></i></p><p>Ready To Move</p><span>in Coimbatore</span></li>
    <li><p><i class="fa fa-building fa-3x" aria-hidden="true"></i></p><p>Ongoing Project</p><span>in Coimbatore</span></li>
    <li><p><i class="fa fa-building fa-3x" aria-hidden="true"></i></p><p>Budget Flats</p><span>in Coimbatore</span></li>
    <li><p><i class="fa fa-home fa-3x" aria-hidden="true"></i></p><p>Top Category</p><span>in Coimbatore</span></li>
    </ul>
</div>



</div>

    <h3 class="text-center">Exclusive  Choices</h3>
    <div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.nithyaestates.com/wp-content/uploads/2015/10/Nitya_2014_fb.png?width=140&height=140" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>Nithya Estates</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
                    
                </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="#">
            <div class="panel panel-default">
                <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/100046/13/puravankara-4491843.jpeg?width=155&amp;height=50" alt="Images for Logo of Puravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Puravankara</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
               <div class="pro-flex">
                         <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link">
                <img src="https://im.proptiger.com/3/108804/13/springfield-shelters-539095.jpeg?width=155&height=50" alt="Images for Logo ofPuravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Sobha</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                 <div class="pro-flex">
                         <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
            </div>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                         <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                   <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.sobha.com/landing/logo.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                         <div class="flex-panel"><p>Villa</p><p>Project</p></div>
                        <div class="flex-panel"><p>1,2,3</p><p>BHK</p></div>
                        <div class="flex-panel"><p>680-4582</p><p>Area</p></div>
                        <div class="flex-panel"><p>45 lac</p><p>Price</p></div>
                        </div>
                </div>
            </a>
        </div>

</div>
    </div>

     <div class="container price-range" style="margin-top: 50px;">
     <h3 class="text-center">Price Range</h3>
    
      
       <div class="row">
       <div class="col-md-12">
        <ul><li>10 -15 Lac</li><li>17 -22 Lac</li><li>20 -28 Lac</li><li>35-40 Lac</li><li>39-48 Lac</li><li>45 -65 Lac</li><li>80 Lac</li><li>1 cr</li></ul>
        </div>
         <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                    <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="https://im.proptiger.com/3/109002/13/mount-housing-562979.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
           <a href="#"> 
                <div class="panel panel-default">
                   <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                        <div class="flex-panel">
                            <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link"><img src="http://www.sobha.com/landing/logo.png" alt="Images for Logo of Puravankara"></a>
                        </div>
                        <div class="flex-panel">
                                 <p>MounthHousing</p><span><b>20</b> Years of Experience</span>
                        </div>
                    </div>
                    <div class="pro-flex">
                        <div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
                        <div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body panel-image"  style="background-image: url('https://gos3.ibcdn.com/nora-spiritual-villa-goa-the-villa-60011798072g.jpg');">
                <div class="flex-panel">
                <a data-href="/puravankara-100046" class="no-ajaxy img-wrap js-rc-link">
                <img src="https://im.proptiger.com/3/108804/13/springfield-shelters-539095.jpeg?width=155&height=50" alt="Images for Logo ofPuravankara"></a>
                </div>
                <div class="flex-panel">
                <p>Sobha</p><span><b>20</b> Years of Experience</span>
                </div>
              
                </div>
                  <div class="pro-flex">
<div class="flex-panel"><p><b>45</b> &nbsp; Total Project</p></div>
<div class="flex-panel"><p><b>2</b>  &nbsp; Ongoing Project</p></div>
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
        $(".panel").click(function(){
             window.location.href = 'builderpreview.php'; 
        });

        $('.change_location').click(function(){
          $('.enter_location').show('1000');
        })
    });
</script>

    </body>

    </html>