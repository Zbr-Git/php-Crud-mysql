# php-Crud-mysql

CREATE TABLE `users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(15) NOT NULL,
  `country` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
)
