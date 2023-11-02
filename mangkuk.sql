-- Database: `mangkuk`

CREATE TABLE 'admin' (
  'username' VARCHAR(30) NOT NULL,
  'password' VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE 'enquiry' ( 
  'id' INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  'first_name' VARCHAR(30) NOT NULL,
  'last_name' VARCHAR(30) NOT NULL,
  'email' VARCHAR(20) NOT NULL,
  'street_address' VARCHAR(50) NOT NULL,
  'city_town' VARCHAR(50) NOT NULL,
  'state' VARCHAR(50) NOT NULL,
  'postcode' VARCHAR(10) NOT NULL,
  'phone_num' VARCHAR(20) NOT NULL,
  'subject' VARCHAR(50) NOT NULL,
  'description' VARCHAR(200),
  'reg_date' TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
