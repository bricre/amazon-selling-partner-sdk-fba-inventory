<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Summarized inventory details. This object will not appear if the details
 * parameter in the request is false.
 */
class InventoryDetails extends AbstractModel
{
    /**
     * The item quantity that can be picked, packed, and shipped.
     *
     * @var int
     */
    public $fulfillableQuantity = null;

    /**
     * The number of units in an inbound shipment for which you have notified Amazon.
     *
     * @var int
     */
    public $inboundWorkingQuantity = null;

    /**
     * The number of units in an inbound shipment that you have notified Amazon about
     * and have provided a tracking number.
     *
     * @var int
     */
    public $inboundShippedQuantity = null;

    /**
     * The number of units that have not yet been received at an Amazon fulfillment
     * center for processing, but are part of an inbound shipment with some units that
     * have already been received and processed.
     *
     * @var int
     */
    public $inboundReceivingQuantity = null;

    /**
     * @var \Amz\FbaInventory\Model\ReservedQuantity
     */
    public $reservedQuantity = null;

    /**
     * @var \Amz\FbaInventory\Model\ResearchingQuantity
     */
    public $researchingQuantity = null;

    /**
     * @var \Amz\FbaInventory\Model\UnfulfillableQuantity
     */
    public $unfulfillableQuantity = null;
}
