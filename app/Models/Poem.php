<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    use HasFactory;
    protected $table = 'poems';
    protected $fillable = [ 'title', 'content', 'translation', 'citation', 'comment', 'intextref', 'recitedby', 'language', 'bigimage'];
    public $timestamps = false;
}
