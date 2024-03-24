<?php
// cek apakah tombol submit ssudah di tekan atau belum
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .gradient-custom {
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-4 mt-md-4 pb-1">

                            <form action="" method="post">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-2">Please enter your login and password!</p>
                                <?php if (isset($error)) : ?>
                                    <p class="text-warning">Incorrect Username / Password!</p>
                                <?php endif; ?>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label d-flex" for="typeTextX">Username</label>
                                    <input type="text" id="typeTextX" class="form-control form-control-lg" name="username" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label d-flex" for="typePasswordX">Password</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5 mt-3" type="submit" name="submit">Login</button>
                            </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>