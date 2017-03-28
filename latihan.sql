SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('1', 'judul artikel', 'isi artikel kesatu, pendek aja', 'jalanan.jpg', 'Jalanan, London');
INSERT INTO `artikel` VALUES ('2', 'artikel ke 2', 'isi artikel kedua jauh lebih panjang dengan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident', 'jalanan.jpg', 'Jalanan, London');
INSERT INTO `artikel` VALUES ('3', 'judul artikel 3', 'ini isi artikel ke empat, lebih panjang lagi dengan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident, iste nobis totam? Fugit nobis ducimus, asperiores aperiam fuga esse repudiandae.', 'jalanan.jpg', 'Jalanan, London');
INSERT INTO `artikel` VALUES ('4', 'artikel baru lagi', 'artikel baru lagi artikel baru lagi artikel baru lagi artikel baru lagi artikel baru lagi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\n\r\nRerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\n\r\nRerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea providentLorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id, unde consequatur nam dicta magnam sunt odit ea provident ', 'jalanan.jpg', 'Jalanan, London');

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
