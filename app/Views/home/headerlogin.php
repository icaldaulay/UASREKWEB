<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Dashboard - Brand</title>
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Map-Clean.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Team-Boxed.css');?>" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="/home/admin">YOURCAKE!!</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center"
                id="navcol-1">
                <ul class="nav navbar-nav">
                <li role="presentation" class="nav-item"><a class="nav-link" href="/home/crudproduk">Produk</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="/home/cruduser">User</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="/home/crudtransaksi">Transaksi</a></li>
                </ul>
                  
            </div>
            <?php if (logged_in()) : ?>
                <a class="btn btn-primary" type="input" href="/login" style="width: 74px;height: 39px;margin: 3px;"><?= user()->username; ?></a><a class="btn btn-primary" type="input" href="/logout">logout</a></div>
            <?php else : ?>  
        <a class="btn btn-primary" type="input" href="/login" style="width: 74px;height: 39px;margin: 3px;">LOGIN</a>></div>
        <?php endif; ?>
        
    </nav>
</body>
</html>