<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body class="font-sans text-sm text-gray-900 bg-gray-background">
    <header class="flex flex-col items-center justify-between px-8 py-4 md:flex-row">
        <a href="{{ route('idea.index') }}">
            <img alt="logo" src="{{ asset('img/logo.svg') }}" />
        </a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <div class="px-6 py-4 ">
                    @auth
                        <div class="flex items-center space-x-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>

                            <div x-data="{ isOpen: false }" class="relative">
                                <button @click="isOpen = !isOpen">
                                    <svg class="w-8 h-8 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                    </svg>
                                    <div
                                        class="absolute flex items-center justify-center w-6 h-6 text-white border-2 rounded-full bg-red text-xxs -top-1 -right-1">
                                        8</div>
                                </button>
                                <ul class="absolute z-10 overflow-y-auto text-sm text-left text-gray-700 bg-white w-76 md:w-96 shadow-dialog rounded-xl max-h-128 -right-28 md:-right-12"
                                    {{-- style="right: -46px" --}} x-cloak x-show.transition.origin.top="isOpen"
                                    @click.away="isOpen = false" @keydown.escape.window="isOpen = false">
                                    <li>
                                        <a href="#" @click.prevent="
                                                isOpen = false
                                            " class="flex px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                                class="w-10 h-10 rounded-xl" alt="avatar">
                                            <div class="ml-4">
                                                <div class="line-clamp-6">
                                                    <span class="font-semibold">drehimself</span> commented on
                                                    <span class="font-semibold">This is my idea</span>:
                                                    <span>"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Perspiciatis ea eum nobis quae! Explicabo perferendis esse in
                                                        reiciendis numquam repellat ipsam nam corporis enim! Consequuntur
                                                        repellendus fugit perspiciatis vel ea aut atque quibusdam fuga
                                                        laudantium impedit dignissimos amet quod corrupti, esse labore
                                                        facere exercitationem porro provident voluptates repudiandae iste
                                                        accusantium quo est dolor. Ipsum alias, delectus nulla eveniet est
                                                        maiores labore beatae temporibus. Voluptatibus fugiat esse aliquam
                                                        autem temporibus at labore, exercitationem qui sit omnis et sapiente
                                                        perspiciatis aliquid obcaecati vero minus architecto quaerat quod
                                                        porro quas voluptates eos. Fuga nobis neque debitis consectetur
                                                        impedit dolorum accusamus aut vero ducimus."</span>
                                                </div>
                                                <div class="mt-2 text-xs text-gray-500">1 hour ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="
                                                isOpen = false
                                            " class="flex px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                                class="w-10 h-10 rounded-xl" alt="avatar">
                                            <div class="ml-4">
                                                <div>
                                                    <span class="font-semibold">drehimself</span> commented on
                                                    <span class="font-semibold">This is my idea</span>:
                                                    <span>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                                        quos, eveniet consequatur aspernatur dolor vitae culpa voluptatem
                                                        maiores tempore reprehenderit!"</span>
                                                </div>
                                                <div class="mt-2 text-xs text-gray-500">1 hour ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="
                                                isOpen = false
                                            " class="flex px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                                class="w-10 h-10 rounded-xl" alt="avatar">
                                            <div class="ml-4">
                                                <div>
                                                    <span class="font-semibold">drehimself</span> commented on
                                                    <span class="font-semibold">This is my idea</span>:
                                                    <span>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                                        quos, eveniet consequatur aspernatur dolor vitae culpa voluptatem
                                                        maiores tempore reprehenderit!"</span>
                                                </div>
                                                <div class="mt-2 text-xs text-gray-500">1 hour ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="
                                                isOpen = false
                                            " class="flex px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                                class="w-10 h-10 rounded-xl" alt="avatar">
                                            <div class="ml-4">
                                                <div>
                                                    <span class="font-semibold">drehimself</span> commented on
                                                    <span class="font-semibold">This is my idea</span>:
                                                    <span>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                                        quos, eveniet consequatur aspernatur dolor vitae culpa voluptatem
                                                        maiores tempore reprehenderit!"</span>
                                                </div>
                                                <div class="mt-2 text-xs text-gray-500">1 hour ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-center border-t border-gray-300">
                                        <button
                                            class="block w-full px-5 py-4 font-semibold transition duration-150 ease-in hover:bg-gray-100">
                                            Mark all as read
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>

        </div>
    </header>
    <main class="container flex flex-col mx-auto max-w-custom md:flex-row">
        <div class="mx-auto md:mr-5 w-70 md:mx-0">
            <div class="mt-16 bg-white border-2 md:sticky border-blue rounded-xl md:top-8" style="
            border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
              border-image-slice: 1;
              background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
              background-origin: border-box;
              background-clip: content-box, border-box;
      ">
                <div class="px-6 py-2 pt-6 text-center">
                    <h3 class="text-base font-semibold">Add an idea</h3>
                    <p class="mt-4 text-xs">
                        @auth
                            Let us know what you would like and we will take a look over!</p>
                    @else
                        Please log in to create an idea.
                    @endauth

                </div>
                @auth
                    <livewire:create-idea />

                @else
                    <div class="my-6 text-center">
                        <a href="{{ route('login') }}"
                            class="justify-center inline-block w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                            <span class="ml-1">Login</span>
                        </a>
                        <a href="{{ route('register') }}"
                            class="justify-center inline-block w-1/2 px-6 py-3 mt-4 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                            Sign Up
                        </a>
                    </div>
                @endauth

            </div>
        </div>
        <div class="w-full px-2 md:w-175 md:px-0">
            <livewire:status-filters />
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    @if (session('success_message'))
        <x-notification-success :redirect="true" message-to-display="{{ session('success_message') }}" />
    @endif

    @livewireScripts
</body>

</html>
