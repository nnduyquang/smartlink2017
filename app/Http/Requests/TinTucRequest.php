<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinTucRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            case 'POST': {
                return [
                    'tieude' => 'required',
                    'motangan' => 'required',
                    'noidung' => 'required',
                    'hinhchude' => 'required|file|mimes:jpeg,png|max:1024'
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'tieude' => 'required',
                    'motangan' => 'required',
                    'noidung' => 'required'
                ];
            }
        }

    }

    public function attributes()
    {
        return [
            'tieude' => 'Tên người dùng'
        ];
    }

    public function messages()
    {
        return [
            'tieude.required' => 'Tiêu Đề Không Để Trống',
            'motangan.required' => 'Mô Tả Ngắn Không Để Trống',
            'noidung.required' => 'Nội Dung Không Để Trống',
            'hinhchude.required' => 'Bạn Chưa Chọn Hình Đại Diện',
            'hinhchude.mimes'=>'Hình Đại Diện Phải Có Định Dạng: jpeg,png.',
            'hinhchude.max'=>'Hình Đại Diện Phải Có Kích Thước Nhỏ Hơn 2MB'
        ];
    }

}
