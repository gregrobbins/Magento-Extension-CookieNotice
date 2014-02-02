<?php

/**
 * Optimiseweb CookieNotice Model System Config Source Boxposition
 *
 * @package     Optimiseweb_CookieNotice
 * @author      Kathir Vel (sid@optimiseweb.co.uk)
 * @copyright   Copyright (c) 2014 Optimise Web
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_CookieNotice_Model_System_Config_Source_Boxposition
{

    /**
     *
     * @return array
     */
    public function toOptionArray()
    {
        $boxPositionArray['top-left'] = 'Top Left';
        $boxPositionArray['top-right'] = 'Top Right';
        $boxPositionArray['bottom-right'] = 'Bottom Right';
        $boxPositionArray['bottom-left'] = 'Bottom Left';

        return $boxPositionArray;
    }

}
