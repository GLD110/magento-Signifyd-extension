<?php 
class VS_Bestseller_Block_Bestseller extends Mage_Core_Block_Template { 
	 public function __construct(){
        parent::__construct();
        $storeId = Mage::app()->getStore()->getId();
		$howmany	=	Mage::getStoreConfig('bestseller/general/howmany');	
        $products = Mage::getResourceModel('reports/product_collection')
            ->addOrderedQty()
           // ->addAttributeToSelect('*')
            ->addAttributeToSelect(array('name', 'price', 'thumbnail'))
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->setOrder('ordered_qty', 'desc'); // most best sellers on top
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);
 
        $products->setPageSize($howmany)->setCurPage(1);
        $this->setProductCollection($products);
    }
}  