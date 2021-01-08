<!-- <html>

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
        <div class="container-fluid"><a class="navbar-brand" href="#">YOURCAKE!</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="nav-item"><a class="nav-link active d-lg-flex justify-content-lg-start align-items-lg-start" href="#">BERANDA</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">PRODUCTS</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">ABOUT US</a></li>
                </ul>
            </div><button class="btn btn-primary" type="button" style="width: 74px;height: 39px;margin: 3px;">LOGIN</button><button class="btn btn-primary" type="button">REGISTER</button></div>
    </nav> -->
    <section id="beranda">
    <div class="container">
   
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>/assets/img/1 (2).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ANEKA CUPCAKE</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/assets/img/2 (2).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ANEKA KUE ULTAH</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/assets/img/3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ANEKA KUE NIKAH</h5>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</div>
</div>
    </section>
    <section id="produk"> 
   
    <div style="margin: 21px;">
        <div class="container">
            <div class="row">
            
            <?php foreach ($produk as $item):?>
                <div class="col-md-6">
                    <div class="card">
                    <a href="/home/Detailproduk/<?= $item['id_produk'];  ?>"> <img class="card-img-top w-100 d-block" src="<?php echo base_url(); ?>/assets/img/<?= $item['gambar']; ?>" style="height: 399px;" /></a>
                        <div class="card-body">
                            <h4 class="card-title"><?= $item['nama_produk']; ?></h4>
                            <p class="card-text"><br /><?= $item['ket']; ?><br>
                            <p class="card-text"><br /><?= $item['harga']; ?><br
                                /><br /></p>
                                <form action="/home/transaksisave" method="post">
                                <input type="hidden" name="id_produk" class="form-control" value="<?= $item['id_produk']; ?>" placeholder="Name" readonly>
                <input type="hidden" name="nama_produk" class="form-control" value="<?= $item['nama_produk']; ?>" placeholder="Name" readonly>>

              <!-- <input type="number" name="qty" min="1" max="100" > -->
                                <!-- <form action="/home/"> -->
                                <button class="btn btn-primary" type="submit" disabled></button></div>
                                <!-- </form> -->
                                </form>
                    </div>
                </div>
                <?php endforeach;?>
               
            </div>
           
        </div>
    </div>
    <?php echo form_close(); ?>
    </section>
  

    
    <section id="aboutus">
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">ABOUT US</h2>
                <p class="text-center"> </p>
            </div>
            <div class="row d-lg-flex justify-content-lg-center align-items-lg-start people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="<?php echo base_url(); ?>/assets/img/image0.jpg" style="margin: 18px;" />
                        <h3 class="name">M. MIKHAIL B. Daulay</h3>
                        <p class="title">Student </p>
                        <p class="description"><br />(Jika kamu mencoba membuat perusahaan, itu seperti memanggang kue. Kamu harus memiliki semua bahan dengan proporsi yang tepat.)<br /><br /></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img src="<?php echo base_url(); ?>/assets/img/1592810102015.jpg" />
                        <h3 class="name">Rully Nur Taufan</h3>
                        <p class="title">Student</p>
                        <p class="description"><br />(Hidup adalah kue dan cinta adalah lapisan gula di atasnya. Tanpa cinta, menjadi sulit untuk menelan kehidupan.)<br /><br /></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-clean"></div>

    </section>

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

