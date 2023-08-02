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
        <form action="<?php echo e(route('Admin.SearchUser')); ?>" method="GET">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Input full name to search">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Money</th>
                        <th>VIP</th>
                        <th>Type</th>
                        <th>Created date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->money); ?></td>
                            <td><?php echo e($user->VIP ? 'yes' : 'no'); ?></td>
                            <td><?php echo e($user->type); ?></td>
                            <td><?php echo e($user->created_at); ?></td>
                            <td>
                            <form action="<?php echo e(route('Admin.ChangeAccType', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="customer">
                                <button type="submit" class="btn btn-danger">Set Customer</button>
                            </form>

                            <form action="<?php echo e(route('Admin.ChangeAccType', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="producer">
                                <button type="submit" class="btn btn-danger">Set Producer</button>
                            </form>

                            <form action="<?php echo e(route('Admin.ChangeAccType', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="admin">
                                <button type="submit" class="btn btn-danger">Set Admin</button>
                            </form>

                            <form action="<?php echo e(route('Admin.ChangeAccType', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="ban">
                                <button type="submit" class="btn btn-danger">Ban Acc</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php echo $__env->make('Users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Viet Anh\My-Web\resources\views/UsersManager/UserManager.blade.php ENDPATH**/ ?>