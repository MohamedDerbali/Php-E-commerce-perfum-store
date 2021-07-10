<?PHP
class Offre{
	private $id;
	private $nom;
	private $description;
	private $type;
	private $date;
	function __construct($nom,$description,$type,$date){

		$this->nom=$nom;
		$this->description=$description;
		$this->type=$type;
		$this->date=$date;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description;
	}
	function gettype(){
		return $this->type;
	}
	function getdate(){
		return $this->date;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDescription($description){
		$this->description;
	}
	function setType($type){
		$this->type=$type;
	}
	function setDate($date){
		$this->date=$date;
	}
	
}

?>