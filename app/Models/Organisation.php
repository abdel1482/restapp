<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $cle
 * @property string $nom
 * @property string $adresse
 * @property string $code_postal
 * @property string $ville
 * @property string $statut
 */
class Organisation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organisation';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
        'cle',
        'nom',
        'adresse',
        'code_postal',
        'ville',
        'statut'
    ];

    public function contacts () {
        return $this->hasMany( Contact::class );
    }
}
