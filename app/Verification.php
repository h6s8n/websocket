<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Auth\MustVerifyIndividualVerification;

class Verification extends Model
{

	use SoftDeletes , MustVerifyIndividualVerification;
    
	protected $fillable =[
		'name',
		'family',
		'national_card',
		'phone_number',
		'mobile_number',
		'birthday_date',
		'address',
		'address',
		'card_number',
		'sheba',
		'national_card_image_address',

	];
        public function user()
    {
        return $this->belongsTo('App\User');
    }

        public function scopeFinished(Builder $builder)
    {
        return $builder->where('finished', true);
    }

        public function getRouteKeyName()
    {
        return 'identifier';
    }
}
