<?php

class VS_Bestseller_Block_About
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logopath	=	'http://www.magentocommerce.com/images/avatars/uploads/avatar_311790.jpg';
        $html = <<<HTML
<div style="background:url('$logopath') no-repeat scroll 14px 14px #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 5px 5px 164px;">
     <p>
        <strong>PREMIUM and FREE MAGENTO TEMPALTES and EXTENSIONS</strong><br />
        <a href="http://www.magentocommerce.com/magento-connect/developer/virendra#extensions" target="_blank">VS</a> offers a wide choice of nice-looking and easily editable free and premium Magento extensions. You can find free extensions for the extremely popular Magento eCommerce platform.<br />       
    </p>
    <p>
        My extensions on <a href="http://www.magentocommerce.com/magento-connect/developer/virendra#extensions" target="_blank">MagentoConnect</a><br />
        Should you have any questions email at <a href="mailto:bhardwajveerendra@gmail.com">bhardwajveerendra@gmail.com</a>
        <br />
    </p>
</div>
HTML;
        return $html;
    }
}
