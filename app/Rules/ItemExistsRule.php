<?php

namespace App\Rules;

use App\Repositories\ItemRepository;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ItemExistsRule implements ValidationRule
{
    public function __construct(protected ItemRepository $itemRepository)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this->itemRepository->find($value) ?: $fail('The selected item does not exist.');
    }
}
