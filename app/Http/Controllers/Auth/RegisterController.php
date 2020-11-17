<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Usu_id' => ['required', 'String', 'max:15'],
            'Usu_tipodoc' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'Usu_apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tb_usuarios'],
            'Usu_fecha_nacimiento' => ['required', 'string', 'max:255'],
            'Usu_telefono' => ['string', 'max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Usu_genero' => ['string', 'max:9'],
            'Usu_direccion' => ['string', 'max:255'],
            'Usu_rol' => ['required', 'string', 'max:255'],
            'Usu_foto' => ['string', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'Usu_id' => $data['Usu_id'],
            'Usu_tipodoc' => $data['Usu_tipodoc'],
            'name' => $data['name'],
            'Usu_apellidos' => $data['Usu_apellidos'],
            'email' => $data['email'],
            'Usu_fecha_nacimiento' => $data['Usu_fecha_nacimiento'],
            'Usu_telefono' => $data['Usu_telefono'],
            'password' => Hash::make($data['password']),
            'Usu_genero' => $data['Usu_genero'],
            'Usu_direccion' => $data['Usu_direccion'],
            'Usu_rol' => $data['Usu_rol'],
            'Usu_foto' => $data['Usu_foto'],
        ]);
    }
}
