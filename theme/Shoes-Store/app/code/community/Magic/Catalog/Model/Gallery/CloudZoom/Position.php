<?php
class Magic_Catalog_Model_Gallery_CloudZoom_Position
{

    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'left',
                'label' => 'Left Side'
            ),
            array(
                'value' => 'right',
                'label' => 'Right Side'
            ),
            array(
                'value' => 'right',
                'label' => 'Right Side'
            ),
            array(
                'value' => 'top',
                'label' => 'Top Side'
            ),
            array(
                'value' => 'bottom',
                'label' => 'Bottom Side'
            ),
            array(
                'value' => 'inside',
                'label' => 'Inside Original Image'
            )
        );
    }
}
