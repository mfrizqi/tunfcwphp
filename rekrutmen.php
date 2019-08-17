<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:,400,500,600,700,800">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>TUNFC - Telkom University National Futsal Competition</title>
</head>

<body>

 <!-- Menu For Mobile -->
 <div class="hide menublock" id="FullMenu">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-end mt-1">
                        <div class="col-2">
                            <div class="closebtn" id="CloseBtn">
                                <div class="closeMe"></div>
                            </div>
                        </div>
                    </div>
                    <h1 class="text-white menutitle text-right bold">TUNFC</h1>
                    <div class="menulink">
                        <nav class="nav flex-column text-right">
                            <a class="nav-link semibold" href="index.php">Beranda</a>
                            <a class="nav-link semibold" href="#">Artikel</a>
                            <a class="nav-link semibold" href="rekrutmen.php">Rekrutmen</a>
                        </nav>
                    </div>
                </div>
                <div class="col-11">
                    <div class="fixed-bottom mb-5">
                    <div class="d-flex justify-content-center">
                        <div>
                            <a class="nav-link" href="#"><img src="assets/ig.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/line.svg" alt="" width="24px"
                                    height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/tw.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/fb.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/yt.svg" alt="" height="28px"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Navbar -->
    <div class="row justify-content-center p-0 mt-4 mx-1">
        <div class="col-12 col-md-8 text-center p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand ml-4 ml-md-0 extrabold" href="#"">TUNFC</a>
                <div class=" navbar-toggler mr-4 mr-md-0 burgericon border-0" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="row">
                        <div class="col">
                            <div id="ToMenu">
                                <div id="rectangle1"></div>
                                <div id="rectangle2"></div>
                                <div id="rectangle3"></div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link semibold" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link semibold" href="#">Artikel</a>
                <a class="nav-item nav-link active semibold" href="rekrutmen.php">Rekrutmen</a>
            </div>
        </div>
        </nav>
    </div>
    </div>

    <!-- Content -->
        <div class="container-fluid">
            <!-- Header Section -->
            <div class="row justify-content-center">
                <div class="col-10 col-md-5">
                    <div class="formheader mt-5">
                        <h1 class="extrabold">Rekrutmen</h1>
                        <p class="medium">Rekrutmen panitia Telkom University National Futsal Championship untuk tahun angkatan 2017, 2018, 2019
                        </p>
                        
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="row justify-content-center my-4">
                <div class="col-10 col-md-5">
                    <form>
                        <div class="form-group mb-4">
                          <label for="Nama">Nama</label>
                          <input type="text" class="form-control" id="Nama" required>
                        </div>
                        <div class="form-group mb-4">
                          <label for="NIM">NIM</label>
                          <input type="text" class="form-control" id="NIM" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="Fakultas">Fakultas <br/> <span class="text-muted">Contoh : Fakultas Teknik Industri</span></label>
                            <input type="text" class="form-control" id="Fakultas" required>
                          </div>
                          <div class="form-group mb-4">
                            <label for="Jurusan">Jurusan <br/> <span class="text-muted">Contoh : S1 Informatika</span> </label>
                            <input type="text" class="form-control" id="Jurusan" required>
                          </div>
                          <div class="form-group">
                                <label for="Foto34">Upload Foto 3x4 (Background merah)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Pilih File</label>
                              </div>
                          </div>
                          <div class="row mt-5 mb-4 justify-content-end">
                              <div class="col-12 col-md-4">
                                    <button type="submit" class="btn btn-dark w-100">I'm Ready</button>
                              </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <div class="row pb-4 pt-5 px-3 px-md-0 m-0 footer justify-content-center">
        <div class="col-12 col-md-8">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h3 class="bold">TUNFC</h3>
                    <p>Telkom University National <br />Futsal Championship</p>
                </div>
                <div class="col-4 p-0 m-0">
                    <ul class="nav flex-column text-right">
                        <li class="nav-item">
                            <a class="nav-link semibold" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link semibold" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link semibold" href="rekrutmen.html">Rekrutmen</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 my-3">
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <div>
                            <a class="nav-link" href="#"><img src="assets/ig.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/line.svg" alt="" width="24px"
                                    height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/tw.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/fb.svg" alt="" width="24px" height="24px"></a>
                        </div>
                        <div>
                            <a class="nav-link" href="#"><img src="assets/yt.svg" alt="" height="28px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="javascript/script.js"></script>

    <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
    </script>
</body>

</html>