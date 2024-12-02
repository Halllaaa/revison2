<?php
//1
$Employe=array(array("Nom"=>"Yasser", "Poste"=>"Account Manager", "Salaire"=> 8500),
               array("Nom"=>"Iness", "Poste"=>"Graphic Designer", "Salaire"=> 7000),
               array("Nom"=>"Anas", "Poste"=>"Manager", "Salaire"=> 16000),
               array("Nom"=>"Zineb", "Poste"=>"Data Analyst", "Salaire"=> 10833),
               array("Nom"=>"Hala", "Poste"=>"Softawre Dev", "Salaire"=> 12000)
);
$x=0;
foreach( $Employe as $S) {
$x+=$S["Salaire"];
}
$salaire_moyen=$x/count($Employe);
echo"Le salaire moyen des employes est : ". $salaire_moyen. "<br>";

//2
$NomE=$_POST["NomE"];
foreach($Employe as $y){
if($NomE==$y["Nom"]){
    echo "Nom:" . $y["Nom"]."<br>";
    echo "Poste:" . $y["Poste"]."<br>";
    echo "Salaire:" . $y["Salaire"]."<br>";
    break;
}}
if($NomE!=$y["Nom"]) echo"Employe introuvable";

 //3

$user_info = array("Email" => "test@exemple.com", "password" => "psswd1234") ;
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];
        $authenticated = false;
    
        foreach ($user_info as $u) {
            if ($u["Email"] === $Email && $u["Password"] === $Password) {
                echo "Connexion réussie !";
                $authenticated = true;
                break;
            }
        }
        if (!$authenticated) echo "Email ou mot de passe incorrect.";
    
    
   //4
    $panier = array(
    "nom" => "Produit 1", "quantite" => 8, "prix" => 366,
    "nom" => "Produit 2", "quantite" => 4, "prix" => 199,
    "nom" => "Produit 3", "quantite" => 2, "prix" => 250,
    );
    $total = 0;
    foreach($panier as $item){
        $total += $item['prix'] * $produit['quantite'];
    }
    echo "Total: $total";
    
    //5


        $comments = array(); 
             $Commentaire = $_POST["Commentaire"]; 
             $Date = date("Y-m-d H:i:s"); 
             $comments[] = array("Commentaire" => $Commentaire, "Date" => $Date);
             
              foreach ($comments as $c) {
                 echo "Commentaire: " . $c["Commentaire"] . "<br>"; 
                 echo "Date: " . $c["Date"] . "<br><br>"; }
    //6
    $villes = array( "Casablanca" => 23, "Marrakech" => 30, "Fès" => 25,  "Agadir" => 28 );
    $tmpMax = max($villes);
    $VilleMax = array_search($tmpMax, $villes);
    echo "La ville avec la temperature la plus elevee est : ".$villeMax."<br>";
    
   
    
    //8
    $produits = [
        ["nom" => "Produit 1", "prix" => 100],
        ["nom" => "Produit 2", "prix" => 200],
        ["nom" => "Produit 3", "prix" => 300]
    ];
    
    if (isset($_POST['produits'])) {
        $total = 0;
        foreach ($_POST['produits'] as $produit) {
            $total += $produits[$produit]['prix'];
        }
        echo "Total: $total";
    }
    
    //9
    $etudiants = [
        "Hala" => ["Dev Web" => 19, "C++" => 16, "PHP" => 17],
        "Youssef" => ["Dev Web" => 15, "C++" => 17.50, "PHP" => 15],
        "Kenza" => ["Dev Web" => 17, "C++" => 9, "PHP" => 11]
    ];
    
    foreach($etudiants as $nom => $notes){
        $S = 0;
        $TM = count($notes);
        foreach($notes as $matiere => $note){
           $sommeNotes += $note;
        }
        $moyenne = $sommeNotes / $totalMat;
        echo "Etudiant: $nom ; Moyenne: $moyenne";
    }


    //10
    $utilisateurs = [
        ["nom" => "Hala", "email" => "hala@example.com"],
        ["nom" => "Salma", "email" => "salma@example.com"]
    ];
        $action = $_POST['action']; 
        if ($action == "Ajouter") { 
            $nom = $_POST['nom'];
             $email = $_POST['email'];
              $users[] = array("nom" => $nom, "email" => $email); 
              echo "Utilisateur ajouté : $nom<br>"; }

              if ($action == "Modifier") { 
                $oldName = $_POST['old_name'];
                 foreach ($users as &$user) { 
                    if ($user["nom"] == $oldName) { 
                        $user["nom"] = $_POST['new_name'];
                         $user["email"] = $_POST['new_email']; 
                         echo "Utilisateur modifié : $oldName -> " . $user["nom"] . "<br>"; 
                         break; } }}

                         if ($action == "Supprimer") {
                             $deleteName = $_POST['delete_name']; 
                             foreach ($users as $key => $user) {
                                 if ($user["nom"] == $deleteName) {
                                     unset($users[$key]);
                                     echo "Utilisateur supprimé : $deleteName<br>"; 
                                     break; } }}
?>


