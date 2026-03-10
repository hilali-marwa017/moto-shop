<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable =['titre', 'marque', 'type', 'ville','annee', 'kilometrage', 'prix','description', 'photo', 'statut'];
}