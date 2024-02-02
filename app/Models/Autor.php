<?php
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autores';

    public function libros(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Libro::class);
    }
}
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }


}
