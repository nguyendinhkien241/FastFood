<?php
    include "./lib/database.php";
?>

<?php
    class Food 
    {
    
    
        private $db;
    
    
        public function __construct()
       {
           $this ->db = new Database();
       }
    
    
        public function insert_Food($TenMon, $MaLoai, $DonGia, $image){
            $query = "INSERT INTO monan VALUES ('','$TenMon', '$MaLoai', '$DonGia', '$image')";
            $result = $this ->db ->insert($query);
            return $result;   
        }
        public function show_Food(){
            $query = "SELECT * FROM monan"; //ORDER BY danhmuc_id DESC;
            $result = $this -> db ->select($query);
            return $result;
        }
       public function get_Food($MaMon){
           $query = "SELECT * FROM monan WHERE MaMon = '$MaMon'";
           $result = $this -> db ->select($query);
           return $result;
       }
       public function update_Food($TenMon, $DonGia, $MaMon) {
                   $query = "UPDATE monan SET TenMon = '$TenMon', DonGia='$DonGia' WHERE MaMon = '$MaMon'";
                   $result = $this ->db ->update($query);
                   header('Location:menuFood.php');
                   return $result;
                   
        
    
    
       }
       public function delete_Food($MaMon){
           $query = "DELETE  FROM monan WHERE MaMon = '$MaMon'";
           $result = $this -> db ->delete($query);
           header('Location: menuFood.php');
           if($result) {$alert = "<span class = 'alert-style'> Delete Thành công</span> "; return $alert;}
           else {$alert = "<span class = 'alert-style'> Delete Thất bại</span>"; return $alert;}
         
    
    
       }
    
    
       }
    
?>