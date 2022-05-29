-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_alternatif` varchar(255) NOT NULL,
  `keterangan_alternatif` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alternatif` (`id`, `kode_alternatif`, `keterangan_alternatif`, `user_id`) VALUES
(22,	'A1',	'Alternatif 1',	27),
(24,	'A3',	'Alternatif 3',	29),
(25,	'A4',	'Alternatif 4',	30),
(29,	'A2',	'Alternatif 2',	28),
(30,	'A5',	'Alternatif 5',	32);

DROP TABLE IF EXISTS `bobot`;
CREATE TABLE `bobot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bobot` varchar(255) NOT NULL,
  `keterangan_bobot` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bobot` (`id`, `kode_bobot`, `keterangan_bobot`) VALUES
(15,	'1',	'Sangat Tidak Penting'),
(16,	'2',	'Tidak Penting'),
(17,	'3',	'Cukup Penting'),
(18,	'4',	'Penting'),
(22,	'5',	'Sangat Penting');

DROP TABLE IF EXISTS `bobot_kriteria`;
CREATE TABLE `bobot_kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urutan_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `bobot_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bobot_kriteria` (`id`, `urutan_id`, `kriteria_id`, `bobot_id`) VALUES
(17,	1,	7,	22),
(18,	2,	8,	17),
(19,	3,	9,	18),
(20,	4,	10,	16);

DROP TABLE IF EXISTS `input_nilai`;
CREATE TABLE `input_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alternatif_id` int(11) NOT NULL,
  `c1` varchar(255) NOT NULL,
  `c2` varchar(255) NOT NULL,
  `c3` varchar(255) NOT NULL,
  `c4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `input_nilai` (`id`, `alternatif_id`, `c1`, `c2`, `c3`, `c4`) VALUES
(24,	22,	'4',	'5',	'3',	'1'),
(25,	29,	'1',	'3',	'2',	'4'),
(26,	24,	'3',	'2',	'1',	'4'),
(27,	25,	'3',	'2',	'2',	'2'),
(28,	30,	'1',	'2',	'3',	'4');

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(255) DEFAULT NULL,
  `keterangan_kriteria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `keterangan_kriteria`) VALUES
(7,	'C1',	'Kualitas Produk'),
(8,	'C2',	'Kecepatan Kirim'),
(9,	'C3',	'Acceptable Price'),
(10,	'C4',	'Pembayaran Fleksible');

DROP TABLE IF EXISTS `penilaian_sub_kriteria`;
CREATE TABLE `penilaian_sub_kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penilaian` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `penilaian_sub_kriteria` (`id`, `penilaian`, `keterangan`) VALUES
(11,	' 1',	'Tidak Baik'),
(12,	'2',	'Cukup Baik'),
(13,	'3',	'Baik'),
(14,	'4',	'Sangat Baik'),
(15,	'5',	'Sangat Baik Sekali');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_upload` int(11) NOT NULL,
  `is_input` int(11) NOT NULL,
  `is_alternatif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `is_upload`, `is_input`, `is_alternatif`) VALUES
(12,	'admin',	'admin@admin.com',	'default.jpg',	'$2y$10$VgiXi8BbKDSROpfXM1F9kexQTWKmPsYfJwdpbe0fZQ90gQ64dS.Hi',	1,	1,	1552285263,	1,	1,	0),
(27,	'PT A',	'pta@email.com',	'default.jpg',	'$2y$10$RoVUIuCadSYCt4sqsRlgqeSebzvUgfqlCbP24ubwCtlDhlpwQRHT.',	2,	1,	1653748742,	1,	0,	1),
(28,	'PT B',	'ptb@email.com',	'default.jpg',	'$2y$10$PItZzBw6qORp0dsfl5bUhuQFFy91q4LX0ls.9N0nHjraJreQ4xdjq',	2,	1,	1653748796,	1,	0,	1),
(29,	'PT C',	'ptc@email.com',	'default.jpg',	'$2y$10$3RaKXqjd11HyTMsSqb00He5fc4ipa5tIxm8Bd6PhBcC7ieSz8hZZi',	2,	1,	1653748813,	1,	0,	1),
(30,	'PT D',	'ptd@email.com',	'default.jpg',	'$2y$10$mfb/HqjEaVM8DcMNr2CP/Ohx6yd6Hi/w4rG5kam8mQ7fS1ju.dxUW',	2,	1,	1653748838,	1,	0,	1),
(32,	'PT E',	'pte@email.com',	'default.jpg',	'$2y$10$baMp.qeF9RZF4YJeKqOXwuywymxmoNKPyPVEJ0neJYBn56glWOl.G',	2,	1,	1653749546,	1,	0,	1);

DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1,	1,	1),
(3,	2,	2),
(7,	1,	3),
(8,	1,	2),
(10,	1,	5);

DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1,	'Admin'),
(2,	'User'),
(3,	'Menu'),
(5,	'SPK\r\n');

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_role` (`id`, `role`) VALUES
(1,	'Administrator'),
(2,	'Member');

DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1,	1,	'Dashboard',	'spk',	'fas fa-fw fa-tachometer-alt',	1),
(2,	2,	'My Profile',	'user',	'fas fa-fw fa-user',	1),
(3,	2,	'Upload Berkas',	'user/edit',	'fas fa-fw fa-user-edit',	1),
(4,	3,	'Menu Management',	'menu',	'fas fa-fw fa-folder',	1),
(5,	3,	'Submenu Management',	'menu/submenu',	'fas fa-fw fa-folder-open',	1),
(7,	1,	'Role',	'admin/role',	'fas fa-fw fa-user-tie',	1),
(8,	2,	'Change Password',	'user/changepassword',	'fas fa-fw fa-key',	1),
(9,	5,	'Dashboard',	'spk',	'fas fa-fw fa-copy',	1),
(10,	5,	'Alternatif',	'spk/alternatif',	'fas fa-fw fa-copy',	1),
(11,	5,	'Bobot',	'spk/bobot',	'fas fa-fw fa-copy',	1),
(12,	5,	'Kriteria',	'spk/kriteria',	'fas fa-fw fa-copy',	1),
(13,	5,	'Bobot Kriteria',	'spk/bobotkriteria',	'fas fa-fw fa-copy',	1),
(14,	5,	'Penilaian Sub Kriteria',	'spk/penilaiansubkriteria',	'fas fa-fw fa-copy',	1),
(15,	5,	'Nilai Alternatif Kriteria',	'spk/inputNilai',	'fas fa-fw fa-copy',	1),
(16,	5,	'Daftar Supplier Baru',	'spk/supplierBaru\r\n',	'fas fa-fw fa-copy',	1);

DROP TABLE IF EXISTS `user_token`;
CREATE TABLE `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9,	'test@test.com',	'D36gLx7Bw8A88FRLgoXJYovj7nOACk6sSwRt5QpgnZc=',	1649605400);

-- 2022-05-29 02:49:00
