CREATE TABLE `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `productList` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  `description` varchar(255) NULL,
  `picture` varchar(255) NULL,

  PRIMARY KEY (`productID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `eventList` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) NULL,
  `description` varchar(255) NULL,
  `location` varchar(255) NULL,
  `date` varchar(255) NULL,
  `time` varchar(255) NULL,


  PRIMARY KEY (`eventID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
