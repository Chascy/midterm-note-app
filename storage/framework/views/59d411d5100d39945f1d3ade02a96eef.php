<div class="main-wrapper-create  absolute top-[50px] lg:top-[75px] object-top">  
    

    <div class=" content-between justify-between h-[410px]">
    
      <div class="sub-header-wrapper">
 

        
          <div class="flex flex-col justify-center mx-5 mt-4 ">
              <label for="title" class="label-format  ">Note Title:</label>
              <p class="view-title"> <?php echo e($note->title); ?>

              </p>
          </div>
      </div>

    
        <div class="flex flex-col min-h-[100px] mt-20 gap-1"> 

             
          <div class="flex flex-col  ">  
            <label for="description" class="label-format">Description:</label>                        
            <p class="view-description" ><?php echo e($note->description); ?></p>
          </div>


          
          <div class="flex flex-col ">    
            <label for="note" class="label-format">Note Content :</label>
            <p class="view-content"><?php echo e($note->context); ?></p>
          </div>                 

          
            <div class="button-option">
                <form action="<?php echo e(route('delete', ['id' => $note->id])); ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="notok" type="submit">Delete</button>
                </form>
               <a href="/"><button type="submit" class=" ok">Cancel </button></a>
            </div>
            
        </div>    
    </div>


</div>
<?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/components/note-view.blade.php ENDPATH**/ ?>