<?php include 'inc/header.php' ?>

<?php 
include_once 'classes/user.php';
$user = new User();
                 
                  if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['register'])){
                
                     $UserReg=$cmr->UserRegistration($_POST);

              }
          ?>


<div id="mainsection">


<div class="row">
        <div class="col-sm-3" style="background:#dee2e6; margin: 0 auto">
         
        </div> 

  <div class="col-sm-6" >

        <div class="reg_form">
              <div class="row" style="background:#36A7E7;margin-bottom: 30px">
                 <label><h2>USER REGISTRATION FORM</h2></label>
                 <p style="color:#fff">register here to become a member of our website.</p>
              </div> 
            
               <form action="" method="post">

                 <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-8" style="margin-bottom: 20px">
                       <?php
                        if(isset($UserReg)) {
                          echo  $UserReg;
                        }
                    ?>
                    </div>
                   
                 </div>

                 <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >First Name:</label>
                   
                  </div>
                  <div class="col-sm-8" >
                    <input type="text" class="form-control" name="first_name"  >
                  </div>
                 
                </div>

               <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >Last Name:</label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="last_name"  >
                  </div>
                 
                </div>

                
                <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >User Name: </label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" >
                  </div>
                 
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >Password:</label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="password" >
                  </div>
                
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >Email ID: </label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email" >
                  </div>
            
                </div>
                  <div class="form-group row">
                  
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >Phone No: </label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="phone" >
                  </div>
            
                </div>

                <div class="form-group row">
                

                  <div class="col-sm-3" style="margin-left:20px">
                    <label> Date Of Birth:</label>
                   
                  </div>
                  
                   <div class="col-sm-8">
                    <div class="row">
                   
                      <div class="col-sm-10"> <input type="text" class="form-control" name="birthdate" id="datepicker"> </div>
                       <div class="col-sm-2"> <i class="fa fa-calendar" style="font-size: 30px; margin-left:-20px"></i></div>
                    </div>
                    </div>
                  
                 </div>
 

                <div class="form-group row">
                
                  <div class="col-sm-3" style="margin-left:20px">
                    <label >City:</label>
                   
                  </div>
                  <div class="col-sm-8">
                    <input type="text" name="city" class="form-control" id="city" >
                  </div>
             
                </div>

                <div class="form-group row">

                  
                     <div class="col-sm-3" style="margin-left:20px">
                     <label >Country:</label>
                   
                    </div>
                  <div class="col-sm-8">
                    <input type="text" name="country" class="form-control" id="country" >
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
                              <input type="radio" name="radio" value="0">
                              <span class="checkmark"></span>
                           </label>
                     

                          <label class="container" style="width:50%">I Do not Agree
                              <input type="radio" name="radio" value="1">
                              <span class="checkmark"></span>
                          </label>

                          
                        </div>

                        <button class="btn btn-primary" style="font-weight:bold"name="register" >CREATE NEW ACCOUNT</button>
         

                      </div>     


                </div>

             

               
            </form>
              
</div>
    
</div>

 <div class="col-sm-3" style="background:#dee2e6">
 
    </div>



</div>
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
  
<?php include'inc/footer.php'?>