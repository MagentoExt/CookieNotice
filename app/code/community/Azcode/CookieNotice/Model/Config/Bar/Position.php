<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Model Class for Cookie Notice Position
 */
class Azcode_CookieNotice_Model_Config_Bar_Position
{
	public function toOptionArray() {
		return array(
			array(
				'value' => 'notice_bar_bottom',
				'label' => 'Bottom'
			),
			array(
				'value' => 'notice_bar_top',
				'label' => 'Top'
			),
			array(
				'value' => 'notice_bar_top_sticky',
				'label' => 'Sticky Top'
			),
		);
	}
}
