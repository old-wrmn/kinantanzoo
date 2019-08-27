-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 01:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinantan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangunan`
--

CREATE TABLE `bangunan` (
  `bangunanid` int(11) NOT NULL,
  `tipeid` int(11) DEFAULT NULL,
  `bangunanlat` varchar(20) DEFAULT NULL,
  `bangunanlong` varchar(20) DEFAULT NULL,
  `bangunangambar` varchar(100) NOT NULL,
  `bangunanketerangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bangunan`
--

INSERT INTO `bangunan` (`bangunanid`, `tipeid`, `bangunanlat`, `bangunanlong`, `bangunangambar`, `bangunanketerangan`) VALUES
(1, 1, '100.3695', '-0.3002', 'harimau.jpg', 'kandang harimau'),
(2, 1, '100.36967', '-0.29979', 'beruang.jpg', 'kandang beruang madu'),
(3, 1, '100.3697', '-0.3001', 'rusasambaar.jpg', 'kandang rusa air'),
(4, 1, '100.3694', '-0.30145', 'tapir.jpg', 'kandang tapir'),
(5, 1, '100.36951', '-0.30131', 'rusa.jpg', 'kandang rusa'),
(6, 1, '100.3698', '-0.30043', 'singa.jpg', 'kandang singa'),
(7, 1, '100.3696', '-0.3005', 'binturong.jpg', 'kandang binturong'),
(8, 1, '100.36935', '-0.30102', 'zebra.jpg', 'kandang zebra'),
(9, 1, '100.3691', '-0.30098', 'gajah.jpg', 'kandang gajah'),
(10, 1, '100.36968', '-0.29995', 'harimau.jpg', 'kandang harimau'),
(11, 1, '100.36944', '-0.29996', 'burungkasuari.jpg', 'kandang burung kasuari'),
(12, 1, '100.37006', '-0.30018', 'landak.jpg', 'kandang landak'),
(13, 1, '100.36992', '-0.2999599874', 'siamang.jpg', 'kandang siamang'),
(14, 1, '100.37013', '-0.30038', 'merakbiru.jpg', 'kandang merak biru'),
(15, 1, '100.37035', '-0.30045', 'buaya.jpg', 'kandang buaya'),
(16, 2, '100.36972', '-0.30053', 'toilet.jpg', 'toilet umum'),
(17, 2, '100.37003', '-0.30034', 'toilet.jpg', 'toilet umum'),
(18, 2, '100.37016', '-0.30072', 'musholla.jpg', 'musholla'),
(19, 2, '100.37008', '-0.3008', 'tempatduduk.jpg', 'tempat duduk'),
(20, 2, '100.36996', '-0.30018', 'tempatdudukgantung.jpg', 'tempat duduk gantung'),
(21, 3, '100.3705', '-0.30074', 'zoologi.jpg', 'museum zoologi'),
(22, 3, '100.3705', '-0.3006', 'aquarium.jpg', 'aquarium'),
(23, 3, '100.36958', '-0.3007', 'rumahadat.jpg', 'rumah adat'),
(24, 1, '100.36993', '-0.29985', 'harimaudahan.jpg', 'kandang harimau dahan'),
(25, 1, '100.36991', '-0.30006', 'orangutan.jpg', 'kandang orang utan'),
(26, 1, '100.37001', '-0.30003', 'macandahan.jpg', 'kandang macan dahan'),
(27, 1, '100.37035', '-0.30035', 'kurakurasawah.jpg', 'kandang kura-kura sawah'),
(28, 1, '100.37022', '0.30029', 'kancil.jpg', 'kandang kancil'),
(29, 2, '100.36976', '-0.30095', '', 'kolam ikan');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `beritaid` int(11) NOT NULL,
  `pegawainomorinduk` bigint(20) DEFAULT NULL,
  `beritajudul` varchar(100) DEFAULT NULL,
  `beritaisi` text,
  `beritatanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `beritagambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaid`, `pegawainomorinduk`, `beritajudul`, `beritaisi`, `beritatanggal`, `beritagambar`) VALUES
(1, 196506081990011001, 'bayi harimau mati karena kembung', 'Bukittinggi - Bayi harimau Sumatera yang mati di Kebun Binatang Kinantan Bukittinggi, Sumatera Barat, sudah dikuburkan. Pemeriksaan sementara, harimau itu mati akibat perut kembung.<br>\"Satwa sudah dikuburkan. Sudah ada kesimpulan sementara (mati) akibat perut kembung. Namun kita masih selidiki, barangkali ada sebab-sebab lain,\" kata Erly Sukrismanto, Kepala Balai Konservasi Sumber Daya Alam (BKSDA) Sumatera Barat, kepada detikcom, Rabu (2/1/2019) siang.<br>\r\nBaca juga: BKSDA Telusuri Bayi Harimau Mati di Kebun Binatang Sumbar<br>\r\nMenurut Erly, bayi harimau berjenis kelamin betina itu ditemukan mati pada Kamis (27/12/1018) sekitar pukul 04.00 pagi. Petugas kemudian melakukan nekropsi atau bedah bangkai. <br>\"Sementara kita ambil sampel darah untuk diperiksa penyebab lain, sekaligus juga dilakukan pemeriksaan terhadap anak harimau lain,\" jelas Erly.<br>Pemeriksaan dilakukan oleh tim medis kebun binatang bersama staf BKSDA Sumbar yang ahli harimau. Harimau yang mati tersebut merupakan satu dari dua harimau yang baru lahir Pada Minggu (16/12/2018) lalu. <br>\r\nHewan dengan nama Latin Panthera tigris sumatrae itu lahir dari induk bernama Dara Jingga dan Bancah.<br>\r\nHingga berita ini diturunkan, detikcom belum mendapat jawaban dari pengelola kebun binatang.	\r\n(asp/asp)', '2019-08-12 09:47:36', 'satu.jpg'),
(2, 197709032005011010, ' kisah `si bancah` harimau sumatera pincang yang jadi pejantan tangguh', '<b>BUKITTINGGI</b> - Bancah seekor harimau sumatera jantan di Kebun Binatang Kinantan Zoo Bukittinggi, Sumatera Barat menjadi pejantan yang tangguh. Meskipun fisiknya lemah dengan kondisi kaki kanan depannya pincang. Harimau jantan ini disebut oleh Lembaga Konservasi Dunia sebagai harimau sumatera jantan yang memainkan peran penting dalam pengembangbiakan populasi harimau sumatra di Indonesia. Sepanjang Minggu (23/6/2019) si Bancah terlihat bermain di kandang bersama pasangan dan anak-anaknya.<br>Kepala Dinas Pariwisata Pemuda dan Olahraga (Disparpora) Kota Bukittinggi Erwin Umar mengatakan, kehadiran Bancah membuat populasi harimau sumatra dalam konservasi ini terus berkembang biak.<br>\"Harimau Bancah ditemukan terjebak jerat babi pada tahun 2007 di Hutan Desa Taratak Bancah, Sawahlunto, Sumatera Barat. Saat itu kondisinya sangat mengkhawatirkan kaki kanan luka terjerat tali sling taringnya patah dan stres. Petugas Balai Konservasi dan Sumber Daya Alam (BKSDA) Sumatera Barat mengevakuasi Bancah dari hutan dan membawanya ke kebun Binatang Kinantan untuk dirawat,\" kata dia, Minggu (23/6/2019).\r\n<br>Setelah pulih bancah dikawinkan dengan harimau sumatera betina bernama Dara Jingga. Pada Senin 22 September 2014 malam, Dara Jingga melahirkan dua bayi harimau yang sangat ditunggu-tunggu sebagai kelahiran bayi harimau sumatera yang pertama sejak tahun 1960 di kebun binatang ini.<br>\"Lalu berturut-turut pada Kamis 14 Januari 2016 pasangan Bancah bernama Sean melahirkan dua ekor bayi harimau berjenis kelamin jantan,\" ujarnya.<br>Menurut dia, hanya dalam waktu 10 bulan kemudian Sean yang kembali digagahi Bancah kembali melahirkan tiga bayi pada 14 November 2016. Lalu pada Selasa 5 Mei 2017 Sean melahirkan tiga ekor bayi harimau lagi.<br>Terakhir pada Minggu 16 Desember 2018 pagi giliran pasangan lamanya Dara Jingga kembali dikawinkan dengan bancah hingga melahirkan sepasang bayi.<br>\r\n\"Harimau sumatera breeding terbaik di Indonesia itu adalah di Kebun Binatang Bukittinggi. Itu sudah diakui oleh lembaga konservasi dunia, terungkap waktu kami ada pelatihan di taman safari bersama persatuan kebun binatang seluruh indonesia dan aktifis pecinta hewan di seluruh dunia yang hadir pada hari itu. Ini adalah hal yang positif karena jarang sekali harimau tangkapan bisa lahir di lembaga konservasi, nah, di Bukittinggi harimau kita bisa melahirkan anak minimal 3 ekor dalam setahun, dan sekarang jumlah harimau kita sudah 11 ekor,\" papar Erwin.\r\n<br>Kehebatan Bancah membuahi harimau betina, ungkap dia, membuatnya menjadi salah satu harimau sumatera idola bagi kebun binatang lain dan aktivis pecinta harimau sumatera di Indonesia. Beberapa ekor anak Bancah telah disebar ke beberapa kebun binatang di Indonesia.<br>\"Pada 15 april 2017 lalu dalam program pertukaran satwa dengan Bali Zoo sepasang anak Bancah dibarter dengan 9 ekor satwa koleksi Bali Zoo masing-masing berupa tiga ekor singa afrika, tiga ekor burung baya dan tiga ekor wallaby atau kangguru tanah. Sedangkan pada Minggu 2 Juni 2019 lalu, dua ekor anak Bancah dan Sean bernama Upik Kandih dan Gadih Boncah yang lahir pada 5 Mei 2017 diberikan ke Kebun Binatang Taman Satwa Kandi Kota Sawahlunto,\" timpalnya.<br>Kedua anak Bancah dan Sean, lanjut, Erwin, itu dibarter dengan seekor gajah betina untuk menemani Zidan gajah jantan yang kesepian setelah ditinggal mati Bita gajah betina pasangannya pada 26 September 2017 lalu.', '2019-08-27 23:03:43', 'dua.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `hewanid` int(11) NOT NULL,
  `hewannama` varchar(24) DEFAULT NULL,
  `jenisid` int(11) DEFAULT NULL,
  `hewanketerangan` varchar(100) DEFAULT NULL,
  `hewangambar` varchar(100) NOT NULL,
  `bangunanid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`hewanid`, `hewannama`, `jenisid`, `hewanketerangan`, `hewangambar`, `bangunanid`) VALUES
(3, 'buaya', 4, 'Nama ilmiah: Crocodylidae<br>Famili: Crocodylidae; Cuvier, 1807', 'buaya.jpg', 15),
(4, 'kura-kura sawah', 4, 'Filum: Chordata<br>Ordo: Testudines', 'kurakurasawah.jpg', 27),
(5, 'binturong', 1, 'Nama ilmiah: Arctictis binturong<br>Famili: Viverridae', 'binturong.jpg', 7),
(6, 'zebra', 1, 'Genus: Equus<br>Famili: Equidae', 'zebra.jpg', 8),
(7, 'rusa air / rusa sambar', 1, 'Nama ilmiah: Rusa unicolor<br>Ordo: Artiodactyla', 'rusasambar.jpg', 3),
(8, 'tapir', 1, 'Nama ilmiah: Tapirus<br>Famili: Tapiridae; Gray, 1821', 'tapir.jpg', 4),
(9, 'rusa', 1, 'Nama ilmiah: Cervidae<br>Famili: Cervidae; Goldfuss, 1820', 'rusa.jpg', 5),
(10, 'landak', 1, 'Ordo: Rodentia<br>Kelas: Synapsida', 'landak.jpg', 12),
(11, 'kancil', 1, 'Nama ilmiah: Tragulus<br>Klasifikasi lebih tinggi: Rusa tikus', 'kancil.jpg', 28),
(12, 'orangutan', 3, 'Nama ilmiah: Pongo<br>Famili: Hominidae', 'orangutan.jpg', 25),
(13, 'siamang', 3, 'Nama ilmiah: Symphalangus syndactylus<br>Kingdom: Animalia', 'siamang.jpg', 13),
(14, 'harimau', 2, 'Nama ilmiah: Panthera tigris<br>Ordo: Carnivora', 'harimau.jpg', 10),
(15, 'beruang madu', 2, 'Nama ilmiah: Helarctos malayanus<br>Famili : Ursidae', 'beruang.jpg', 2),
(16, 'singa', 2, 'Nama ilmiah: Panthera leo<br>Ordo: Carnivora', 'singa.jpg', 6),
(17, 'gajah', 2, 'famili : Elephantidae<br>ordo : Proboscidea', 'gajah.jpg', 9),
(18, 'macan dahan', 2, 'Nama ilmiah: Neofelis nebulosa<br>Famili: Felidae', 'macandahan.jpg', 26),
(19, 'harimau dahan', 2, 'Nama ilmiah: Neofelis nebulosa<br>Famili: Felidae', 'harimaudahan.jpg', 24),
(20, 'merak biru', 1, 'Nama Latin: Pavo cristatus<br>Ordo: Galliformes', 'merakbiru.jpg', 14),
(21, 'burung kasuari', 6, 'Nama ilmiah: Casuarius<br>Ordo: Struthioniformes', 'burungkasuari.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatanid` int(11) NOT NULL,
  `jabatannama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatanid`, `jabatannama`) VALUES
(0, 'admin'),
(1, 'kepala bidang TMSK'),
(2, 'Kasi konservasi fauna dan flora TMSBK'),
(3, 'Kasi sarana dan prasarana TMSBK'),
(4, 'Kasi pengembangan SDM dan pelayanan TMSBK'),
(5, 'Staff konservasi fauna dan flora TMSBK'),
(6, 'Staff sarana dan prasarana TMSBK'),
(7, 'Staff pengembangan SDM dan pelayanan TMSBK');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `jenisid` int(11) NOT NULL,
  `jenisnama` varchar(20) DEFAULT NULL,
  `pegawainomorinduk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`jenisid`, `jenisnama`, `pegawainomorinduk`) VALUES
(1, 'mamalia', 197304022006041008),
(2, 'mamalia besar', 197107262005011004),
(3, 'mamalia primata', 196406302008011001),
(4, 'reptil', 197203182006041001),
(6, 'aves', 196405062002121001);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawainomorinduk` bigint(20) NOT NULL,
  `pegawainama` varchar(24) DEFAULT NULL,
  `pegawaigelar` varchar(10) DEFAULT NULL,
  `pegawaipassword` varchar(32) DEFAULT NULL,
  `pegawaigolongan` varchar(5) DEFAULT NULL,
  `jabatanid` int(11) DEFAULT NULL,
  `pegawaitugas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawainomorinduk`, `pegawainama`, `pegawaigelar`, `pegawaipassword`, `pegawaigolongan`, `jabatanid`, `pegawaitugas`) VALUES
(196405062002121001, 'sabardi', '', NULL, 'II/D', 5, 'keeper aves'),
(196406302008011001, 'ramli', '', NULL, 'i/c', 5, 'keeper mamalia primata'),
(196506081990011001, 'ikbal', 'SH', NULL, 'IV/A', 1, 'penanggung jawab/KPA '),
(197107262005011004, 'tasenu', 'S.St', NULL, 'III/b', 5, 'keeper mamalia besar'),
(197203182006041001, 'edi warman', '', NULL, 'ii/b', 5, 'keeper reptil'),
(197304022006041008, 'yulfitri', '', NULL, 'ii/b', 5, 'keeper mamalia'),
(197709032005011010, 'elmi', 'S.T', '21232f297a57a5a743894a0e4a801fc3', 'III/d', 0, 'web admin');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `tipeid` int(11) NOT NULL,
  `tipenama` varchar(50) DEFAULT NULL,
  `tipeketerangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`tipeid`, `tipenama`, `tipeketerangan`) VALUES
(1, 'kandang', NULL),
(2, 'fasilitas umum', NULL),
(3, 'bangunan TMSBK', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `ulasanid` int(11) NOT NULL,
  `ulasanemail` varchar(40) DEFAULT NULL,
  `ulasannama` varchar(32) DEFAULT NULL,
  `ulasanpesan` text,
  `pegawainomorinduk` bigint(20) DEFAULT NULL,
  `ulasanstatus` tinyint(1) DEFAULT NULL,
  `ulasanwaktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`ulasanid`, `ulasanemail`, `ulasannama`, `ulasanpesan`, `pegawainomorinduk`, `ulasanstatus`, `ulasanwaktu`) VALUES
(1, 'budi@gmail.com', 'budi rahardjo', 'bagus sekali kebun binatang ini', 196506081990011001, 1, '2019-08-11 17:06:33'),
(2, 'mantep@yahoo.com', 'mantep', 'sangat mantap\r\nsangat mantap\r\nsangat mantap\r\nsangat mantap\r\nsangat mantap\r\nsangat mantap\r\nsangat mantap\r\n', 197709032005011010, 1, '2019-08-11 17:07:22'),
(3, 'mantabjiwa@gmail.com', 'manjiw', 'mantab sekali pelayanan dan semua yang ditawarkan, satwanya juga lengkap, oke deh bosss', 197709032005011010, 1, '2019-08-12 10:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`bangunanid`),
  ADD KEY `bangunan_ibfk_2` (`tipeid`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`beritaid`),
  ADD KEY `berita_ibfk_1` (`pegawainomorinduk`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`hewanid`),
  ADD KEY `hewan_ibfk_1` (`jenisid`),
  ADD KEY `hewan_ibfk_2` (`bangunanid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatanid`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenisid`),
  ADD KEY `jenis_ibfk_1` (`pegawainomorinduk`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawainomorinduk`),
  ADD KEY `pegawai_ibfk_1` (`jabatanid`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`tipeid`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`ulasanid`),
  ADD KEY `ulasan_ibfk_1` (`pegawainomorinduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `bangunanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `beritaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `hewanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `jenisid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `tipeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `ulasanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangunan`
--
ALTER TABLE `bangunan`
  ADD CONSTRAINT `bangunan_ibfk_2` FOREIGN KEY (`tipeid`) REFERENCES `tipe` (`tipeid`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`pegawainomorinduk`) REFERENCES `pegawai` (`pegawainomorinduk`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`jenisid`) REFERENCES `jenis` (`jenisid`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `hewan_ibfk_2` FOREIGN KEY (`bangunanid`) REFERENCES `bangunan` (`bangunanid`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`pegawainomorinduk`) REFERENCES `pegawai` (`pegawainomorinduk`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`jabatanid`) REFERENCES `jabatan` (`jabatanid`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`pegawainomorinduk`) REFERENCES `pegawai` (`pegawainomorinduk`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
