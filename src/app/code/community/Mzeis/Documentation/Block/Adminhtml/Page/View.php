<?php

class Mzeis_Documentation_Block_Adminhtml_Page_View extends Mage_Adminhtml_Block_Template
{
    protected function _beforeToHtml()
    {
        if ($this->isAllowedEdit()) {
            $this->setChild('edit_button',
                $this->getLayout()->createBlock('adminhtml/widget_button')
                     ->setData(array(
                         'label' => Mage::helper('catalog')->__('Edit'),
                         'onclick' => 'window.location.href=\'' . Mage::helper('mzeis_documentation/page')->getEditUrl($this->getPage()->getName()) . '\'',
                         'class' => 'edit'
                     ))
            );
        }
        return parent::_beforeToHtml();
    }

    /**
     * @return bool
     */
    public function isAllowedEdit()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/mzeis_documentation/edit');
    }

    /**
     * Renders the content.
     *
     * @return string
     */
    public function renderContent()
    {
        return Mage::getModel('mzeis_documentation/page_renderer')->renderContent($this->getPage());
    }
}