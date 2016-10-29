<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageCode\MinimumOrderFix\Plugin;

class QuoteAfter
{
    private $request;

    public function __construct(
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->request = $request;
    }

    public function afterValidateMinimumAmount($subject, $result)
    {
        $fullActionName = $this->request->getFullActionName();
        if (in_array($fullActionName, ['checkout_cart_index','checkout_index_index'])) {
            return $result;
        }
        return true;
    }
}
