<?php
use Illuminate\Database\Eloquent\Model;

class City extends Model{
  protected $table = 'cities';
  // protected $fillable = ['name', 'division'];
  protected $guarded = [];
  protected $hidden = ['password'];
}