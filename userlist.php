  <?php include 'inc/header.php' ?>

  <?php
   	  $filepath=realpath(dirname(__FILE__));
      include_once ($filepath.'../classes/Controller.php');
  ?> 

  <?php
  	$pd= new Controller();
  ?>

    <?php 
    	
    	if(isset($_GET['userid'])){
    		$id=preg_replace('/[^-a-zA-Z0-9]/', '' , $_GET['userid']);
    		$userid=$pd->delUserById($id);


    	}
    ?>
<div class="userlist">

<table class="table table-hover">
  <thead>
  	
  	<tr style="margin: 10px">
  		
  	         <?php 
                if(isset($userid)){
                	echo $userid;
                }
                ?>
                	
    </tr>
    <tr>
          <th scope="col">Serial No</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Phone No</th>
          <th scope="col">Country</th>
          <th scope="col">Actions</th>
      
  
    </tr>
  </thead>
      <tbody>
       
    				<?php 
    					$getPd=$pd->getAllUser();
    					if($getPd){
    						$i=0;
    						while($result=$getPd->fetch_assoc()){
    							 $i++;
    					
    				?>
            <tr>
              <th scope="row"><?php echo $i ;?></th>
              <td><?php echo $result['first_name'];?></td>
              <td><?php echo $result['last_name'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['phone'];?></td>
              <td><?php echo $result['country'];?></td>
              <td> <a href="updateuser.php?userid=<?php echo $result['id'];?>">Edit</a> ||
                <a onclick=  "return confirm('Are you sure to delete! ') "
        							href="?userid=<?php echo $result['id'];?>">Delete</a></td>
        							
            </tr>
          <?php } }?>
         
      
      
      </tbody>
  </table>
</div>
 <?php include 'inc/footer.php' ?>