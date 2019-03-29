<?php require ('../inc/_header.php')?>
<?php require ('../inc/_nav.php') ?>
<?php require_once ('../src/function.php') ?>

<?php

if (empty($_GET['page']) || $_GET['page'] == 'list'){ ?>
<div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom - Prénom</th>
            <th scope="col">Civilité</th>
        </tr>
        </thead>
        <tbody>
            <?php contactInformation() ?>
        </tbody>
    </table>
</div>
<?php } else {

}