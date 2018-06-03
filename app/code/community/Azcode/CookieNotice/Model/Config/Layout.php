<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Model Class for Cookie Notice Types
 */
class Azcode_CookieNotice_Model_Config_Layout
{
	public function toOptionArray() {
		return array(
			array(
				'value' => 'notice_layout_simple',
				'label' => 'Simple'
			),
			array(
				'value' => 'notice_layout_round_edges',
				'label' => 'Round edges'
			),
			array(
				'value' => 'notice_layout_edgeless',
				'label' => 'Edgeless'
			),
			array(
				'value' => 'notice_layout_wire',
				'label' => 'Button border'
			),
		);
	}
}
