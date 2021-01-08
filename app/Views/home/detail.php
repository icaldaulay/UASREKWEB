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
        <div class="container-fluid"><a class="navbar-brand" href="#">YOURCAKE!!</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li role="presentation" class="nav-item"></li>
                    <li role="presentation" class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>

<?php echo form_open('/home/cartupdate'); ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h4>Product</h4>
                </div>
                <div class="col-md-7">
                    <h4>Detail</h4>
                </div>
            </div>

            <?php 
                    $i =1;
                    foreach ($cart->contents() as $produk) : ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="<?php echo base_url(); ?>/assets/img/<?= $produk['options']['gambar']; ?>" width="50" height="50" /><input type="text" id="form_name-2" readonly data-error="Vorname erforderlich." name="name" required placeholder="<?= $produk['name'];?>" /></div>
                        <div
                            class="media-body">
                            <h4></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p><span class="h3"><?= $produk['price'];?></span><br /><strong></strong>
                <input name="qty<?= $i++ ?>" min="1" type="number" value="<?= $produk['qty']; ?>">
                </p>
                <p></p>
            </div>
            <div class="col-md-3 text-right">
                <div role="group" class="btn-group"><button class="btn btn-primary" type="submit"><i class="fa fa-pencil"></i> Edit </button><a href="/home/cartdelete/<?= $produk['rowid']; ?>"><button class="btn btn-primary" type="button"><i class="fa fa-trash-o"></i></button></a></div>
            </div>
            
        </div>
        <?php endforeach;?>
        <td> <?= number_to_currency($cart->total(), 'IDR');?></td>
        <!-- <button class="btn btn-primary" type="button" style="margin: 30px;">PROCCED TO BUY</button></div> -->
    </div>
<?php echo form_close(); ?>
    <div id="contact"></div>
    
<form action="/Home/transaksisave" method="post">
<div class="form-group"><br>
                                    <!-- <label for="username">Bank</label><br> -->
                                    <!-- <input type="text" name="username" placeholder="" required class="form-control" /> -->
                                    <SELECT class="form-control">
                                    <option>BNI</option>
                                    <option>BCA</option>
                                    <option>MANDIRI</option>
                                    <option>BRI</option>
                                    <option>CityBank</option>
                                    <option>OCBC</option>
                                    <option>Mandiri Syariah</option>
                                    <option>BTN</option>
                                    </SELECT>
                                </div>
                 <div class="form-group">
                                    <!-- <label for="cardNumber">Alamat</label> -->
                                    <div class="input-group"><input type="text" name="alamat" placeholder="Alamat" class="form-control" required />
                                        <div class="input-group-append"><span class="input-group-text text-muted"><i class="fa fa-cc-visa mx-1"></i><i class="fa fa-cc-amex mx-1"></i><i class="fa fa-cc-mastercard mx-1"></i></span></div>
                                    </div>
                                </div>

    <input type="hidden" name="id_produk" class="form-control" value="<?= $produk['id']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="biaya" class="form-control" value="<?= $cart->total(); ?>" placeholder="Name" readonly>
                <input type="hidden" name="username" class="form-control" value="<?=user()->username; ?>" placeholder="Name" readonly>
                <input type="hidden" name="nama_produk" class="form-control" value="<?= $produk['name']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="qty" class="form-control" value="<?=$produk['qty']; ?>" placeholder="Name" readonly>
                <button class="btn btn-primary" type="submit" style="margin: 30px;">PROCCED TO BUY</button></div>
                </form>
</body>

<!-- </html> -->
</html>