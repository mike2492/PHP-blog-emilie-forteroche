<table class="adminArticle">
    <thead>
        <tr>
            <th><a href="index.php?action=showArticlesStats&sort=title&order=<?= $nextOrderTitle; ?>">Titre</a></th>
            <th><a href="index.php?action=showArticlesStats&sort=views&order=<?= $nextOrderViews; ?>">Nombre de vues</a></th>
            <th><a href="index.php?action=showArticlesStats&sort=nbComment&order=<?= $nextOrderNbComment; ?>">Nombre de commentaires</a></th>
            <th><a href="index.php?action=showArticlesStats&sort=date_creation&order=<?= $nextOrderDateCreation; ?>">Date de publication</a></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td><?= $article->getTitle(); ?></td>
                <td><?= $article->getViews(); ?></td>
                <td><?= $article->getNbComment(); ?></td>
                <td><?= Utils::convertDateToFrenchFormat($article->getDateCreation()); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a class="submit" href="index.php?action=admin">Revenir à la page Admin</a>