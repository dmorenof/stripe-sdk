<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Apps;

/**
 * App Install
 *
 * An app install represents a Stripe App that is installed on an account. It reports the permissions,
 * content security policy entries, and endpoints that the installing account has authorized, along with any
 * that the app's latest version requests but the account has not authorized yet. Use the Install API to
 * install, reauthorize, and uninstall apps, and to check the state of existing installs.
 */
final class Install extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'app',
        'approval_required',
        'channel',
        'content_security_policy_granted',
        'content_security_policy_pending',
        'created',
        'endpoints_granted',
        'endpoints_pending',
        'id',
        'livemode',
        'object_',
        'permissions_granted',
        'permissions_pending',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'app' => [
            'maxLength' => 5000,
        ],
        'auth_code' => [
            'maxLength' => 5000,
        ],
        'created_by' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the account that the app install belongs to.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * The ID of the app installed.
     */
    public string $app {
        set {
            $this->assigning('app', $value);
            $this->app = $value;
        }
    }
    /**
     * Whether the installer must authorize pending permissions, content security policy entries, or endpoints. For private apps, `approval_required` stays `false`; creating or reauthorizing the install through the API installs the newest completed upload and grants its permissions.
     */
    public bool $approval_required;
    /**
     * The authorization code for an oauth app install.
     */
    public ?string $auth_code {
        set {
            $this->assigning('auth_code', $value);
            $this->auth_code = $value;
        }
    }
    /**
     * The distribution channel associated with the app install.
     */
    public \StripeSDK\Enums\Apps\Install\ChannelEnum $channel;
    public \StripeSDK\DTOs\AppServiceResourceInstallContentSecurityPolicy $content_security_policy_granted;
    public \StripeSDK\DTOs\AppServiceResourceInstallContentSecurityPolicy $content_security_policy_pending;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The ID of the embedding platform that created the install, if applicable.
     */
    public ?string $created_by {
        set {
            $this->assigning('created_by', $value);
            $this->created_by = $value;
        }
    }
    /**
     * The endpoint URLs authorized by the installer.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $endpoints_granted;
    /**
     * The endpoint URLs requested by the latest app version that the installer has not authorized.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $endpoints_pending;
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
    public \StripeSDK\Enums\Apps\Install\ObjectEnum $object_;
    /**
     * The permissions authorized by the installer.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $permissions_granted;
    /**
     * The permissions requested by the latest app version that the installer has not authorized.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $permissions_pending;
    /**
     * The status of the app install.
     */
    public \StripeSDK\Enums\Apps\Install\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'app' => is_string($value) ? $this->app = $value : parent::assignMember($name, $value),
            'approval_required' => is_bool($value) ? $this->approval_required = $value : parent::assignMember($name, $value),
            'auth_code' => $value === null || is_string($value) ? $this->auth_code = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \StripeSDK\Enums\Apps\Install\ChannelEnum::from($value) : parent::assignMember($name, $value),
            'content_security_policy_granted' => $value instanceof \stdClass ? $this->content_security_policy_granted = new \StripeSDK\DTOs\AppServiceResourceInstallContentSecurityPolicy($value) : parent::assignMember($name, $value),
            'content_security_policy_pending' => $value instanceof \stdClass ? $this->content_security_policy_pending = new \StripeSDK\DTOs\AppServiceResourceInstallContentSecurityPolicy($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'created_by' => $value === null || is_string($value) ? $this->created_by = $value : parent::assignMember($name, $value),
            'endpoints_granted' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->endpoints_granted = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'endpoints_pending' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->endpoints_pending = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Apps\Install\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'permissions_granted' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->permissions_granted = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'permissions_pending' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->permissions_pending = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Apps\Install\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
