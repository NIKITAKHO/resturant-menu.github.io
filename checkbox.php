<?php
require_once './connectionclass.php';
class checkboxClass extends connectionClass{
    public function  addtodatabase($value)
    {
        $insert = "insert into checkbox (value) VALUES ('$value')";

        $result = $this->query($insert) or die($this->error);
        if($result){
            return"<h2 class='text-success'> updated</h2>";
        }
        else
        {
            return"<h2 class='text-success'>not updated</h2>";
        }
    }
}
?>