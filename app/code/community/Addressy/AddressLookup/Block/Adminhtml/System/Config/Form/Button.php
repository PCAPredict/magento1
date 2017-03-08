<?php

class Addressy_AddressLookup_Block_Adminhtml_System_Config_Form_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('addresslookup/system/config/button.phtml');
    }

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }

    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
            'id'        => 'addressyaddresslookup_button',
            'label'     => $this->helper('adminhtml')->__('Login'),
            'onclick'   => 'javascript:login(); return false;'
        ));

        return $button->toHtml();
    }
}