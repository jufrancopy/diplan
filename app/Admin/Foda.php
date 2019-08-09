<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Foda extends Model
{
    protected $table = 'foda_aspectos';
    protected $fillable = ['nivel', 'aspecto', 'tipo', 'ambiente', 'ocurrencia', 'impacto'];

    public function scopeName($query, $aspecto)
    {
        if (trim($aspecto) !="")
        {
           /* $query->where('ci', $ci);*/

            $query->where(\DB::raw("CONCAT(aspecto, ' ', tipo)"), 'LIKE', "%$aspecto%");    
        }
        
    }
}


