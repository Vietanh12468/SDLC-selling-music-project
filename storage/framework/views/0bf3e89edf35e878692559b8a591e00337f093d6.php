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
        <div class="row Songplay" >
            <div class="col-md-7" style="margin-right: 20px;">
                <img src="<?php echo e(asset('storage/' . $song->image)); ?>" alt="<?php echo e($song->name); ?>" width="70%">
            </div>
            <div class="col-md-4 SongInfo">
                <h1><?php echo e($song->name); ?></h1>
                <h3> Artist: <?php echo e($song->artist); ?></h3>
                <h3> Category: <?php echo e($song->category); ?></h3>
                <audio controls style="width: 100%;">
                    <source src="<?php echo e(asset('storage/' . $song->song)); ?>" type="audio/mpeg">
                </audio>
                <div class="button-container">
                    <div class="button" id="button2">
                        <img src="<?php echo e(asset('storage/NormalLike.png')); ?>" alt="Button">
                    </div>
                    <div class="button" id="button1">
                        <img src="<?php echo e(asset('storage/NormalLike.png')); ?>" alt="Button" class="upside-down">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo e(route('SongShow.download', ['id' => $song->id])); ?>">
                            <div class="text-center">
                                <button class="btn btn-primary btn-lg" style="width: 100%;">
                                <img src="<?php echo e(asset('storage/Download.png')); ?>"  class="mr-3" style="max-width: 50px;">
                                Download Now
                                </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <javascript>
        <script>
            const button1 = document.getElementById('button1');
            const button2 = document.getElementById('button2');

            button1.addEventListener('click', () => {
            button1.classList.toggle('active');
            button2.classList.remove('active');
            button1.classList.toggle('red');
            button2.classList.remove('green');
            });

            button2.addEventListener('click', () => {
            button2.classList.toggle('active');
            button1.classList.remove('active');
            button2.classList.toggle('green');
            button1.classList.remove('red');
            });
        </script>
        
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php echo $__env->make('Users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Viet Anh\My-Web\resources\views/Home/songshow.blade.php ENDPATH**/ ?>