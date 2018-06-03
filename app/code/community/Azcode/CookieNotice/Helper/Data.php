<?php
/**
 * 		Copyright 2018, All rights reserved.
 * 		Helper Class for Cookie Notice
**/
class Azcode_CookieNotice_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isActive() {
		return Mage::getStoreConfig('cookienotice/general/show');
	}

	public function getPosition() {
		$positionCode = "";

		$type = $this->getType();
		if ($type == "notice_bar") {
			$position = $this->getBarPosition();
			if ($position == "notice_bar_bottom") {
				$positionCode = "";
			} else if ($position == "notice_bar_top") {
				$positionCode = "topFixed";
			} else if ($position == "notice_bar_top_sticky") {
				$positionCode = "top";
			}
		} else if ($type == "notice_box") {
			$position = $this->getBoxPosition();
			if ($position == "notice_box_bottom_left") {
				$positionCode = "bottom-left";
			} else if ($position == "notice_box_bottom_right") {
				$positionCode = "bottom-right";
			}
		}

		return $positionCode;
	}
	public function getType() {
		return Mage::getStoreConfig('cookienotice/general/type');
	}

	public function getBarPosition() {
		return Mage::getStoreConfig('cookienotice/general/bar_position');
	}

	public function getBoxPosition() {
		return Mage::getStoreConfig('cookienotice/general/box_position');
	}

	public function getTheme() {
		$layout = $this->getLayout();
		$themeCode = "";
		if ($layout != "notice_layout_simple") {
			if ($layout == "notice_layout_round_edges") {
				$themeCode = "classic";
			}
			else if ($layout == "notice_layout_edgeless") {
				$themeCode = "edgeless";
			}
			else if ($layout == "notice_layout_wire") {
				$themeCode = "border";
			}
		}
		return $themeCode;
	}

	public function getLayout() {
		return Mage::getStoreConfig('cookienotice/general/layout');
	}

	public function getBannerText() {
		return Mage::getStoreConfig('cookienotice/content/banner_text');
	}

	public function getBannerButtonText() {
		return Mage::getStoreConfig('cookienotice/content/banner_button_text');
	}

	public function getReadmoreLinkText() {
		return Mage::getStoreConfig('cookienotice/content/readmore_link_text');
	}

	public function getCmsPage() {
		$pageId = Mage::getStoreConfig('cookienotice/content/cms_page');
		return Mage::helper('cms/page')->getPageUrl($pageId);
	}

	public function getBannerColor() {
		return Mage::getStoreConfig('cookienotice/style/banner_color');
	}

	public function getBannerTextColor() {
		return Mage::getStoreConfig('cookienotice/style/banner_text_color');
	}

	public function getButtonColor() {
		return Mage::getStoreConfig('cookienotice/style/button_color');
	}

	public function getButtonTextColor() {
		return Mage::getStoreConfig('cookienotice/style/button_text_color');
	}
}
