 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
   
      <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     
</head>

<body>

<div class="wrapper">
<?php

include('includes/sidebar.php'); 
include('includes/adminnav.php'); 
?>

    <div class="container ">
     <h4 class="h4">Edit Product</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">All Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit product</li>
                </ol>
            </nav>
        </div>
        
    </div>
     
    </div>
    
<?php
   
    require_once("includes/config.php"); 
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $res = mysqli_query($conn,"SELECT * FROM customtee WHERE ProductID=$id ");
        
        while($row= mysqli_fetch_assoc($res)){
            $ProdID = $row['ProductID'];
            $ProdN = $row['ProductName'];
            $ProdP = $row['Prod_Price'];
            $ProdW = $row['Prod_Weight'];
            $ProdM = $row['Prod_ Material'];
            $ProdImg = $row['Prod_Img'];
            $status = $row['All_Status'];
        }
    }
   

?>
<form class=" container form-horizontal bg-info" method="POST" action="admin_php_code.php?ID=<?php echo $ProdID?>" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id"><b>PRODUCT ID</b></label>  
  <div class="col-md-4">
  <input  value="<?php echo $ProdID?>" placeholder="PRODUCT ID" class="form-control input-md"  type="text" disabled>
    <input id="product_id" name="product_id" value="<?php echo $ProdID?>" type="hidden">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name"><b>PRODUCT NAME</b></label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name"  value="<?php echo $ProdN?>"  class="form-control input-md" required type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_price"><b>PRODUCT PRICE</b></label>  
  <div class="col-md-4">
  <input id="product_price" name="product_price" value="<?php echo $ProdP?>"  class="form-control input-md" required type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight"><b>PRODUCT WEIGHT</b></label>  
  <div class="col-md-4">
      <input id="product_weight" name="product_weight" value="<?php echo $ProdW?>"  class="form-control input-md" required type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_material"><b>PRODUCT MATERIAL</b></label>  
  <div class="col-md-4">
  <input id="product_material" name="product_material" value="<?php echo $ProdM?>"  class="form-control input-md" required type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_status"><b>PRODUCT STATUS</b></label>
  <div class="col-md-4">
    <select id="product_status" name="product_status" class="form-control">
        <option value="Active"<?php if ($status === 'Active') echo ' selected="selected"'?>>Active</option>
        <option value="Inactive"<?php if ($status === 'Inactive') echo ' selected="selected"'?>>Inactive</option>
      
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="file"><b>Product_image_preview</b><br>Current Img (<?php echo $ProdImg?>)</label>
  <div class="col-md-4">
    <input id="file" name="file" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-4">
    <button id="save" name="save" value="save" class="btn btn-primary">Save</button>
  </div>
  </div>

</fieldset>
</form>

    
    
    
    
<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>

