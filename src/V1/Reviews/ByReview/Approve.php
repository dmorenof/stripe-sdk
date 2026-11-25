<?php

declare(strict_types=1);

namespace StripeSDK\V1\Reviews\ByReview;

final class Approve extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/reviews/{review}/approve [operationId: PostReviewsReviewApprove] */
    /**
     * Approve a review
     *
     * <p>Approves a <code>Review</code> object, closing it and removing it from the list of reviews.</p>
     */
    public static function post(string $review, ?\StripeSDK\Requests\V1\Reviews\ByReview\Approve\Post $payload = null): \StripeSDK\DTOs\Review|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reviews\ByReview\Approve::class)->post($review, $payload);
    }
}
