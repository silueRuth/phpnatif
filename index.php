<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Creation de contrat</title>
</head>

<?php 
    include_once "db.php";
    include_once "consommation.php";
    //recuperation des data de la table employes 
    $conn = $db->prepare('select * from employes');
    $conn ->execute();
    $employe = $conn->fetchAll();
    //recuperation des data de la table poste
    $connexion = $db->prepare('select * from postes');
    $connexion ->execute();
    $post = $connexion->fetchAll();


?>
<body>
    <form method="POST">
        <fieldset>
            <legend>Créer un contrat</legend>
            
                <label>Nom de l'employé</label> 
                    <select name="employe" > <option value="" selected="selected" disabled>Ex: Foursov Mycky</option>       
                        <?php foreach($employe as $data){ ?>
                            <option value=<?=$data['id'];?>><?=$data['nom'].' '.$data['prenom'];?></option> 
                        <?php  }   ?> 
                    </select>    
                
                <label>Poste de l'employé</label> 
                    <select name="poste" > <option value="" selected="selected" disabled>Ex: Agent commercial</option>       
                        <?php foreach ($post as $key => $donn){ ?>
                            <option value="<?= $donn['id']; ?>"><?= $donn['post']; ?></option> 
                        <?php } ?> <br> 
                    </select>

                <label>Détail du contrat </label><input type="text" name="detail" placeholder="Contrat de stage" required/><br>

                <input type="submit" value="Valider"/>

        </fieldset>

    </form>
    
</body>
</html>