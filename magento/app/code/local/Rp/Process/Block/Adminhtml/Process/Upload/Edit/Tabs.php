<?php
class Rp_Process_Block_Adminhtml_Process_Upload_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('upload_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('process')->__('Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section1', array(
          'label'     => Mage::helper('process')->__('Upload Information'),         
          'content'   => $this->getLayout()->createBlock('process/adminhtml_process_upload_edit_tab_form')->toHtml(),
      ));

      return parent::_beforeToHtml();
  }
}