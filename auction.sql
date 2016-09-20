

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Item_description` varchar(255) NOT NULL,
    `Item_type` varchar(255) ,
    `Item_headline` varchar(255) ,
    `Item_Image` varchar(255) ,
    `Item_Featured_Image_1` varchar(255) ,
    `Item_Featured_Image_2` varchar(255) ,
    `Item_Featured_Image_3` varchar(255) ,
    `note` varchar(255) ,
  `State` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `user_id` (`user_id`);
  
  ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;


CREATE TABLE `bidding_item_details` (
  `item_id` int(11) NOT NULL,
  `min_price` int(11) DEFAULT 0 ,
  `buy_now_price` int(11) null ,
  `min_increament` int(11) DEFAULT 0 ,
  `starting_timedate` varchar(255) not null,
    `closing_timedate` varchar(255) not null
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `bidding_item_details`
  ADD PRIMARY KEY (`item_id`);
  
  
  
  CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_description` varchar(255) not null
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255),
  `Last_Name` varchar(255),
  `Gender` varchar(255),
  `Date_of_Birth` varchar(255),
  `Address_Line_1` varchar(255),
  `Address_Line_2` varchar(255),
  `City` varchar(255),
  `State` varchar(255),
  `Postal_Code` varchar(255),
  `Country` varchar(255),
  `available_balance` float DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `users`
  ADD CONSTRAINT `role_id_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
  ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`role_id`);
  
   
  
  

CREATE TABLE `bidding_process` (
  `bidding_process_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `bidder_id` int(11) NOT NULL,
  `bid_price` float(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `bidding_process`
  ADD PRIMARY KEY (`bidding_process_id`),
  ADD KEY `item_id` (`item_id`);
  
  
ALTER TABLE `bidding_process`
  ADD CONSTRAINT `item_id_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

ALTER TABLE `bidding_process`
  MODIFY `bidding_process_id` int(11) NOT NULL AUTO_INCREMENT;




ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);






CREATE TABLE `winning_auctions` (
  `item_id` int(11) NOT NULL,
  `winner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `winning_auctions`
--
ALTER TABLE `winning_auctions`
  ADD PRIMARY KEY (`item_id`,`winner_id`);
  
  
ALTER TABLE `winning_auctions`
  ADD CONSTRAINT `winner_id` FOREIGN KEY (`winner_id`) REFERENCES `users` (`id`);
