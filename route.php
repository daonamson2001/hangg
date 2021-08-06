<?php
require_once "vendor/autoload-class.php";
require_once "vendor/autoload-student.php";
$controller = "";
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
}
$action = (isset($_GET["action"])) ? $_GET["action"] : '';
// $action = '';
// if (isset($GET["action"])) {
//     $action = $_GET["action"];
// }

switch ($controller) {
    case '':
        require_once "controller/Controller.php";
        $control = new Controller();
        $control->viewMenu();
        break;
    case 'class':
        switch ($action) {
            case '':
                ClassController::viewAll();
                break;
            case 'add';
                ClassController::Add();
                break;
            case 'add-process';
                ClassController::AddProcess();
                break;
            case 'update':
                ClassController::viewUpdate();
                break;
            case 'update-process':
                ClassController::updateProcess();
                break;
            case 'delete':
                ClassController::deleteProcess();
                break;
            default:
                echo "khong co cai nay";
                break;
        }
        require_once "controller/tong-controller-class/ClassController.php";
        ClassController::viewAll();
        break;
    case 'student':
        switch ($action) {
            case '':
                StudentController::viewAll();
                break;
            case 'add':
                StudentController::Add();
                break;
            case 'add-process':
                StudentController::AddProcess();
                break;
            case 'update':
                StudentController::viewUpdate();
                break;
            case 'delete':
                StudentController::deleteProcess();
                break;
            case 'update-process':
                StudentController::updateProcess();
                break;
            default:
                echo "khong co cai nay";
                break;
        }
        require_once "controller/tong-controller-student/StudentConntroller.php";
        StudentController::viewAll();
        break;
    default:
        echo "404";
        break;
}