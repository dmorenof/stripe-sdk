<?php

declare(strict_types=1);

namespace StripeSDK\V1\Sigma;

final class SavedQueries extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/sigma/saved_queries/{id} [operationId: PostSigmaSavedQueriesId] */
    /**
     * Update an existing Sigma Query
     *
     * <p>Update an existing Sigma query that previously exists</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Sigma\SavedQueries\ById\Post $payload = null): \StripeSDK\DTOs\Sigma\SigmaApiQuery|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sigma\SavedQueries::class)->postById($id, $payload);
    }
}
