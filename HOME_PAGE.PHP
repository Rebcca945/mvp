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
    <!-- navbar-->
    <div class="container-fluid"  >
        <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-dark">
             <div class="container-fluid">
                <img src="../images/farmerlogo.jpg" alt="logo image " class="logo">
             
                <nav class="navbar navbar-expand-lg ">
                        <ul class="nav-item">
                          <li>
                            <a href="#" class="nav-link">welcome guest </a>
                          </li> 
                        </ul>
                </nav>
              
                

            </div>
               
         </nav>
           <!-- first child end -->
         <!-- second  child  -->
         <div class="div bg-light">
            <h3 class="text-center p-2">manage details</h3>
        </div>
        <!-- second child ends-->

          <!-- third child  -->
          <div class="row">
            <div class="col-md-12 bg-dark p1 d-flex align-items-center">
                <div>
                    <a href="#"><img src="../for final project images/adminopage logo.jpg" alt="admin logo " class="admin_image"></a>
                <p class="text-light text-center">Admin name</p>
                </div>
                <div class="button text-center">
                    <button class="m-3">
                      <a href="insert_product.php" class="nav-link text-light bg-info m-1">insert product </a></button>
                    <button class="m-3">
                      <a href="producttableview.php" class="nav-link text-light bg-info m-1">view product</a></button>
                    <button class="m-3">
                      <a href="insert_catagory.php" class="nav-link text-light bg-info m-1">insert catagory</a></button>
                    <button class="m-3">
                      <a href="catagory_table.php" class="nav-link text-light bg-info m-1">view catagory</a></button>
                    <button class="m-3">
                      <a href="index.php?insert_brand" class="nav-link text-light bg-info m-1">insert brand</a></button>
                    <button class="m-3">
                    <a href="index.php?insert_brand" class="nav-link text-light bg-info m-1">insert brand</a></button>
                    <button class="m-3">
                      <a href="index.php?insert_brand" class="nav-link text-light bg-info m-1">insert brand</a></button>
                    
                    <button class="m-3 bg-danger">
                      <a href="logout.php" class="nav-link text-light bg-danger m-1">log out</a></button>
                </div>

            </div>
           
          </div>
          <!-- third   child end -->
    </div>
    <!--nvabar end-->
                <!--fourth child-->
             
                <!-- fourth child end-->
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