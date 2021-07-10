<?PHP
include_once "config.php";
class EvenementC {
function afficherEvenement ($evenement){
		echo "Id: ".$evenement->getId()."<br>";
		echo "Nom: ".$evenement->getNom()."<br>";
		echo "Heure debut: ".$evenement->getDeb()."<br>";
		echo "Heure fin: ".$evenement->getFin()."<br>";
		echo "Image: ".$evenement->getImage()."<br>";
	}
	function ajouterEvenement($evenement){
		$sql="insert into evenement (nom,heure_deb,heure_fin,image) values (:nom,:heure_deb,:heure_fin,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$evenement->getNom();
        $heure_deb=$evenement->getDeb();
        $heure_fin=$evenement->getFin();
        $image=$evenement->getImage();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':heure_deb',$heure_deb);
		$req->bindValue(':heure_fin',$heure_fin);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvenements(){
		//$sql="SElECT * From evenement e inner join formationphp.evenement a on e.id= a.id";
		$sql="SELECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvenement($id){
		$sql="DELETE FROM evenement where id= :id";
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
	function modifierEvenement($evenement,$id){
		$sql="UPDATE evenement SET  nom=:nom,heure_deb=:heure_deb,heure_fin=:heure_fin,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$evenement->getNom();
        $heure_deb=$evenement->getDeb();
        $heure_fin=$evenement->getFin();
        $image=$evenement->getImage();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':heure_deb'=>$heure_deb,':heure_fin'=>$heure_fin,':image'=>$image);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':heure_deb',$heure_deb);
		$req->bindValue(':heure_fin',$heure_fin);
		$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererEvenement($id){
		$sql="SELECT * from evenement where id=$id";
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