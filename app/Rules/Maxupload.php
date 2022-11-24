<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class Maxupload implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if(count($value) > 5){
            $fail('Five images only');
        }
    }
}
