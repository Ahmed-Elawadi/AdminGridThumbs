<?php 
class ThinkEgyptian_Gridthumbs_Adminhtml_Block_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    protected function _prepareColumns()
    {
        $this->addColumn('image', array(
            'header' => Mage::helper('catalog')->__('Image'),
            'align' => 'left',
            'index' => 'thumbnail',
            'width'     => '70',
            'renderer' => 'ThinkEgyptian_Gridthumbs_Block_Adminhtml_Template_Grid_Renderer_Image'
        )); 
        return parent::_prepareColumns();
    }
}