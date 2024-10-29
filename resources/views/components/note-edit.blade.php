<div class="main-wrapper-create absolute  top-[50px] lg:top-[75px] object-top"> 
    <form action="/" method="GET" id="cancel" class="none"></form>
    <form action="{{ route('edit.post', ['id' => $note->id]) }}" method="POST" id="save">
      @method('PUT')
      @csrf
    <div class="sub-header-wrapper">
   
        <div class="sub-wrapper-create mx-5 lg:-mt-5">
            <label for="title" class="label-format  ">Note Title:</label>
            <input type="text" id="title" name="title" value="{{ $note->title }}" required placeholder="Add Title">

        </div>
    </div>


  
      <div class="flex flex-col gap-3 "> 
         
  
          <div class="sub-wrapper-create">  
          <label for="description" class="label-format">Description:</label>                        
          <input type="text" id="description" name="description" value="{{ $note->description }}" required class="flex w-full">
        </div>

        <div class="flex flex-col h-[150px] max-w-[700px] ">    
          <label for="context" class="label-format">Note Content :</label>
          <textarea name="context" class="w-full text-center h-[150px] resize-none " id="context" cols="30" rows="10" >{{ $note->context }}</textarea>
        </div>                 

        
          <div class="button-option ">
             <button type="submit" class="ok" form="save">Save </button>
             <button type="submit" class="edit notok " form="cancel">Cancel </button>
             
         </div>
      </div>    
     </form>


     </div>



</div>
