<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageCode\MinimumOrderFix\Plugin;

class ValidationMessage
{
    public function afterGetMessage($subject, $result)
    {
        if (is_string($result)) {
            $result = new \Magento\Framework\Phrase($result);
        }
        return $result;
    }
}
