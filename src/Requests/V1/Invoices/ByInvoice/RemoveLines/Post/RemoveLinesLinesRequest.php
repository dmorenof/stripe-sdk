<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\RemoveLines\Post;

/**
 * lines_data_param
 */
final class RemoveLinesLinesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'behavior',
        'id',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Invoices\ByInvoice\RemoveLines\Post\LinesItem\LinesItemBehaviorEnum $behavior;
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'behavior' => is_string($value) ? $this->behavior = \StripeSDK\Enums\V1\Invoices\ByInvoice\RemoveLines\Post\LinesItem\LinesItemBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
