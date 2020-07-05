<?php
namespace App\Modules\Localization\Models;

use HZ\Illuminate\Mongez\Managers\Database\MongoDB\Model;

class Country extends Model 
{
    /**
     * {@inheritDoc}
     */
    public function sharedInfo(): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
        ];
    }
}