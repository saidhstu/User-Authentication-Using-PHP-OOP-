<?php
    $filepath=realpath(dirname(__FILE__));
    include_once ($filepath.'\..\lib\Database.php');
  
?> 

<?php
	 class User{
	 		private $db;
    		private $fm;


    	public function __construct(){
    			$this->db =new Database();
    			
				}
                public function UserRegistration($data){
                    $first_name       =mysqli_real_escape_string($this->db->link,$data['first_name']);
                    $last_name        =mysqli_real_escape_string($this->db->link,$data['last_name']);
                    $username         =mysqli_real_escape_string($this->db->link,$data['username']);
                    $email            =mysqli_real_escape_string($this->db->link,$data['email']);
                    $phone            =mysqli_real_escape_string($this->db->link,$data['phone']);
                    $password         =mysqli_real_escape_string($this->db->link,$data['password']);
                    $dob              =mysqli_real_escape_string($this->db->link,$data['birthdate']);                   
                    $city             =mysqli_real_escape_string($this->db->link,$data['city']);
                    $country          =mysqli_real_escape_string($this->db->link,$data['country']);
                    $terms            =mysqli_real_escape_string($this->db->link,$data['radio']);
                    
                    if($first_name==""|| $last_name==""|| $username==""||$email==""||$phone==""||$password==""||$dob==""||  $city=="" || $country=="" || $terms=="" ){

                        $msg = "<span class='error'> Field must not be empty ! Please Fill out all Field </span>";
                        return $msg;
                    }

                   $date = new DateTime($dob);  

                   $date->add(new DateInterval("P18Y"));
                   
                    if($date > new DateTime()){
                         $msg = "<span class='error'> Your age must be greter then 18 Years!!! !</span>";
                        return $msg;
                    }
                    else{

                        $query = "INSERT INTO user(first_name,last_name,username,password,email,phone,dob,city,country,terms ) 
                        VALUES('$first_name','$last_name',$username','$password','$email','$phone',$dob','$city','$country, $terms')";
                    }


                    $mailquery="SELECT * FROM user WHERE email='$email' LIMIT 1 ";
                    $mailchk=$this->db->select($mailquery);

                    if($mailchk!=false){
                          $msg = "<span class='error'>Email already Exist! Please Use another Email </span>";
                          return  $msg;
                            
                    }

                    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                         $msg = "<span class='error'>Invalid Email Format !!! </span>";
                          return  $msg; 
                        }
                    else{
                        $query = "INSERT INTO user(first_name,last_name,username,password,email,phone,dob,city,country, terms ) 
                        VALUES('$first_name', '$last_name','$username','$password','$email','$phone','$dob','$city','$country','$terms')";
                    
                    $inserted_row=$this->db->insert($query);

                    if($inserted_row){
                        $msg="<span class='sucess'>You Sucessfully Registered !!</span>";
                        return $msg;
                    }
                    else{
                         $msg="<span class='error'>Something wrong Registration Failed !!</span>";
                         return $msg;

                    }
 
                    }

                }


}
?>