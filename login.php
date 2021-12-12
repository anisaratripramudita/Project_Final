<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css" />
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidbar -->
        <!-- Sidbar -->
        <div class="sidebar" style="background-color: #A9BA9D;" id="sidebar-wrapper">
            <div class="sidebar-heading text-left py-4 pb-lg-5 fw-bold border-bottom">
                <h5>
                    <p>1% better every day.</p>
                </h5>
                <h5>
                    <p>Build your habit,</p>
                </h5>
                <h5>
                    <p>build your life.</p>
                </h5>
            </div>
            <div class="sidebar-footer py-xl-5 mb-4 mt-lg-5">
                <img src="images/study.png" style="width: 15rem;" alt="">
            </div>
        </div>
        <!-- Akhir Sidebar -->
        <!-- Akhir Sidebar -->
        <!-- Isi Konten -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <a href="#">Log-in</a>
                        <a href="#">Help</a>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h2>Creat the Daily Motivations</h2>
                <div class="row">
                    <div class="col-6">
                        <form class="mt-4">
                            <div class="mb-3">
                                <label class="form-label">
                                    <h6>Title</h6>
                                </label>
                                <input type="text" class="form-control" style="background-color: #A9BA9D;">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    <h6>Content</h6>
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="background-color: #A9BA9D;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    <h6>Credit</h6>
                                </label>
                                <input type="text" class="form-control" style="background-color: #A9BA9D;">
                            </div>
                            <button type="submit" class="btn btn-danger mt-5">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Akhir Isi Konten -->
        </div>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="JavaScript/chart-pie-demo.js"></script>
</body>

</html>