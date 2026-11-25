<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post;

/**
 * async_workflows_param
 *
 * Automations to be run during the PaymentIntent lifecycle
 */
final class ConfirmHooksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\Hooks\HooksInputsRequest $inputs;
}
