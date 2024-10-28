<div class="main-wrapper-create  absolute top-[50px] lg:top-[75px] object-top">

    <div class="sub-header-wrapper"><div class="sub-wrapper-create mx-5 lg:-mt-5"></div></div>


    
<div class="flex flex-row justify-center gap-3" >
    <div class=" h-[250px] w-[250px] hidden sm:block ">
       <img src="{{asset('images/logo_for_profilepage.png')}}" alt="Logo" class="w-[150px] sm:w-[180px] md:w-[200px]">
    </div>

        <form action="/" method="GET" id="cancel"></form>
        <form action="{{ route('updateUser', ['id' => Auth::user()->id]) }}" id="update" method="POST"  class="flex flex-col w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px]">
            @method('PUT')
            @csrf
            
            <div class="flex flex-col gap-3 " >

                    <div class="flex flex-col h-[50px] ">   
                        <label for="name" class="label-format">Name :</label>                        
                        <input type="text" name="name" id="name" class="flex flex-grow h-[40px] w-full ml-2" value="{{ $user->name }}" required><br>
                    </div>
            
                    <div class="flex flex-col h-[50px]  ">    
                        <label for="email" class="label-format">Email :</label>
                        <input type="email" name="email" id="email" class="flex w-full h-[40px]  ml-2" value="{{ $user->email }}" required><br>

                    </div>          
                    
                    
                    <div class="flex flex-col h-[50px] ">    
                        <label for="password" class="label-format">Password :</label>
                        <input type="password" name="password" id="password" class="flex flex-grow w-full  h-[40px] ml-2" value="{{ $user->password }}" required><br>
                        
                    </div>            


                    <div class="button-option-b ">
                        <button type="submit" class="ok" form="update">Save</button>
                        <button type="submit" class="edit notok " form="cancel">Cancel</button>
                    </div>
                </div>    

            </div>
        </form>
    </div>
</div>

</div>


        {{-- <div class="button-option">
            <form action="/" method="GET">
                <button type="submit" class="edit notok ">Cancel </button>
            </form> --}}