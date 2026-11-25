<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post;

/**
 * async_workflows_param
 *
 * Automations to be run during the PaymentIntent lifecycle
 */
final class CaptureHooksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\Hooks\HooksInputsRequest $inputs;
}
