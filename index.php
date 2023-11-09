<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Intan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * from `product`;");
                ?>
               <center><h1><b>Data Produk Toko Mama:</b></h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="create.php" onclick="myFunction()"> tambah produk </a> 
                <table id="dataTable" class="table table-striped table-bordered">
                    <thead><tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr></thead>
                   
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["id"] ?> </td>
                            <td> <?php echo $data["name"] ?> </td>
                            <td> <?php echo $data["price"] ?></td>
                            <td> <a href="proses_delete.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete </a> 
                            &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a></td>

                        </tr>
                        <?php } ?>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>