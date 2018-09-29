
  <?php include 'inc/header.php' ?>

  <?php include_once 'classes/Controller.php';?>

  <?php
              if(!isset($_GET['userid'])|| $_GET['userid']==NULL){
                      echo "<script>window.location='userlist.php';</script>";

                  }
                    else{
                        $id=preg_replace('/[^-a-zA-Z0-9]/', '' , $_GET['userid']);

                    }

            $pd= new Controller();
            if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['register'])){
          
            $updateProduct=$pd->UserUpdate($_POST,$id);

        }
  ?>
<div id="mainsection">
<div class="row">

    


         <?php
            $getPro=$pd->getUserById($id);
            if($getPro){
                while($value=$getPro->fetch_assoc()){

        ?> 
        <div class="col-sm-3" style="background:#dee2e6; margin: 0 auto">
         
        </div> 

    <div class="col-sm-6">
                <div class="row" style="background:#36A7E7;margin-bottom: 30px">
                   <label><h2>UPDATE USER  </h2></label>
                </div> 
              
                 <form action="" method="post">
                  <div class="row">
                     <?php
                      if(isset($updateProduct)){
                          echo $updateProduct;
                      }
                      ?>
                  </div>


                   <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8" style="margin-bottom: 20px">
                       
                        </div>
                   </div>


                   <div class="form-group row">
                    
                        <div class="col-sm-3" style="margin-left:20px">
                          <label >First Name:</label>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="first_name" value="<?php echo $value['first_name'];?>" >
                        </div>
                    </div>


                 <div class="form-group row">
                    
                     <div class="col-sm-3" style="margin-left:20px">
                        <label >Last Name:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="last_name"  value="<?php echo $value['last_name'];?>">
                      </div> 
                  </div>

                  
                  <div class="form-group row">
                      
                      <div class="col-sm-3" style="margin-left:20px"><label >User Name:</label> </div>
                      <div class="col-sm-8">
                         <input type="text" class="form-control" name="username" id="username" value="<?php echo $value['username'];?>">
                      </div>   
                  </div>


                  <div class="form-group row">
                      <div class="col-sm-3" style="margin-left:20px"><label >Password:</label> </div>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $value['password'];?>">
                      </div>
                  </div>

                  <div class="form-group row">  
                      <div class="col-sm-3" style="margin-left:20px"><label >Email ID: </label> </div>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $value['email'];?>" >
                      </div>
                  </div>


                   <div class="form-group row">
                      <div class="col-sm-3" style="margin-left:20px"><label >Phone No: </label></div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" value="<?php echo $value['phone'];?>">
                      </div>
                  </div>

                  <div class="form-group row">                
                    <div class="col-sm-3" style="margin-left:20px"> <label> Date Of Birth:</label></div> 
                     <div class="col-sm-8">
                      <div class="row">
                     
                        <div class="col-sm-10"> <input type="text" class="form-control" name="birthdate" id="datepicker" value="<?php echo $value['dob'];?>"> </div>
                         <div class="col-sm-2"> <i class="fa fa-calendar" style="font-size: 30px; margin-left:-20px"></i></div>
                      </div>
                      </div>
                    
                   </div>
   
                  <div class="form-group row">
                  
                    <div class="col-sm-3" style="margin-left:20px">
                      <label >City:</label>   
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="city" class="form-control" id="city" value="<?php echo $value['city'];?>">
                    </div>
               
                  </div>

                  <div class="form-group row">

                    
                       <div class="col-sm-3" style="margin-left:20px">
                      <label >Country:</label>
                     
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="country" class="form-control" id="country" value="<?php echo $value['country'];?>" >
                    </div>

                  </div>

                  <div class="form-group row">

                    
                       <div class="col-sm-3">
                     
                       </div>

                    <div class="col-sm-8">
                            <div class="row">
                              <strong style="margin-left: 20px">Terms & Condition</strong>
                              <p style="margin-top:3px"> Agreed and consent to our <span style="color: red">Terms of Service</span> and End User License Agreement</p>
                            </div>

                       <div class="row" style="margin-bottom: 20px">
                                  
                             <label class="container" style="width: 50%">I Agree
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                       

                            <label class="container" style="width:50%">I Do not Agree
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                              </label>
                          <?php } } ?>
                            
                          </div>

                          <button class="btn btn-primary" style="font-weight:bold"name="register">UPDATE USER</button>
                            
                        </div>     

                  </div>

              </form> 
  </div>

 <div class="col-sm-3" style="background:#dee2e6">
 
    </div>

 <script>
          $( function() {
            $( "#datepicker" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-100:+0"
            });
          } );
          </script>
 
        <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</div>
</div>
  
  
<?php include'inc/footer.php'?>