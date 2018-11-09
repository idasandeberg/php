CREATE TABLE `authors`(
	`id` int(11) NOT NULL,
	`first_name` varchar(50) NOT NULL,
	`last_name` varchar(50) NOT NULL,
	`social_secutiry` varchar(100) NOT NULL,
	`birth_year` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `authors` (`id`, `first_name`, `last_name`, `social_secutiry`, `birth_year`) VALUES
	(3, 'Carl', 'Sandburg', '', NULL),
	(4, 'Dylan', 'Thomas', '', NULL),
	(5, 'Edward', 'Gorey', '', NULL),
	(6, 'Anne', 'Frank', '', NULL);





CREATE TABLE `books`(
	`id` int(11) NOT NULL,
	`isbn` varchar(20) NOT NULL,
	`title` varchar(100) NOT NULL,
	`no_of_pages` varchar(50) NOT NULL,
	`edition_no` int(10) NOT NULL,
	`publish_year` date NOT NULL,
	`publish_comp` varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `books` (`id`, `isbn`, `title`, `no_of_pages`, `edition_no`, `publish_year`, `publish_comp`) VALUES
	(3, '12345', 'Hej', '123', '1', '2016', 'Hej company'),
	(4, '67890', 'Hejsan', '456', '2', '2017', 'Hejsan company'),
	(5, '98765', 'Tjohej', '789', '3', '2018', 'Tjohej company');


/*-----Library----*/

CREATE TABLE `library`(
	`id` int(11) NOT NULL,
	`barcode` varchar(10) NOT NULL,
	`shelf_id` varchar(10) NOT NULL,
	`date_in_library` date NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `library` (`id`, `barcode`, `shelf_id`, `date_in_library`) VALUES
	(3, '12','AB1','1990'),
	(4, '13','CD2','1991'),
	(5, '14','EF3','1992');


/*------BOOK/Author------*/

CREATE TABLE `book_author`(
	`id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`authorID` int(11) NOT NULL,
	`bookID` int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `book_author` (`id`, `authorID`, `bookID`) VALUES
	(2, '3', '3'),
	(3, '4', '4'),
	(4, '5', '5'),
	(5, '6', '6');


SELECT * FROM books
JOIN book_author ON books.id = book_author.bookID
JOIN authors ON authors.id = book_author.authorID




/*--------USERS---------*/

CREATE TABLE `users`(
	`id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`username` varchar (50) UNIQUE NOT NULL,
	`password` varchar (59) NOT NULL,
)

INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'idasan', 'pass'),
	(2, 'emeledb', 'word'),
	(3, 'danne', 'password');

