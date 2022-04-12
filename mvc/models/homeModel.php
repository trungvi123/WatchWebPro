<?php 
    class homeModel extends db{
        public function showSP(){
            $query = "SELECT * FROM haha";
            return mysqli_query($this->con,$query);

        }
    }

?>