<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Model Class for Cookie Notice Display
 */
class Azcode_CookieNotice_Model_Config_Show
{
	public function toOptionArray() {
		return array(
			array(
				'value' => '1',
				'label' => 'Show'
			),
			array(
				'value' => '0',
				'label' => 'Hide'
			),
		);
	}
}
