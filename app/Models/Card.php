<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'card';
}
