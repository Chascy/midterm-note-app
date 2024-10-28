<header class="main-wrapper-header">
    <nav class="w-full">

        <ul class="flex justify-between items-center w-full">
            <!-- Logo and Name Section -->
            <li class="flex items-center gap-1">
                <img src="<?php echo e(asset('images/logo_wtitle.png')); ?>" alt="Logo" class="w-[150px] sm:w-[180px] md:w-[200px]">
                <a href="/user-edit/<?php echo e(Auth::user()->id); ?>" class="sm:text-xl"><?php echo e(Auth::user()->name); ?></a>
            </li>

            <!-- Navigation Links -->
            <div class="flex gap-4 sm:gap-6">
                <li>
                    <form action="<?php echo e(route('create')); ?>" method="GET">
                        <?php echo method_field('GET'); ?>
                        <button type="submit">Create</button>
                    </form>
                </li>
                <form action="<?php echo e(route('logout' , ['id' => Auth::user()->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <button type="submit" class="sm:text-lg" onsubmit="return confirm('Log out now?')">Logout</button>
                </form>
            </div>
        </ul>
            

        
    </nav>
  </header>

 <?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/components/main-header.blade.php ENDPATH**/ ?>