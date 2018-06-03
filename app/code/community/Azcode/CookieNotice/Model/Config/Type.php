<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Model Class for Cookie Notice Types
 */
class Azcode_CookieNotice_Model_Config_Type
{
	public function toOptionArray() {
		return array(
			array(
				'value' => 'notice_bar',
				'label' => 'Bar'
			),
			array(
				'value' => 'notice_box',
				'label' => 'Box'
			),
		);
	}
}
