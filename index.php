<?php
session_start();

if(!empty($_GET)){
    switch($_GET["add_to_cart"]){
        case "46":
            setcookie('Pecan_nuts', "1", time() + 60 * 60);
            break;
        case "36":
            setcookie('Chocolate_chips', "1", time() + 60 * 60);
            break;
        case "58":
            setcookie('Full_chocolate_cookie', "1", time() + 60 * 60);
            break;
        case "32":
            setcookie('MMs_cookie', "1", time() + 60 * 60);
            break;

    }
}
?>

<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <form action="" method="GET">
                                <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                                </a>
                            </form>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>