  <?php include 'mainheader.php';?>
<?php include 'builderheader.php';?>
<style>
	.panel-body{
		text-align: center;
	}
	.panel-body p{
		font-size: 2em;
		font-weight: 500;
		/*text-transform: uppercase;*/
		font-family: 'Roboto', sans-serif;
	}
</style>
<div class="clear-fix"></div>
<div class="container">
	<h4>Dashboard</h4>
	<div class="row">
		<div class="col-md-3"><div class="panel panel-default">
  <div class="panel-body"><p>406</p><span>Units</span></div>
  <div class="panel-footer">Property Post</div>
</div></div>
		<div class="col-md-3"><div class="panel panel-default">
  <div class="panel-body"><p>15</p><span>Response</span></div>
  <div class="panel-footer">Enquiry</div>
</div></div>
		<div class="col-md-3"><div class="panel panel-default">
  <div class="panel-body"><p>1</p><span>Offers</span></div>
  <div class="panel-footer">Ads Post</div>
</div></div>
<div class="col-md-3"><div class="panel panel-default">
  <div class="panel-body"><p>1</p><span>Property Name</span></div>
  <div class="panel-footer">Add Property</div>
</div></div>
	</div>
</div>
<hr>
<div class="container">
	<h4>
		Property Visitor
	</h4>
	<div class='row'>
		<div class="col-md-12">
			<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
       
        <th>Property Name</th>
        <th>Visitor</th>
        <th>Enquiry</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nithya Gardens</td>
        <td>23</td>
        <td>2</td>
        <td>live</td>
        
        <td data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-lg" aria-hidden="true"></i>
</td>
      </tr>
      <tr>
        <td>Nithya Estates</td>
        <td>2</td>
        <td>21</td>
        <td>live</td>
        
        <td data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-lg" aria-hidden="true"></i>
</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Subscribe Product</h4>
        </div>
        <div class="modal-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          <div class="row">
		<div class="col-md-6"><div class="panel panel-default">
  <div class="panel-body"><p>Website</p><br><span>Rs:62 per units</span></div>
  
</div></div>
		<div class="col-md-6"><div class="panel panel-default">
  <div class="panel-body"><p>Lead+Booking</p><br><span>Rs:105 per units</span></div>
  
</div></div>
		<div class="col-md-12"><div class="panel panel-default">
  <div class="panel-body"><p>Website+lead+Booking</p><br><span>Rs:150 per units</span></div>
</div></div>
</div>
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default">Proceed</button>
         
        </div>
      </div>
      
    </div>
  </div>
		</div>
	</div>
</div>

<?php include 'getApp.php';?>
<?php include 'footerdemo.php';?>
<?php include 'footer.php';?>
