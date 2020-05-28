<?php
/**
 * @package  Feed App
 */

class opeelAppActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}
