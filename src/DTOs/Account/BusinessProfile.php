<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountBusinessProfile
 */
final class BusinessProfile extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'mcc' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 40000,
        ],
        'specified_commercial_transactions_act_url' => [
            'maxLength' => 5000,
        ],
        'support_email' => [
            'maxLength' => 5000,
        ],
        'support_phone' => [
            'maxLength' => 5000,
        ],
        'support_url' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The applicant's gross annual revenue for its preceding fiscal year.
     */
    public ?\StripeSDK\DTOs\Account\AnnualRevenue $annual_revenue;
    /**
     * An estimated upper bound of employees, contractors, vendors, etc. currently working for the business.
     */
    public ?int $estimated_worker_count;
    /**
     * [The merchant category code for the account](/connect/setting-mcc). MCCs are used to classify businesses based on the goods or services they provide.
     */
    public ?string $mcc {
        set {
            $this->assigning('mcc', $value);
            $this->mcc = $value;
        }
    }
    /**
     * Whether the business is a minority-owned, women-owned, and/or LGBTQI+ -owned business.
     */
    public ?\StripeSDK\Collections\Account\BusinessProfile\BusinessDesignationCollection $minority_owned_business_designation;
    public \StripeSDK\DTOs\Account\MonthlyEstimatedRevenue $monthly_estimated_revenue;
    /**
     * The customer-facing business name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Internal-only description of the product sold or service provided by the business. It's used by Stripe for risk and underwriting purposes.
     */
    public ?string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    /**
     * A link to the business's publicly available terms related to the Specified Commercial Transaction Act. Only used for accounts in Japan.
     */
    public ?string $specified_commercial_transactions_act_url {
        set {
            $this->assigning('specified_commercial_transactions_act_url', $value);
            $this->specified_commercial_transactions_act_url = $value;
        }
    }
    /**
     * A publicly available mailing address for sending support issues to.
     */
    public ?\StripeSDK\DTOs\Address $support_address;
    /**
     * A publicly available email address for sending support issues to.
     */
    public ?string $support_email {
        set {
            $this->assigning('support_email', $value);
            $this->support_email = $value;
        }
    }
    /**
     * A publicly available phone number to call with support issues.
     */
    public ?string $support_phone {
        set {
            $this->assigning('support_phone', $value);
            $this->support_phone = $value;
        }
    }
    /**
     * A publicly available website for handling support issues.
     */
    public ?string $support_url {
        set {
            $this->assigning('support_url', $value);
            $this->support_url = $value;
        }
    }
    /**
     * The business's publicly available website.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'annual_revenue' => $value === null || $value instanceof \stdClass ? $this->annual_revenue = $value === null ? null : new \StripeSDK\DTOs\Account\AnnualRevenue($value) : parent::assignMember($name, $value),
            'estimated_worker_count' => $value === null || is_int($value) ? $this->estimated_worker_count = $value : parent::assignMember($name, $value),
            'mcc' => $value === null || is_string($value) ? $this->mcc = $value : parent::assignMember($name, $value),
            'monthly_estimated_revenue' => $value instanceof \stdClass ? $this->monthly_estimated_revenue = new \StripeSDK\DTOs\Account\MonthlyEstimatedRevenue($value) : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'specified_commercial_transactions_act_url' => $value === null || is_string($value) ? $this->specified_commercial_transactions_act_url = $value : parent::assignMember($name, $value),
            'support_address' => $value === null || $value instanceof \stdClass ? $this->support_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'support_email' => $value === null || is_string($value) ? $this->support_email = $value : parent::assignMember($name, $value),
            'support_phone' => $value === null || is_string($value) ? $this->support_phone = $value : parent::assignMember($name, $value),
            'support_url' => $value === null || is_string($value) ? $this->support_url = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
