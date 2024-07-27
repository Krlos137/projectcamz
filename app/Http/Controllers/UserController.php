<?php

namespace App\Http\Controllers;

use App\Models\Terminos_PrivacidadDato;
use App\Http\Requests\UserRequest;
use App\Interfaces\UserRepositoryInterface;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface){
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $polPagina = Terminos_PrivacidadDato::select('id', 'des_condciones', 'desc_avisoprivacidad')->orderBy('id', 'desc')->first();
        return view('User/Create', ['polpagina' => $polPagina]);
    }

     public function store(UserRequest $request) : JsonResponse
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->contraseña),
            'politicaspagina' => $request->politicaspagina
        ];

        $this->userRepositoryInterface->validatepassword($request->contrasena, $request->rpassword);
        
        Db::beginTransaction();
        try {
            $user = $this->userRepositoryInterface->store($data);
            DB::commit();
            return response()->json([
                'success' => true,
                'mensaje' => 'Registro completo',
                'data' => new UserResource($user) 
            ], 201);
        } catch (\Exception $th) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'mensaje' => $msj = $th->getMessage()
            ], 500);
        }
    }
}
