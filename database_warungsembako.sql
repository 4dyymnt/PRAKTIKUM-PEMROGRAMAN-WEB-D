CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL
);

INSERT INTO produk (nama_produk, harga, stok) VALUES
('Beras 5kg', 65000, 10),
('Minyak Goreng 1L', 15000, 25),
('Gula Pasir 1kg', 14000, 20);
