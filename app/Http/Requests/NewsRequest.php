<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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
            $news_rule = 'required|min:3|unique:news_master,news_heading,' . $this->get('id');
        }
        else
        {
            // Create operation. There is no id yet.
           $news_rule = 'required|min:3|unique:news_master,news_heading,';
        }
        
    
        return [
            'news_heading'=>$news_rule,
            
           
        ];
    }
}
