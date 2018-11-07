<?php
/**
 * Class List Page
 *
 * @author web-study
 * @version 1.0.0
 * @since 1.0.0
 */
class Sample_Plugin_Admin_Db {
	private $table_name;

	/**
	 * Constructor
	 *
	 * @version 1.0.0
	 * @since 1.0.0
	 */
	public function __construct() {
		global $wpdb;
		$this->table_name = $wpdb->prefix . 'sample_plugin';
	}

	/**
	 * Create main table.
	 *
	 * @version 1.0.0
	 * @since 1.0.0
	 */
	public function create_table() {
		global $wpdb;

		$prepared         = $wpdb->prepare( "SHOW TABLES %s" , $this->table_name );
		$is_db_exist      = $wpdb->get_var( $prepared );
		$chareset_collate = $wpdb->get_chareset_collate();

		if ( is_null( $is_db_exist ) ) {
			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

			$query  = "CREATE TABLE wp_sample_post(";
			$query .= "id MEDIUMINT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY,";
			$query .= "image_url TEXT NOT NULL,";
			$query .= "image_alt TEXT,";
			$query .= "link_url TEXT,";
			$query .= "open_new_tab TINYINT(1) DEFAULT 0,";
			$query .= "insert_element_class TINYTEXT,";
			$query .= "insert_element_id TINYTEXT,";
			$query .= "how_display TINYTEXT,";
			$query .= "filter_category TINYINT(1) DEFAULT 0,";
			$query .= "category_id BIGINT(20),";
			$query .= "register_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',";
			$query .= "update_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',";
			$query .= "UNIQUE KEY id(id)";
			$query .= ") " . $chareset_collate;

			dbDelta( $query );
		}
	}

}