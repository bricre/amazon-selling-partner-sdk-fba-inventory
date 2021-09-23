<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Describes a granularity at which inventory data can be aggregated. For example,
 * if you use Marketplace granularity, the fulfillable quantity will reflect
 * inventory that could be fulfilled in the given marketplace.
 */
class Granularity extends AbstractModel
{
    /**
     * The granularity type for the inventory aggregation level.
     *
     * @var string
     */
    public $granularityType = null;

    /**
     * The granularity ID for the specified granularity type. When granularityType is
     * Marketplace, specify the marketplaceId.
     *
     * @var string
     */
    public $granularityId = null;
}
