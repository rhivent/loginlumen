<?php
	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;

class Login_model extends Model
{
		// scope untuk prefix dan WithCode untuk namanya, dan huruf W jadi kecil ketika dipanggil dicontroller
		public function scopeWithId($query,$id){
			return $query->where('id','=',$id);
		}
		
		public function getPass(){
			return $this->username;
		}
		
}
