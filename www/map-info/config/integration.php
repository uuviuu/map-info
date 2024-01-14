<?php

return [
    'sql_queries' => [
        'create_table' => "
            CREATE TABLE IF NOT EXISTS `shop` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `article` CHAR(10) NOT NULL,
            `dealer` CHAR(10) NOT NULL,
            `price` FLOAT NOT NULL,
            PRIMARY KEY (`id`)) ENGINE= InnoDB DEFAULT CHARSET=utf8
            AUTO_INCREMENT=1;
        ",

        'dump' => "
            INSERT INTO `shop` (`id`, `article`, `dealer`, `price`) VALUES
            (1, '0001', 'B', 3.99),
            (2, '0002', 'A', 10.99),
            (3, '0003', 'C', 1.69),
            (4, '0004', 'D', 19.95),
            (5, '0005', 'E', 21.05),
            (6, '0001', 'A', 3.32),
            (7, '0002', 'D', 10.99);
        ",
    ]
];
