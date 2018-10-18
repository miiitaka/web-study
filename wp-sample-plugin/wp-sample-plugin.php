<?php
/*
Plugin Name: WordPress Sample Plugin
Plugin URI: https://github.com/miiitaka/web-study/tree/201801/wp-sample-plugin
Descrition: WordPress Plugin sample build.
Version: 1.0.0
Author: web-study
Author URI: https://github.com/miiitaka/web-study/tree/201801/wp-sample-plugin
License: GPLv2 or later
*/
class Human {
	public $para = array();

	public function __construct( $para ) {
		$this->$name = $name;
	}

	public function cry() {
		echo $this->para['voice'];
	}

	public function attack() {
		$range = rand(0, 5);
		$sign = rand(0, 1);
		if ($sign === 0) {
			$range = $range * -1;
		}
		$range += $this->para['power'];
		echo $this->para['name'] . 'の攻撃！<br>';
		echo $this->para['name'] . 'は、' .  $range . 'のダメージを与えた！';

		return $range;
	}

	public function die_flag( $damage, $name ) {
		$this->para['hp'] -= $damage;
		if ( $this->para['para'] <= 0) {
			echo $this->para['name'] . 'は、' . $name . 'に殴られた！';
			echo $this->para['name'] . 'は、死んでしまった......';
		}
	}
}
$yamada_para = array(
	'name'  => 'Taro',
	'hp'    => 10,
	'power' => 10,
	'speed' => 500,
	'voice' => 'おぎゃああああああ！！！'
);
$suzuki_para = array(
	'name'  => 'Ichiro',
	'hp'    => 100,
	'power' => 30,
	'speed' => 5,
	'voice' => 'ひゃああああああ！！！'
);

$yamada = new Human( $yamada_para );
$suzuki = new Human( $suzuki_para );

$damage = $suzuki->attack()
$yamada->die_flag( $damage, $suzuki->para['name'] );
