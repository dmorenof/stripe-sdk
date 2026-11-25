<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * async_workflows_param
 *
 * Automations to be run during the PaymentIntent lifecycle
 */
final class PaymentIntentsHooksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\Post\Hooks\HooksInputsRequest $inputs;
}
