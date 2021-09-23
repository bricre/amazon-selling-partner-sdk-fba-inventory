<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The misplaced or warehouse damaged inventory that is actively being confirmed at
 * our fulfillment centers.
 */
class ResearchingQuantityEntry extends AbstractModel
{
    /**
     * The duration of the research.
     *
     * @var string
     */
    public $name = null;

    /**
     * The number of units.
     *
     * @var int
     */
    public $quantity = null;
}
