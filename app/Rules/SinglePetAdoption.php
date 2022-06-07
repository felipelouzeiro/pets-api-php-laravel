<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Adocao;

class SinglePetAdoption implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(
        private int $petId
    )
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $alreadyAdoptedThisPet = Adocao::where('email', $value)
            ->where('pet_id', $this->petId)
                ->first();

        return !$alreadyAdoptedThisPet;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Esse email já contém um processo de adoção vinculado ao pet selecionado.';
    }
}
