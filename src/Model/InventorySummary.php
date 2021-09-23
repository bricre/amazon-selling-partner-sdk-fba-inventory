<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Inventory summary for a specific item.
 */
class InventorySummary extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of an item.
     *
     * @var string
     */
    public $asin = null;

    /**
     * Amazon's fulfillment network SKU identifier.
     *
     * @var string
     */
    public $fnSku = null;

    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $sellerSku = null;

    /**
     * The condition of the item as described by the seller (for example, New Item).
     *
     * @var string
     */
    public $condition = null;

    /**
     * @var \Amz\FbaInventory\Model\InventoryDetails
     */
    public $inventoryDetails = null;

    /**
     * The date and time that any quantity was last updated.
     *
     * @var string
     */
    public $lastUpdatedTime = null;

    /**
     * The localized language product title of the item within the specific
     * marketplace.
     *
     * @var string
     */
    public $productName = null;

    /**
     * The total number of units in an inbound shipment or in Amazon fulfillment
     * centers.
     *
     * @var int
     */
    public $totalQuantity = null;
}
