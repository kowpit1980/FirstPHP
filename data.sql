
CREATE TABLE IF NOT EXISTS `phonebook` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `email` varchar(75) NOT NULL,

  `mobile` varchar(255) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB;

INSERT INTO `phonebook` (`id`, `name`, `email`,`mobile`) VALUES

(1, 'Zeus', 'zeus @ olympus . mt . co',  '4444991023'),

(2, 'Anthena',  'anthena @ olympus . mt . co', '839084790'),

(3, 'Jupiter', 'jupiter @ planet . pt . co', '992716983'),

(4, 'Venus', 'venus @ planet . pt . co', '01298371');


