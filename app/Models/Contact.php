<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $cle
 * @property integer $organisation_id
 * @property string $e_mail
 * @property string $nom
 * @property string $prenom
 * @property string $telephone_fixe
 * @property string $service
 * @property string $fonction
 */
class Contact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact';

    /**
     * @var array
     */
    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'cle',
        'organisation_id',
        'e_mail',
        'nom',
        'prenom',
        'telephone_fixe',
        'service',
        'fonction'
    ];

    public function organisation () {
        return $this->belongsTo( Organisation::class );
    }
}
