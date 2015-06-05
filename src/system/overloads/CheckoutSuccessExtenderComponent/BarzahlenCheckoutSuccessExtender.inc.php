<?php
/**
 * Barzahlen Payment Module (Gambio)
 *
 * @copyright   Copyright (c) 2015 Cash Payment Solutions GmbH (https://www.barzahlen.de)
 * @author      Alexander Diebler
 * @license     http://opensource.org/licenses/GPL-2.0  GNU General Public License, version 2 (GPL-2.0)
 */

class BarzahlenCheckoutSuccessExtender extends BarzahlenCheckoutSuccessExtender_parent
{
    function proceed()
    {
        parent::proceed();

        if (isset($_SESSION['infotext-1'])) {
            $this->v_output_buffer['BARZAHLEN_BLOCK'] = $_SESSION['infotext-1'];
            unset($_SESSION['infotext-1']);
        }
    }
}
