<?php
use libs\system\Controller;
use src\model\TestRepository;
use src\model\VilleRepository;
use src\model\PaysRepository;
class VilleController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * localhost/Ville/localisation
     */
    public function localisationn()
    {
        $data['nomVille']= "fatick";
        $data['villes']=array("Thies","Kaffrine","Kaolack");
        return $this->view->load("ville/localiser", $data);
    }

     /**
     * localhost/Ville/get/123
     */
    public function get($id)
    {
        $data["ville"]="L'id de la villes est ". $id;
        return $this->view->load("ville/get", $data);
    }

    public function liste()
    {
        $villedb = new VilleRepository();
        $data['listeVille']=$villedb->getAll();
        $paysdb = new PaysRepository();
        $data['listePays'] = $paysdb->getAll();
        return $this->view->load("ville/liste", $data);
    }

    public function add()
    {
     
        $villedb= new VilleRepository();
        extract($_POST);
        $ville = new Ville();
        $ville->setNom($nom);
        $ville->setLatitude($latitude);
        $ville->setLongitude($longitude);
        $ville->setPays($villedb->getPays($idpays));
 
     
        $villedb->insert($ville);
     //return $this->view->redirect("Pays/liste");
        return $this->liste();
 
 
    }

    public function edit($id)
   {
    $villedb = new VilleRepository();
    $data["ville"]= $villedb->get($id);
    $data["listeVille"]= $villedb->getAll();
    $paysdb = new PaysRepository();
        $data['listePays'] = $paysdb->getAll();
    return $this->view->load("ville/edit", $data);

   }

   public function update()
   {
    $villedb= new VilleRepository();
        extract($_POST);
        $ville = new Ville();
        $ville->setId($id);
        $ville->setNom($nom);
        $ville->setLatitude($latitude);
        $ville->setLongitude($longitude);
        $ville->setPays($villedb->getPays($idpays));
 
        $villedb->update($ville);
     //return $this->view->redirect("Pays/liste");
        return $this->liste();
   }


    public function delete($id)
    {
     $villedb= new VilleRepository();
     $villedb->delete($id);
     return $this->liste();
    }
}

?>