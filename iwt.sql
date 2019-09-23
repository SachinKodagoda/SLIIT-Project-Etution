DROP DATABASE iwt;
CREATE DATABASE iwt;
use iwt;

CREATE TABLE users (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  name varchar(256) NOT NULL,
  email varchar(256) NOT NULL,
  userType enum('member','admin','lecturer','customer_agent','advertiser_agent','visitor','developer') NOT NULL DEFAULT 'member',
  password varchar(256) NOT NULL,
  token char(64) NOT NULL UNIQUE,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO users (id, name, email, userType, password, token , created_at) VALUES
(1, 'Sachin Kodagoda', 'duminda.g.k@gmail.com', 'admin', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u', '152ab9702b81686d5e3ee3c9084ed98597e4cdf6c8ac4b80ec523a48149dddbad5162498ed714a09dbb483993399d041bbc4ab21a979a72a48d8aa01971f262f','2019-08-08 23:01:15');








CREATE TABLE users (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  name varchar(256) NOT NULL,
  email varchar(256) NOT NULL,
  userType enum('member','admin','lecturer','customer_agent','advertiser_agent','visitor','developer') NOT NULL DEFAULT 'member',
  password varchar(256) NOT NULL,
  country varchar(256) DEFAULT 'Not Selected',
  online_status int(1) DEFAULT 1,
  img_name varchar(256) DEFAULT 'dummy1.jpg',
  gender enum('male','female')DEFAULT 'male',
  active_status int(1) DEFAULT 1,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




INSERT INTO users (name, email, userType, password, created_at) VALUES
('Sachin Kodagoda', 'duminda.g.k@gmail.com', 'admin', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-08-08 23:01:15'),
('a', 'a@gmail.com', 'admin', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-01-08 23:01:15'),
('b', 'b@gmail.com', 'member', '0$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-01-08 23:01:15'),
('c', 'c@gmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-02-08 23:01:15'),
('d', 'd@gmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-03-08 23:01:15'),
('e', 'e@gmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-04-08 23:01:15'),
('f', 'f@gmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-05-08 23:01:15'),
('g', 'ggmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-12-08 23:01:15'),
('h', 'hmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-08-08 23:01:15'),
('i', 'igmail.com', 'member', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u','2019-11-08 23:01:15');