<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php
    $username = "admin";
    $password = "123";

    function infoPost($arrayData)
    {
        $info = "<strong>Data</strong><br>";
        foreach ($arrayData as $key => $value) {
            $info .= $key . ":" . $value . "<br>";
        }
        return $info;
    }

    ?>

    <!-- form login -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <form method="post">
                <h4 class="text-center mb-4">Login</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <!-- kode php -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo '<pre>';
                    var_dump($_POST);
                    echo '</pre>';

                    echo infoPost($_POST);

                    if ($_POST['user'] == $username && $_POST['pass'] == $password) {
                        alertLogin("berhasil");
                    } else {
                        alertLogin("gagal");
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


    <?php
    function alertLogin($status)
    {
        if ($status == "berhasil") {
            echo '<div class="alert alert-success " role="alert">'
                . $_POST['user'] . ' Berhasil Login</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">'
                . $_POST['user'] . ' Gagal Login</div>';
        }
    }
    ?>

    <!-- <form action="" method="post">
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" value="login">
    </form> -->


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>

    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.display = "none";
            }
        }, 3000)
    </script>

</body>

</html>