<?php
class FireGento_GridControl_Block_Adminhtml_Template_Grid_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $width = 75;
        if ($row->hasData('image')) {
            $image = Mage::helper('catalog/image')->init($row, 'image')->resize($width);
            return '<img src="'. $image .'" width="' . $width .'px" style="margin: 0 auto; display: block;"/>';
        }

    }
}
