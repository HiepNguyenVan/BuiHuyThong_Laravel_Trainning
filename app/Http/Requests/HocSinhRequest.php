<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HocSinhRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullName' => 'required',
            'address' => 'required',
            'sex' => 'required',
            'userName' => 'required',
            'passWord' => 'required',
        ];
    }

    public function messages()
{
    return [
        'fullName.required' => 'Họ tên không được để trống',
        'address.required' => 'Địa chỉ không được để trống',
        'sex.required' => 'Bạn cần chọn giới tính',
        'userName.required' => 'Tên đăng nhập không được để trống',
        'passWord.required' => 'Mật khẩu không được để trống',
    ];
}
}
