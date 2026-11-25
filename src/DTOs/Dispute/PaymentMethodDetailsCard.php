<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputePaymentMethodDetailsCard
 */
final class PaymentMethodDetailsCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brand',
        'case_type',
        'network',
    ];

    protected const array VALIDATION = [
        'brand' => [
            'maxLength' => 5000,
        ],
        'network' => [
            'maxLength' => 5000,
        ],
        'network_reason_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Card brand. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `jcb`, `link`, `mastercard`, `unionpay`, `visa` or `unknown`.
     */
    public string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * The type of dispute opened. Different case types may have varying fees and financial impact.
     */
    public \StripeSDK\Enums\Dispute\PaymentMethodDetailsCard\CaseTypeEnum $case_type;
    /**
     * Identifies which network this charge was processed on. Can be `amex`, `cartes_bancaires`, `diners`, `discover`, `eftpos_au`, `interac`, `jcb`, `link`, `mastercard`, `unionpay`, `visa`, or `unknown`.
     */
    public string $network {
        set {
            $this->assigning('network', $value);
            $this->network = $value;
        }
    }
    /**
     * The card network's specific dispute reason code, which maps to one of Stripe's primary dispute categories to simplify response guidance. The [Network code map](https://stripe.com/docs/disputes/categories#network-code-map) lists all available dispute reason codes by network.
     */
    public ?string $network_reason_code {
        set {
            $this->assigning('network_reason_code', $value);
            $this->network_reason_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'case_type' => is_string($value) ? $this->case_type = \StripeSDK\Enums\Dispute\PaymentMethodDetailsCard\CaseTypeEnum::from($value) : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = $value : parent::assignMember($name, $value),
            'network_reason_code' => $value === null || is_string($value) ? $this->network_reason_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
