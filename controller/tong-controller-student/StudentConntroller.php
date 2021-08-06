<?php
require_once "model/tong-model-student/StudentModel.php";
class StudentController
{
    static function viewAll()
    {
        // Lay du lieu tu model
        $student = new StudentModel();
        $listStudent = $student->getAllStudent();
        require_once "views/student/view-all.php";
    }
    static function viewUpdate()
    {
        $student = new StudentModel();
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $result = $student->getById($id);
        require_once "views/student/update.php";
    }
    static function updateProcess()
    {
        $student = new StudentModel();
        $idStudent = isset($_POST['idStudent']) ? $_POST['idStudent'] : null;
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $idClass = isset($_POST['idClass']) ? $_POST['idClass'] : null;
        $student->idStudent = $idStudent;
        $student->firstName = $firstName;
        $student->lastName = $lastName;
        $student->gender = $gender;
        $student->idClass = $idClass;
        $student->update();
        header("Location: ../student");
    }
    static function deleteProcess()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $student = new StudentModel();
        $student->delete($id);
        header("Location: student");
    }
    static function Add()
    {
        require_once "views/student/add.php";
    }
    static public function AddProcess()
    {
        $class = new StudentModel();
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $idClass = isset($_POST['idClass']) ? $_POST['idClass'] : null;
        $class->Add($firstName, $lastName, $gender, $idClass);
        header("Location: ../student");
    }
}