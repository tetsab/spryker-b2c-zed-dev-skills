<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Command;

use Spryker\Zed\Oms\Communication\Plugin\Oms\Command\CommandInterface;

class AuthorizePaymentCommand implements CommandInterface
{
    /**
     * @param array $orderItems
     * @param \Generated\Shared\Transfer\OrderTransfer|null $orderTransfer
     *
     * @return void
     */
    public function run(array $orderItems, $orderTransfer = null)
    {

    }
}
