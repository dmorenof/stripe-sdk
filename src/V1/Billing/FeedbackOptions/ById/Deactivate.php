<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\FeedbackOptions\ById;

final class Deactivate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/feedback_options/{id}/deactivate [operationId: PostBillingFeedbackOptionsIdDeactivate] */
    /**
     * Deactivate a feedback option
     *
     * <p>Deactivates a feedback option. Deactivated feedback options cannot be used in portal configurations.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\FeedbackOptions\ById\Deactivate\Post $payload = null): \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\FeedbackOptions\ById\Deactivate::class)->post($id, $payload);
    }
}
