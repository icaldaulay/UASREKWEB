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
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">HISTORY</h1>
    <div>
        <div class="container">
            <div class="row">
                <div class="col"><i class="fa fa-search"></i><input type="search" /></div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 60px;">No</th>
                    <th style="width: 185px;">Nama Barang</th>
                    <th style="width: 50px;">QTY</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($transaksi as $item) : ?>
                        <?= $i=1;?>
<tr>
    <td><?= $i++;; ?></td>
    <td><?= $item['nama_produk']; ?></td>
    <td><?= $item['qty']; ?></td>
    <td><?= $item['biaya']; ?></td>
    <td><?= $item['status']; ?></td>    
    <td><?= $item['updated_at']; ?></td>
    <td><button class="btn btn-primary" type="button"><i class="fa fa-trash"></i></button><button class="btn btn-primary" type="button"><i class="fa fa-edit"></i></button></td>
    
</tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>