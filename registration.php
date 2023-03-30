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
      if(isset($_POST["regstrartion"]))  
      {  
           if(empty($_POST["f_name"]) || empty($_POST["l_name"]) || empty($_POST["email"])|| empty($_POST["phone_number"])|| empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
            else {
                // or not

                $query = "insert into user_table(f_name,l_name,email,phone_number,password)values(:f_name,:l_name,:email,:phone_number,:password)";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'f_name'     =>     $_POST["f_name"],
                          'l_name'  =>        $_POST["l_name"],
                          'email'        =>     $_POST["email"],  
                          'phone_number' =>     $_POST["phone_number"],    
                           'password'     =>     $_POST["password"] 
                          
                            
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:main.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }
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
                     <label>F_name</label>  
                     <input type="text" name="f_name" class="form-control" placeholder="Enter username"/>  
                     <br />  
                     <label>L_name</label>
                     <input type="text" name="l_name" class="form-control" placeholder="Enter last_name"/>  
                     <br />
                     <label>email</label>
                     <input type="email" name="email" class="form-control" placeholder="Enter email"/>  
                     <br />
                     <label>phone_number</label>
                     <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number"/>  
                     <br />
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" placeholder="Enter password"/>  
                     <br />  
                     <input type="submit" name="regstrartion" class="btn btn-info" value="sign up" />
                     <br />
                     <a href="#link" class="btn btn-info pull-right" role="button">back</a>

                </form>  
           </div>  
           <br />  
      </body>  
 </html>  