<?php
namespace controllers;

class plats implements base
{
    private $model;
    function __construct()
    {
        $this->model=new \models\plats();
        
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target();
        }else{
            $this->store();
        }
    }

    public function index()
    {

    }

    public function store()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['plats']) && isset($_POST['prix'])){
                $this->model->Insert([$_POST['plats'],$_POST['prix']]);
                // header("location:index.php");
                // exit();
            }
        }
        $template ='views/page/plats.phtml';
        include_once 'views/main.phtml';
    }

    public function destroy()
    {

    }

    public function update()
    {

    }

    public function recherche()
    {

    }

}