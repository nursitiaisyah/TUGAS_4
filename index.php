<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body{
      font-family: grenze;
    }

    .btn{
        background: blue;
        color: bl; 
        font-size: 18px;
        border-radius: 10px !important;
        height: 45px;
        width: 525px;
      }

    .card-title{
       font-size: 40px;  
       padding-bottom: 50px;
      }

    img{
        padding-left: 100px;
      }

    </style>

    <title>FORM LOGIN</title>
  </head>
  <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=='gagal'){
    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
    }
  }
  ?>
  <body>
    <form action="cek_login.php" method="post">  
  <section class="vh-100"> 
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="University.jpg "
          class="img-fluid" alt="Phone image "alt="Image" height="150" width="400">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <h1 class="card-title text-center">L O G I N</h1>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" placeholder="Masukkan Username" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" placeholder="Masukkan Password" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

          <div class="divider d-flex align-items-center my-4"></div>
         
        </form>
      </div>
    </div>
  </div>
</section>
  </body>
</html>
  
