<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The quantity of reserved inventory.
 */
class ReservedQuantity extends AbstractModel
{
    /**
     * The total number of units in Amazon's fulfillment network that are currently
     * being picked, packed, and shipped; or are sidelined for measurement, sampling,
     * or other internal processes.
     *
     * @var int
     */
    public $totalReservedQuantity = null;

    /**
     * The number of units reserved for customer orders.
     *
     * @var int
     */
    public $pendingCustomerOrderQuantity = null;

    /**
     * The number of units being transferred from one fulfillment center to another.
     *
     * @var int
     */
    public $pendingTransshipmentQuantity = null;

    /**
     * The number of units that have been sidelined at the fulfillment center for
     * additional processing.
     *
     * @var int
     */
    public $fcProcessingQuantity = null;
}
