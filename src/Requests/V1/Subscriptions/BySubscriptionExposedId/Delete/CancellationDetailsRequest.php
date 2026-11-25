<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Delete;

/**
 * cancellation_details_param
 *
 * Details about why this subscription was cancelled
 */
final class CancellationDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'feedback_option' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Delete\CancellationDetails\DetailsCommentRequest $comment;
    public \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Delete\CancellationDetails\DetailsFeedbackEnum $feedback;
    public string $feedback_option {
        set {
            $this->assigning('feedback_option', $value);
            $this->feedback_option = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feedback' => is_string($value) ? $this->feedback = \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Delete\CancellationDetails\DetailsFeedbackEnum::from($value) : parent::assignMember($name, $value),
            'feedback_option' => is_string($value) ? $this->feedback_option = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
