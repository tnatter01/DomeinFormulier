SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `aanvragen` (
  `aanvraag_id` int(11) NOT NULL,
  `domeinen` text NOT NULL,
  `hosting` text NOT NULL,
  `maling` text NOT NULL,
  `voornaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `bedrijfsnaam` text NOT NULL,
  `adres` text NOT NULL,
  `postcode` text NOT NULL,
  `woonplaats` text NOT NULL,
  `telefoon` text NOT NULL,
  `mobiel` text NOT NULL,
  `email` text NOT NULL,
  `kvk` text NOT NULL,
  `opmerking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `aanvragen`
  ADD PRIMARY KEY (`aanvraag_id`);

COMMIT;

