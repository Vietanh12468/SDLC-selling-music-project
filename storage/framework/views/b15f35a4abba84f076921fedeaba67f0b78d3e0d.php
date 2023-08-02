<?php echo $__env->make('Users.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                Redeem Code
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="code">Enter your code:</label>
                        <input type="text" name="code" id="code" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Redeem</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                VIP for 1 month
            </div>
            <div class="card-body">
                <h2>100$</h2>
                <p>Unlimit download music for 1 month every where, every times</p>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                VIP for 1 year
            </div>
            <div class="card-body">
            <h2><span style="text-decoration: line-through; color:red">$1200</span><span>   $1000</span></h2>
                <p>Unlimit download music for 1 Years + Saving money</p>
                <button type="button" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </div>
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php echo $__env->make('Users.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Viet Anh\My-Web\resources\views/Home/purchase.blade.php ENDPATH**/ ?>