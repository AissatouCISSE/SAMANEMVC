<?php
namespace src\model;

use libs\system\Model;

class VilleRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->getRepository("Ville")->findAll();
    }
    public function insert($pays)
    {
        $this->db->persist($pays);
        $this->db->flush();
    }

    public function get($id)
    {
        return $this->db->getRepository("Ville")->find(array("id"=>$id));
    }
    public function getPays($id)
    {
        return $this->db->getRepository("Pays")->find(array("id"=>$id));
    }

    public function update($ville)
    {   //le pays de la base de donnees
        $v = $this->get($ville->getId());
        //Modifications des donnees de ce pays avec les infos passees en parametre cad $pays*/
        $v->setNom($ville->getNom());
        $v->setLatitude($ville->getLatitude());
        $v->setLongitude($ville->getLongitude());
        $v->setPays($ville->getPays());
        $this->db->flush();
    }

    public function delete($id)
    {
        $p = $this->get($id);
        $this->db->remove($p);
        $this->db->flush();
    }
}
?>