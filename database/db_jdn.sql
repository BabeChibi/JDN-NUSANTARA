-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 02:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jdn`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(50) NOT NULL,
  `foto_artikel` text NOT NULL,
  `judul_artikel` varchar(200) NOT NULL,
  `tgl_artikel` date NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto_artikel`, `judul_artikel`, `tgl_artikel`, `isi_artikel`) VALUES
('ART001', 'Find_Jobs.jpg', 'Lowongan Staff/Freelance Marketing', '2017-04-03', '<p>Perusahaan baru menjual system layanan internet berbasis biling voucher</p>\r\n\r\n<p>Tanggung Jawab Pekerjaan :</p>\r\n\r\n<p>&ndash; Membuat dan melakukan promo penjualan<br />\r\n&ndash; Melakukan survey calon pelanggan<br />\r\n&ndash; Melakukan pemetaan lokasi<br />\r\n&ndash; Membuat laporan per periode</p>\r\n\r\n<p>Syarat Pengalaman :</p>\r\n\r\n<p>tidak diutamakan</p>\r\n\r\n<p>Keahlian :</p>\r\n\r\n<p>Bisa Internet &amp; Menguasai Office</p>\r\n\r\n<p>Kualifikasi :</p>\r\n\r\n<p>Pria Wanita<br />\r\nUmur maksimal 27 Tahun<br />\r\nBisa naik Motor</p>\r\n\r\n<p>Tunjangan :</p>\r\n\r\n<p>Uang Makan tunjangan asuransi</p>\r\n\r\n<p>Insentif :</p>\r\n\r\n<p>uang lembur dan fee marketing</p>\r\n\r\n<p>Waktu Bekerja :</p>\r\n\r\n<p>Senin s.d Sabtu</p>\r\n\r\n<p>Aplikasi&nbsp;:</p>\r\n\r\n<p>Dikirim via email ke eksanw@gmail.com atau admin@megacleon.com sebelum 20 Juni 2017</p>\r\n'),
('ART002', 'Cara-Membuat-Surat-Lamaran-Kerja-Online.jpg', 'Lowongan Teknisi Internet', '2017-04-03', '<p>Startup layanan Biling Internet membutuhan tim teknis dilapangan</p>\r\n\r\n<p>Tanggung Jawab Pekerjaan :</p>\r\n\r\n<p>1. Melakukan instalasi mitra dari link koneksi, router, ap dari trial sampai online<br />\r\n2. Melakukan distribusi voucher dan penarikan penjualan voucherkepada mitra setiap bulan atau periode<br />\r\n3. Menerima keluhan dan troubleshoot gangguan layanan<br />\r\n4. Melakukan montoring layanan cleon setiap jam atau periode<br />\r\n5. Bersama Sales Melakukan Survey dan pemetaan lokasi dan tempat pemasangan perangkat<br />\r\n6. Bersama Sales Teknis melakukan pendataan perangkat yang akan dipasang dan belanja kebutuhan instalasi<br />\r\n7. Bersama Sales Teknis melakukan survey calon pelanggan<br />\r\n8. Support kegiatan promo penjualan produk layanan bersama sales</p>\r\n\r\n<p>Syarat Pengalaman :</p>\r\n\r\n<p>Tidak diutamakan</p>\r\n\r\n<p>Keahlian :</p>\r\n\r\n<p>1. Menguasai Kosep Jaringan Komputer (Wifi)<br />\r\n2. Menguasai teknis instalasi perangkat Wifi (Mini BTS, Radio, Router dan Akses POint)<br />\r\n3. Tidak takut ketinggian<br />\r\n4. Mampu mengemudikan kendaraan roda 2 dan atau roda 4.<br />\r\n5. Multi talent.</p>\r\n\r\n<p>Kualifikasi :</p>\r\n\r\n<p>Pria Maksimal 27 Tahun</p>\r\n\r\n<p>Tunjangan :</p>\r\n\r\n<p>Gaji, Lembur, Tunjangan, Asuransi</p>\r\n\r\n<p>Aplikasi&nbsp;:</p>\r\n\r\n<p>Dikirim via email ke eksanw@gmail.com atau admin@megacleon.com sebelum 20 Juni 2017</p>\r\n'),
('ART003', 'writing-table-wood-pen-cup-pattern-bottle-write-sheet-art-sketch-drawing-illustration-design-handwriting-calligraphy-shape-notes-paperwork-740369.jpg', 'Website Baru Cleon', '2016-12-04', '<p>Sekarang Cleon memiliki website baru. Untuk memfasilitasi mitra Cleon dalam mengakses informasi Cleon. Selamat menjelajahi website terbaru kami yang lebih&nbsp;<em>fresh</em></p>\r\n'),
('ART004', 'Interview-0.jpg', 'Pengumuman Hasil Seleksi Kandidat Staff Accounting', '2015-11-13', '<p>Pemberitahuan :</p>\r\n\r\n<p>Pengumuman hasil Seleksi Test Tertulis Kandidat Staff Accounting, dilakukan penundaan sampai waktu yang akan ditentukan kemudian. Disampaikan permohonan maaf atas penundaan ini.</p>\r\n\r\n<p>Demikian, atas perhatiannya diucapkan terima kasih.</p>\r\n\r\n<p>Tertanda HR<br />\r\nJogjamedianet</p>\r\n'),
('ART005', '3031891-poster-p-1-3031891-the-future-of-work-4-reasons-why-you-hate-your-job-and-how-to-fix-it-1.jpg', 'Info setting SSL pada Email JMN melalui Outlook', '2015-09-14', '<p>Bagi pelanggan JMN yang menggunakan email JMN dan mengalami gangguan tidak bisa login.</p>\r\n\r\n<p>Terutama pelanggan yang menggunakan aplikasi outlook, berikut ini solusi login email tersebut.</p>\r\n\r\n<ul>\r\n	<li>Langkah 1, Pilih pada menu&nbsp;<strong>Tools</strong>&nbsp;kemudian&nbsp;<strong>Account Settings</strong></li>\r\n	<li>Langkah 2, Akan muncul jendela&nbsp;Account Settings&nbsp;kemudian klik dua kali pada account email sebelumnya.</li>\r\n	<li>Langkah 3, Setelah melakukan klik dua kali pada langkah sebelumnya, maka akan muncul jendela baru&nbsp;Change E-mail Account&nbsp;seperti berikut ini, kemudian dilanjutkan memilih tombol&nbsp;<strong>More Settings</strong></li>\r\n	<li>Langkah 4, Akan muncul jendela&nbsp;Internet E-mail Settings&nbsp;seperti berikut, kemudian pada jendela ini pilih&nbsp;<strong>Advance</strong></li>\r\n	<li>Langkah 5, Setelah memilih&nbsp;<strong>Advance</strong>&nbsp;maka akan muncul tampilan berikut ini, langkah selanjutnya ubah&nbsp;<strong>None</strong>menjadi&nbsp;<strong>SSL,</strong>&nbsp;sedangkan untuk pilihan&nbsp;<strong>Incoming Server (IMAP)</strong>&nbsp;bisa diabaikan, pd contoh gambar dibawah,&nbsp;<strong>Incoming Server (IMAP)</strong>&nbsp;menunjukkan<strong>&nbsp;port 143</strong>. &nbsp;Untuk email pelanggan dengan&nbsp;<strong>Incoming Server (POP3)</strong>&nbsp;akan menunjukkan&nbsp;<strong>port 110.</strong></li>\r\n	<li>Langkah 6, Setelah merubah pilihan<strong>&nbsp;None</strong>&nbsp;menjadi&nbsp;<strong>SSL</strong>&nbsp;maka akan berubah seperti gambar berikut, yaitu&nbsp;untuk&nbsp;<strong>Incoming Server (IMAP)</strong>&nbsp;akan berubah secara otomatis menjadi&nbsp;<strong>port 993</strong>. Sedangkan&nbsp;jika email pelanggan menggunakan&nbsp;<strong>Incoming Server (POP3)</strong>&nbsp;maka akan berubah menjadi&nbsp;<strong>port 995</strong>.</li>\r\n	<li>Langkah 7, tekan tombol&nbsp;<strong>OK</strong>&nbsp;untuk melakukan penyimpanan terhadap settingan yang sudah dilakukan. &nbsp;Dan untuk jendela lain yang muncul bisa di tutup.</li>\r\n</ul>\r\n'),
('ART006', 'landing-working-at-bp-sub-diversity-bp-1920x1080.jpg', 'Promo Bulan JUNI di JMN', '2015-06-08', '<p>Bersamaan dengan HUT JMN yang ke 13.</p>\r\n\r\n<p>JMN memberikan Promo gratis Layanan dan menangkan hadiah langsung liburan ke BALI.</p>\r\n\r\n<p>Segera dapatkan info terlengkap di Marketing kami.</p>\r\n'),
('ART007', 'Cara-Membuat-Surat-Lamaran-Kerja-Online1.jpg', 'Kegiatan DONOR DARAH dalam rangka HUT JMN', '2015-06-08', '<p>Dalam rangka HUT JMN yang ke 13, mari bersama Jogjamedianet untuk berdonor darah.</p>\r\n\r\n<p>Kegiatan ini akan dilaksanakan pada Kamis tgl 11 Juni 2015.</p>\r\n'),
('ART008', '0Y5A7186.JPG', 'Info Pindahan', '2016-07-28', '<p>Sekarang JMN sudah Pindah di Jl. Sidobali No.8, Muja Muju, Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HR JMN</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `email`, `no_tlp`, `alamat`, `map`) VALUES
('KTK001', 'admin@megacleon.com', '0', 'Jl. Sidobali 8 Yogyakarta', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.896178372978!2d110.39419241477822!3d-7.8008153943785095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57641c01e3c9%3A0x4b14fb5ae57cbe6c!2sJogja+Medianet!5e0!3m2!1sid!2sid!4v1501649794036\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `status`) VALUES
('LG001', 'master', 'master', 'master'),
('LG002', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` varchar(50) NOT NULL,
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `profil`, `visi`, `misi`) VALUES
('PRF001', '<p>Teknologi Informasi dan Billing OTT adalah menjadi bidang usaha yang dicoba diberikan oleh CLEON, dengan mengantongi izin usaha Jasa Pemasok Barang, Jasa Konsultasi Multimedia &amp; TI, &nbsp;dan Jasa Pendidikan &amp; Pelatihan Multimedia &amp; TI, mencoba memberikan produk atau jasa yang disesuaikan dengan kebutuhan pelanggan</p>\r\n', '<p>Memberikan kemudahan layanan klien dengan pilihan jasa &amp; produk dari CLEON<br />\r\n&nbsp;</p>\r\n', '<p>Menghasilkan Jasa &amp; Produk yang bermanfaat, kreatif dan terbaru dari bidang Multimedia &amp; TI</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` varchar(50) NOT NULL,
  `foto_riwayat` text NOT NULL,
  `riwayat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `foto_riwayat`, `riwayat`) VALUES
('RWT001', 'logo_siap.png', '<p>&nbsp; &nbsp;</p>\r\n\r\n<p>Cleon merupakan layanan billing OTT, merupakan anak perusahaan dari PT. Sarana InsanMuda Selaras selaku induk perusahaan dan penyedia layanan internet dan tv berlangganan.<br />\r\n&nbsp;&nbsp; &nbsp;CLEON, dirintis sejak tahun 2013 sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan &nbsp;internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunaakan internet.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Cleon hadir untuk segment menengah kebawah dengan harga terjangkau di lokasi yang membutuhkan layanan dengan pilihan layanan timebase, quota dan unlimited seolah-olah menggunakan layanan operator telco(quota), warnet(timebase), dan isp(unlimited) menjadi 1 layanan<br />\r\n&nbsp;&nbsp; &nbsp;Dengan target pengguna dilokasi dalam jumlah banyak Cleon bisa dipasang di Hotel, Caf&eacute;, Kost, Guest House, Angkringan, Publik Area, Fasum dll.</p>\r\n\r\n<p>&nbsp;&nbsp; &nbsp;Tahun 2017 Cleon mulai proses menjadi Perseroan Terbatas dengan Nama PT. Jaring Data Nusantara sdengan izin usaha Jasa Pemasok Barang, Jasa Konsultasi Multimedia &amp; TI, &nbsp;dan Jasa Pendidikan &amp; Pelatihan Multimedia &amp; TI</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` varchar(50) NOT NULL,
  `foto_slide` text NOT NULL,
  `durasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `foto_slide`, `durasi`) VALUES
('SLD002', 'slide45.png', '300'),
('SLD003', 'slide242.png', '300'),
('SLD004', '10436-NMJ3BL.png', '300'),
('SLD005', 'Damask_62.png', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
