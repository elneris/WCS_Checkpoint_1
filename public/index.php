<?php require ('../inc/_header.php')?>
<?php require ('../inc/_nav.php') ?>
<?php require_once ('../src/function.php') ?>

<?php

if (empty($_GET['page']) || $_GET['page'] != 'add'){
    require ('../views/table.index.php');
} else {
    if(isset($_GET['success'])){
        if ($_GET['success'] == 'yes') { ?>
            <div class="container col-6 alert alert-success alert-dismissible fade show" role="alert">
                Contact ajouté !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } if ($_GET['success'] == 'no'){ ?>
            <div class="container col-6 alert alert-warning alert-dismissible fade show" role="alert">
                <strong>ATTENTION</strong> Veillez remplir tout les champs !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php }
    }
    require ('../views/add.index.php');
}

require ('../inc/_footer.php');