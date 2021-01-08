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
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="user-photo3.jpg" width="50" height="50" /><input type="text" id="form_name-2" data-error="Vorname erforderlich." name="name" required placeholder="Bitte Tragen Sie Ihren Vornamen ein *" /></div>
                        <div
                            class="media-body">
                            <h4></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p><span class="h3">$100 </span><br /><strong></strong><input type="number" /></p>
                <p></p>
            </div>
            <div class="col-md-3 text-right">
                <div role="group" class="btn-group"><button class="btn btn-primary" type="button"><i class="fa fa-pencil"></i> Edit </button><button class="btn btn-primary" type="button"><i class="fa fa-trash-o"></i></button></div>
            </div>
        </div><button class="btn btn-primary" type="button" style="margin: 30px;">PROCCED TO BUY</button></div>
    </div>


    <form action="/Home/transaksisave" method="post">
    <input type="hidden" name="id_produk" class="form-control" value="<?= produk['id']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="biaya" class="form-control" value="<?= $cart->total(); ?>" placeholder="Name" readonly>
                <input type="hidden" name="nama_produk" class="form-control" value="<?= produk['name']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="qty" class="form-control" value="<?= produk['qty']; ?>" placeholder="Name" readonly>
                </form>

    <div id="contact"></div>

</body>

</html>