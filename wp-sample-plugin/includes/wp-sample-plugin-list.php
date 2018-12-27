<?php
/**
 * Class List Page
 *
 * @author web-study
 * @version 1.0.0
 * @since 1.0.0
 */
class Sample_Plugin_List {
	/**
	 * Constructor
	 *
	 * @version 1.0.0
	 * @since 1.0.0
	 */
	public function __construct() {
		$db = new Sample_Plugin_Admin_Db();

		if ( isset( $_GET['mode'] ) && $_GET['mode'] === 'delete' ) {
			if ( isset($_GET['id']) && is_numeric($_GET['id']) ) {
				$db->delete_options( $_GET['id'] );
			}
			$this->information_render();
		}
		$this->page_render( $db );
	}
	
	/**
	 * Rendaring Page
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 * @param   Sample_Plugin_Admin_Db $db
	 */
	private function page_render( $db ) {
		$post_url = admin_url() . 'admin.php?page=wp-sample-plugin/includes/wp-sample-plugin-post.php';
		$self_url = $_SERVER[ 'PHP_SELF' ] . '?' . $_SERVER[ 'QUERY_STRING' ];

		$html  = '<div class="wrap">';
		$html .= '<h1 class-"wp-heading-inline">サンプル一覧</h1>';
		$html .= '<a href="' . $post_url . '" class="page-title-action">新規追加</a>';
		
		$html .= '<table>';
		$html .= '<tr>';
		$html .= '<th>画像</th>';
		$html .= '<th>画像ALT属性</th>';
		$html .= '<th>表示方法</th>';
		$html .= '<th>絞り込み</th>';
		$html .= '<th>&nbsp;</th>';
		$html .= '</tr>';

		$results = $db->get_list_opstions();

		if ( $results ) {
			foreach ( $results as $row) {
				$html .= '<tr>';
				$html .= '<td>' . $row->image_url . '</td>';
				$html .= '<td>' . $row->image_alt . '</td>';
				$html .= '<td>' . $row->how_display . '</td>';
				$html .= '<td>' . $row->filter_category . '</td>';
				$html .= '<td><a href="' . $post_url . '&id=' . $row->id . '">編集</a></td>';
				$html .= '<td><a href="' . $self_url . '&mode=delete&id=' . $row->id . '">削除</a></td>';
				$html .= '</tr>';
			}
		} else {
			$html .= '<tr>';
			$html .= '<td colspan="4">登録はありません</td>';
			$html .= '</tr>';
		}

		$html .= '</table>';
		$html .= '</div>';
		
		echo $html;
	}

	/**
	 * Information Message Render.
	 *
	 * @version 1.0.0
	 * @since 1.0.0
	 */
	private function information_render () {
		$html  = '<div id="message" class="updated notice notice-success is-dismissible blow-h2">';
		$html .= '<p>削除されました。＼(^o^)／</p>';
		$html .= '<button type="button" class="notice-dismiss"></button>';
		$html .= '</div>';

		echo $html;
	}
}