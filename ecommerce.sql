-- Buat Database
CREATE DATABASE ecommerce;

-- Pilih Database
USE ecommerce;

-- Buat Tabel `penjualan_header`
CREATE TABLE penjualan_header (
    no_transaksi VARCHAR(50) PRIMARY KEY,
    tgl_transaksi DATE,
    customer VARCHAR(100),
    kode_promo VARCHAR(50),
    total_bayar INT,
    ppn INT,
    grand_total INT
);

-- Insert contoh data ke `penjualan_header`
INSERT INTO penjualan_header VALUES
('202312-001', '2023-12-23', 'Michael', 'promo-001', 10000, 1100, 11100);

-- Buat Tabel `penjualan_header_detail`
CREATE TABLE penjualan_header_detail (
    id INT PRIMARY KEY AUTO_INCREMENT,
    no_transaksi VARCHAR(50),
    kode_barang VARCHAR(50),
    qty INT,
    harga INT,
    discount INT,
    subtotal INT,
    FOREIGN KEY (no_transaksi) REFERENCES penjualan_header(no_transaksi)
);

-- Insert contoh data ke `penjualan_header_detail`
INSERT INTO penjualan_header_detail (no_transaksi, kode_barang, qty, harga, discount, subtotal) VALUES
('202312-001', '001', 1, 5000, 0, 5000),
('202312-001', '003', 2, 3000, 3000, 5000),
('202312-001', '004', 1, 3000, 0, 3000);

-- Buat Tabel `master_barang`
CREATE TABLE master_barang (
    kode_barang VARCHAR(50) PRIMARY KEY,
    nama_barang VARCHAR(100),
    harga INT
);

-- Insert contoh data ke `master_barang`
INSERT INTO master_barang VALUES
('001', 'Skin Care', 5000),
('002', 'Body Care', 4000),
('003', 'Facial Care', 3000),
('004', 'Hair Care', 2000);

-- Buat Tabel `promo`
CREATE TABLE promo (
    kode_promo VARCHAR(50) PRIMARY KEY,
    nama_promo VARCHAR(100),
    keterangan TEXT
);

-- Insert contoh data ke `promo`
INSERT INTO promo VALUES
('promo-001', 'promo facial care', 'setiap pembelian Facial Care sejumlah 2 pcs akan mendapat potongan harga 3000');
