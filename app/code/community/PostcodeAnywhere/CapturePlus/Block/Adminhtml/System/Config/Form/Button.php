<?php

class PostcodeAnywhere_CapturePlus_Block_Adminhtml_System_Config_Form_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('captureplus/system/config/button.phtml');
        //die($this->getTemplate());
    }

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }

    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
            'id'        => 'postcodeanywherecaptureplus_button',
            'label'     => $this->helper('adminhtml')->__('Login'),
            'onclick'   => 'javascript:login(); return false;'
        ));

        return $button->toHtml();
    }
}