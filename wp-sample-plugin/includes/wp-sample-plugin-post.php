<?php
/**
 * Class Post Page
 *
 * @author web-study
 * @version 1.0.0
 * @since   1.0.0
 */
class Sample_Plugin_Post {
	/**
	 * Constructor
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	public function __construct() {
		$db = new Sample_Plugin_Admin_Db();
		$db->insert_options( $_POST );

		$this->page_render();
	}
	
	/**
	 * Rendaring Page
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	private function page_render() {
		$html  = '<div class="wrap">';
		$html .= '<h1 class-"wp-heading-inline">サンプル登録</h1>';

		echo $html;

		$html  = '<form method="post" action="">';
		$html .= '<input type="hidden" name="sample_id" value="">';

		$html .= '<h2>バナー設定</h2>';
		$html .= '<table class="form-table">';

		$html .= '<tr>';
		$html .= '<th>画像の URL (必須)</th>';
		$html .= '<td>';
		$html .= '<img id="banner-image-view" src="' . plugins_url('../images/no-image.png', __FILE__) . '" width="200">';
		$html .= '<input id="banner-image-url" type="text" class="large-text" name="sample-image-url" required>';
		$html .= '<button id="media-upload" class="button">画像を選択</button>';
		$html .= '</td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>画像 Alt属性</th>';
		$html .= '<td><input id="banner-image-alt" type="text" class="regular-text" name="sample-image-alt">';
		$html .= '<p class="description">alt属性のテキストを入力します。</p></td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>リンク URL</th>';
		$html .= '<td><input type="text" class="large-text" name="sample-image-link">';
		$html .= '<p class="description">URLを入力すると、バナー画像にリンクを設定することができます。</p></td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>新規タブで開く</th>';
		$html .= '<td><input type="checkbox" name="sample-image-target">リンクを新規タブで開く</td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>Class名</th>';
		$html .= '<td><input type="text" class="regular-text" name="sample-element-class">';
		$html .= '<p class="description">バナー画像にクラス（複数可）を追加することができます。「class=""」は不要です。<br>複数設定する場合は、半角スペースで区切ります。</p></td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>ID名</th>';
		$html .= '<td><input type="text" class="regular-text" name="sample-element-id">';
		$html .= '<p class="description">バナー画像にIDを追加することができます。「id=""」は不要です。</p></td>';
		$html .= '</tr>';

		$html .= '</table>';

		$html .= '<h2>表示設定</h2>';
		$html .= '<table class="form-table">';
		$html .= '<tr>';
		$html .= '<th>表示方法 (必須)</th>';
		$html .= '<td>';
		$html .= '<input type="radio" name="sample-how-display" value="post_bottom" required>記事の下に表示<br>';
		$html .= '<input type="radio" name="sample-how-display" value="shortcode">ショートコードで表示';
		$html .= '</td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>絞り込み</th>';
		$html .= '<td>';
		$html .= '<input type="checkbox" name="sample-filter-category">カテゴリーで絞り込み';
		$html .= '<p class="description">チェックされていない場合は、すべてに無条件で表示され、「表示するカテゴリ」項目の設定は無視されます。</p>';
		$html .= '</td>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<th>表示するカテゴリ (必須)</th>';
		$html .= '<td>';

		echo $html;

		$args = array(
			'name' => 'sample-display-category',
			'hierarchical' => 1
		);
		wp_dropdown_categories( $args );

		$html  = '<p class="description">選択したカテゴリーが投稿に紐づいている場合のみ画像が表示されます。</p>';
		$html .= '</td>';
		$html .= '</tr>';

		$html .= '</table>';

		echo $html;

		submit_button();

		$html = '</form>';
		$html .= '</div>';

		echo $html;

		require_once( plugin_dir_path( __FILE__ ) . 'wp-sample-plugin-upload.php' );
	}
}