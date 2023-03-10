  <?php 
    include "includes/header.php";
  ?>

  <!-- Preloader -->
    <?php 
    include "includes/loader.php";
    ?>

  <!-- Navbar -->
    <?php 
    include "includes/navbar.php";
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
     <?php 
      include "includes/mainslider.php";
    ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sales Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sales</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" class="invoice form-control" placeholder="Invoice">

          	  	  <input type="hidden" class="product_id form-control">
          	  </div>
          </div>
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" id="abc" class="abc form-control" placeholder="Barcode">
          	  </div>
          </div>
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" class="price form-control" placeholder="Price">
          	  </div>
          </div>
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" class="qnt form-control" placeholder="Quantity">
          	  </div>
          </div>
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" class="total form-control" placeholder="Total">
          	  </div>
          </div>
          <div class="col-md-2">
          	  <div class="form-group">
          	  	  <input type="text" class="stock form-control" placeholder="Stock">
          	  </div>
          </div>
          <button class="sAddItem ml-2 btn btn-success">Add</button>
        </div>
        <!-- /.row -->
        <div class="row mt-3">
        	<div class="col-md-12">
        		<table class="table text-center" border="1">
        			<thead>
        				<tr>
        					<th>Date</th>
        					<th>Invoice</th>
        					<th>Price</th>
        					<th>Qnt</th>
                  <th>Total</th>
        					<th>Remove</th>
        				</tr>
        			</thead>
        			<tbody class="tableData">
        				
        			</tbody>
        		</table>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-3">
	          	<div class="from-group">
	          		<input type="text" class="totalQnt form-control" placeholder=" Total Quantity">
	          	</div>
        	</div>
        	<div class="col-md-3">
        		<div class="from-group">
	          		<input type="text" class="totalAmount form-control" placeholder=" Total Amount">
	          	</div>
        	</div>
        	<div class="col-md-3">
        		<div class="from-group">
	          		<select class="dis form-control">
                  <option value="0">0%</option>
	          			<option value="10">10%</option>
	          			<option value="15">15%</option>
	          			<option value="20">20%</option>
	          			<option value="25">25%</option>
	          			<option value="30">30%</option>
	          			<option value="35">35%</option>
	          			<option value="40">40%</option>
	          			<option value="45">45%</option>
	          			<option value="50">50%</option>
	          			<option value="55">55%</option>
	          			<option value="60">60%</option>
	          			<option value="65">65%</option>
	          			<option value="70">70%</option>
	          			<option value="75">75%</option>
	          		</select>
	          	</div>
        	</div>
        	<div class="col-md-3">
        		<div class="from-group">
	          		<input type="text" class="disamount form-control" placeholder="Dis. Amount">
	          	</div>
        	</div>
        	<div class="col-md-3 mt-2">
        		<div class="from-group">
	          		<input type="text" class="form-control grandTotal" placeholder="Grand Total">
	          	</div>
        	</div>
        	<div class="col-md-3 mt-2">
        		<div class="from-group">
	          		<input type="text" class="pay form-control" placeholder="Payment">
	          	</div>
        	</div>
        	<div class="col-md-3 mt-2">
        		<div class="from-group">
	          		<input type="text"  class="due form-control" placeholder="due">
	          	</div>
        	</div>
        	<div class="col-md-3 mt-2">
        		<div class="from-group">
	          		<button class="saveSummery btn btn-success form-control">Save & Print</button>
	          	</div>
        	</div>
        </div>
        <button class="go mt-2 btn btn-info btn-sm">Go</button>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <?php 
      include "includes/footer.php";
    ?>
</div>
<!-- ./wrapper -->
    <?php 
      include "includes/scripts.php";
    ?>
    <script>
    	jQuery(document).ready(function(){

    	})
    </script>
<!-- REQUIRED SCRIPTS -->

</body>
</html>
