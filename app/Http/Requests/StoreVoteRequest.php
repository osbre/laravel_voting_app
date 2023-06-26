<?php

namespace App\Http\Requests;

use App\DataObjects\StoreVoteData;
use App\Rules\ItemExistsRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreVoteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'item_id' => [
                'required',
                'integer',
                app(ItemExistsRule::class),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'item_id.required' => 'Please choose an item.',
        ];
    }

    public function toDataObject(): StoreVoteData
    {
        return new StoreVoteData(
            item_id: $this->validated('item_id'),
            user_id: $this->user()->id,
            ipAddress: $this->ip(),
        );
    }
}
