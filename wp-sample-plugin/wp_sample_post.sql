CREATE TABLE wp_sample_post(
	id MEDIUMINT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	image_url TEXT NOT NULL,
	image_alt TEXT,
	link_url TEXT,
	open_new_tab TINYINT(1) DEFAULT 0,
	insert_element_class TINYTEXT,
	insert_element_id TINYTEXT,
	how_display TINYTEXT,
	filter_category TINYINT(1) DEFAULT 0,
	category_id BIGINT(20),
	register_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	update_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	UNIQUE KEY id(id)
);