<?php
namespace src\model;

use libs\system\Model;

class PaysRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->getRepository("Pays")->findAll();
    }
    public function insert($pays)
    {
        $this->db->persist($pays);
        $this->db->flush();
    }

    public function get($id)
    {
        return $this->db->getRepository("Pays")->find(array("id"=>$id));
    }

    public function update($pays)
    {   //le pays de la base de donnees
        $p = $this->get($pays->getId());
        //Modifications des donnees de ce pays avec les infos passees en parametre cad $pays*/
        $p->setNom($pays->getNom());
        $p->setLatitude($pays->getLatitude());
        $p->setLongitude($pays->getLongitude());
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