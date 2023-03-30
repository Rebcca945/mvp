<?php
 include('conn.php');
 
    global $conn;
    $sql = "SELECT * FROM `catagory_table`";
    $query = $conn->prepare($sql);
    $query->execute();
    $results=$query->fetchAll();
            

?>
<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "inventory_for_php";  
 $message = "";  
 try  
 {    
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["insert_product"]))  
      {  
           if(empty($_POST["product_id"]) || empty($_POST["product_name"]) || empty($_POST["product_qty"])||empty($_POST["product_price"])||empty($_POST["product_desc"])||empty($_POST["product_cat"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
            else {
                // or not
                $message = '<label>it should work</label>';
                $query = "insert into product_table (product_id,product_name,product_qty,product_price,product_desc,product_cat)
                values(:product_id,:product_name,:product_qty,:product_price,:product_desc,:product_cat)";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'product_id'     =>     $_POST["product_id"],
                          'product_name'  =>        $_POST["product_name"],
                          'product_qty'        =>     $_POST["product_qty"],  
                          'product_price' =>     $_POST["product_price"],
                          'product_desc'  =>         $_POST["product_desc"],    
                           'product_cat'     =>     $_POST["product_cat"] 
                          
                            
                     )  
                );  
                 
                
            } 

            //    $stmt=$conn->prepare("insert into course(id,ccode,ctitle,cdate)values(:id,:ccode,:ctitle,:cdate)");
                
           }  
      }  
catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>registration</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">enventory_management_system</h3><br />  
                <form method="post">  
                     <label>product_id</label>  
                     <input type="text" name="product_id" class="form-control" placeholder="Enter username"/>  
                     <br />  
                     <label>product_name</label>
                     <input type="text" name="product_name" class="form-control" placeholder="Enter last_name"/>  
                     <br />
                     <label>product_quantity</label>
                     <input type="text" name="product_qty" class="form-control" placeholder="Enter email"/>  
                     <br />
                     <label>product_price</label>
                     <input type="text" name="product_price" class="form-control" placeholder="Enter email"/>  
                     <br />
                     <label>product_catagory</label>
                     <br/>
                     <select name="product_cat" id="" class="form-select" style="margin-top:10px; margin-bottom:10px">
                      <option value="" >select a catagory</option>
                     <?php  foreach($results as $output){ 
                        $catagory_name=$output['catagory_name'];
                        $catagory_id=$output['catagory_id'];
                        
                        echo "<option value='$catagory_name'>$catagory_name</option>";
                      } ?>                         
                     </select> 
                     <br />
                     <label>product_desc</label>
                     <input type="text" name="product_desc" class="form-control" placeholder="Enter phone_number"/>  
                     <br />  
                     <input type="submit" name="insert_product" class="btn btn-info" value="insert_product" />
                     <br />
                     
                     <a href="#link" class="btn btn-info pull-right" role="button">back</a>
                 
                     
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  






