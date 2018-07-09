-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.5-10.0.14-MariaDB - mariadb.org binary distribution
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- 正在导出表  1000phone.car 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
REPLACE INTO `car` (`gid`, `qty`, `name`, `url`, `price`) VALUES
	('1', '3', '小儿氨酚黄那敏颗粒', 'https://c1.yaofangwang.net/Common/Upload/Medicine/582/582808/a26b15b4-52d3-460c-8dea-af52efe980767146.jpg_300x300.jpg', '1'),
	('2', '4', '藿香祛暑软胶囊', 'https://c1.yaofangwang.net/Common/Upload/Medicine/591/591342/843fb1ba-0abb-43f4-a842-091d0c5e2b0b1944.jpg_300x300.jpg', '11');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;

-- 正在导出表  1000phone.goods 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
REPLACE INTO `goods` (`gid`, `name`, `url`, `price`, `del`) VALUES
	(1, '小儿氨酚黄那敏颗粒', 'https://c1.yaofangwang.net/Common/Upload/Medicine/582/582808/a26b15b4-52d3-460c-8dea-af52efe980767146.jpg_300x300.jpg', 1, NULL),
	(2, '藿香祛暑软胶囊', 'https://c1.yaofangwang.net/Common/Upload/Medicine/591/591342/843fb1ba-0abb-43f4-a842-091d0c5e2b0b1944.jpg_300x300.jpg', 11, 11),
	(3, '卡通防水创可贴', 'https://c1.yaofangwang.net/Common/Upload/Medicine/638/638445/07ba02bf-0ed4-4f07-84bf-ba7a721c58a55196.jpg_300x300.jpg', 2, NULL),
	(4, '天然胶乳橡胶避孕套', 'https://c1.yaofangwang.net/Common/Upload/Medicine/578/578910/2260a50f-4112-4f37-9bfa-5ae37400c47c8387.jpg_300x300.jpg', 3, NULL);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

-- 正在导出表  1000phone.gz1610 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `gz1610` DISABLE KEYS */;
/*!40000 ALTER TABLE `gz1610` ENABLE KEYS */;

-- 正在导出表  1000phone.students 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
REPLACE INTO `students` (`name`, `gender`, `age`, `phone`, `address`) VALUES
	('啊', 1, 1, '1', '1');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- 正在导出表  1000phone.users 的数据：~6 rows (大约)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`username`, `password`) VALUES
	('a', 'a'),
	('b', 'b'),
	('c', 'c'),
	('1', '1'),
	('2', '3'),
	('3', '4');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
