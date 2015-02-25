<?php

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
