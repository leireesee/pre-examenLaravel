<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> 
    
 <?php $__env->slot('header', null, []); ?>  
    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="width: 300px"> <?php echo e(__('Devices
    available')); ?> </h2>
    
 <?php $__env->endSlot(); ?>

    <?php if($dispositivos->has('success')): ?>
    <div></div>
    <?php endif; ?>

    <div class="py-12"> <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
    <?php $__currentLoopData = $dispositivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispositivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-10">
    <div class="grid grid-cols-3 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50
        via-transparent
        dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
        <div>

        <div class="flex items-center justify-center">
            <!-- imagen dispositivo -->
            <img src=" <?php echo e($dispositivo->url); ?>" alt="" width="600px">
        </div>

        <div class="baseline-align">
            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                <!-- modelo del dispositivo -->
                <?php echo e($dispositivo->modelo); ?>

            </h2>

            <h3 class="mt-3 text-sm font-regular text-gray-800 dark:text-white">
                <!-- tipo del dispositivo -->
                <?php echo e($dispositivo->tipo); ?>

            </h3>
        </div>

    </div>
    </a>
    
        
        <form action=<?php echo e(route('eliminarDispositivo', $dispositivo)); ?> method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" style="z-index: 1000000; background-color: black; color: white; padding: 10px; border-radius: 10px; margin-top: 10px;margin-bottom: 30px;">
                Eliminar >
            </button>
        </form>
        
        </div>
        <div style="margin-top: 20px">
        <!-- Eliminar -->
        
        
        <!-- Modificar -->

        

        
        <a href="<?php echo e(route('modificarDispositivo', $dispositivo)); ?>" style="z-index: 1000000; background-color: #1536a3; color: white; padding: 10px; border-radius: 10px; margin-top: 10px;margin-bottom: 30px; margin-left: 5px">Modificar</a>
        </div>
        
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
    </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/dispositivos.blade.php ENDPATH**/ ?>