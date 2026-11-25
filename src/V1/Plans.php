<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Plans extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/plans [operationId: GetPlans] */
    /**
     * List all plans
     *
     * <p>Returns a list of your plans.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Plans $params = null): \StripeSDK\Responses\V1\Plans\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Plans::class)->get($params);
    }

    /** POST /v1/plans [operationId: PostPlans] */
    /**
     * Create a plan
     *
     * <p>You can now model subscriptions more flexibly using the <a href="#prices">Prices API</a>. It replaces the Plans API and is backwards compatible to simplify your migration.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Plans\Post $payload): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Plans::class)->post($payload);
    }

    /** DELETE /v1/plans/{plan} [operationId: DeletePlansPlan] */
    /**
     * Delete a plan
     *
     * <p>Deleting plans means new subscribers can’t be added. Existing subscribers aren’t affected.</p>
     */
    public static function deleteByPlan(string $plan, ?\StripeSDK\Requests\V1\Plans\ByPlan\Delete $payload = null): \StripeSDK\DTOs\Deleted\Plan|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Plans::class)->deleteByPlan($plan, $payload);
    }

    /** GET /v1/plans/{plan} [operationId: GetPlansPlan] */
    /**
     * Retrieve a plan
     *
     * <p>Retrieves the plan with the given ID.</p>
     */
    public static function getByPlan(string $plan, ?\StripeSDK\GetParams\V1\Plans\ByPlan $params = null): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Plans::class)->getByPlan($plan, $params);
    }

    /** POST /v1/plans/{plan} [operationId: PostPlansPlan] */
    /**
     * Update a plan
     *
     * <p>Updates the specified plan by setting the values of the parameters passed. Any parameters not provided are left unchanged. By design, you cannot change a plan’s ID, amount, currency, or billing cycle.</p>
     */
    public static function postByPlan(string $plan, ?\StripeSDK\Requests\V1\Plans\ByPlan\Post $payload = null): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Plans::class)->postByPlan($plan, $payload);
    }
}
