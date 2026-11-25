<?php

declare(strict_types=1);

namespace StripeSDK\V1\Products;

final class Search extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/products/search [operationId: GetProductsSearch] */
    /**
     * Search products
     *
     * <p>Search for products you’ve previously created using Stripe’s <a href="/docs/search#search-query-language">Search Query Language</a>.
     * Don’t use search in read-after-write flows where strict consistency is necessary. Under normal operating
     * conditions, data is searchable in less than a minute. Occasionally, propagation of new or updated data can be up
     * to an hour behind during outages. Search functionality is not available to merchants in India.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Products\Search $params): \StripeSDK\Responses\V1\Products\Search\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products\Search::class)->get($params);
    }
}
