<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Personal Library</h1>
        <div class="table">
            <table>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                </tr>

                <?php
                $link = mysqli_connect('localhost', 'root', '12345678', 'perpustakaan');
                $sql = "SELECT * FROM buku";
                $result = mysqli_query($link, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td>{$data['judul']}</td>
                            <td>{$data['penulis']}</td>
                        </tr>
                        ";
                    }
                }
                ?>
            </table>
        </div>

    </div>
</body>

</html>