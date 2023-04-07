--pekerja
INSERT INTO `pekerja` (`idPekerja`, `kataLaluan`, `namaPekerja`, `noTelefonPekerja`) VALUES
('lin123', 'test123', 'jeremy', '0111111112');

--alamat
INSERT INTO `alamat` (`namaPelanggan`, `alamat`, `poskod`, `negeri`, `noRumah`) VALUES
('julia', 'Bermuda condominium', '19860', 'pulau pinang', '45a-39-3');

--pelanggan
INSERT INTO `pelanggan` (`icPelanggan`, `noTelefonPelanggan`, `namaPelanggan`) VALUES
('000205040378', '0164538578', 'julia');

--kereta
INSERT INTO `kereta` (`noPlat`, `modelKereta`, `tahunDibuat`, `harga`) VALUES
('QWE1762', 'mercedes benz e350 amg', '2018', 450000),

--jualan
INSERT INTO `jualan` (`idjualan`, `tarikhJualan`, `idPekerja`, `noPlat`, `icPelanggan`) VALUES
(1, '2020-01-01', 'lim123', 'QWE1762', '000205040378');



SELECT *
FROM kereta
INNER JOIN jualan
on jualan.noPlat = kereta.noPlat
where month(tarikhJualan)=$bulan; 




