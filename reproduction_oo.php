<?php
// j'appelle le fichier 'Reproduction.php' pour avoir accès au contenu de ce dernier
require 'Reproduction.php';

// je crée une instance, dans laquelle je base l'objet sur la classe 'Reproduction()'
$reproduction = new Reproduction();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproduction</title>

    <!-- style CSS -->
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
            width: 500px;
            height: 150px;
            margin: auto;
        }
        th {
            background: black;
            color: white;
            text-transform: uppercase;
        }
        td {
            background: red;
            color: white;
            border: 1px solid black;
            text-align: center;
            text-transform: capitalize;
        }
        a {
            color: white;
        }
    </style>
</head>
<body>
    <!-- je crée un tableau -->
    <table>
        <!-- je crée la première rangée de ce tableau -->
        <tr>
            <!-- je crée les 5 colonnes du tableau -->
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Métier</th>
            <th>Site web</th>
        </tr>
        <!-- je crée une boucle 'foreach()' qui va parcourir le tableau présent dans la classe qui se trouve dans la seconde page -->
        <?php foreach($reproduction->getReproduction() as $values) : ?>
            <!-- je crée une ligne pour chaque entrée -->
            <tr>
                <!-- pour chaque entrée je crée un <td></td> qui aura la valeur de chaque clé appelée -->
                <td><?php echo $values['nom'] ?></td>
                <td><?php echo $values['prenom'] ?></td>
                <td><?php echo $values['age'] ?></td>
                <td><?php echo $values['metier'] ?></td>
                <!-- pour la dernière case, ce qui était demandé était le site web, un mélange donc, du nom du site et du lien, il a donc fallu que je modifie légèrement ces dernières cases -->
                <td><a href="<?php $values['lien'] ?>"><?php echo $values['site'] ?></a></td>
            </tr>
        <!-- je termine la boucle 'foreach()' -->
        <?php endforeach; ?>
    </table>
</body>
</html>