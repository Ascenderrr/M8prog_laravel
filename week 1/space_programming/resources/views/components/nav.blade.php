<nav class="flex items-center justify-end gap-4">
    <a href="{{ route('home') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-white border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
        Home
    </a>
    <a href="{{ route('contact') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-white border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
        Contact
    </a>
    <a href="{{ route('languages.list') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-white border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
        Languages
    </a>
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-white dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-white border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-white dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Register
                </a>
            @endif
        @endauth
    @endif
</nav>
