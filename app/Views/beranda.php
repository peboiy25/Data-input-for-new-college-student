<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PMB_0138</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Penerimaan Mahasiswa Baru</a>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- FORM -->
    <br>
    <div class="container">
        <h2>INPUT DATA MAHASISWA</h2>
        <hr>
        <div class="row">
            <div class="col">
                <form action="/simpan" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan NIM" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Program Studi" name="program_studi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konsentrasi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Konsentrasi" name="konsentrasi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="col">
                <table class="table table-responsive table-bordered border-primary table-hover">
                    <tr align="center">
                        <th class="table-dark" scope="col">NIM</th>
                        <th class="table-dark" scope="col">Nama</th>
                        <th class="table-dark" scope="col">Program Studi</th>
                        <th class="table-dark" scope="col">Konsentrasi</th>
                    </tr>
                    <tb>
                        <?php foreach ($Mahasiswa as $mhs):?>
                        <tr>
                            <th scope="row"><?php echo $mhs['NIM']?></th>
                            <td scope="row"><?php echo $mhs['Nama']?></td>
                            <td scope="row"><?php echo $mhs['Program_Studi']?></td>
                            <td scope="row"><?php echo $mhs['Konsentrasi']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tb>
                </table>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>