<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem;

/**
 * selection_params
 */
final class InputsItemSelectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'choices',
    ];

    public \StripeSDK\Collections\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\Selection\SelectionChoicesCollection $choices;
}
