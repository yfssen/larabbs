<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {

        return [
            'content' => 'required|min:2',
        ];
//        switch($this->method())
//        {
//            // CREATE
//            case 'POST':
//            {
//                return [
//                    // CREATE ROLES
//                ];
//            }
//            // UPDATE
//            case 'PUT':
//            case 'PATCH':
//            {
//                return [
//                    // UPDATE ROLES
//                ];
//            }
//            case 'GET':
//            case 'DELETE':
//            default:
//            {
//                return [];
//            };
//        }
    }

    public function messages()
    {
        return [
            // Validation messages
//            'content.min'=>'评论内容至少两个字符',
        ];
    }
}
