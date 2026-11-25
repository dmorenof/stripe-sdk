<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\Post;

/**
 * lifecycle_controls_param
 *
 * Rules that control the lifecycle of this card, such as automatic cancellation. Refer to our [documentation](/issuing/controls/lifecycle-controls) for more details.
 */
final class LifecycleControlsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cancel_after',
    ];

    public \StripeSDK\Requests\V1\Issuing\Cards\Post\LifecycleControls\CancelAfterRequest $cancel_after;
}
