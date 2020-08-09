<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
        <title>Customer</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
   
              <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/adminOrder.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
         <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    </head>
<body>
    <div class="wrapper">
        <?php
        include('includes/sidebar.php'); 
        include('includes/adminnav.php'); 
        ?>

        
        <h3>List Of Order</h3>
        <table>
            
                   <div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Date</th>
                            <th scope="col" >Address</th>
                            <th scope="col" >Status
                            <th scope="col" >Total(RM)
                            <th scope="col" >Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
            $conn = new mysqli('localhost','root','','assignment');
            $sql = "select * from adminorder";
            $result = $conn ->query($sql);
            while($row=$result->fetch_assoc()){
                echo "<tr><td>{$row['orderID']}</td><td>{$row['CustomerID']}</td><td>{$row['ItemName']}</td><td>{$row['Date']}</td><td>{$row['Address']}</td><td>{$row['Status']}</td><td>{$row['Total']}
                </td><td class='text-right'><button type='button' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i> </button> 
                </td><td class='text-right'><button type='button' class='btn btn-sm btn-secondary'><i class='fas fa-edit'></i></button></td></tr>";
                                 

                }
            
            $conn->close();
            ?>                            

            
            
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
                
            
        </table>











    </div>
    
    
</body>
    

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
    
</html>
