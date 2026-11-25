<?php

declare(strict_types=1);

namespace StripeSDK\V1\Subscriptions;

final class Search extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/subscriptions/search [operationId: GetSubscriptionsSearch] */
    /**
     * Search subscriptions
     *
     * <p>Search for subscriptions you’ve previously created using Stripe’s <a href="/docs/search#search-query-language">Search Query Language</a>.
     * Don’t use search in read-after-write flows where strict consistency is necessary. Under normal operating
     * conditions, data is searchable in less than a minute. Occasionally, propagation of new or updated data can be up
     * to an hour behind during outages. Search functionality is not available to merchants in India.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Subscriptions\Search $params): \StripeSDK\Responses\V1\Subscriptions\Search\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Subscriptions\Search::class)->get($params);
    }
}
