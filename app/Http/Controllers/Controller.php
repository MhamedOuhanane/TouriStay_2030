<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function redirectRole()
    {
        
        switch (session('role')) {
            case 'admine':
                return redirect()->route('admine.dashboard');
                break;

            case 'proprietaire':
                return redirect()->route('owner.dashboard');
                break;
                
            default:
            return redirect()->route('home');
                break;
        }
    }
}
