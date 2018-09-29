<?php
 	$filepath=realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    
?> 

<?php 
	class Controller{
					
				private $db;
    			public function __construct(){
    			$this->db =new Database();
    			
				
				}

     public function getAllUser(){

					$query="SELECT * FROM user";
			
					$result=$this->db->select($query);

					return $result;
                    

				}

	public function UserUpdate($data,$id){

					$first_name     =mysqli_real_escape_string($this->db->link,$data['first_name']);
                    $last_name      =mysqli_real_escape_string($this->db->link,$data['last_name']);
                    $username       =mysqli_real_escape_string($this->db->link,$data['username']);
                    $email          =mysqli_real_escape_string($this->db->link,$data['email']);
                    $phone        	=mysqli_real_escape_string($this->db->link,$data['phone']);
                    $password       =mysqli_real_escape_string($this->db->link,$data['password']);
                    $dob		    =mysqli_real_escape_string($this->db->link,$data['birthdate']);
                    $city        	=mysqli_real_escape_string($this->db->link,$data['city']);
                    $country     	=mysqli_real_escape_string($this->db->link,$data['country']);
                    $terms    		=mysqli_real_escape_string($this->db->link,$data['radio']);

                   $date = new DateTime($dob);  
                   $date->add(new DateInterval("P18Y"));
                    if($date > new DateTime()){
                         $msg = "<span class='error'> Your age must be greter then 18 Years!!! !</span>";
                        return $msg;
                    }
                    

                    else if($first_name==""|| $last_name==""|| $username==""||$email==""||$phone==""||$password==""||$dob==""||  $city=="" || $country=="" || $terms=="" ){

                        $msg = "<span class='error'> Field must not be empty !</span>";
                        return $msg;
                    }

                   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                         $msg = "<span class='error'>Invalid Email Format !!! </span>";
                          return  $msg; 
                        }

				  
					else{

					$query="UPDATE user
    				SET 
    				first_name ='$first_name',
    				last_name 	='$last_name',
    				username	='$username',
    				email 		='$email',
    				password 	='$password',
    				phone 		='$phone',
    				dob 		='$dob',
    				city 		='$city',
    				country 	='$country',
    				terms 		='$terms'
    				WHERE id ='$id'";

    				
    				$updated_row=$this->db->update($query);
                    if($updated_row){
                        $msg="<span class='sucess'>User updated Sucessfully.</span>";
                        return $msg;
                    }

                    else{
                         $msg="<span class='error'>User not updated.</span>";
                         return $msg;

                    }

				}
		}		



	public function delUserById($id){
 			
 		
 			$delquery="DELETE FROM user WHERE id='$id' ";

 			$deldata=$this->db->delete($delquery);
                     if($deldata){
                            $msg="<span class='sucess'>User Deleted Sucessfully.</span>";
                            return $msg;
                    }
                    else
                    {
                        $msg="<span class='error'>User Deleted Failed!</span>";
                        return $msg;
                    }

                  }

        public function getUserById($id){
					$query="SELECT * FROM user WHERE id='$id'";
                    $result=$this->db->select($query);
                    return $result;


				}

 		}