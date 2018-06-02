/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : bengkel

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 01/06/2018 22:32:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for detail_penjualan_parts
-- ----------------------------
DROP TABLE IF EXISTS `detail_penjualan_parts`;
CREATE TABLE `detail_penjualan_parts`  (
  `id_detail_penjualan_part` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjualan_part` int(11) NOT NULL,
  `id_href_part` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `kode_detail_penjualan_part` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_ref_part` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_penjualan_part`) USING BTREE,
  INDEX `id_penjualan_part`(`id_penjualan_part`) USING BTREE,
  INDEX `id_part`(`id_part`) USING BTREE,
  INDEX `id_href_part`(`id_href_part`) USING BTREE,
  CONSTRAINT `detail_penjualan_parts_ibfk_1` FOREIGN KEY (`id_penjualan_part`) REFERENCES `penjualan_parts` (`id_penjualan_part`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detail_penjualan_parts_ibfk_2` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detail_penjualan_parts_ibfk_3` FOREIGN KEY (`id_href_part`) REFERENCES `href_parts` (`id_href_part`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of detail_penjualan_parts
-- ----------------------------
INSERT INTO `detail_penjualan_parts` VALUES (1, 1, 6, 6, 'KDP001', 1, 12000);
INSERT INTO `detail_penjualan_parts` VALUES (2, 2, 2, 2, 'KDP002', 1, 83000);

-- ----------------------------
-- Table structure for detail_perbaikans
-- ----------------------------
DROP TABLE IF EXISTS `detail_perbaikans`;
CREATE TABLE `detail_perbaikans`  (
  `id_detail_perbaikan` int(11) NOT NULL AUTO_INCREMENT,
  `id_perbaikan` int(11) NOT NULL,
  `id_href_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `kode_detail_perbaikan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_ref_jasa` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_perbaikan`) USING BTREE,
  INDEX `id_perbaikan`(`id_perbaikan`) USING BTREE,
  INDEX `id_jasa`(`id_jasa`) USING BTREE,
  INDEX `id_href_jasa`(`id_href_jasa`) USING BTREE,
  CONSTRAINT `detail_perbaikans_ibfk_1` FOREIGN KEY (`id_perbaikan`) REFERENCES `perbaikans` (`id_perbaikan`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detail_perbaikans_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detail_perbaikans_ibfk_3` FOREIGN KEY (`id_href_jasa`) REFERENCES `href_jasas` (`id_href_jasa`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of detail_perbaikans
-- ----------------------------
INSERT INTO `detail_perbaikans` VALUES (1, 1, 1, 1, 'KDP001', 75000);
INSERT INTO `detail_perbaikans` VALUES (2, 2, 2, 2, 'KDP002', 100000);

-- ----------------------------
-- Table structure for href_jasas
-- ----------------------------
DROP TABLE IF EXISTS `href_jasas`;
CREATE TABLE `href_jasas`  (
  `id_href_jasa` int(11) NOT NULL AUTO_INCREMENT,
  `id_jasa` int(11) NOT NULL,
  `harga_ref_jasa` int(11) NOT NULL,
  PRIMARY KEY (`id_href_jasa`) USING BTREE,
  INDEX `id_jasa`(`id_jasa`) USING BTREE,
  CONSTRAINT `href_jasas_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasas` (`id_jasa`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of href_jasas
-- ----------------------------
INSERT INTO `href_jasas` VALUES (1, 1, 50000);
INSERT INTO `href_jasas` VALUES (2, 2, 75000);
INSERT INTO `href_jasas` VALUES (3, 3, 100000);

-- ----------------------------
-- Table structure for href_parts
-- ----------------------------
DROP TABLE IF EXISTS `href_parts`;
CREATE TABLE `href_parts`  (
  `id_href_part` int(11) NOT NULL AUTO_INCREMENT,
  `id_part` int(11) NOT NULL,
  `harga_ref_part` int(11) NOT NULL,
  PRIMARY KEY (`id_href_part`) USING BTREE,
  INDEX `id_part`(`id_part`) USING BTREE,
  CONSTRAINT `href_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of href_parts
-- ----------------------------
INSERT INTO `href_parts` VALUES (1, 1, 1200000);
INSERT INTO `href_parts` VALUES (2, 2, 83000);
INSERT INTO `href_parts` VALUES (3, 3, 1126000);
INSERT INTO `href_parts` VALUES (4, 4, 4000);
INSERT INTO `href_parts` VALUES (5, 5, 6000);
INSERT INTO `href_parts` VALUES (6, 6, 12000);
INSERT INTO `href_parts` VALUES (7, 7, 45000);
INSERT INTO `href_parts` VALUES (8, 8, 100000);
INSERT INTO `href_parts` VALUES (9, 9, 1500);
INSERT INTO `href_parts` VALUES (10, 10, 853500);

-- ----------------------------
-- Table structure for jasas
-- ----------------------------
DROP TABLE IF EXISTS `jasas`;
CREATE TABLE `jasas`  (
  `id_jasa` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jasa` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_jasa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_jasa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jasas
-- ----------------------------
INSERT INTO `jasas` VALUES (1, 'KJ001', 'Andy');
INSERT INTO `jasas` VALUES (2, 'KJ002', 'Mamat');
INSERT INTO `jasas` VALUES (3, 'KJ003', 'Reno');

-- ----------------------------
-- Table structure for mekaniks
-- ----------------------------
DROP TABLE IF EXISTS `mekaniks`;
CREATE TABLE `mekaniks`  (
  `id_mekanik` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mekanik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_mekanik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_mekanik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mekaniks
-- ----------------------------
INSERT INTO `mekaniks` VALUES (1, 'KM001', 'Reno');
INSERT INTO `mekaniks` VALUES (2, 'KM002', 'Farno');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for parts
-- ----------------------------
DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts`  (
  `id_part` int(11) NOT NULL AUTO_INCREMENT,
  `kode_part` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_part` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_part`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of parts
-- ----------------------------
INSERT INTO `parts` VALUES (1, '073080MB2020', 'BATTERY CHARGER MF');
INSERT INTO `parts` VALUES (2, '16165KEV900', 'HOLDER,NEEDLE JET');
INSERT INTO `parts` VALUES (3, '50410440920', 'PIPE,RR');
INSERT INTO `parts` VALUES (4, '90113KYJ710', 'SCREW PAN 6X12');
INSERT INTO `parts` VALUES (5, '19115KGH901', 'STAY RADIATOR LOWER');
INSERT INTO `parts` VALUES (6, '90003KEV650', 'BOLT ADAPTOR');
INSERT INTO `parts` VALUES (7, '88120KTMN00FMB', '88120KTM000FMB');
INSERT INTO `parts` VALUES (8, '871X0KZT900ZCL', 'STRIPE RED L');
INSERT INTO `parts` VALUES (9, '24436K15900', 'SPG,DRUM STOPPER');
INSERT INTO `parts` VALUES (10, '45510KW6841', 'CYLDR.SB.AS.FR.BK.MT');

-- ----------------------------
-- Table structure for pelanggans
-- ----------------------------
DROP TABLE IF EXISTS `pelanggans`;
CREATE TABLE `pelanggans`  (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pelanggan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pelanggan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_pelanggan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `plat_nomor` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_stnk` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_pelanggan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pelanggans
-- ----------------------------
INSERT INTO `pelanggans` VALUES (1, 'KP001', 'Asep', 'Bandung', 'B2619UX', 'A083619329');
INSERT INTO `pelanggans` VALUES (2, 'KP002', 'Anis', 'Garut', 'Z8327BI', 'A034984328');

-- ----------------------------
-- Table structure for penjualan_parts
-- ----------------------------
DROP TABLE IF EXISTS `penjualan_parts`;
CREATE TABLE `penjualan_parts`  (
  `id_penjualan_part` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `kode_penjualan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total_harga_ref` int(11) NOT NULL,
  PRIMARY KEY (`id_penjualan_part`) USING BTREE,
  INDEX `id_transaksi`(`id_transaksi`) USING BTREE,
  CONSTRAINT `penjualan_parts_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of penjualan_parts
-- ----------------------------
INSERT INTO `penjualan_parts` VALUES (1, 3, 'KP001', 12000);
INSERT INTO `penjualan_parts` VALUES (2, 4, 'KP002', 83000);

-- ----------------------------
-- Table structure for perbaikans
-- ----------------------------
DROP TABLE IF EXISTS `perbaikans`;
CREATE TABLE `perbaikans`  (
  `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `kode_perbaikan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_mekanik` int(11) NOT NULL,
  `total_harga_ref` int(11) NOT NULL,
  PRIMARY KEY (`id_perbaikan`) USING BTREE,
  INDEX `id_transaksi`(`id_transaksi`) USING BTREE,
  INDEX `id_mekanik`(`id_mekanik`) USING BTREE,
  CONSTRAINT `perbaikans_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `perbaikans_ibfk_2` FOREIGN KEY (`id_mekanik`) REFERENCES `mekaniks` (`id_mekanik`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of perbaikans
-- ----------------------------
INSERT INTO `perbaikans` VALUES (1, 1, 'KP001', 1, 75000);
INSERT INTO `perbaikans` VALUES (2, 2, 'KP002', 2, 100000);

-- ----------------------------
-- Table structure for stok_parts
-- ----------------------------
DROP TABLE IF EXISTS `stok_parts`;
CREATE TABLE `stok_parts`  (
  `id_stok` int(11) NOT NULL AUTO_INCREMENT,
  `id_part` int(11) NOT NULL,
  `kode_seri` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_stok`) USING BTREE,
  INDEX `id_part`(`id_part`) USING BTREE,
  CONSTRAINT `stok_parts_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tmp_pembelian
-- ----------------------------
DROP TABLE IF EXISTS `tmp_pembelian`;
CREATE TABLE `tmp_pembelian`  (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_part` int(11) NOT NULL,
  PRIMARY KEY (`id_tmp`) USING BTREE,
  INDEX `id_part`(`id_part`) USING BTREE,
  CONSTRAINT `tmp_pembelian_ibfk_1` FOREIGN KEY (`id_part`) REFERENCES `parts` (`id_part`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmp_pembelian
-- ----------------------------
INSERT INTO `tmp_pembelian` VALUES (13, 5);
INSERT INTO `tmp_pembelian` VALUES (14, 7);
INSERT INTO `tmp_pembelian` VALUES (15, 8);

-- ----------------------------
-- Table structure for transaksis
-- ----------------------------
DROP TABLE IF EXISTS `transaksis`;
CREATE TABLE `transaksis`  (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu` date NOT NULL,
  `bayar` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksis
-- ----------------------------
INSERT INTO `transaksis` VALUES (1, 1, 'KT001', '2018-05-11', 100000);
INSERT INTO `transaksis` VALUES (2, 2, 'KT002', '2018-05-11', 75000);
INSERT INTO `transaksis` VALUES (3, 4, 'KT003', '2018-05-12', 12000);
INSERT INTO `transaksis` VALUES (4, 4, 'KT003', '2018-05-12', 83000);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_user` int(11) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'risman', 'risman', 1);
INSERT INTO `users` VALUES (2, 'faris', 'faris', 2);

SET FOREIGN_KEY_CHECKS = 1;
