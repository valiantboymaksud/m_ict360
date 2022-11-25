<?php

namespace App\Http\Requests;

use App\Http\Services\NotificationService;
use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
{

    public $service;

    public function __construct() {
        $this->service = new NotificationService();
    }
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
        if ($this->method()=='PUT') {
            return ;
        }
        return [
            'title'         => 'required',
            'description'   => 'required',
        ];
    }





    public function store()
    {
        $this->service->store();
    }
}
