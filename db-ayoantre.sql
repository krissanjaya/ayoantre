/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.33-MariaDB : Database - ayoantre
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_antrian_ambil` */

DROP TABLE IF EXISTS `tb_antrian_ambil`;

CREATE TABLE `tb_antrian_ambil` (
  `id_antrian` bigint(20) NOT NULL COMMENT 'cek setting mak antrian dan max panggil di tb_partner',
  `id_partner` bigint(20) DEFAULT NULL,
  `id_jenis_usaha` int(11) DEFAULT NULL,
  `id_chat` bigint(20) DEFAULT NULL,
  `id_server_chat` int(11) DEFAULT NULL COMMENT 'field bantu agar query cepat',
  `id_customer` bigint(20) DEFAULT NULL,
  `id_periode_antrian` bigint(20) DEFAULT NULL,
  `no_antri` int(11) DEFAULT NULL,
  `antrian_status` int(11) DEFAULT NULL,
  `status_chatbot` int(11) DEFAULT NULL COMMENT 'ref ke tb_statusbalas',
  `status_android` int(11) DEFAULT NULL,
  `status_iphone` int(11) DEFAULT NULL,
  `kode_unik` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_antrian`),
  KEY `id_customer` (`id_customer`),
  KEY `id_partner` (`id_partner`),
  KEY `id_periode_antrian` (`id_periode_antrian`),
  CONSTRAINT `tb_antrian_ambil_ibfk_3` FOREIGN KEY (`id_periode_antrian`) REFERENCES `tb_antrian_periode` (`id_periode_antrian`),
  CONSTRAINT `tb_antrian_ambil_ibfk_4` FOREIGN KEY (`id_partner`) REFERENCES `tb_partner` (`id_partner`),
  CONSTRAINT `tb_antrian_ambil_ibfk_5` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_antrian_periode` */

DROP TABLE IF EXISTS `tb_antrian_periode`;

CREATE TABLE `tb_antrian_periode` (
  `id_periode_antrian` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_jenis_usaha` int(11) DEFAULT NULL,
  `porting_id_periode` bigint(20) DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam_start` time DEFAULT NULL,
  `jam_end` time DEFAULT NULL,
  `maks_antrian` int(11) DEFAULT NULL,
  `rerata_tunggu` double DEFAULT NULL,
  PRIMARY KEY (`id_periode_antrian`),
  KEY `id_unit` (`id_partner`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_antrian_posisi` */

DROP TABLE IF EXISTS `tb_antrian_posisi`;

CREATE TABLE `tb_antrian_posisi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_partner` bigint(20) DEFAULT NULL,
  `id_periode_antrian` bigint(20) DEFAULT NULL,
  `prev_customer_id` bigint(20) DEFAULT NULL,
  `prev_customer_number` int(11) DEFAULT NULL,
  `current_customer_id` bigint(20) DEFAULT NULL,
  `current_customer_number` int(11) DEFAULT NULL,
  `next_customer_id` bigint(20) DEFAULT NULL,
  `next_customer_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_antrian_status` */

DROP TABLE IF EXISTS `tb_antrian_status`;

CREATE TABLE `tb_antrian_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_antrian_status_balas` */

DROP TABLE IF EXISTS `tb_antrian_status_balas`;

CREATE TABLE `tb_antrian_status_balas` (
  `id_status_balas` int(11) NOT NULL AUTO_INCREMENT,
  `status_balas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_status_balas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_antrian_terlewati` */

DROP TABLE IF EXISTS `tb_antrian_terlewati`;

CREATE TABLE `tb_antrian_terlewati` (
  `id_antrian` bigint(20) NOT NULL,
  `cacah_panggil` int(11) DEFAULT NULL COMMENT 'saat ini sdh berapa kali dipanggil',
  `no_antri` int(11) DEFAULT NULL COMMENT 'no_antrian yg didapat saat ambil antrian hanya utk mempermudah query',
  PRIMARY KEY (`id_antrian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_berita` */

DROP TABLE IF EXISTS `tb_berita`;

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `id_partner` bigint(20) DEFAULT NULL COMMENT 'bisa jg dr admin, dibuat filter utk melihat: kota,kategori',
  `isi berita` text,
  `valid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_berita_foto` */

DROP TABLE IF EXISTS `tb_berita_foto`;

CREATE TABLE `tb_berita_foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_berita` int(11) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_berita_kategori` */

DROP TABLE IF EXISTS `tb_berita_kategori`;

CREATE TABLE `tb_berita_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_customer` */

DROP TABLE IF EXISTS `tb_customer`;

CREATE TABLE `tb_customer` (
  `id_customer` bigint(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `hp` varchar(100) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `valid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_customer_chat` */

DROP TABLE IF EXISTS `tb_customer_chat`;

CREATE TABLE `tb_customer_chat` (
  `id_chat` bigint(20) NOT NULL,
  `id_customer` bigint(20) DEFAULT NULL,
  `chat_id` varchar(30) DEFAULT NULL,
  `server_chat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_group_usaha` */

DROP TABLE IF EXISTS `tb_group_usaha`;

CREATE TABLE `tb_group_usaha` (
  `id_group_usaha` int(11) NOT NULL AUTO_INCREMENT COMMENT 'holding perusahaan misal PT PAG',
  `nama_group_usaha` varchar(100) DEFAULT NULL COMMENT 'dibawahnya ada banyak unit bisnis',
  `alamat` varchar(150) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_group_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_jenis_usaha` */

DROP TABLE IF EXISTS `tb_jenis_usaha`;

CREATE TABLE `tb_jenis_usaha` (
  `jenis_usaha` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`jenis_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_kabupaten` */

DROP TABLE IF EXISTS `tb_kabupaten`;

CREATE TABLE `tb_kabupaten` (
  `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(200) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`),
  KEY `id_provinsi` (`id_provinsi`),
  CONSTRAINT `tb_kabupaten_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_partner` */

DROP TABLE IF EXISTS `tb_partner`;

CREATE TABLE `tb_partner` (
  `id_partner` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'utk 1 holding akan dicatata setiap usahanya disini',
  `id_group_usaha` int(11) DEFAULT NULL COMMENT 'dr anak, umum dll dr rs kasih ibu',
  `nama_partner` varchar(50) DEFAULT NULL,
  `jenis_usaha` int(11) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `id_propinsi` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `telpon_kantor` varchar(100) DEFAULT NULL,
  `koordinat` varchar(120) DEFAULT NULL,
  `layanan` varchar(120) DEFAULT NULL,
  `status_valid` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `antrian_panggil_ulang` int(11) DEFAULT NULL,
  `antrian_max_panggil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_partner`),
  KEY `id_group_usaha` (`id_group_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_partner_chatbot` */

DROP TABLE IF EXISTS `tb_partner_chatbot`;

CREATE TABLE `tb_partner_chatbot` (
  `id_chatbot` bigint(20) NOT NULL,
  `id_partner` bigint(20) DEFAULT NULL,
  `chat_bot` varchar(60) DEFAULT NULL,
  `id_server_chat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_chatbot`),
  KEY `id_partner` (`id_partner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_provinsi` */

DROP TABLE IF EXISTS `tb_provinsi`;

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_rbac_menu` */

DROP TABLE IF EXISTS `tb_rbac_menu`;

CREATE TABLE `tb_rbac_menu` (
  `id_menu` int(11) DEFAULT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `file_php` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_rbac_role` */

DROP TABLE IF EXISTS `tb_rbac_role`;

CREATE TABLE `tb_rbac_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_rbac_role_detail` */

DROP TABLE IF EXISTS `tb_rbac_role_detail`;

CREATE TABLE `tb_rbac_role_detail` (
  `iddetail_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `i` tinyint(1) DEFAULT NULL,
  `u` tinyint(1) DEFAULT NULL,
  `d` tinyint(1) DEFAULT NULL,
  `s` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`iddetail_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_server_chat` */

DROP TABLE IF EXISTS `tb_server_chat`;

CREATE TABLE `tb_server_chat` (
  `id_server_chat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_server_chat` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_server_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `pasword` varchar(100) DEFAULT NULL,
  `level` tinyint(20) DEFAULT NULL COMMENT 'customer,partner,admin',
  `id_partner` bigint(20) DEFAULT NULL,
  `id_customer` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tb_user_level` */

DROP TABLE IF EXISTS `tb_user_level`;

CREATE TABLE `tb_user_level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `tb_user_role` */

DROP TABLE IF EXISTS `tb_user_role`;

CREATE TABLE `tb_user_role` (
  `id_users_role` bigint(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_users_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tes` */

DROP TABLE IF EXISTS `tes`;

CREATE TABLE `tes` (
  `val` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Trigger structure for table `tb_antrian_ambil` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `set_no_antri` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `set_no_antri` BEFORE INSERT ON `tb_antrian_ambil` FOR EACH ROW BEGIN
	call get_id_antrian(date(now()), @id_antre);
	SET new.id_antrian = @id_antre;
	
	call ambil_antrian(new.id_periode_antrian, @no_antri);
	set new.no_antri = @no_antri;
	
	set new.antrian_status = 0;
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_antrian_ambil` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `replikasi_antri` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `replikasi_antri` AFTER INSERT ON `tb_antrian_ambil` FOR EACH ROW BEGIN
	IF new.id_jenis_usaha = 1 THEN
		INSERT INTO ayoantre_bengkel.`tb_antrian_ambil`(id_antrian, id_partner, id_chat, id_server_chat, id_customer, id_periode_antrian, no_antri, antrian_status) 
			VALUES (new.id_antrian, new.id_partner, new.id_chat, new.id_server_chat, new.id_customer, new.id_periode_antrian, new.no_antri, new.antrian_status);
	END IF;
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_antrian_terlewati` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `op_max_panggil_over` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `op_max_panggil_over` AFTER UPDATE ON `tb_antrian_terlewati` FOR EACH ROW BEGIN
	DECLARE var_id_partner BIGINT;
	DECLARE aturan_max INT;
	
	SET var_id_partner = (SELECT id_partner FROM tb_antrian_ambil WHERE id_antrian = new.id_antrian);
	
	SET aturan_max = (SELECT antrian_max_panggil FROM tb_partner WHERE id_partner = var_id_partner);
	
	IF new.cacah_panggil = aturan_max THEN
		update tb_antrian_ambil set antrian_status = 5 where id_antrian = new.id_antrian;
	END IF;
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_partner` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `replikasi_partner` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `replikasi_partner` BEFORE INSERT ON `tb_partner` FOR EACH ROW BEGIN
	if new.jenis_usaha = 1 then
		insert into ayoantre_bengkel.`tb_partner` (id_partner, id_group_usaha, nama_partner, jenis_usaha, alamat, id_propinsi, id_kabupaten, telpon_kantor, koordinat, layanan, status_valid, start_date, antrian_panggil_ulang, antrian_max_panggil)
			values (new.id_partner, new.id_group_usaha, new.nama_partner, new.jenis_usaha, new.alamat, new.id_propinsi, new.id_kabupaten, new.telpon_kantor, new.koordinat, new.layanan, new.status_valid, new.start_date, new.antrian_panggil_ulang, new.antrian_max_panggil);
	end if;
    END */$$


DELIMITER ;

/* Procedure structure for procedure `ambil_antrian` */

/*!50003 DROP PROCEDURE IF EXISTS  `ambil_antrian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ambil_antrian`(IN var_id_periode_antrian BIGINT, out var_no_antri int)
BEGIN
	DECLARE var_id_partner, var_maks_antrian, counter INT;
	
	SELECT id_partner, maks_antrian FROM tb_antrian_periode WHERE id_periode_antrian = var_id_periode_antrian into var_id_partner, var_maks_antrian;
	
	set counter = (SELECT COUNT(id_antrian) FROM tb_antrian_ambil WHERE id_partner = var_id_partner AND id_periode_antrian = var_id_periode_antrian);
	set counter = counter + 1;
	if counter > var_maks_antrian then
		SET var_no_antri = 0;
	else
	-- 	Final Output, nomor antrian
		SET var_no_antri = counter;
	end if;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `get_id_antrian` */

/*!50003 DROP PROCEDURE IF EXISTS  `get_id_antrian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `get_id_antrian`(in var_tgl date, out var_id_antrian bigint)
BEGIN
	DECLARE gab1 BIGINT;
	DECLARE gab2 BIGINT;
	DECLARE gab3 VARCHAR(4);
	
	SET gab1= DATE_FORMAT(var_tgl,'%Y%m%d');
	SELECT IFNULL(MAX(RIGHT(id_antrian,4)),0) INTO gab2 FROM tb_antrian_ambil WHERE LEFT(id_antrian,8)=DATE_FORMAT(var_tgl,'%Y%m%d');
	
	SET gab2=gab2+1;
	IF gab2 < 10 THEN
	  SET gab3= CONCAT('000',gab2);
	END IF;
	IF gab2 < 100 AND gab2 > 9 THEN
	  SET gab3= CONCAT('00',gab2);
	END IF;
	IF gab2 < 1000 AND gab2 >99 THEN
	  SET gab3= CONCAT('0',gab2);
	END IF;
	IF gab2 >999 THEN
	  SET gab3= gab2;
	END IF;
	
	
	set var_id_antrian = CONCAT(gab1,gab3);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `get_next_antrian` */

/*!50003 DROP PROCEDURE IF EXISTS  `get_next_antrian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `get_next_antrian`(in var_id_periode_antrian bigint, out var_no_antrian int, OUT var_id_customer bigINT)
BEGIN
	declare counter, counter_posisi int;
	declare var_prev_no_antrian, var_next_no_antrian int;
	declare var_prev_id_customer, var_next_id_customer bigint;
	declare var_id_partner bigint;
	set var_no_antrian = 0;
	
	set counter = (select count(id_antrian) FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian AND no_antri != 0 AND antrian_status = 0 OR antrian_status = 3);
	if counter != 0 then
		SELECT no_antri, id_customer, id_partner FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian AND no_antri != 0 AND antrian_status = 0 OR antrian_status = 3 order by no_antri asc limit 1 into var_no_antrian, var_id_customer, var_id_partner;
		
		SELECT COUNT(id_antrian), no_antri, id_customer FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian AND no_antri = var_no_antrian-1 INTO counter, var_prev_no_antrian, var_prev_id_customer;
		if counter = 0 then
			set var_prev_no_antrian = 0;
			set var_prev_id_customer = 0;
		end if;
		
		SELECT COUNT(id_antrian), no_antri, id_customer FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian AND no_antri = var_no_antrian+1 INTO counter, var_next_no_antrian, var_next_id_customer;
		IF counter = 0 THEN
			SET var_next_no_antrian = 0;
			SET var_next_id_customer = 0;
		END IF;
		
	end if;
	set counter_posisi = (select count(id) from tb_antrian_posisi where id_periode_antrian = var_id_periode_antrian);
	if counter_posisi = 0 then
		INSERT INTO tb_antrian_posisi (id_partner, id_periode_antrian, prev_customer_id, prev_customer_number, current_customer_id, current_customer_number, next_customer_id, next_customer_number)
			values (var_id_partner, var_id_periode_antrian, var_prev_id_customer, var_prev_no_antrian, var_id_customer, var_no_antrian, var_next_id_customer, var_next_no_antrian);
	else
		update tb_antrian_posisi set 
			prev_customer_id = var_prev_id_customer, prev_customer_number = var_prev_no_antrian,
			current_customer_id = var_id_customer, current_customer_number = var_no_antrian,
			next_customer_id = var_next_id_customer, next_customer_number = var_next_no_antrian
			where id_periode_antrian = var_id_periode_antrian;
	end if;
	
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `op_lewati` */

/*!50003 DROP PROCEDURE IF EXISTS  `op_lewati` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `op_lewati`(in var_id_antrian bigint)
BEGIN
	declare var_id_periode_antrian, var_id_partner bigint;
	declare var_no_antri, var_aturan_lompatan, var_nomorbaru, var_nomorterakhir int;
	
	select id_periode_antrian, no_antri, id_partner from tb_antrian_ambil where id_antrian = var_id_antrian into var_id_periode_antrian, var_no_antri, var_id_partner;
	
	set var_aturan_lompatan = (select antrian_panggil_ulang from tb_partner where id_partner = var_id_partner);
	
	set var_nomorbaru = var_aturan_lompatan + var_no_antri;
	
	set var_nomorterakhir = (SELECT MAX(no_antri) FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian);
	
	if var_nomorbaru > var_nomorterakhir then
		set var_nomorbaru = var_nomorterakhir + 1;
	end if;
	
		BLOCK2: BEGIN
			DECLARE var_id_antrian_b2 bigint;
			declare var_no_antri_b2, var_nomorbaru_b2 INT;
			DECLARE done_block2 INT DEFAULT 0;
			
			DECLARE cur_b2 CURSOR FOR SELECT id_antrian, no_antri FROM tb_antrian_ambil WHERE id_periode_antrian = var_id_periode_antrian AND no_antri >= var_nomorbaru;
			DECLARE CONTINUE HANDLER FOR SQLSTATE '02000' SET done_block2 = 1;
			OPEN cur_b2;
				WHILE NOT done_block2 DO
					FETCH cur_b2 INTO var_id_antrian_b2, var_no_antri_b2;
					IF NOT done_block2 THEN
						set var_nomorbaru_b2 = var_no_antri_b2 + 1;
						update tb_antrian_ambil set no_antri = var_nomorbaru_b2 where id_antrian = var_id_antrian_b2;
					ELSE
						SET done_block2 = 1;
					END IF;								
					
				END WHILE;
			CLOSE cur_b2;
		
		END BLOCK2;
	
	update tb_antrian_ambil set no_antri = var_nomorbaru, antrian_status = 3 where id_antrian = var_id_antrian;
	
	INSERT INTO tb_antrian_terlewati (id_antrian, cacah_panggil, no_antri) VALUES (var_id_antrian, 1, var_nomorbaru) ON DUPLICATE KEY UPDATE cacah_panggil = cacah_panggil+1, no_antri = var_nomorbaru;
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
