<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * CancellationDetails
 */
final class CancellationDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'comment' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Additional comments about why the user canceled the subscription, if the subscription was canceled explicitly by the user.
     */
    public ?string $comment {
        set {
            $this->assigning('comment', $value);
            $this->comment = $value;
        }
    }
    /**
     * The customer submitted reason for why they canceled, if the subscription was canceled explicitly by the user.
     */
    public ?\StripeSDK\Enums\CancellationDetails\FeedbackEnum $feedback;
    /**
     * Customized feedback options that provide deeper insight into why the subscription was canceled, if the subscription was canceled explicitly by the user.
     */
    public ?\StripeSDK\DTOs\CancellationDetails\FeedbackOptionDTO $feedback_option;
    /**
     * Why this subscription was canceled.
     */
    public ?\StripeSDK\Enums\CancellationDetails\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'comment' => $value === null || is_string($value) ? $this->comment = $value : parent::assignMember($name, $value),
            'feedback' => $value === null || is_string($value) ? $this->feedback = $value === null ? null : \StripeSDK\Enums\CancellationDetails\FeedbackEnum::from($value) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value === null ? null : \StripeSDK\Enums\CancellationDetails\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
