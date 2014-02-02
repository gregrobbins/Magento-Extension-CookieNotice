<?php

/**
 * Optimiseweb CookieNotice Model System Config Source Barposition
 *
 * @package     Optimiseweb_CookieNotice
 * @author      Kathir Vel (sid@optimiseweb.co.uk)
 * @copyright   Copyright (c) 2014 Optimise Web
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_CookieNotice_Model_System_Config_Source_Barposition
{

    /**
     *
     * @return array
     */
    public function toOptionArray()
    {
        $barPositionArray['top'] = 'Top';
        $barPositionArray['bottom'] = 'Bottom';

        return $barPositionArray;
    }

}
