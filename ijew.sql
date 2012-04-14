CREATE TABLE IF NOT EXISTS `dates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `holiday` int(11) unsigned NOT NULL,
  `start` double unsigned NOT NULL,
  `end` double unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `denominations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `holidays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denomination` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
