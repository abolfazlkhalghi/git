<?php


namespace Khaleghi\Project\Rules;


use Illuminate\Contracts\Validation\Rule;

class ValidOperator implements Rule
{

    /**
     * @inheritDoc
     */
    public function passes($attribute, $value)
    {
        $user =resolve(userRepo::class)->findById($value);
        dd($user->hasPermissionssionTo('operator'));
    }

    /**
     * @inheritDoc
     */
    public function message()
    {

        return "کاربر انتخاب شده یک کاربر معتبر برای این امر نیست ";
    }
}
