<?php
session_start();

if(!isset($_SESSION["name"]) || empty($_SESSION["name"])){
    header("Location:  index.php");
}
?>

<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <h1>Votre panier : </h1>


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= 46; ?>.jpg" alt="<?= $catalog[46]["name"]; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[46]["name"]; ?> (quantity : <?php if(isset($_COOKIE["Pecan_nuts"])){ echo 1; } else {echo 0;} ?>)</h3>
                        <p><?= $catalog[46]['description']; ?></p>
                    </figcaption>
                </figure>
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= 36; ?>.jpg" alt="<?= $catalog[36]["name"]; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[36]["name"]; ?> (quantity : <?php if(isset($_COOKIE["Chocolate_chips"])){ echo 1; } else {echo 0;} ?>)</h3>
                        <p><?= $catalog[36]['description']; ?></p>
                    </figcaption>
                </figure>
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= 58; ?>.jpg" alt="<?= $catalog[58]["name"]; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[58]["name"]; ?> (quantity : <?php if(isset($_COOKIE["Full_chocolate_cookie"])){ echo 1; } else {echo 0;} ?>)</h3>
                        <p><?= $catalog[58]['description']; ?></p>
                    </figcaption>
                </figure>
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= 32; ?>.jpg" alt="<?= $catalog[32]["name"]; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[32]["name"]; ?> (quantity : <?php if(isset($_COOKIE["MMs_cookie"])){ echo 1; } else {echo 0;} ?>)</h3>
                        <p><?= $catalog[32]['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>