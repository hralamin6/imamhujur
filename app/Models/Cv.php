<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Cv extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'sex',
        'slug',
        'email',
        'name',
        'type',
    ];
    public function division()
    {
        return $this->belongsTo(Division::class)->withDefault();
    }
    public function district()
    {
        return $this->belongsTo(District::class)->withDefault();
    }
    public function upazila()
    {
        return $this->belongsTo(Upazila::class)->withDefault();
    }
    public function union()
    {
        return $this->belongsTo(Union::class)->withDefault();
    }
    public function unlockedUsers()
    {
        return $this->belongsToMany(User::class, 'cv_users')->withTimestamps();
    }

//    public function registerMediaConversions(Media $media = null) : void
//    {
//        $this
//            ->addMediaConversion('thumb')
//            ->width('333')
//            ->height('222');
//    }

//    public static function boot()
//    {
//        parent::boot();
//        sleep(0);
//}
}
