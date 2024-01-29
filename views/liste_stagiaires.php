<?php $title = "Liste des stagiaires"; ?>
<?php ob_start(); ?>
<!-- test if base donne is empty-->
<?php if (empty($stagiaires)) : ?>
    <div class="alert alert-warning mt-3" role="alert">
        Aucun stagiaire trouvé. Veuillez ajouter des stagiaires.
    </div>
<?php else : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">CIN</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stagiaires as $stagiaire) : ?>
                <tr>
                    <td><?= $stagiaire->cin  ?></td>
                    <td><?= $stagiaire->nom ?></td>
                    <td><?= $stagiaire->prenom ?></td>
                    <td><?= $stagiaire->date_n ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $stagiaire->id ?>" class="btn btn-success btn-sm">modifier</a>
                        <a href="index.php?action=delete&id=<?php echo $stagiaire->id ?>" class="btn btn-danger btn-sm">supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>

<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>