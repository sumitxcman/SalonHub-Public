CREATE TABLE IF NOT EXISTS `slot_blocks` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `salon_id` INT NOT NULL,
    `block_date` DATE NOT NULL,
    `start_time` TIME NOT NULL,
    `end_time` TIME NOT NULL,
    `reason` VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (`salon_id`) REFERENCES `salons`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
