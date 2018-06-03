<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Model Class for Cookie Notice Position
 */
class Azcode_CookieNotice_Model_Config_Box_Position
{
	public function toOptionArray() {
		return array(
			array(
				'value' => 'notice_box_bottom_left',
				'label' => 'Bottom left'
			),
			array(
				'value' => 'notice_box_bottom_right',
				'label' => 'Bottom right'
			),
		);
	}
}
