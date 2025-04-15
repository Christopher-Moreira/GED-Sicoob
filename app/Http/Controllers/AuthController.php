<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cooperativa' => ['required', 'string'],
            'cargo' => ['required', 'string'],
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cooperativa' => $request->cooperativa,
            'cargo' => $request->cargo,
            'segregacao' => 'user', // Valor padrão
            'can_be_admin' => false, // Por padrão não pode ser admin
            'can_be_user' => true,  // Por padrão pode ser user
            'google2fa_secret' => null,

        ]);
    
        return redirect()->route('login')->with('status', 'Registro realizado! Faça login.');
    }

    //vai mudar falta adaptacao
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('paginaPrincipal');
        }
    
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->onlyInput('email');
    }

    public function paginaPrincipal()
    {
        $user = auth()->user();
        return view('pagina_principal');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
