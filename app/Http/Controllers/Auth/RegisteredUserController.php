<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\client_test;
use App\Models\Proprietaire;
use App\Models\Role;
use App\Models\Touriste;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'roleName' =>'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        
        $user = new User();
        
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->photo = 'profile/default.jpg';
        $user->password = Hash::make($request->password);
        
        $user->save();
        
        if (count($request->roleName) != 2) {
            if ( $request->roleName[0] == 'touriste') {
                $user1 = new Touriste();
            } else {
                $user1 = new Proprietaire();
            }
            
            // $u = $user->replicate();
            
            $user1->id = $user->id;
            $user1->first_name = $user->first_name;    
            $user1->last_name = $user->last_name;
            $user1->email = $user->email;
            $user1->photo = $user->photo;
            $user1->password = $user->password;
            $user1->save();
        }

        
        // $utilisateur = User::find($user->id);
        $rolesIds = [];
        foreach ($request->roleName as $role) {
            $userRole= Role::where('name', $role)->first();
            $rolesId[] = $userRole->id;
        }   

        $user->roles()->attach($rolesId);
        
        event(new Registered($user));

        Auth::login($user);
        $role = Auth::user()->roles->first()->name;
        session(['role' => $role]);
        
        return $this->redirectRole();
    }
}
