<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication;

use Pyz\Zed\AntelopeLocationGui\Communication\Form\AntelopeLocationCreateForm;
use Pyz\Zed\AntelopeLocationGui\Communication\Table\AntelopeLocationTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class AntelopeLocationGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createAntelopeLocationCreateForm()
    {
        return $this->getFormFactory()->create(AntelopeLocationCreateForm::class);
    }

    public function createAntelopeLocationTable(): AntelopeLocationTable
    {
        return new AntelopeLocationTable();
    }
}
