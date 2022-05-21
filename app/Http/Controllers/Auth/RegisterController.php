<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cc' => ['required', 'integer', 'min:8', 'unique:users'],
            'apellido' => ['nullable', 'string', 'max:255'],
            'edad' => ['nullable', 'int', 'max:255'],
            'f_naci' => ['nullable', 'date', 'max:255'],
            'celular' => ['nullable', 'string', 'max:255'],
            'telefono' => ['nullable', 'string', 'max:255'],
            'R_social' => ['nullable', 'string', 'max:255'],
            'direcion' => ['nullable', 'string', 'max:255'],
            'municipio' => ['nullable', 'string', 'max:255'],
            'zona_reside' => ['nullable', 'string', 'max:255'],
            'barrio' => ['nullable', 'string', 'max:255'],
            'ti_activida' => ['nullable', 'string', 'max:255'],
            

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cc' => $data['cc'],
            'apellido' => $data['apellido'],
            'edad' => $data['edad'],
            'f_naci' => $data['f_naci'],
            'celular' => $data['celular'],
            'telefono' => $data['telefono'],
            'R_social' => $data['R_social'],
            'direcion' => $data['direcion'],
            'municipio' => $data['municipio'],
            'zona_reside' => $data['zona_reside'],
            'barrio' => $data['barrio'],
            'ti_activida' => $data['ti_activida'],

        ]);
    }
}







