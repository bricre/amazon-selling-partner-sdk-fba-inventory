<?php

namespace Amz\FbaInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The process of returning the results to a request in batches of a defined size
 * called pages. This is done to exercise some control over result size and overall
 * throughput. It's a form of traffic management.
 */
class Pagination extends AbstractModel
{
    /**
     * A generated string used to retrieve the next page of the result. If nextToken is
     * returned, pass the value of nextToken to the next request. If nextToken is not
     * returned, there are no more items to return.
     *
     * @var string
     */
    public $nextToken = null;
}
