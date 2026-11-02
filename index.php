
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Kecamatan</title>
</head>
<body>

<h2>Form Input Kecamatan</h2>

<form action="input.php" method="post"
      onsubmit="return validateForm()">

    <label for="kecamatan">Kecamatan:</label><br>
    <input type="text" id="kecamatan" name="kecamatan" required>
    <br><br>

    <label for="longitude">Longitude:</label><br>
    <input type="number" step="any" id="longitude"
           name="longitude" required>
    <br><br>

    <label for="latitude">Latitude:</label><br>
    <input type="number" step="any" id="latitude"
           name="latitude" required>
    <br><br>

    <label for="luas">Luas:</label><br>
    <input type="number" step="any" min="0.01"
           id="luas" name="luas" required>
    <br><br>

    <label for="jumlah_penduduk">Jumlah Penduduk:</label><br>
    <input type="number" min="0" id="jumlah_penduduk"
           name="jumlah_penduduk" required>
    <br><br>

    <button type="submit">Submit</button>
</form>

<p id="informasi"></p>

<script>
function validateForm() {
    const kecamatan = document.getElementById("kecamatan").value.trim();
    const luas = Number(document.getElementById("luas").value);
    const penduduk = Number(
        document.getElementById("jumlah_penduduk").value
    );
    const informasi = document.getElementById("informasi");

    if (kecamatan === "") {
        informasi.textContent = "Nama kecamatan harus diisi.";
        return false;
    }

    if (!Number.isFinite(luas) || luas <= 0) {
        informasi.textContent = "Luas harus lebih besar dari nol.";
        return false;
    }

    if (!Number.isInteger(penduduk) || penduduk < 0) {
        informasi.textContent =
            "Jumlah penduduk harus berupa bilangan bulat nonnegatif.";
        return false;
    }

    return true;
}
</script>

</body>
</html>
