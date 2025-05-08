<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Condition;

use Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer;
use Spryker\Zed\Oms\Communication\Plugin\Oms\Condition\AbstractCondition;

class IsPaymentAuthorizedCondition extends AbstractCondition
{
    /**
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $orderItem
     *
     * @return bool
     */
    public function checkCondition(SpySalesOrderItemEntityTransfer $orderItem): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'IsPaymentAuthorized';
    }
}
