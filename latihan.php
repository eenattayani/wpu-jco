<?php
    $data = file_get_contents('data/jco.json');
    $menu = json_decode($data, true); //jadikan array associative

    $menu = $menu["menu"];
    // echo $menu[0]["harga"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="36x36" href="https://order.jcodelivery.com/assets/img/logo/apple-logo/apple-icon-36x36.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://order.jcodelivery.com/assets/img/logo/apple-logo/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://order.jcodelivery.com/assets/img/logo/apple-logo/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://order.jcodelivery.com/assets/img/logo/apple-logo/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://order.jcodelivery.com/assets/img/logo/apple-logo/apple-icon-180x180.png">
    <link rel="icon" type="image/png" href="https://order.jcodelivery.com/assets/img/logo/jco-logo1.png">

    <title>WPU JCo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.html">Home(JS version)</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach($menu as $row) : ?>
            <div class="col-md-4">
              <div class="card  mb-3" style="width: 18rem;">
                <img src="img/<?= $row["gambar"];  ?>" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                    <p class="card-text">
                        <?php echo "varian: "; 
                            if($row["varian"]) {
                                foreach($row["varian"] as $varian) : ?>
                                    <a href="#" class="btn btn-warning">
                                        <?= $varian . "  "; ?>
                                    </a>
                                <?php endforeach;
                            } else {
                                echo "hanya tersedia 1 varian";
                            }
                        ?>
                    </p>
                    <p class="card-text">
                        <?php echo "ukuran: ";
                            if($row["ukuran"]){
                                foreach($row["ukuran"] as $ukuran) : ?>
                                    <a href="#" class="btn btn-success">
                                        <?= $ukuran . "  "; ?>
                                    </a>
                                <?php endforeach;
                            } else {
                                echo "hanya tersedia 1 ukuran";
                            }
                        ?>
                    </p>
                    <h5 class="card-title">Harga: <?= $row["harga"]; ?></h5>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>    
        </div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>