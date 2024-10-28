<div class="main-wrapper-create  absolute top-[50px] lg:top-[75px] object-top">

    <div class="sub-header-wrapper"><div class="sub-wrapper-create mx-5 lg:-mt-5"></div></div>


    
<div class="flex flex-row justify-center gap-3" >
    <div class=" h-[250px] w-[250px] bg-slate-400 hidden sm:block ">>
        <div>hellooo</div>
    </div>


        <form action="<?php echo e(route('updateUser', ['id' => Auth::user()->id])); ?>" method="POST"  class="flex flex-col w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px]">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            
            <div class="flex flex-col gap-3 " >

                    <div class="flex flex-col h-[50px] ">   
                        <label for="name" class="label-format">Name :</label>                        
                        <input type="text" name="name" id="name" class="flex flex-grow h-[40px] w-full ml-2" value="<?php echo e($user->name); ?>" required><br>
                    </div>
            
                    <div class="flex flex-col h-[50px]  ">    
                        <label for="email" class="label-format">Email :</label>
                        <input type="email" name="email" id="email" class="flex w-full h-[40px]  ml-2" value="<?php echo e($user->email); ?>" required><br>

                    </div>          
                    
                    
                    <div class="flex flex-col h-[50px] ">    
                        <label for="password" class="label-format">Password :</label>
                        <input type="password" name="password" id="password" class="flex flex-grow w-full  h-[40px] ml-2" value="<?php echo e($user->password); ?>" required><br>
                        
                    </div>            


                    <div class="button-option ">
                        <button type="submit" class="ok">Save</button>
                    </div>
                </div>    

            </div>
        </form>
        <div class="button-option">
            <form action="/" method="GET">
                <button type="submit" class="edit notok ">Cancel </button>
            </form>
         </div>
    </div>
</div>

</div><?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/components/user-profile.blade.php ENDPATH**/ ?>