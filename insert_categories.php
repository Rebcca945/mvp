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
      if(isset($_POST["insert_catagory"]))  
      {  
           if(empty($_POST["catagory_id"]) || empty($_POST["catagory_name"]) )  
           {  
                $message = '<label>All fields are required</label>';  
           }  
            else {
                // or not
                $message = '<label>it should work</label>';
                $query = "insert into catagory_table (catagory_id,catagory_name)
                values(:catagory_id,:catagory_name)";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'catagory_id'     =>     $_POST["catagory_id"],
                          'catagory_name'  =>        $_POST["catagory_name"],
                          
                            
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
                     <label>catagories_id</label>  
                     <input type="text" name="catagory_id" class="form-control" placeholder="Enter username"/>  
                     <br />  
                     <label>catagories_name</label>
                     <input type="text" name="catagory_name" class="form-control" placeholder="Enter last_name"/>  
                     <br />   
                     <input type="submit" name="insert_catagory" class="btn btn-info" value="insert_category" />
                     <br />
                     
                     <a href="main.php" class="btn btn-info pull-right" role="button">back</a>
                 
                     
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  