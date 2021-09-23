<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the getInventorySummaries operation.
 */
class GetInventorySummariesResult extends AbstractModel
{
    /**
     * @var \Amz\FbaInventory\Model\Granularity
     */
    public $granularity = null;

    /**
     * @var \Amz\FbaInventory\Model\InventorySummaries
     */
    public $inventorySummaries = null;
}
