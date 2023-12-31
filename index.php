<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'perpustakaan');
if (isset($_POST['simpan'])) {
    $id = $_POST['id-buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    mysqli_query($link, "INSERT INTO `buku` (`id`, `judul`, `penulis`) VALUES ('$id', '$judul', '$penulis')");
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id-buku'];
    mysqli_query($link, "DELETE FROM `buku` WHERE id='$id'");
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Personal Library</h1>
        <div class="content">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Writer</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM buku";
                    $result = mysqli_query($link, $sql);
                    if ($result) {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                        <tr>
                            <td>{$data['id']}</td>
                            <td>{$data['judul']}</td>
                            <td>{$data['penulis']}</td>
                        </tr>
                        ";
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="tambah-buku">
                <form action='index.php' method='POST'>
                    <table>
                        <tr>
                            <td>ID</td>
                            <td><input type='text' name='id-buku'></td>
                        </tr>
                        <tr>
                            <td colspan='2'><input type='submit' name='hapus' value='Delete'></td>
                        </tr>
                    </table>
                </form>
                <form action='index.php' method='POST'>
                    <table>
                        <tr>
                            <td>ID</td>
                            <td><input type='text' name='id-buku'></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td><input type='text' name='judul'></td>
                        </tr>
                        <tr>
                            <td>Writer</td>
                            <td><input type='text' name='penulis'></td>
                        </tr>
                        <tr>
                            <td colspan='2'><input type='submit' name='simpan' value='Save'></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>
</body>

</html>