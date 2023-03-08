<?php
	include 'connection.php';
	class Product
	{
		private $con = "";
		function __construct()
		{
			$obj = new Connection;
			$this->con = $obj->connect();
		}
		
		function addNewProduct($allData){
			$name = $allData["name"];
			$des = $allData["des"];
			$size = $allData["size"];
			$color = $allData["color"];
			$barcode = $allData["barcode"];
			$costPrice = $allData["costPrice"];
			$salePrice = $allData["salePrice"];

			 if($name==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Name Field is Not Empty </div>';

		}

		 else if($des==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Describe Field is Not Empty </div>';

		}

		else if($size==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Size Field is Not Empty </div>';

		}

		else if($color==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Color Field is Not Empty </div>';

		}

		else if($barcode==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Barcode  Field is Not Empty </div>';

		}


		else if($costPrice==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Cost Price Field is Not Empty </div>';

		}
		else if($salePrice==""){

		return '<div class="alert alert-danger"> <strong> Error:</strong> Product Sale Price Field is Not Empty </div>';

		}

		else{

			$sql = $this->con->query("INSERT INTO tbl_product(name,des,size,color,barcode,costPrice,salePrice)VALUES('$name','$des','$size','$color','$barcode','$costPrice','$salePrice')");
			
				return '<div class="alert alert-success"><strong>Success: </strong>Product Successfully Added</div>';
			
		}

	}

		function allProduct(){
			$sql = $this->con->query("SELECT * FROM tbl_product");
			return $sql;
		}

		function findProduct($id){
			$sql = $this->con->query("SELECT * FROM tbl_product WHERE id='$id'");
			return $sql;
		}

		function delete($id){
			$sql = $this->con->query("DELETE FROM tbl_product WHERE id='$id'");
			echo "<script>window.location.replace('manageproduct.php')</script>";
		}

		function updateProduct($allData, $id){
			$name = $allData["name"];
			$des = $allData["des"];
			$size = $allData["size"];
			$color = $allData["color"];
			$barcode = $allData["barcode"];
			$costPrice = $allData["costPrice"];
			$salePrice = $allData["salePrice"];

			$sql = $this->con->query("UPDATE tbl_product SET name = '$name', des = '$des', size = '$size', color = '$color', barcode = '$barcode', costPrice = '$costPrice', salePrice = '$salePrice' WHERE id='$id'");
			echo "<script>window.location.replace('manageproduct.php')</script>";
		}
	}