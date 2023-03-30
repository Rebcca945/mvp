<?php
include('conn.php');
include('pdo_table.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashbord</title>
    
    <!-- boot strap  css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
    
     <!-- boot strap  css link end -->
    
    
    <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <!-- css link end-->

    <!--fontawsome area-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
     crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!--fontawsome area end-->
</head>
<body>

     <nav class="navbar navbar-expand-sm navbar-light bg-light ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">enventory_management_system</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!--product -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">product</a>
                    <div class="dropdown-menu">
                        <a href="insert_product.php" class="dropdown-item">insert_product</a>
                        <a href="product_table.php" class="dropdown-item">viewproduct</a>
                    </div>
                </li>
            </ul>
             <!--catagories-->
            <ul class="nav navbar-nav">
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">catagories</a>
                    <div class="dropdown-menu">
                        <a href="insert_categories.php" class="dropdown-item">insert_catagories</a>
                        <a href="categories_table.php" class="dropdown-item">view_catagories</a>
                    </div>
                </li>
            </ul>
           
           
             <!--customer-->
             <ul class="nav navbar-nav">
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">customers</a>
                    <div class="dropdown-menu">
                        <a href="insert_customer.php" class="dropdown-item">insert_customer</a>
                        <a href="customer_table.php" class="dropdown-item">view_customer</a>
                    </div>
                </li>
            </ul>
              
            <ul class="nav navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="admin_table.php" class="dropdown-item">view admin</a>
                        <a href="registration.php" class="dropdown-item">add admin</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class=" container "style=" height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    " >
<?php
product_counter();
catagories_counter();
customer_counter();
admin_counter();
?>
</div>


</div>
     
     <!-- last child the footer -->
     <div class=" bg-dark p-3 text-center text-white fixed-bottom">
        <p> enventory_management_system </p>
      </div>
      <!-- footer end -->
    <!-- boot strap  javascript link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <!-- boot strap  javascript  link-->
</body>
</html>