<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Interfaces\UserRepositoryInterface;
class UserRepository implements UserRepositoryInterface
{
   public function index(){
      return User::all();
   }

   public function getById($id){
      return User::findOrFail($id);
   }

   public function store(array $data){
      return User::create($data);
   }

   public function update(array $data,$id){
      return User::whereId($id)->update($data);
   }
    
   public function delete($id){
      User::destroy($id);
   }
   public function validatepassword($pass1, $pass2){
      if($pass1 != $pass2){
         throw new HttpResponseException(response()->json([
            'success'   => true,
            'rpassword' => true,
            'mensaje'   => 'Las contraseñas no coinciden',
        ]));
      }
   }
}