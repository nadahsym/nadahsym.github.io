<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa </title>
    <style>
        body {
            background-color: #1d1f27;
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.9);
        }

        h2 {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 2em;
            color: #ffd700; /* Warna emas */
            letter-spacing: 1.5px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        label {
            font-size: 1.1em;
            margin-bottom: 8px;
            display: block;
            color: #f1f1f1;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ffd700; /* Border emas */
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background: linear-gradient(90deg, #ff9800, #ffd700); /* Gradasi emas/oranye */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            letter-spacing: 1.2px;
            transition: background 0.3s ease;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background: linear-gradient(90deg, #ffd700, #ff9800);
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 215, 0, 0.9); /* Warna emas lebih terang */
            border-radius: 10px;
            color: #1d1f27;
        }

        .result h2 {
            margin-top: 0;
            color: #1d1f27;
            text-align: center;
            text-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Data Mahasiswa</h2>
        <form method="post" action="">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="hobi">Hobi:</label>
            <input type="text" id="hobi" name="hobi">

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $npm = $_POST['npm'];
            $nama = strtoupper($_POST['nama']);
            $alamat = strtoupper($_POST['alamat']);
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $hobi = $_POST['hobi'];

            echo '<div class="result">';
            echo "<h2>Hasil Input:</h2>";
            echo "NPM: " . htmlspecialchars($npm) . "<br>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
            echo "Tempat Lahir: " . htmlspecialchars($tempat_lahir) . "<br>";
            echo "Tanggal Lahir: " . htmlspecialchars($tanggal_lahir) . "<br>";
            echo "Jenis Kelamin: " . htmlspecialchars($jenis_kelamin) . "<br>";
            echo "Hobi: " . htmlspecialchars($hobi) . "<br>";
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
