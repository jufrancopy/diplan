<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class FodaAnalisis extends Model
{
    protected $table = "foda_analisis";
    
    protected $fillable = ['user_id','perfil_id','tipo', 'ocurrencia','impacto'];

    public function categoria(){
        return $this->belongsTo(FodaCategoria::class);
    }

    public function aspecto(){
        return $this->belongsTo(FodaAspecto::class);
    }

    public function aspectos(){
        
        return $this->belongsToMany('App\Admin\FodaAspecto', 'foda_analisis_has_aspectos', 'analisis_id','aspecto_id' );

    }
    
    public function perfil(){
        return $this->belongsTo(FodaPerfil::class);
    }

    public function scopeNombre($query, $nombre)
    {
        if (trim($nombre) !="")
        {

    $query->where(\DB::raw("CONCAT(nombre, ' ', categoria_id)"), 'LIKE', "%$nombre%");    
        }
        
    }
}

