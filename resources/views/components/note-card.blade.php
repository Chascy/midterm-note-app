<div class="card">  
         
    <h2 class="title-card"><a href="/note/{{ $note->id }}">{{ $note->title }}</a></h2> 
    <hr class=" mt-[4px] h-[5px] bg-amber-500">

        <p class="description">{{$note->description}}</p>
    <hr class=" h-[2px] bg-orange-600">

        <p class="note-content">{{$note->context}}</p>

    <hr class=" h-[1px] bg-orange-600">

    <div class="flex flex-row mt-2">
        <div class="flex-col"> 
            
            <div class="date">
                
                <h4> date created :</h4> <h4 class="ml-2">{{ $note->created_at }}</h4>
            </div>
            <div class="date">
                <h4> date updated :</h4> <h4 class="ml-2">{{ $note->updated_at }}</h4>
            </div>
        </div>   
    

        <div class="options">
            <a href="/edit-note/{{ $note->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(17, 232, 50, 0.8);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg>
            </a> 


            <form action="{{ route('delete', ['id' => $note->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="border-none" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(233, 51, 51, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></button>
            </form>
        </div>

    </div>
  </div>