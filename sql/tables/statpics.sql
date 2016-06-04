SET NAMES 'utf8';
DROP TABLE IF EXISTS `statpics`;
CREATE TABLE `statpics` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tplpath` varchar(200) NOT NULL,
  `previewpath` varchar(200) NOT NULL,
  `description` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `maxtextwidth` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content' ;
