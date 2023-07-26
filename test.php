<?php
$nom=$_POST['nom'];
$post=$_POST['post'];
$prenom=$_POST['prenom'];
$promotion=$_POST['promotion']; 
$faculte=$_POST['faculte'];
$genre=$_POST['gender'];
$fraisA=$_POST['tranche1'];
$fraisC=$_POST['tranche2'];
$fraisE=$_POST['tranche3'];
$photo=$_POST['sauver'];
if(!empty($nom) || !empty($post) || !empty($prenom) || !empty($promotion) || !empty($faculte)
|| !empty($genre) || !empty($fraisA) || !empty($fraisC) || !empty($fraisE)|| !empty($photo)){

    $db_host='localhost';
    $db_user='root';
    $db_password='root';
    $db_db='Formulaire';

    $conn = new  mysqli($db_host,$db_user,$db_password,$db_db); 

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error()); 
    } else {
        $INSERT = "INSERT INTO EnrEtudiant (Nom,PostNom,PreNom,Promotion,
        Faculte,Genre,FraisAcad,FraisCon,FraisExa,Photos) values('$nom','$post','$prenom','$promotion','$faculte',
        '$genre','$fraisA','$fraisC','$fraisE','$photo')";

        

        if ($conn->query($INSERT)){
            echo "Votre Enregistrement a Reussi avec Succes";
        }

          else {
            echo "Echec d'Enregistrment";
        } 
        $conn->close();
    }
    }
 else{
    echo "Tout le Champs Sont Obligatoires";
    die();
}
    

?>