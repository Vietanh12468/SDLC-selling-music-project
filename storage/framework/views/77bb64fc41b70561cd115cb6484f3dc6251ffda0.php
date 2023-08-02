<?php echo $__env->make('Users.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
        <?php if($message = Session::get('fail')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <h1> Recent Upload </h1>
        <div class="row" >
            <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mb-4 song">
                    <a href="SongShow/<?php echo e($song->id); ?>">
                        <div class="card h-100">
                            <div style="height: 60%;">
                                <img class="card-img-top Max_fit" src="<?php echo e(asset('storage/' . $song->image)); ?>" alt="<?php echo e($song->name); ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($song->name); ?></h5>
                                <p class="card-text"><?php echo e($song->artist); ?></p>
                                <p class="card-text"><?php echo e($song->album); ?></p>
                                <p class="card-text"><?php echo e($song->created_at); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php echo $__env->make('Users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Viet Anh\My-Web\resources\views/Home/explore.blade.php ENDPATH**/ ?>