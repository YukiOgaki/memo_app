<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoRequest extends FormRequest
{
    /**
     *ユーザーがこの要求を行う権限を持っているかどうかを判断します。
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * リクエストに適用される検証ルールを取得します。
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:2000',
        ];
    }
}
