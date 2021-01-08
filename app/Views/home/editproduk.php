<head>
    <meta charset="utf-8">
    <!-- <tit</title> -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://font.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%22%3E
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="Q2lQyoqg"></script>
</head>

<body>  
  <div class="container">
        <center>
            <h1>EDIT PRODUK</h1><br />
            <a href="/home/crudproduk"><button class="btn btn-dark">EDIT PRODUK</button></a><br /><br />
        </center>
        <form action="/Home/itemsupdate/<?= $items['id_produk'];  ?>" method="post">
            <?= csrf_field(); ?>
            <label for="nama_produk">Nama : </label><br />
            <input class="form-control" type="text" name="nama_produk" id="nama_produk" placeholder="NAMA" value="<?= $items['nama_produk'];  ?>" required autofocus><br />
            <label for="harga">Harga : </label><br />
            <input class="form-control" type="number" name="harga" id="harga" placeholder="Harga Barang" value="<?= $items['harga'];  ?>" required><br />
            <label for="ket">keterangan : </label><br />
            <input class="form-control" type="text" name="ket" id="ket" placeholder="warna Barang" value="<?= $items['ket'];  ?>" required><br />
            <label for="gambar">gambar </label>
            <input class="form-control" type="text" name="gambar" id="gambar" placeholder="size Barang" value="<?= $items['gambar'];  ?>" required><br />
            <input type="submit" class="btn btn-success float-right color-black" value="Submit"><br><br><br><br><br><br><br>
        </form>
    </div>

    </body>

</html>