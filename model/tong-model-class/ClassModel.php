<?php
require_once "model/DatabaseModel.php";
class ClassModel extends DatabaseModel
{
    // Thuoc tinh
    public $idClass;
    public $nameClass;
    // Phuong thuc
    public function getAllClass()
    {
        // ket noi csdl
        $con = $this->open();
        $sql = "SELECT * FROM `class`";
        $result = mysqli_query($con, $sql);
        // while ($in = mysqli_fetch_array($result)) {
        //     print_r($in);
        // }
        $this->close($con);
        $arrayClass = [];
        foreach ($result as $each) {
            $class = new ClassModel();
            $class->idClass = $each["idClass"];
            $class->nameClass = $each["nameClass"];
            array_push($arrayClass, $class);
        }
        return $arrayClass;
    }
    public function getByid($id)
    {
        $con = $this->open();
        $sql = "SELECT * FROM `class` WHERE idClass = $id";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $item = mysqli_fetch_array($result);
        $class = new ClassModel();
        $class->idClass = $item["idClass"];
        $class->nameClass = $item["nameClass"];
        return $class;
    }
    public function update()
    {
        $con = $this->open();
        $sql = "UPDATE `class` SET nameClass='$this->nameClass' WHERE idClass = $this->idClass";
        mysqli_query($con, $sql);
        $this->close($con);
    }
    public function delete($id)
    {
        $con = $this->open();
        $sql = "DELETE FROM `class` WHERE idClass=$id";
        mysqli_query($con, $sql);
        $this->close($con);
    }
    public function add($name)
    {
        $con = $this->open();
        $sql = "INSERT INTO `class`(nameClass) values ('$name')";
        mysqli_query($con, $sql);
        $this->close($con);
    }
}