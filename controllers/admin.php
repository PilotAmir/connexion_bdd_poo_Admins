<?php
namespace controllers;
class admin implements base
{
    private $model;
    private $NavModel;
    use \controllers\utils;
    public function __construct()
    {
        $_SESSION['links']=$this->GetLinks();
        $this->Navmodel=New \models\nav_links();
        // $this->NavModel=New \models\nav_links();
        if(isset($_GET['target'])){
            $target=$_GET['target'];
            $this->$target(); 
        }else{
            $this->store();
        }
    }
    public function index()
    {
        $template='views/page/dashboard.phtml';
        include_once 'views/main.phtml';
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['LinksName']) && isset($_POST['navGoto']) && isset($_POST['navTarget']) && isset($_POST['UserRole'])){
                //j'appelle la fonction Insert() depuis le model afin d'ajouter les liens en base
                $this->Navmodel->Insert([$_POST['LinksName'],$_POST['navGoto'],$_POST['navTarget'],$_POST['UserRole']]);
                echo "envoyé";
                header("location:index.php?goto=admin");

                     exit();
            }
            else{
                echo 'saisi les liens';
            }
        }
        $template='views/page/dashboard.phtml';
        include_once 'views/main.phtml';
    }
    public function destroy()
    {
        
    }
    public function update()
    {
        
    }
}