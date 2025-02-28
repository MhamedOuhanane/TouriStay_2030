<section>
    <h2 class="text-xl font-semibold mb-6 text-green-700">Personal Information</h2>
                        
    <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="firstname" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                <input type="text" id="firstname" value="Mohammed" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="lastname" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                <input type="text" id="lastname" value="Rachidi" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" value="m.rachidi@example.com" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone</label>
                <input type="tel" id="phone" value="+212 6xx-xxxxxx" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="city" class="block text-gray-700 text-sm font-medium mb-2">City</label>
                <input type="text" id="city" value="Casablanca" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label for="country" class="block text-gray-700 text-sm font-medium mb-2">Country</label>
                <select id="country" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="morocco" selected>Morocco</option>
                    <option value="spain">Spain</option>
                    <option value="portugal">Portugal</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        
        <div class="mb-6">
            <label for="bio" class="block text-gray-700 text-sm font-medium mb-2">Biography</label>
            <textarea id="bio" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">Passionate about travel and hospitality, I offer comfortable accommodations near stadiums for the 2030 World Cup. My properties are ideally located and have all the amenities for a successful stay.</textarea>
        </div>
        
        <div class="mb-6">
            <label for="languages" class="block text-gray-700 text-sm font-medium mb-2">Languages spoken</label>
            <div class="flex flex-wrap gap-2">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    French
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    Arabic
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm flex items-center">
                    English
                    <button class="ml-2 text-green-800 hover:text-green-600">
                        <i class="fas fa-times"></i>
                    </button>
                </span>
                <button class="bg-white border border-green-500 text-green-500 px-3 py-1 rounded-full text-sm hover:bg-green-100">
                    <i class="fas fa-plus mr-1"></i> Add
                </button>
            </div>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded-lg transition">
                Save changes
            </button>
        </div>
    </form>
</section>
