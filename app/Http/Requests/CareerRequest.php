<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CareerRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {


        if ($this->method() == 'PUT')
        {
            // Update operation, exclude the record with id from the validation:
            $career_rule = 'required|min:3|unique:career_master,career_heading,' . $this->get('id');
        }
        else
        {
            // Create operation. There is no id yet.
           $career_rule = 'required|min:3|unique:career_master,career_heading,';
        }
        
    
        return [
            'career_heading'=>$career_rule,
            
           
        ];
    }
}
