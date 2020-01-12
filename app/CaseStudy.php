<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $table = 'cases';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'date', 'description', 'image',
    ];

    public function notHavingImageInDb()
    {
        return (empty($this->image))?true:false;
    }

}
