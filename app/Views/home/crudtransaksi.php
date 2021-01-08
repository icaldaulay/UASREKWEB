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
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>TRANSAKSI</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Id produk</th>
                            <th>username</th>
                            <th>Status</th>
                            <!-- <th>Catatan</th> -->
                            <th>Biaya</th>
                            <th>qty</th>
                            <th>Tanggal beli</th>
                            
                        </tr>
                    </thead>
                    
                    <?php foreach ($transaksi as $item) : ?>
                        <?= $i=1;?>
<tr>
    <td><?= $i++;; ?></td>
    <td><?= $item['id_produk']; ?></td>
    <td><?= $item['username']; ?></td>
    <td><?= $item['status']; ?></td>
    <td><?= $item['biaya']; ?></td>
    <td><?= $item['qty']; ?></td>
    <td><?= $item['updated_at']; ?></td>
    <td><?= $item['nama_produk']; ?></td>
   
</tr>
<?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>