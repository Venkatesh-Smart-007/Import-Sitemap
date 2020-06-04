# Import Sitemap
This is the simple PHP code to import any sitemap into your MySQL Database Using PHP Simple HTML DOM Parser

Create MySQL Database
#MySQL Database SQL Code

'''SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `sitemap` (
  `id` int(5) NOT NULL,
  `url` varchar(3000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `sitemap`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sitemap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;'''
