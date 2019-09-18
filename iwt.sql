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

