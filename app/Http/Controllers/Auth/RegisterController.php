<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Ciudadano;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
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
            'nombreCiudadano' => 'required|string',
            'apellidoCiudadano' => 'required|string',
            'emailCiudadano' => 'required|email|unique:users,email|string',
            'tipoDocumento' => 'required|string',
            'documento' => 'required|unique:ciudadanos,documento|string',
            'sexo' => 'required|string',
            'fechaNacimiento' => 'required|string',
            'telefono' => 'nullable|numeric',
            'telefonoFijo' => 'nullable|numeric',
            'etnia' => 'required|string',
            'discapacidad' => 'required|string',
            'estrato' => 'required|integer', 
            'nivelEducativo' => 'required|string',
            'dispositivosTecnologicos' => 'required|numeric',
            'mediosTecnologicos' => 'string',
            'conectividadInternet' => 'required|numeric',
            'direccion' => 'nullable|string',
            'municipio' => 'required|string',
            'barrio' => 'required|string',
            'contrasenia' => 'required|string|min:8|',
            'confirmarContrasenia' => 'required|min:8|same:contrasenia',
            'dispositivoOtro' => 'nullable|string'
        ], [
            'nombreCiudadano.required' => 'El campo Nombres Completos es obligatorio.',
            'apellidoCiudadano.required' => 'El campo Apellidos es obligatorio.',
            'emailCiudadano.required' => 'El campo Correo Electrónico es obligatorio.',
            'emailCiudadano.email' => 'El campo Correo Electrónico debe ser una dirección de correo electrónico válida.',
            'emailCiudadano.unique' => 'El campo Correo Electrónico ya ha sido registrado.',
            'tipoDocumento.required' => 'El campo Tipo de documento es obligatorio.',
            'documento.required' => 'El campo Documento es obligatorio.',
            'documento.unique' => 'El campo Documento ya ha sido registrado.',
            'sexo.required' => 'El campo Sexo es obligatorio.',
            'fechaNacimiento.required' => 'El campo Fecha Nacimiento es obligatorio.',
            'etnia.required' => 'El campo Etnia es obligatorio.',
            'discapacidad.required' => 'El campo Condición de Discapacidad es obligatorio.',
            'estrato.required' => 'El campo Estrato es obligatorio.',
            'estrato.integer' => 'El campo Estrato debe ser un número entero.',
            'nivelEducativo.required' => 'El campo Último nivel educativo alcanzado es obligatorio.',
            'dispositivosTecnologicos.required' => 'El campo ¿Cuenta con acceso a dispositivos tecnológicos? es obligatorio.',
            'conectividadInternet.required' => 'El campo ¿Cuenta con conectividad a internet? es obligatorio.',
            'barrio.required' => 'El campo Barrio es obligatorio.',
            'municipio.required' => 'El campo Municipio es obligatorio',
            //Contraseña---------------------------------------------------------------------------------------
            'contrasenia.required' => 'El campo de Contraseña es obligatorio.',
            'contrasenia.min' => 'La contraseña debe tener al menos :min caracteres.',
            'contrasenia.confirmed' => 'Las contraseñas no coinciden.',
            'confirmarContrasenia.required' => 'El campo de Confirmar Contraseña es obligatorio.',
            'confirmarContrasenia.min' => 'La confirmación de contraseña debe tener al menos :min caracteres.'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Ciudadano
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        
        App::setLocale('es');
        
        
        
        $validator = $this->validator($request->all());
        /* dd($request->all()); */
        /* dd($validator->errors()); */
    if ($validator->fails()) {
        
        return redirect()->back()->withErrors($validator)->withInput();
    } else {
        /* dd($request->all()); */
        Ciudadano::create([
            'nombres' => $request ['nombreCiudadano'],
            'apellidos' => $request ['apellidoCiudadano'],
            'tipoDoc' => $request ['tipoDocumento'],
            'documento' => $request ['documento'],
            'sexo' => $request ['sexo'],
            'telCelular' => $request ['telefono'],
            'telFijo' => $request ['telefonoFijo'],
            'municipio' => $request ['municipio'],
            'direccion' => $request ['direccion'],
            'barrioVereda' => $request ['barrio'],
            'fechaNacimiento' => $request ['fechaNacimiento'],
            'etnia' => $request ['etnia'],
            'discapacidad' => $request ['discapacidad'],
            'estrato' => $request ['estrato'],
            'nivelEducativo' => $request ['nivelEducativo'],
            'dispositivosTecnologicos' => $request ['dispositivosTecnologicos'],
            'mediosTecnologicos' => $request ['mediosTecnologicos'],
            'otrosMediosTecnologicos' => $request ['dispositivoOtro'],
            'conectividadInternet' => $request ['conectividadInternet']
        ]);
        User::create([
            'name' => $request ['nombreCiudadano'],
            'email' => $request ['emailCiudadano'],
            'password' => Hash::make($request ['contrasenia']),
        ]);
    }
    

    return redirect()->route('index');
          
    }
    public function showRegistrationForm()
    {
        return view('auth.register'); 
    }
    
}
