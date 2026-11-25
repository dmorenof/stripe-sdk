<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post;

/**
 * business_profile_update_specs
 *
 * Business information about the account.
 */
final class BusinessProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'mcc' => [
            'maxLength' => 4,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 40000,
        ],
        'support_phone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile\AnnualRevenueRequest $annual_revenue;
    public int $estimated_worker_count;
    public string $mcc {
        set {
            $this->assigning('mcc', $value);
            $this->mcc = $value;
        }
    }
    public \StripeSDK\Collections\V1\Accounts\ByAccount\Post\BusinessProfile\BusinessDesignationCollection $minority_owned_business_designation;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile\EstimatedRevenueRequest $monthly_estimated_revenue;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile\ActUrlRequest $specified_commercial_transactions_act_url;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile\SupportAddressRequest $support_address;
    public string $support_email;
    public string $support_phone {
        set {
            $this->assigning('support_phone', $value);
            $this->support_phone = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\BusinessProfile\SupportUrlRequest $support_url;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'estimated_worker_count' => is_int($value) ? $this->estimated_worker_count = $value : parent::assignMember($name, $value),
            'mcc' => is_string($value) ? $this->mcc = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'product_description' => is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'support_email' => is_string($value) ? $this->support_email = $value : parent::assignMember($name, $value),
            'support_phone' => is_string($value) ? $this->support_phone = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
