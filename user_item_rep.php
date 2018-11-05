<?php  
 $connect = mysqli_connect("localhost", "root", "", "isightdb");  
 $sql = "SELECT * FROM user INNER JOIN items ON user.user_id = favourite.user_id AND favourite.item_id = item.item_id";  
 $result = mysqli_query($connect, $sql);  
 ?> 
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
	  
      <body>  
	  
	  <div class = "container">
	<div class = "wrapper">
		<h1> Report</h1>
	</div>
	
	<div class = "data">
	<form action = "index.php" method = "POST">
		<select name = "standards">
			<option>Items</option>
			
			<?php 
			
			$query1 = "SELECT * FROM user";
			$result1 = mysql_query($query1);
			
			 while($rows1 = mysql_fetch_array($result1))
				  {
						$user_id = $rows1['user_id'];
						$rowsData1 = $rows1['surname'];
					?>
					
					<option value = "<?php echo $user_id; ?>"><?php echo $rowsData1; ?></option>
					
					<?php
				}
			?>
	</select>
	  
	  
	  <table align = "center" border = "1px" style = "width:600px; line-height:40px;">
 
           <div class="container" style="width:500px;">  
                <h2 align="">Report</h2><br />         
                <div class="table-responsive">  
                  
					 <table align = "center" border = "1px" style = "width:300px; line-height:40px;">
					 
					 <tr>
						<th colspan = "6"><h2>Items Record</h2></th>
					</tr>
                          <tr>  
                               <th>User_Surname</th>
								<th>User_Name</th>							   
                               <th>User_Email</th>  
							   <th>Hazardous</th>  
                               <th>Item_Name</th>  
                          </tr>  
                          <?php  
                    					if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["surname"];?></td>  
							   <td><?php echo $row["first_name"];?></td>
                               <td><?php echo $row["email"]; ?></td>  
							   <td><?php echo $row["hazardous"];?></td>  
                               <td><?php echo $row["item_date"]; ?></td>  
						
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
		   </table>
      </body>  
 </html>  