CREATE TABLE IF NOT EXISTS `exp_file_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Institution` varchar(30) DEFAULT NULL,
  `Director` varchar(30) DEFAULT NULL,
  `Operator` varchar(30) DEFAULT NULL,
  `Cytometer` varchar(30) DEFAULT NULL,
  `CytometerSerialNumber` varchar(20) DEFAULT NULL,
  `SwVersion` varchar(40) DEFAULT NULL,
  `SampleName` varchar(30) DEFAULT NULL,
  `SampleID` varchar(20) DEFAULT NULL,
  `CaseNumber` varchar(20) DEFAULT NULL,
  `AGE` float(6,2) DEFAULT NULL,
  `SEX` varchar(10) DEFAULT NULL,
  `SITE` int(20) DEFAULT NULL,
  `PanelName` varchar(20) DEFAULT NULL,
  `Date_Analyzed` date DEFAULT NULL,
  `LabReportFileName` varchar(30) DEFAULT NULL,
  `PhysiciansReportFileName` varchar(30) DEFAULT NULL,
  `RefRange` varchar(20) DEFAULT NULL,
  `Comments` varchar(200) DEFAULT NULL,
  `CD3CD4CD45TruCFCSFileName` varchar(40) DEFAULT NULL,
  `CD3CD4CD45TruCLotID` int(30) DEFAULT NULL,
  `CD3CD4CD45TruCErrorCodes` int(10) DEFAULT NULL,
  `CD3CD4CD45TruCCD3Lymph` float(10,2) DEFAULT NULL,
  `CD3CD4CD45TruCCD3AbsCnt` float(10,2) DEFAULT NULL,
  `CD3CD4CD45TruCCD3CD4Lymph` float(10,2) DEFAULT NULL,
  `CD3CD4CD45TruCCD3CD4AbsCnt` float(10,2) DEFAULT NULL,
  `CD3CD4CD45TruCCD45AbsCnt` float(10,2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1