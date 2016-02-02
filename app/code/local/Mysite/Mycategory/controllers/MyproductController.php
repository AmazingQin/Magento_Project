<?php
class Mysite_Mycategory_MyproductController extends Mage_Core_Controller_Front_Action {        
    
	public function indexAction() {
		$this->loadLayout();
		Mage::register('cat_id', $this->getRequest()->getParam('_catid'));
		$this->renderLayout();
    }

}