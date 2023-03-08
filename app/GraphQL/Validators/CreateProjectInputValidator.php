<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class CreateProjectInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'client_id' => [
                'required_without:main_project_id',
                'prohibits:main_project_id',
            ],
            'main_project_id' => [
                'required_without:client_id',
                'prohibits:client_id',
            ],
        ];
    }
}
