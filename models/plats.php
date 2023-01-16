<?php
namespace models;
class plats extends database {
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO plats(nom_plat,prix_du_plat) VALUES(?,?)", $data);
    }

    public function Update(array $data){
        $this->SendData("UPDATE plats SET nom_plat=?,prix_du_plat=?, WHERE Id=?",$data);
    }

    public function Delete(int $id){
        $this->SendData("DELETE FROM plats WHERE Id=?",[$id]);
    }

    public function GetAll(): array{
        return $this->GetManyData("SELECT nom_plat, prix_du_plat, FROM plats",NULL);
    }

}