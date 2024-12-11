<x-dropdown align="right" width="48" contentClasses="py-1 bg-white">
    <x-slot name="trigger">
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            @auth
                {{ Auth::user()->name }}
            @else
                Guest
            @endauth
        </button>
    </x-slot>

    <x-slot name="content">
        @auth
            <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
        @else
            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
        @endauth
    </x-slot>
</x-dropdown>
