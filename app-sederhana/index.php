<!DOCTYPE html>
<html>
<head>
    <title>Sistem Aplikasi PHP Sederhana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1 align="center">MUHAMMAD MAKIN - 20231020035 - TYPE A</h1>
    </header>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-11">
                <div class="card shadow-sm my-0">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <?php include "Input_20231020035.php"; ?>
                            </div>
                            <div class="col-lg-8">
                                <?php include "tabel_info.php"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?php include "Output_20231020035.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <center> Created By - Muhammad Makin </center>
    </footer>
</body>
</html>
