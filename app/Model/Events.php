<?php

namespace App\Model;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable=[
        'user_id',
        'titulo',
        'codigo_projeto',
        'data_inicio',
        'valor_previsto',
    ];

    protected $casts=[      
    ];

    protected $appends=[      
    ];
 
    public function getDataAttribute() {
        return (new Carbon($this->data_inicio))->format('d/m/Y');
    }

    public function getUserNameAttribute() {
        return User::find($this->user_id)->get()[0]->name;
    }

    public function getValorAttribute() {
        return 'R$' . number_format($this->valor_previsto, 2, ',', '.');
    }
}
