CREATE DATABASE iwt;
use iwt;

CREATE TABLE users (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  name varchar(256) NOT NULL,
  email varchar(256) NOT NULL,
  userType enum('member','admin','lecturer','customer_agent','advertiser_agent','visitor','developer') NOT NULL DEFAULT 'member',
  password varchar(256) NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO users (id, name, email, userType, password, created_at) VALUES
(1, 'Sachin Kodagoda', 'duminda.g.k@gmail.com', 'admin', '$2y$10$10zDMnCw7Az8mGInaeCq6.PRSMLhrNPrFSJ1kTXJ35XnQiZ.O3n6u', '2019-08-08 23:01:15'),
(2, 'Abinaya Yoganatha', 'abi@gmail.com', 'member', '$2y$10$iDYXtlgTKGi7u5LCqPETqO4WivZBivlDe6ugEUalHGPJS8bTRd91y', '2019-08-09 21:34:14');

