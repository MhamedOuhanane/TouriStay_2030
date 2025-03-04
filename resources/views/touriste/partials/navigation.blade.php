
<!-- Navigation -->
<nav class="bg-green-200 text-green-900 shadow-md fixed w-full z-50">
    <div class="container mx-auto px-6 py-1 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            
        <x-application-logo class="w-16 fill-current text-gray-500" />
            <span class="font-bold text-xl">TouriStay 2030</span>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="hover:text-green-500">Accueil</a>
            <a href="{{ route('annonces.index') }}" class="hover:text-green-500">Explorer</a>
            <a href="#" class="hover:text-green-500">Devenir hôte</a>
            <a href="#" class="hover:text-green-500">À propos</a>
            <a href="#" class="hover:text-green-500">Contact</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('touriste.profile') }}" class="flrx items-center hover:text-green-500"><i class="fas fa-user-circle text-2xl mr-1"></i> Profile</a>
            
            <form method="POST" action="{{ route('logout') }}" class="relative">
                @csrf
                <label class="flex cursor-pointer items-center space-x-2 border border-white rounded-full py-1 gap-2 px-3 hover:bg-green-400";
                for="loguot" > 
                    loguot
                </label>

                <x-text-input id="loguot" 
                                class="hidden "
                                type="submit"/>
            </form>
        </div>
    </div>
</nav>