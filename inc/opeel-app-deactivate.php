<?php
/**
 * @package  AppLe
 */

class opeelAppDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
