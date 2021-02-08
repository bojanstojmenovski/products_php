CREATE TABLE `productsDB`.`products` ( 
    `product_id` INT(11) NOT NULL , 
    `product_name` VARCHAR(256) NOT NULL , 
    `product_title` VARCHAR(256) NOT NULL , 
    `product_description` TEXT NOT NULL , 
    PRIMARY KEY (`product_id`)) ENGINE = InnoDB;
)

INSERT INTO `products` (`product_id`, `product_name`, `product_title`, `product_description`) VALUES 
('1', 'IZDELEK 1', 'Podnaslov izdelka 1', 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.'),
('2', 'IZDELEK 2', 'Podnaslov izdelka 2', 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.'),
('3', 'IZDELEK 3', 'Podnaslov izdelka 3', 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.'),
('4', 'IZDELEK 4', 'Podnaslov izdelka 4', 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.'),
('5', 'IZDELEK 5', 'Podnaslov izdelka 5', 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.');