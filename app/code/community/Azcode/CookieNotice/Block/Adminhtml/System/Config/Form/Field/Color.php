<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Block Class for Cookie Notice
**/
class Azcode_CookieNotice_Block_Adminhtml_System_Config_Form_Field_Color
	extends Mage_Adminhtml_Block_System_Config_Form_Field
{
	/**
	 * Add color picker
	 *
	 * @param Varien_Data_Form_Element_Abstract $element
	 * @return String
	 */
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
	{
		$element->addClass("color");
		$output = "";
		if (Mage::registry('jsColorLoaded') == false) {
			$jsPath = $this->getJsUrl("jscolor/jscolor.js");
			$output .= '<script type="text/javascript" src="'.$jsPath.'"></script>';
			Mage::register('jsColorLoaded', 1);
		}
		$output .= $element->getElementHtml();
		return $output;
	}
}
