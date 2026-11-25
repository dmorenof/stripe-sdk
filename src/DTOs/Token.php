<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Token
 *
 * Tokenization is the process Stripe uses to collect sensitive card or bank
 * account details, or personally identifiable information (PII), directly from
 * your customers in a secure manner. A token representing this information is
 * returned to your server to use. Use our
 * [recommended payments integrations](https://docs.stripe.com/payments) to perform this process
 * on the client-side. This guarantees that no sensitive card data touches your server,
 * and allows your integration to operate in a PCI-compliant way.
 *
 * If you can't use client-side tokenization, you can also create tokens using
 * the API with either your publishable or secret API key. If
 * your integration uses this method, you're responsible for any PCI compliance
 * that it might require, and you must keep your secret API key safe. Unlike with
 * client-side tokenization, your customer's information isn't sent directly to
 * Stripe, so we can't determine how it's handled or stored.
 *
 * You can't store or use tokens more than once. To store card or bank account
 * information for later use, create [Customer](https://docs.stripe.com/api#customers)
 * objects or [External accounts](/api#external_accounts).
 * [Radar](https://docs.stripe.com/radar), our integrated solution for automatic fraud protection,
 * performs best with integrations that use client-side tokenization.
 */
final class Token extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'type',
        'used',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'client_ip' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\BankAccount $bank_account;
    public \StripeSDK\DTOs\Card $card;
    /**
     * IP address of the client that generates the token.
     */
    public ?string $client_ip {
        set {
            $this->assigning('client_ip', $value);
            $this->client_ip = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Token\ObjectEnum $object_;
    /**
     * Type of the token: `account`, `bank_account`, `card`, or `pii`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    /**
     * Determines if you have already used this token (you can only use tokens once).
     */
    public bool $used;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => $value instanceof \stdClass ? $this->bank_account = new \StripeSDK\DTOs\BankAccount($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Card($value) : parent::assignMember($name, $value),
            'client_ip' => $value === null || is_string($value) ? $this->client_ip = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Token\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'used' => is_bool($value) ? $this->used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
