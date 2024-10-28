<header class="main-wrapper-header">
    <nav class="w-full">

        <ul class="flex justify-start items-center w-full">
            <!-- Logo and Name Section -->
            <li class="flex items-center gap-1 ml-2">
                <img src="{{asset('images/withtitleLogo.png')}}" alt="Logo" class="w-[150px] sm:w-[180px] md:w-[200px]">
                <a href="/user-edit/{{ Auth::user()->id }}" class="font-[500] sm:text-xl">{{ Auth::user()->name }}</a>
            </li>

    
            <li class="relative dropdown">
                <!-- Dropdown Toggle Button -->
                <button class="dropdown-button no-borders mr-5" onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);transform: ;msFilter:;">
                        <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
                </button>
            
                <!-- Dropdown Content -->
                <div id="dropdownMenu" class="dropdown-content hidden">
                    <!-- Create Button -->
                    <form action="{{ route('create') }}" method="GET">
                        @method('GET')
                        <button class="button-header w-full text-left" type="submit">Create</button>
                    </form>
            
                    <!-- Logout Button -->
                    <form action="{{ route('logout', ['id' => Auth::user()->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="button-header w-full text-left" onclick="return confirm('Log out now?')">Logout</button>
                    </form>
                </div>
            </li>


                {{-- <div class="sm:block md:hidden lg:hidden xl:hidden mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);transform: ;msFilter:;">
                    <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
            </div> --}}

            {{-- <div class="flex gap-1 sm:gap-2 hidden sm:hidden md:block lg:block xl:block">
              
                <li>
                    <form action="{{ route('create') }}" method="GET" id="">
                        @method('GET')
                        <button class="button-header" type="submit">Create</button>
                    </form>
                </li>

                <li>
                    <form action="{{ route('logout' , ['id' => Auth::user()->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="button-header "   class="sm:text-lg" onsubmit="return confirm('Log out now?')"><h5> Logout</h5></button>
                    </form>
                </li>


            </div> --}}
        </ul>
        
    </nav>
  </header>

 