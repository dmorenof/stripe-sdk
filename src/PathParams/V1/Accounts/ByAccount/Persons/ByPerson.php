<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Accounts\ByAccount\Persons;

final class ByPerson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'person',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'account' => 'account',
            'person' => 'person',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'person' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public string $person {
        set {
            $this->assigning('person', $value);
            $this->person = $value;
        }
    }
}
