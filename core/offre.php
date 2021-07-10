<?PHP
include_once "config.php";
class OffreC {
function afficherOffree ($offre){
		echo "Id: ".$offre->getId()."<br>";
		echo "Nom: ".$offre->getNom()."<br>";
		echo "Type: ".$offre->getType()."<br>";
		echo "Description: ".$offre->getDescription()."<br>";
		echo "Date: ".$evenement->getDate()."<br>";
	}
	function ajouterOffre($offre){
		$sql="insert into offre (nom,type,description,date) values (:nom,:type,:description,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$offre->getNom();
        $type=$offre->getType();
        $description=$offre->getDescription();
        $date=$offre->getDate();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':date',$date);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherOffre(){
		//$sql="SElECT * From offre e inner join formationphp.offre a on e.id= a.id";
		$sql="SELECT * From offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerOffre($id){
		$sql="DELETE FROM offre where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierOffre($offre,$id){
		$sql="UPDATE offre SET  nom=:nom,type=:type,description=:description,date=:date WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
        $nom=$offre->getNom();
        $type=$offre->getType();
        $description=$offre->getDescription();
        $date=$offre->getDate();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':type'=>$type,':description'=>$description,':date'=>$date);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':date',$date);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererOffre($id){
		$sql="SELECT * from offre where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>