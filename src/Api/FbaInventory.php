<?php

namespace Amz\FbaInventory\Api;

use Amz\FbaInventory\Model\GetInventorySummariesResponse as GetInventorySummariesResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FbaInventory extends AbstractAPI
{
    /**
     * Returns a list of inventory summaries. The summaries returned depend on the
     * presence or absence of the startDateTime and sellerSkus parameters:.
     *
     * - All inventory summaries with available details are returned when the
     * startDateTime and sellerSkus parameters are omitted.
     * - When startDateTime is provided, the operation returns inventory summaries that
     * have had changes after the date and time specified. The sellerSkus parameter is
     * ignored.
     * - When the sellerSkus parameter is provided, the operation returns inventory
     * summaries for only the specified sellerSkus.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'details'		true to return inventory summaries with additional summarized
     *                       inventory details and quantities. Otherwise, returns inventory summaries only
     *                       (default value).
     *                       'granularityId'		The granularity ID for the inventory aggregation level.
     *                       'startDateTime'		A start date and time in ISO8601 format. If specified, all
     *                       inventory summaries that have changed since then are returned. You must specify
     *                       a date and time that is no earlier than 18 months prior to the date and time
     *                       when you call the API. Note: Changes in inboundWorkingQuantity,
     *                       inboundShippedQuantity and inboundReceivingQuantity are not detected.
     *                       'sellerSkus'		A list of seller SKUs for which to return inventory summaries. You
     *                       may specify up to 50 SKUs.
     *                       'nextToken'		String token returned in the response of your previous request.
     *                       'marketplaceIds'		The marketplace ID for the marketplace for which to return
     *                       inventory summaries.
     *
     * @return GetInventorySummariesResponse
     */
    public function getInventorySummaries(array $queries = []): GetInventorySummariesResponse
    {
        return $this->client->request('getInventorySummaries', 'GET', 'fba/inventory/v1/summaries',
            [
                'query' => $queries,
            ]
        );
    }
}
