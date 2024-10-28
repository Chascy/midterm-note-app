<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIEW</title>
</head>
<body class="background">

    <?php echo $__env->make('components.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-wrapper-home justify-start items-start">
      <div class="wrapper-header"><h4 class="ml-4 my-2 lg:my-4 relative font-semibold text-base md:text-[20px]">VIEW / NOTE : </h4></div>

      <?php echo $__env->make('components.note-view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
  
</body>
</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/show-note.blade.php ENDPATH**/ ?>