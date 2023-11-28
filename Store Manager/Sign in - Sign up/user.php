<?php
    include "./lib/database.php";
?>

<?php
    class User
    {
    
    
        private $db;
    
    
        public function __construct()
       {
           $this ->db = new Database();
       }
    
    
       public function checkUser($account, $pass){
           $query = "SELECT * FROM user WHERE account ='$account' AND pass = '$pass'";
           $result = $this -> db ->select($query);
           return $result;
       }
       
    
    
       }
    
?>