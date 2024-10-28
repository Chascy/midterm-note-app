<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="background">


    <div class="main-wrapper-landing gap-3">

        <div class="logo-wrapper-landing "><img src="<?php echo e(asset("images/logo_wtitle.png")); ?>" alt="" class="w-full h-full"></div>
        
        <div class="flex sm:flex-row">
                

                <div class="sub-wrapper-landing"> 

                    <?php echo $__env->make("components.register-form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
    </div>
    

    
</body>
</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Project\MidtermProject\resources\views/register-page.blade.php ENDPATH**/ ?>