<?php
// index.php

// Include file koneksi.php
include 'koneksi.php';

// Query untuk mendapatkan data dari penjualan_header
$query = "SELECT ph.no_transaksi, ph.tgl_transaksi, ph.customer, ph.total_bayar, ph.ppn, ph.grand_total 
          FROM penjualan_header ph";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<h2>Penjualan Header</h2>";
    echo "<table border='1'>
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Customer</th>
                <th>Total Bayar</th>
                <th>PPN</th>
                <th>Grand Total</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['no_transaksi']}</td>
                <td>{$row['tgl_transaksi']}</td>
                <td>{$row['customer']}</td>
                <td>{$row['total_bayar']}</td>
                <td>{$row['ppn']}</td>
                <td>{$row['grand_total']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}

// Query untuk mendapatkan data dari penjualan_header_detail
$query_detail = "SELECT * FROM penjualan_header_detail";
$result_detail = $conn->query($query_detail);

if ($result_detail->num_rows > 0) {
    echo "<h2>Penjualan Header Detail</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>No Transaksi</th>
                <th>Kode Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Discount</th>
                <th>Subtotal</th>
            </tr>";
    while ($row = $result_detail->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['no_transaksi']}</td>
                <td>{$row['kode_barang']}</td>
                <td>{$row['qty']}</td>
                <td>{$row['harga']}</td>
                <td>{$row['discount']}</td>
                <td>{$row['subtotal']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}

$conn->close();
?>
