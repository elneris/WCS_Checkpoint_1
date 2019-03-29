<?php require ('../inc/_header.php')?>
<?php require ('../inc/_nav.php') ?>
<?php require_once ('../src/function.php') ?>

<?php

if (empty($_GET['page']) || $_GET['page'] != 'add'){
    require ('../views/table.index.php');
} else { ?>

    <div class="container">
        <div class="form-group">
            <form class="form-inline" method="post" action="../src/treatment.php">
                <label class="sr-only" for="firstname">Name</label>
                <input type="text" name="firstname" class="form-control mb-2 mr-sm-2" id="firstname" placeholder="Prenom">

                <label class="sr-only" for="lastname">Username</label>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="civility" id="mister" value="1" checked>
                    <label class="form-check-label" for="mister">M.</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="civility" id="miss" value="2">
                    <label class="form-check-label" for="miss">Mme.</label>
                </div>


                <button name="page" value="add" type="submit" class="btn btn-primary mb-2">Envoyez</button>
            </form>
        </div>
    </div>
<?php }