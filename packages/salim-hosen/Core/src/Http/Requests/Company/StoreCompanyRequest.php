<?php

namespace SalimHosen\Core\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreCompanyRequest extends FormRequest
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
        if(request()->step == 1){
            // No company exists so validate basic info
            $rules = [
                "name" => ["required", "max:255"],
                "company_url" => ["required", "alpha_dash","unique:companies,slug", "max:255"],
                "email" => ["required", "email", "max:255"],
                "phone" => ["required", "numeric"],
                "mobile_number" => ["required", "numeric"],
                "country" => ["required"],
                "state" => ["required"],
                "address" => ["required", "max:255"]
            ];

            if(request()->hasFile("logo")){
                $rules["logo"] = ["image", "mimes:png,jpg,jpeg"];
            }

            return $rules;

        }

        if(request()->step == 2){

            return [
                "main_products" => ["required"],
                // "business_type" => ["required"],
                "number_of_employees" => ["required"],
                "year_of_establishment" => ["required"],
                // "commercial_registration_number" => ["required"],
                // "tax_number" => ["required"],
                // "average_lead_time" => ["required"],
                "company_size" => ["required"],
                "description" => ["required"]
            ];

        }

        // if all previous step is completed then validate all together
        $rules = [
            "name" => ["required"],
            "email" => ["required"],
            "phone" => ["required"],
            "mobile_number" => ["required"],
            "country" => ["required"],
            "state" => ["required"],
            "address" => ["required"],
            // "trade_license" => ["required", "file","mimes:png,jpg,jpeg,doc,docx,pdf", "max:1024"],
            // "nid" => ["required", "file","mimes:png,jpg,jpeg,doc,docx,pdf", "max:1024"]
            "commercial_register_document" => ["required", "file","mimes:png,jpg,jpeg,doc,docx,pdf", "max:1024"]
        ];

        if(request()->hasFile("logo")){
            $rules["logo"] = ["image", "mimes:png,jpg,jpeg"];
        }

        return $rules;
    }
}
