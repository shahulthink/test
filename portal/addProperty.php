<?php include 'mainheader.php';?>
<?php include 'builderheader.php';?>

<style type="text/css">
  
 .searchbackgorund {
    background-color: #2F4E78;
    /*height: 480px !important;*/
    color: #fff;
}
.container_content{
  margin-top:15px;  
}
.searchbox {
    margin-top: 30px !important;
    text-align: center;
}
.btn-default {
  border: none !important;
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
}

.well_shadow{
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    border-radius: 2px;
}
.sel{
  border-radius: 4px;
border: 1px solid;
transition: all .3s ease-in-out;
}

.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-top: 4px;
    /*text-align: center;*/
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

label {
    font-weight: normal !important;
}

.selected{
  background-color: rgb(43, 80, 117);
color: rgb(255, 255, 255);
/*transition-delay: 1s;*/
}

.prop_details{
  display: none;
}
</style>


 
   


<div class="container container_content">
  <div class="row">
    <div class="col-md-9">
    <div class="card">
      
      <div class="card-block">
      <h4>Add New Property</h4>
     <hr>
        <h5>You are</h5>

      <div style="padding-left: 8px;" id="menu">
          <ul class="list-inline">
            <li data-value="Owner" class="sel">Owner</li>
            <li data-value="Builder" class="sel">Builder</li>
            
          </ul>
        </div>


<hr>

<div data-id="" class="prop_details">
        <h5>Property Type</h5>

        <label class="checkbox-inline"><input type="checkbox" value="">Apartment</label>
<label class="checkbox-inline"><input type="checkbox" value="">Row House</label>
<label class="checkbox-inline"><input type="checkbox" value="">Villa</label>

<hr>
      
      <h5>Property Details</h5>
      <div class="row">
        <div class="col-md-6">
      <div class="form-group">
      <label>Property Name</label>
        <input class="form-control input-sm" id="inputsm" placeholder="Property Name" type="text">
      </div>
  </div> 
  <div class="col-md-6">
      <div class="form-group">
      <label>City </label>
        <input class="form-control input-sm" id="inputsm" placeholder="which City" type="text">
      </div>
  </div>
<div class="col-md-6">
      <div class="form-group">
      <label>Mobile Number </label>
        <input class="form-control input-sm" id="inputsm" placeholder="Mobile Number" type="text">
      </div>
      <div class="form-group">
      <label>Property Location </label>
        <input class="form-control input-sm" id="inputsm" placeholder="Property Location" type="text">
      </div>
  </div>

<div class="col-md-3">
      <div class="form-group">
 <label>Property Proof Id </label>
<input type="image" src="https://www.croptofit.com/svg/DropHereMonochromeResponsive.svg" width=""/>
    <input type="file" id="my_file" style="display: none;" />


</div>
</div>
 <div class="col-md-3">
      <div class="form-group">
 <label>User Proof Id </label>
<input type="image" src="https://www.croptofit.com/svg/DropHereMonochromeResponsive.svg" width=""/>
    <input type="file" id="my_file" style="display: none;" />


</div>
</div>
<div class="col-md-12">
      <div class="form-group">
 <label>Mark  location </label>
<input type="image" src="img/map.png" width=""/>
    


</div>
</div>
<div class="col-md-12">
<div style="text-align: center;" class="form-group">
<button type="button" id="passWiz" class="btn btn-primary ">Click to Fill Units Details</button>
</div>
</div>
</div>


      </div>

      </div>
      </div>
    </div>
    <div class="col-md-3">
       
        <div class="card">
 
  <div class="card-block">
    <h4 class="card-title">Claim your Property</h4>
    <p class="card-text">Search for your listing and submit your contact details.
You will be contacted shortly for verification.</p>

 
 <div class="form-group">
  <label for="pwd">Search City:</label>
  <input type="text" placeholder="search city" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Property Name:</label>
 <input type="text" list="areaSuggestion" class="form-control" placeholder="Property Name" >
</div> 
<datalist id="areaSuggestion">
  <option value="Rs puram">
  <option value="selvapuram">
  <option value="townhall">

</datalist>

      
     
        <a class="btn btn-primary" href="#" role="button">Search</a>
     
  
     


</div>

    
</div>
</div>
 


</div>




</div>
</div>
<br>
      <!-- Bootstrap core JavaScript -->
<?php include 'footerdemo.php';?>
<?php include 'footer.php';?>



<script type="text/javascript">
  $("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});

$( document ).ready(function() {
  $('#menu li').on('click', function(){
    $('li').removeClass('selected');
    $(this).addClass('selected');
     var you = $(this).data('value');
     $('.prop_details').show('1000');
     $('.prop_details').attr('data-id',you);

     //alert(you);
});

  $('#passWiz').click(function(){
  
      // var result = $(this).data('id');
      // alert(result);
      var plant = $('.prop_details').attr('data-id');
        if(plant == 'Builder'){
          location.href = "cmsWizards.php";
  // window.location('cmsWizards.php');
    // alert(plant);
    
}else {
  location.href = "propertyWizards.php";
      //window.open('propertyWizards.php');
    // alert(plant);
}
});

     // $(".sel").click(function() {
     //    $(".sel").addClass( "selected" );
     //    $('.prop_details').show('1000');
     // });
});

</script>
  </body>

</html>
