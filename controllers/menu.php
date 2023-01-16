<?php
namespace controllers;

class menu implements base
{
    private $model;
    function __construct()
    {
        $this->model=new \models\menu();

        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target();
        }else{
            $this->store();
        }
    }

    public function index()
    {
        $template='views/page/menu.phtml';
        include_once 'views/main.phtml';
    }

    public function store()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['menu'])){
                $this->model->Insert([$_POST['menu']]);
                // header("location:index.php");
                // exit();
            }
        }
        $template ='views/page/menu.phtml';
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