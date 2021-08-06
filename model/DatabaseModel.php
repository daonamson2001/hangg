<?php
class DatabaseModel
{
    public function open()
    {
        $con = mysqli_connect("localhost", "root", "", "PHP2");
        return $con;
    }
    public function close($con)
    {
        mysqli_close($con);
    }
}