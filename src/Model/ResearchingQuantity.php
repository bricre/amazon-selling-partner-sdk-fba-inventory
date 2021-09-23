<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The number of misplaced or warehouse damaged units that are actively being
 * confirmed at our fulfillment centers.
 */
class ResearchingQuantity extends AbstractModel
{
    /**
     * The total number of units currently being researched in Amazon's fulfillment
     * network.
     *
     * @var int
     */
    public $totalResearchingQuantity = null;

    /**
     * A list of quantity details for items currently being researched.
     *
     * @var \Amz\FbaInventory\Model\ResearchingQuantityEntry[]
     */
    public $researchingQuantityBreakdown = null;
}
