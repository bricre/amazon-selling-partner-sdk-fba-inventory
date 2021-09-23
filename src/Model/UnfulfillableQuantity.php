<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The quantity of unfulfillable inventory.
 */
class UnfulfillableQuantity extends AbstractModel
{
    /**
     * The total number of units in Amazon's fulfillment network in unsellable
     * condition.
     *
     * @var int
     */
    public $totalUnfulfillableQuantity = null;

    /**
     * The number of units in customer damaged disposition.
     *
     * @var int
     */
    public $customerDamagedQuantity = null;

    /**
     * The number of units in warehouse damaged disposition.
     *
     * @var int
     */
    public $warehouseDamagedQuantity = null;

    /**
     * The number of units in distributor damaged disposition.
     *
     * @var int
     */
    public $distributorDamagedQuantity = null;

    /**
     * The number of units in carrier damaged disposition.
     *
     * @var int
     */
    public $carrierDamagedQuantity = null;

    /**
     * The number of units in defective disposition.
     *
     * @var int
     */
    public $defectiveQuantity = null;

    /**
     * The number of units in expired disposition.
     *
     * @var int
     */
    public $expiredQuantity = null;
}
