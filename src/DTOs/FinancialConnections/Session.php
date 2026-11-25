<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections;

/**
 * Session
 *
 * A Financial Connections Session is the secure way to programmatically launch the client-side Stripe.js modal that lets your users link their accounts.
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accounts',
        'id',
        'livemode',
        'object_',
        'permissions',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account holder for whom accounts are collected in this session.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\Accountholder $account_holder;
    /**
     * The accounts that were collected as part of this Session.
     */
    public \StripeSDK\DTOs\FinancialConnections\Session\AccountsDTO $accounts;
    public \StripeSDK\DTOs\Token $bank_account_token;
    /**
     * A value that will be passed to the client to launch the authentication flow.
     */
    public ?string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    public \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionFilters $filters;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionLimits $limits;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    public \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionManualEntry $manual_entry;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FinancialConnections\Session\ObjectEnum $object_;
    /**
     * Permissions requested for accounts collected during this session.
     */
    public \StripeSDK\Collections\FinancialConnections\Session\PermissionsCollection $permissions;
    /**
     * Data features requested to be retrieved upon account creation.
     */
    public ?\StripeSDK\Collections\FinancialConnections\Session\PrefetchCollection $prefetch;
    /**
     * For webview integrations only. Upon completing OAuth login in the native browser, the user will be redirected to this URL to return to your app.
     */
    public string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder' => $value === null || $value instanceof \stdClass ? $this->account_holder = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\Accountholder($value) : parent::assignMember($name, $value),
            'bank_account_token' => $value instanceof \stdClass ? $this->bank_account_token = new \StripeSDK\DTOs\Token($value) : parent::assignMember($name, $value),
            'client_secret' => $value === null || is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'filters' => $value instanceof \stdClass ? $this->filters = new \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionFilters($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'limits' => $value instanceof \stdClass ? $this->limits = new \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionLimits($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'manual_entry' => $value instanceof \stdClass ? $this->manual_entry = new \StripeSDK\DTOs\BankConnectionsResource\LinkAccountSessionManualEntry($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FinancialConnections\Session\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
