-- Structure of the report_type table
CREATE TABLE IF NOT EXISTS `report_type` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `report_name` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;