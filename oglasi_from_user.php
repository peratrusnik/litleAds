<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php $oglasi = getAllFromUser($_GET['name']);?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h3 class="display-4 text-center"><?php echo $_GET['name'] ?></h3>
            <div class="row">
                <?php foreach($oglasi as $oglas): ?>
                    <div class="col-4">
                        <div class="card mb-2 mt-2">
                            <div class="card-header">
                                <a href="show.category.php?cat=<?php echo $oglas['category'] ?>" class="btn btn-secondary btn-sm">
                                    <?php echo $oglas['category'] ?>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5><?php echo $oglas['title']; ?></h5>
                                <a href="singl.oglas.php?id=<?php echo $oglas['id'] ?>" class="btn btn-light btn-sm">Vidi oglas</a>
                            </div>
                            <div class="card-footer">
                                <a href="" class="bnt btn-warning btn-sm float-left">
                                    <?php echo $oglas['name'] ?>
                                </a>
                                <a href="" class="bnt btn-danger btn-sm float-right">
                                    <?php echo $oglas['price'] ?>
                                </a>                        
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php" ?>
    
