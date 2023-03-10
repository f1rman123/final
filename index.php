<?php 
include("koneksi.php");

$fetchProduk = $conn->query("select * from produk");
$arrBarang = $fetchProduk->fetch_all(MYSQLI_BOTH);
$selectedID = -1;
if(isset($_GET['changeModal'])){
  $selectedID = $_GET['changeModal'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="style.css">


    <title>TRIFTING </title>
  </head>
  <body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top " id="mainNav">
        <div class="container">
        <img src="trifting/logo.jpeg" alt="" class="navbar-brand font-weight-bold text-white" style="height:50px;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger text-white " href="#jumbotron">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="#prodak">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="#footer">Hubungi Kami</a>
            </li>
              <li>
                <!-- <i class="fa-brands fa-youtube ml-2 mt-2"></i>
                <i class="fa-brands fa-facebook ml-2 mt-2"></i>  -->
                <i class="fa-solid fa-magnifying-glass text-white ml-2 mt-2"></i>
                <i class="fa-regular fa-pickaxe"></i>
              </li>
          </ul>
        </div>
    </div>
      </nav>
      <!-- Akhir Navbar -->

        <!-- jumbotron -->

        <div class="jumbotron" id="jumbotron">
            <div class="container">
              <h1 class="display-4">Selamat Datang <br><span class="font-weight-bold"> Di Toko Kami</span></h1>
              <hr class="my-4">
              <p class="lead">Selamat Berbelanja</p>
              <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">Belanja</a>
            </div>
          </div>
    
          <!-- akhir jumbotron -->
          <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4>PRODUK TERBARU</h4>
                </div>
            </div>


        <!-- CARD -->
        <div class="container row" id="prodak">
            <?php 
                foreach($arrBarang as $x){
            ?>
            <div class="col-4 mt-3 ">
                <div class="card">
                    <img src="<?php echo $x['produk_img'];?>" class="card-img-top" alt="..."style="height:300px;object-fit:contain;">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $x['produk_nama'];?></h5>
                      <p class="card-text"><?php echo $x['produk_deskripsi'];?></p>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i> <br>
                      <!-- data-toggle="modal" data-target="#exampleModal" -->
                      <button class="btn btn-primary " onclick="window.location.href='detail.php?changeModal=<?php echo $x['produk_id'];?>'">Detail</button>
                      <a href="#" class="btn btn-danger ">Rp <?php echo number_format($x['produk_harga']);?></a>
                    </div>
                  </div>
            </div>
            <?php }?>
            
        </div>

         <!-- AKHIR CARD -->

        
         
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="<?php echo $selectedID != -1 ? "false": "true";?>">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"> &times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                      <img src="trifting/foto.jpg" >
                  </div>
                  <div class="col-md-6">
                      <table class="table table-borderless">
                          <tr>
                              <th>Nama Produk</th>
                              <td>Trifting Baju</td>
                          </tr>
                          <tr>
                              <th>Ukuran</th>
                              <td> M </td>
                          </tr>
                          <tr>
                              <th>Ongkir</th>
                              <td>Gratis</td>
                          </tr>
                          <tr>
                              <th>Rating Prodak</th>
                              <td> 
                              <i class="fas fa-star text-success"></i>
                              <i class="fas fa-star text-success"></i>
                              <i class="fas fa-star text-success"></i>
                              <i class="fas fa-star-half-alt text-success"></i>
                              <i class="far fa-star text-success"></i><br>
                              </td>
                          </tr>
                          <tr>
                              <th>Stok Prodak</th>
                              <td> 2 pcs</td>
                          </tr>
                          <tr>
                              <th>Harga</th>
                              <td>Rp. 30.000</td>
                          </tr>
                      </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">BELI</button>
              </div>
            </div>
          </div>
        </div>
      </div>




        <!-- FOOTER -->
         <footer class="bg-dark text-white p-5 mt-3 " id="footer">
            <div class="row">
                <div class="col-md-2">
                  </div>
                <div class="col-md-4">
                  <H5>MITRA KERJASAMA</H5>
                  <ul style="list-style-type:none;">
                      <li><i class="fa-solid fa-cart-shopping mr-2"></i>SHOPPY</li>
                      <li><i class="fa-brands fa-tiktok mr-2"></i></i>TIKTIOK</li>
                  </ul>
                  </div>
                <div class="col-md-4">
                  <h5>HUBUNGI KAMI</h5>
                  <ul style="list-style-type:none;">
                      <li><i class="fa-solid fa-location-dot mr-2"></i></i>Nipah Mall 
                        Jalan Urip Sumoharjo
                      </li>
                      <li><i class="fa-solid fa-phone mr-2"></i></i>+6288242220446</li>
                      <li><i class="fa-solid fa-envelope mr-2"></i>firman@kallabs.ac.id</li>
                  </ul>
                </div>
 
            </div>
          </footer>
      </div>
        <div class="copyright text-center text-white bg-dark p-2">
          <p>ITB Kalla <i class="far fa-copyright"> 2023</i></p>
        </div>   




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   
  </body>
</html>