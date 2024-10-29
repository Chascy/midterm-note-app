<header class="main-wrapper-header">
    <nav class="w-full">

        <ul class="flex justify-start items-center w-full">

            <li class="flex items-center gap-1 ml-2">
                <a href="/"><img src="{{asset('images/withtitleLogo.png')}}" alt="Logo" class="w-[150px] sm:w-[180px] md:w-[200px]"></a>
                <a href="/user-edit/{{ Auth::user()->id }}" class="text-[12px] sm:md:lg:text-[24px] font-[500] mt-12">{{ Auth::user()->name }}</a>
            </li>

    
            <li class="relative dropdown mt-5">
                <button class="dropdown-button no-borders mr-5" onclick="toggleDropdown()" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);transform: ;msFilter:;">
                        <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
                </button>
            
                <div id="dropdownMenu" class="dropdown-content hidden">
                    <form action="{{ route('create') }}" method="GET">
                        @method('GET')
                        <button class="border-none" type="submit">Create</button>
                    </form>
            
                    <form action="{{ route('logout', ['id' => Auth::user()->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="border-none" onclick="return confirm('Log out now?')">Logout</button>
                    </form>
                </div>
            </li>


        </ul>
        
    </nav>
  </header>

 