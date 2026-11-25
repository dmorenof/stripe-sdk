<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * ID of an existing PaymentMethod.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * If provided, this hash will be used to create a PaymentMethod.
     */
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment-method-specific configuration for this ConfirmationToken.
     */
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\MethodOptionsRequest $payment_method_options;
    /**
     * Return URL used to confirm the Intent.
     */
    public string $return_url;
    /**
     * Indicates that you intend to make future payments with this ConfirmationToken's payment method.
     *
     * The presence of this property will [attach the payment method](https://docs.stripe.com/payments/save-during-payment) to the PaymentIntent's Customer, if present, after the PaymentIntent is confirmed and any required actions from the user are complete.
     */
    public \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\FutureUsageEnum $setup_future_usage;
    /**
     * Shipping information for this ConfirmationToken.
     */
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\ConfirmationTokensShippingRequest $shipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
