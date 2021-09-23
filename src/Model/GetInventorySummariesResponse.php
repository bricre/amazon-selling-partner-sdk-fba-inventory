<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The Response schema.
 */
class GetInventorySummariesResponse extends AbstractModel
{
    /**
     * The payload for the getInventorySummaries operation.
     *
     * @var \Amz\FbaInventory\Model\GetInventorySummariesResult
     */
    public $payload = null;

    /**
     * @var \Amz\FbaInventory\Model\Pagination
     */
    public $pagination = null;

    /**
     * One or more unexpected errors occurred during the getInventorySummaries
     * operation.
     *
     * @var \Amz\FbaInventory\Model\ErrorList
     */
    public $errors = null;
}
