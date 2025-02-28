<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function redirectRole()
    {
        
        switch (session('role')) {
            case 'admine':
                return redirect()->route('admine.dashbord');
                break;

            case 'proprietaire':
                return redirect()->route('owner.dashbord');
                break;
                
            default:
            return redirect()->route('home');
                break;
        }
    }
}
