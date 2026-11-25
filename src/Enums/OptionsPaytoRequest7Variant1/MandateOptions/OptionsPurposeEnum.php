<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions;

enum OptionsPurposeEnum: string
{
    case Empty_ = '';
    case DependantSupport = 'dependant_support';
    case Government = 'government';
    case Loan = 'loan';
    case Mortgage = 'mortgage';
    case Other = 'other';
    case Pension = 'pension';
    case Personal = 'personal';
    case Retail = 'retail';
    case Salary = 'salary';
    case Tax = 'tax';
    case Utility = 'utility';
}
