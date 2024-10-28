<div class="main-wrapper-create absolute  top-[50px] lg:top-[75px] object-top">  
    
    <form action="<?php echo e(route('edit.post', ['id' => $note->id])); ?>" method="POST">
      <?php echo method_field('PUT'); ?>
      <?php echo csrf_field(); ?>
    <div class="sub-header-wrapper">
        

        <div class="sub-wrapper-create mx-5 lg:-mt-5">
            <label for="title" class="label-format  ">Note Title:</label>
            <input type="text" id="title" name="title" value="<?php echo e($note->title); ?>" required placeholder="Add Title">

            
        </div>
    </div>


        
      <div class="flex flex-col gap-3 "> 
         

            
          <div class="sub-wrapper-create">  
          <label for="description" class="label-format">Description:</label>                        
          <input type="text" id="description" name="description" value="<?php echo e($note->description); ?>" required class="flex w-full">
        </div>

        
        <div class="flex flex-col h-[150px] max-w-[700px] ">    
          <label for="context" class="label-format">Note Content :</label>
          <textarea name="context" class="w-full text-center h-[150px] resize-none " id="context" cols="30" rows="10" ><?php echo e($note->context); ?></textarea>
        </div>                 

        
          <div class="button-option ">
             <button type="submit" class=" ok">Save </button>
         </div>
      </div>    
     </form>
     <div class="button-option">
        <form action="/" method="GET">
            <button type="submit" class="edit notok ">Cancel </button>
        </form>
     </div>


</div>
<?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/components/note-edit.blade.php ENDPATH**/ ?>