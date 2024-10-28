<div class="main-wrapper-create absolute  top-[50px] lg:top-[75px] object-top">  
    
    <form action="<?php echo e(route('create.post')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('POST'); ?>
    
    <div class="sub-header-wrapper">

        <div class="sub-wrapper-create mx-5 lg:-mt-5 ">
            <label for="title" class="label-format  ">Note Title:</label>
            <input type="text" id="title" name="title" required placeholder="Add Title">

            
        </div>
    </div>


        
      <div class="flex flex-col gap-3 "> 
         

            
          <div class="sub-wrapper-create">  
          <label for="description" class="label-format">Description:</label>                        
          <input type="text" id="description" name="description" required class="flex w-full">
        </div>

        
        <div class="flex flex-col h-[150px] max-w-[700px] ">    
          <label for="context" class="label-format">Note Content :</label>
          <textarea name="context" class="w-full text-center h-[150px] resize-none " id="context" cols="30" rows="10" placeholder="Input your wonderful note!"></textarea>
        </div>                 

        
          <div class="button-option ">
            
            <button type="submit" class="edit ok edit">Create </button>
         </div>
      </div>    
     </form>
     <div class="button-option">
        <form action="/" method="GET">
            <button type="submit" class="edit notok ">Cancel </button>
        </form>
     </div>

</div>
<?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/components/note-create.blade.php ENDPATH**/ ?>