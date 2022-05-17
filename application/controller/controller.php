<?php
include "./debug/ChromePhp.php";
ChromePhp::log("controller.php: hello word");
ChromePhp::log($_SERVER);

class Controller
{

    public $load;
    public $model;

    public function __construct($pageURI = null)
    {
        $this->load = new Load();
        $this->model = new Model();

        $this->$pageURI();
    }


    public function apiLoadImage()
    {
        ChromePhp::warn("controller.php: [apiLoadImage] Get the Brand data");

        $data = $this->model->dbGetBrand();
        $data = array_map(function ($item) {
            return $item["Name"];
        }, $data);
        ChromePhp::log($data);
        $this->load->view("viewDrinks", $data);
    }

    public function apiAddModel()
    {
        $req = $_POST;
        $model = $this->model->dbAddNewModel($req);
        header("Content-type: application/json");
        echo json_encode($model);
    }

    public function apiGetJson()
    {
        $this->load->view("viewJson");
    }

    public function apiGetFlickerService()
    {
        $this->load->view("viewFlickerService");
    }

    public function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view("viewMessage", $data);
    }


    public function apiGetSingle()
    {
        $id = $_GET["id"];
        header("Content-type: application/json");
        echo json_encode($this->model->dbGetSingleData($id));
    }

    public function modelsPage()
    {
        $this->load->view("models");
    }

    public function apiDeleteTable()
    {
        $data = $this->model->dbDeleteTable();
        $this->load->view("viewMessage", $data);
    }


    public function apiDeleteModel()
    {
        $id = $_GET["id"];
        $this->model->dbDeleteModel($id);
        header("Content-type: application/json");
        echo json_encode(["success" => true]);
    }


    public function apiUpdateModel()
    {
        $req = $_POST;
        $id = $_GET["id"];
        $this->model->dbUpdateModel($id, $req);
        $loc = str_replace("apiupdatemodel", "apieditmodel", $_SERVER["REQUEST_URI"]);
        header("Content-type: application/json");
        echo json_encode($req);
    }

    public function home()
    {
        $data = $this->model->model3D_info();
        $this->load->view("view3DAppTest_2", $data);
    }

    public function aboutPage()
    {
        $data = $this->model->model3D_info();
        $this->load->view("about", $data);
    }

    public function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view("viewMessage", $data);
    }

    public function apiGetData()
    {

        $brands = $this->model->dbGetBrand();
        $data = $this->model->dbGetData();
        $this->load->view("view3DAppdata", compact("data" , "brands"));
    }


}