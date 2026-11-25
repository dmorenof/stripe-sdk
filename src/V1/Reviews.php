<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Reviews extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/reviews [operationId: GetReviews] */
    /**
     * List all open reviews
     *
     * <p>Returns a list of <code>Review</code> objects that have <code>open</code> set to <code>true</code>. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Reviews $params = null): \StripeSDK\Responses\V1\Reviews\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reviews::class)->get($params);
    }

    /** GET /v1/reviews/{review} [operationId: GetReviewsReview] */
    /**
     * Retrieve a review
     *
     * <p>Retrieves a <code>Review</code> object.</p>
     */
    public static function getByReview(string $review, ?\StripeSDK\GetParams\V1\Reviews\ByReview $params = null): \StripeSDK\DTOs\Review|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reviews::class)->getByReview($review, $params);
    }
}
