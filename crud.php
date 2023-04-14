<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<header class="p-3 text-white sticky-top" style="background-color: rgb(216, 214, 214);">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use src="assets/img/logo.png"/></svg> -->
              <img class="bi me-2" width="150" height="40" role="img" aria-label="Bootstrap" src="assets/img/logo.png" alt="">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.html" class="nav-link px-2 text-dark">Beranda</a></li>
              <li><a href="desa_wisata.html" class="nav-link px-2 text-secondary">Desa Wisata</a></li>
              <li><a href="list_akomodasi.html" class="nav-link px-2 text-dark">List Akomodasi</a></li>
              <li><a href="saran.php" class="nav-link px-2 text-dark">Saran Dan Masukan</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
          </div>
        </div>
</header>
<main style="min-height: 100vh;">
    <div class="mt-3">
    <table class="table" style="max-width: 50vw; margin: auto ;" >
    <?php
        include "dbcon.php";
        $query = "SELECT * FROM guest";
        $db = $conn->query($query);
     ?>
  <thead>
    <tr>
      <th scope="col">nama</th>
      <th scope="col">nomor</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <?php while(  $data = mysqli_fetch_assoc($db)){  ?>
    <tbody>
    <tr>
        <td><?php echo $data["nama"]; ?></td>
        <td><?php echo $data["nomor"]; ?></td>
        <td><?php echo $data["addres"]; ?></td>
    </tr>
  </tbody>
    <?php }?>
  
</table>
    </div>
    
</main>

 <footer class="py-3 bg-dark sticky-bottom">
          <div class="container">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
              </ul>
              <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
            </div>
  </footer>
</body>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>