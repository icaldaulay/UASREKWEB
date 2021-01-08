<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Dashboard - Brand</title>
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Login-Form-Clean.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Map-Clean.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Registration-Form-with-Photo.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Team-Boxed.css');?>" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>

<body id="page-top">
<?php if (session()->getFlashdata('pesan')) : ?> <div class="alert alert-succes alert-dismissible fade show" role="alert">      <?= (session()->getFlashdata('pesan')); ?>   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>PRODUK</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Keterangan Produk</th>
                            <th>Gambar</th>
                            <th>edit</th>
                            <th>tambah</th>
                            <th>hapus</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($produk as $item) : ?>

                        <tr>
                            <td><?= $item['id_produk']; ?></td>
                            <td><?= $item['nama_produk']; ?></td>
                            <td><?= $item['harga']; ?></td>
                            <td><?= $item['ket']; ?></td>
                            <td><?= $item['gambar']; ?></td>
                            <td> <a href="/home/itemsedit/<?= $item['id_produk'];  ?> "><i class="fa fa-edit ml-3x"></i></a></td>
                            <td><a href="/home/itemscreate"><i class="fas fa-plus-square"></i></a><td>
                            <td><a href="/home/deleteproduk/<?= $item['id_produk']; ?>"><i class="fa fa-trash ml-3x"></i></a></td>
                            
                        </tr>
                        <?php endforeach; ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
