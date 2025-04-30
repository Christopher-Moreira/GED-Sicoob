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
                'lastname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'cooperativa' => ['required', 'string'],
                'cargo' => ['required', 'string'],
            ]);
        
            User::create([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'cooperativa' => $request->cooperativa,
                'cargo' => $request->cargo,
                'segregacao' => 'user', // Valor padrão
                'can_be_admin' => false, // Por padrão não pode ser admin
                'can_be_user' => true, // Por padrão pode ser user
                'can_see' => false, // Por padrão não pode ver
                'can_edit' => false, // Por padrão não pode editar 
                'can_delete' => false, // Por padrão não pode deletar
                'google2fa_secret' => null, // Necessária implementação mas fica null de padrão por enqunato 

            ]);
        
            return redirect()->route('login')->with('status', 'Registro realizado! Faça login.');
        }

        public function showLoginForm(){
            return view('auth.login');
        }

            public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        
            // Tentativa de autenticação
            if (Auth::attempt($credentials, $request->boolean('remember'))) {
                $request->session()->regenerate();
                
                // Redirecionar para a página inicial após login
                return redirect()->intended('LandingPage')->with('success', 'Login realizado com sucesso!');
            }
        
            return back()->withErrors([
                'email' => 'Credenciais inválidas.',
            ])->onlyInput('email');
            }


        // LandingPage Funcs
    public function LandingPage()
    {
        $user = auth()->user();

        return view('LandingPage');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    } 
}
