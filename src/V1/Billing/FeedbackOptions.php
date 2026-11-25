<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class FeedbackOptions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/feedback_options [operationId: GetBillingFeedbackOptions] */
    /**
     * List all feedback options
     *
     * <p>Returns a list of your feedback options.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Billing\FeedbackOptions $params = null): \StripeSDK\Responses\V1\Billing\FeedbackOptions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\FeedbackOptions::class)->get($params);
    }

    /** POST /v1/billing/feedback_options [operationId: PostBillingFeedbackOptions] */
    /**
     * Create a feedback option
     *
     * <p>Creates a new feedback option.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\FeedbackOptions\Post $payload): \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\FeedbackOptions::class)->post($payload);
    }

    /** GET /v1/billing/feedback_options/{id} [operationId: GetBillingFeedbackOptionsId] */
    /**
     * Retrieve a feedback option
     *
     * <p>Retrieves a feedback option object given an ID.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\FeedbackOptions\ById $params = null): \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\FeedbackOptions::class)->getById($id, $params);
    }

    /** POST /v1/billing/feedback_options/{id} [operationId: PostBillingFeedbackOptionsId] */
    /**
     * Update a feedback option
     *
     * <p>Updates the description of an existing feedback option.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Billing\FeedbackOptions\ById\Post $payload = null): \StripeSDK\DTOs\Billing\FeedbackOption|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\FeedbackOptions::class)->postById($id, $payload);
    }
}
