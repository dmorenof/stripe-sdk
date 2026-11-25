<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Accounts\ByAccount\Capabilities;

final class ByCapability extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'capability',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'account' => 'account',
            'capability' => 'capability',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public string $capability;
}
