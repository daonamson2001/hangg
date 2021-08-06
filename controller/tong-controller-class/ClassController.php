<?php
require_once "model/tong-model-class/ClassModel.php";
class ClassController
{
    static function viewAll()
    {
        // Lay du lieu tu model
        $class = new ClassModel();
        $listClass = $class->getAllClass();
        require_once "views/class/view-all.php";
    }
    static function Add()
    {
        require_once "views/class/add.php";
    }
    static public function AddProcess()
    {
        $class = new ClassModel();
        $name = isset($_POST['name-class']) ? $_POST['name-class'] : null;
        $class->Add($name);
        header('Location: class');
    }
    static function viewUpdate()
    {
        $class = new ClassModel();
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $item = $class->getById($id);
        require_once "views/class/update.php";
    }
    static function updateProcess()
    {
        $id = isset($_POST['id-class']) ? $_POST['id-class'] : null;
        $name = isset($_POST['name-class']) ? $_POST['name-class'] : null;
        $class = new ClassModel();
        $class->idClass = $id;
        $class->nameClass = $name;
        $class->update();
        header("Location: ../class");
    }
    static function deleteProcess()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $class = new ClassModel();
        $class->delete($id);
        header("Location: ../class");
    }
}