<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <link rel="stylesheet" href="../style.default.css" id="theme-stylesheet">

    <title>Praktikum 1</title>

    <!-- Styles-->
    <style>
        .lined::after {
            width: 22.25rem;
        }
    </style>
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-light fixed-top" style="font-weight: bold;">
        <div class="container">
            <a class="navbar-brand" href="../">R</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-3 active">
                    <a class="nav-link" href="../">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Praktikum
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Praktikum 1 - Perhitungan</a>
                        <a class="dropdown-item" href="../prakt2/">Praktikum 2 - CRUD Data</a>
                        <a class="dropdown-item" href="../tugas2/">Tugas - CRUD Data Mahasiswa</a>
                        <a class="dropdown-item" href="../prakt4/">Praktikum 4 - CodeIgniter 4</a>
                        <a class="dropdown-item" href="../prakt5/">Praktikum 5 - CI & Bootstrap</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Praktikum Section -->
    <section class="py-5">
        <div class="container pt-5">
          <a name="praktikum">
            <h2 class="text-lg lined" style="font-weight: bold;">Praktikum 1 - Perhitungan</h2>
          </a>
          <p class="mb-4">Pada pertemuan pertama ini, kami melakukan review materi PHP dengan membuat kalkulator sederhana.</p>
          <div class="row">
            <div class="col-lg-6 mt-3">
                <form action="aritmatika.php">
                    <input type="submit" class="btn btn-outline-primary btn-block" value="Aritmatika"/>
                </form>
            </div>
            <div class="col-lg-6 mt-3">
                <button type="button" class="btn btn-primary btn-block">Akumulasi</button>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <input type="hidden"/>
                  </div>
              <div class="col-lg-6">
                <!-- Form -->
                <form method="GET">
                    <input type="number" name="bil"/>
                    <input type="submit" value="jumlahkan"/>
                    <?php
                        if (isset($_GET['bil'])){
                            if (isset($_GET['bils']))
                                $data = $_GET['bils'];
                            else
                                $data = array();

                            array_push($data, $_GET['bil']);
                            foreach($data as $x)
                                echo '<input type="hidden" name="bils[]" value="'.$x.'"/>';
                            echo "<p>";
                            $sum = 0;
                            foreach($data as $x){
                                echo "$x <br>";
                                $sum += $x; 
                            }
                            echo "----------- + <br> $sum";
                        //print_r($data);
                        }
                    ?>
                </form>
              </div>
            </div>
          </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>