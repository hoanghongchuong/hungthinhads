<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model {

	protected $table='news_categories';

	protected $fillable = ['id','name','alias','photo','mota','parent_id','stt','status','title','keyword','description'];

	public $timestamps = true;

	public function cateChilds(){
		return $this->hasMany('App\NewsCate','parent_id');
	}
}
