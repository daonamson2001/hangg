<?php
require_once "model/DatabaseModel.php";
class StudentModel extends DatabaseModel
{
    public $idStudent;
    public $firstName;
    public $lastName;
    public $gender;
    public $class;
    public function getAllStudent()
    {
        // ket noi csdl
        $con = $this->open();
        $sql = "SELECT * FROM `student`";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $arrayStudent = [];
        foreach ($result as $each1) {
            $student = new StudentModel();
            $student->idStudent = $each1["idStudent"];
            $student->firstName = $each1["firstName"];
            $student->lastName = $each1["lastName"];
            $student->gender = $each1["gender"];
            $class = new ClassModel();
            $item = $class->getById($each1["idClass"]);
            $student->class = $item;
            array_push($arrayStudent, $student);
        }
        return $arrayStudent;
    }
    public function getByid($id)
    {
        $con = $this->open();
        $sql = "SELECT * FROM `student` WHERE idStudent = $id";
        $result = mysqli_query($con, $sql);
        $item1 = mysqli_fetch_assoc($result);
        $student = new StudentModel();
        $student->idStudent = $item1["idStudent"];
        $student->firstName = $item1["firstName"];
        $student->lastName = $item1["lastName"];
        $student->gender = $item1["gender"];
        $student->idClass = $item1["idClass"];
        return $student;
        $this->close($con);
    }
    public function update()
    {
        $con = $this->open();
        $sql = "UPDATE `student` SET firstName='$this->firstName',lastName='$this->lastName',gender='$this->gender',idClass='$this->idClass' WHERE idStudent = $this->idStudent";
        mysqli_query($con, $sql);
        $this->close($con);
    }
    public function delete($id)
    {
        $con = $this->open();
        $sql = "DELETE FROM `student` WHERE idStudent = $id";
        mysqli_query($con, $sql);
        $this->close($con);
    }
    public function add($firstName, $lastName, $gender, $idClass)
    {
        $con = $this->open();
        $sql = "INSERT INTO `student`(firstName,lastName,gender,idClass) VALUES ('$firstName','$lastName','$gender','$idClass')";
        mysqli_query($con, $sql);
        $this->close($con);
    }
}