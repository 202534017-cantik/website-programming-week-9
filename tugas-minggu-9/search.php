<?php
$query = trim($_GET["query"] ?? "");

$barang = [
    "Laptop",
    "Remot",
    "Meja",
    "Printer",
    "TV"
];

$hasil = [];

if ($query !== "") {
    foreach ($barang as $nama) {
        if (stripos($nama, $query) !== false) {
            $hasil[] = $nama;
        }
    }
}
?>

<form method="get">
    <label for="query">Kata kunci</label>
    <input type="text" id="query" name="query" value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>">
    <button type="submit">Cari</button>
</form>

<?php if ($query !== ""): ?>
    <h3>Hasil Pencarian:</h3>

    <?php if (count($hasil) > 0): ?>
        <ul>
            <?php foreach ($hasil as $nama): ?>
                <li><?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Barang tidak ditemukan.</p>
    <?php endif; ?>
<?php endif; ?>