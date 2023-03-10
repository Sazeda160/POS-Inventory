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
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">product</li>
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
          <div class="col-md-8 offset-md-2">

            <!-- my Content -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                 <!-- <div class="alert alert-success"><strong>Success: </strong>Product Successfully Added</div> -->
                 <?php 
                      include "Classes/Product.php";
                      $product = new Product;
                      $id = $_GET['id'];
                      $products = $product->findProduct($id);
                      $data = $products->fetch_assoc();
                      if(isset($_POST['update'])){
                         $product->updateProduct($_POST, $id);
                      }
                 ?>
                 <form method="POST">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $data['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="des">Product Description</label>
                    <textarea name="des" type="des" class="form-control" id="des" placeholder="Enter Product Description"> <?php echo $data['des'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="size">Product Size</label>
                    <input name="size" type="text" class="form-control" id="size" placeholder="Enter Product Size"  value="<?php echo $data['size'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="color">Product Color</label>
                    <input name="color" type="color" class="form-control" id="color" value="<?php echo $data['color'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input name="barcode" type="text" class="form-control" id="barcode" value="<?php echo $data['barcode'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="costPrice">Cost Price</label>
                    <input name="costPrice" type="number" class="form-control" id="costPrice" placeholder="Enter Cost Price" value="<?php echo $data['costPrice'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="salePrice">Sale Price</label>
                    <input name="salePrice" type="number" class="form-control" id="salePrice" placeholder="Enter Sale Price" value="<?php echo $data['salePrice'] ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="update" type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- /.row -->
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
<!-- REQUIRED SCRIPTS -->

</body>
</html>
