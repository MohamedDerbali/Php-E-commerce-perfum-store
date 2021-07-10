<?PHP
class Evenement{
	private $id;
	private $nom;
	private $heure_deb;
	private $heure_fin;
	private $image;
	function __construct($nom,$deb,$fin,$img){
		
		$this->nom=$nom;
		$this->heure_deb=$deb;
		$this->heure_fin=$fin;
		$this->image=$img;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDeb(){
		return $this->heure_deb;
	}
	function getFin(){
		return $this->heure_fin;
	}
	function getImage(){
		return $this->image;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDeb($heure_deb){
		$this->heure_deb;
	}
	function setFin($heure_fin){
		$this->heure_fin=$heure_fin;
	}
	function setImage($image){
		$this->image=$image;
	}
	
}

?>