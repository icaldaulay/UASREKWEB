<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>beli1 (2)</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="Bootstrap-4---Payment-Form.css" />
    <link rel="stylesheet" href="Lista-Productos-Canito.css" />
    <link rel="stylesheet" href="PHP-Contact-Form-dark-1.css" />
    <link rel="stylesheet" href="PHP-Contact-Form-dark.css" />
    <link rel="stylesheet" href="Projects-Horizontal.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="User-Payment-Overview-Rows---Panel-Container.css" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">YOURCAKE!!</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo form_open('home/cartadd');
        echo form_hidden('id', $produk['id_produk']);
        echo form_hidden('price', $produk['harga']);
        echo form_hidden('name', $produk['nama_produk']);

        //option
        echo form_hidden('gambar', $produk['gambar']);
        echo form_hidden('ket', $produk['ket']);

        ?>
    <div class="projects-horizontal">
        <div class="container">
            <div class="row d-lg-flex justify-content-lg-center projects">
                <div class="col-sm-6 text-center d-lg-flex justify-content-lg-end align-items-lg-start item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/<?= $produk['gambar']; ?>" style="width: 206px;" /></a></div>
                        <div class="col">
                            <h3 class="name"><?= $produk['nama_produk'];?></h3>
                            <p class="description"><?= $produk['harga'];?></p><button class="btn btn-primary" type="submit" style="margin: 9px;height: 39px;font-size: 12px;">add to chart</button>
                            <p><?= $produk['ket'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</body>

</html>