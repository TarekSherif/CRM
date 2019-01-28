<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'name' => 'required|unique:companies,name,'.$this->route('company'),
            'email' => 'email',
            'logo' => 'nullable|dimensions:min_width=100,min_height=100|mimes:png,jpg,jpeg,gif',
            
        ];
    }
}
