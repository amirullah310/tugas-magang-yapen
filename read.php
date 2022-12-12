<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-12">
        <div class="row">
            <div class="col-md-12">

            <h2>Tabel User</h2>
            <div class="alert alert-info">TABEL DATA USER</div>
            <a href="form.php" class="btn btn-success btn-block">Tambah Data</a>
            <table width="100%" border="1" class="table table-bordered table striped">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>eksekusi</th>

                </tr>
            </div>
            <?php
            include "koneksi.php";
            $sql = mysqli_query($conn,"select * form users");
            $no=1;
            while($row=mysqli_fetch_array($sql)){
                ?>

                <tr>
                    <td align="center"><?php echo $no; ?></td>
                    <td align="center"><?php echo $row['name'] ?></td>
                    <td align="center"><?php echo $row['username'] ?></td>
                    <td align="center"><?php echo $row['password'] ?></td>
                    <td align="center"><?php echo $row['email'] ?></td>

                    <td align="center">
                        <a href="edit.php?id=<?php echo $row['id'];?>"class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>"class="btn btn-success">Hapus</a>
                     
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
            </table>
    
</body>
</html>