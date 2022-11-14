<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Perpustakaan</title>
  <style>
    .navbar{
      font-size: 20px;
     
    }
    .nav-item{
      font-family: sans-serif;

    }
    .d-flex{
      padding-top: 10px;
      padding-right: 20px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <img src="Logopit_1668146504141.png "
          class="img-fluid" alt="Phone image "alt="Image" height="100s" width="190" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datamahasiswa.php">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datadosen.php">Data Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="jurusan.php">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="matakuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="jadwalkuliah.php">Jadwal Kuliah</a>
        </li> 
        <i class="fa-solid fa-trash-can"></i>
      </ul>
      <form class="d-flex" role="search"> 
        <a href="../logout.php" ><i class="fa fa-sign-out "  style="color:black" aria-hidden="true"></i></a>
      </form>
    </div>
  </div>
</nav>
</body>
</html>