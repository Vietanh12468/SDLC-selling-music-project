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
        <h1> Search Song here </h1>
        <form action="<?php echo e(route('SongShow.Search')); ?>" method="GET">
            <div class="row d-flex justify-content-center">
                <div class="form-group col-md-6 h-100">
                    <input type="text" name="search" class="form-control" placeholder="Input full name to search">
                </div>
                <button type="submit" class="btn btn-primary h-100">Search</button>
            </div>
        </form>
        <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="SongShow/<?php echo e($song->id); ?>">
            <div class="row d-flex justify-content-center align-items-center Songrow text-center">
                <div class="col-md-2">
                    <img src="<?php echo e(asset('storage/' . $song->image)); ?>" alt="<?php echo e($song->name); ?>" width="100">
                </div>
                <div class="col-md-3">
                    <h5><?php echo e($song->name); ?></h5>
                    <p><?php echo e($song->artist); ?></p>
                </div>
                <div class="col-md-4">
                    <audio controls style="width: 100%;">
                        <source src="<?php echo e(asset('storage/' . $song->song)); ?>" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php echo $__env->make('Users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Viet Anh\My-Web\resources\views/Home/search.blade.php ENDPATH**/ ?>