
<?php
 include('conn.php');
//require_once 'conn.php';
   
	

	function product_counter(){
		
		global $conn;
		$sql = "SELECT * from `product_table`";
		$res = $conn->query($sql);
		$count = 0;
		while($row = $res->fetch()){
			$count++; 
			
		}	
		 echo "
		 
		 <div class='card' style='width: 200px; text-align:center; float:left;margin-right: 20px;' >   
		<div class='card-body' style='background-color: coral; font-size: 50px;color:aliceblue'>$count</div>
		<div class='card-footer'>product</div>
		</div>		 
		 " ;
	
	}
	function catagories_counter(){
		
		global $conn;
		$sql = "SELECT * from `catagory_table`";
		$res = $conn->query($sql);
		$count = 0;
		while($row = $res->fetch()){
			$count++; 
			
		}
		 echo "
		 
		 <div class='card' style='width: 200px; text-align:center; float:left;margin-right: 20px;' >   
		<div class='card-body' style='background-color: coral; font-size: 50px;color:aliceblue'>$count</div>
		<div class='card-footer'>Catagories</div>
		</div>		 
		 " ;
	}

	function customer_counter(){
		
		global $conn;
		$sql = "SELECT * from `customer_table`";
		$res = $conn->query($sql);
		$count = 0;
		while($row = $res->fetch()){
			$count++; 
			
		}
		
		 echo "
		 
		 <div class='card' style='width: 200px; text-align:center; float:left;margin-right: 20px;' >   
		<div class='card-body' style='background-color: coral; font-size: 50px;color:aliceblue'>$count</div>
		<div class='card-footer'>Customer</div>
		</div>		 
		 " ;
	}
	function admin_counter(){
		
		global $conn;
		$sql = "SELECT * from `user_table`";
		$res = $conn->query($sql);
		$count = 0;
		while($row = $res->fetch()){
			$count++; 
			
		}
		 echo "
		 
		 <div class='card' style='width: 200px; text-align:center; float:left;margin-right: 20px;' >   
		<div class='card-body' style='background-color: coral; font-size: 50px;color:aliceblue'>$count</div>
		<div class='card-footer'>Admin</div>
		</div>		 
		 " ;
	
		}
		
	
?>
 <?php
function admin_tableer(){



	global $conn;
	$sql = "SELECT * FROM `user_table`";
	$query = $conn->prepare($sql);
	$query->execute();
   //while($row=mysqli_fetch_assoc($result_query)){






	while ($row = $query->fetch()) {

?>

		<tr>

		<td><?php echo $row['admin_id']; ?></td>

		<td><?php echo $row['f_name']; ?></td>

		<td><?php echo $row['l_name']; ?></td>

		<td><?php echo $row['email']; ?></td>

		<td><?php echo $row['phone_number']; ?></td>
        <?php $id=$row['admin_id'];?>
<td>
<a href="delete.php<?php echo '?admin_id='.$id; ?>" class="btn btn-danger" name="delete_product">delete</a>
</td>

		</tr>                       

<?php       }

};


function customer_tableer(){



	global $conn;
	$sql = "SELECT * FROM `customer_table`";
	$query = $conn->prepare($sql);
	$query->execute();
   //while($row=mysqli_fetch_assoc($result_query)){






	while ($row = $query->fetch()) {

?>

		<tr>

		<td><?php echo $row['customer_id']; ?></td>

		<td><?php echo $row['customer_name']; ?></td>

		<td><?php echo $row['customer_phone']; ?></td>
              <?php $id=$row['customer_id'];?>
<td>
<a href="delete.php<?php echo '?customer_id='.$id; ?>" class="btn btn-danger" name="delete_product">delete</a>
</td>

		</tr>                       

<?php       }

};

function catagory_tableer(){



	global $conn;
	$sql = "SELECT * FROM `catagory_table`";
	$query = $conn->prepare($sql);
	$query->execute();
   //while($row=mysqli_fetch_assoc($result_query)){






	while ($row = $query->fetch()) {

?>

		<tr>

		<td><?php echo $row['catagory_id']; ?></td>

		<td><?php echo $row['catagory_name']; ?></td>

        <?php $id=$row['catagory_id'];?>		
<td>
<a href="delete.php<?php echo '?catagory_id='.$id; ?>" class="btn btn-danger" name="delete_product">delete</a>
</td>

		</tr>                       

<?php       }

};


function product_tableer(){



	global $conn;
	$sql = "SELECT * FROM `product_table`";
	$query = $conn->prepare($sql);
	$query->execute();
   //while($row=mysqli_fetch_assoc($result_query)){

 




	while ($row = $query->fetch()) {

?>

		<tr>

		<td><?php echo $row['product_id']; ?></td>

		<td><?php echo $row['product_name']; ?></td>
        
		<td><?php echo $row['product_qty']; ?></td>
		
        <td><?php echo $row['product_price']; ?></td>

		<td><?php echo $row['product_desc']; ?></td>

		<td><?php echo $row['product_cat']; ?></td>
        <?php $id=$row['product_id'];?>
<td>
<a href="delete.php<?php echo '?product_id='.$id; ?>" class="btn btn-danger" name="delete_product">delete</a>

</td>

		</tr>                       

<?php       }

};
?>


