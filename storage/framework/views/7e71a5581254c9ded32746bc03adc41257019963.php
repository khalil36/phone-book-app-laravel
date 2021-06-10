<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h2 class="mb-4 text-center mt-5">Edit Data</h2>
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card box-shadow border-radius-small">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Customer Form</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info underline-none" href="/"> Back </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <?php if(Session::has('customer_updated')): ?>
                <div class="alert alert-success fade-message">
                    <?php echo e(Session::get('customer_updated')); ?>

                </div>
                <?php elseif(Session::has('failed')): ?>
                <div class="alert alert-danger fade-message">
                    <?php echo e(Session::get('failed')); ?>

                </div>
                <?php endif; ?>
                <form action="/update/<?php echo e($customer->id); ?>" method="GET" enctype="multipart/form-data">        
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="mt-3 <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                            <label for="first_name">First Name*</label>
                            <input type="text" placeholder="First Name" value="<?php echo e($customer->first_name); ?>" name="first_name" id="first_name" class="form-control">
                            <?php if($errors->has('first_name')): ?>
                                <em class="invalid-feedback">
                                    <?php echo e($errors->first('first_name')); ?>

                                </em>
                            <?php endif; ?>
            
                        </div>
                        <div class="mt-3 <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
                            <label for="last_name">Last Name*</label>
                            <input type="text" placeholder="Last Name" value="<?php echo e($customer->last_name); ?>" name="last_name" id="last_name" class="form-control">
                            <?php if($errors->has('last_name')): ?>
                                <em class="invalid-feedback">
                                    <?php echo e($errors->first('last_name')); ?>

                                </em>
                            <?php endif; ?>
                        
                        </div>
                        <div class="mt-3 <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                            <label for="phone">Phone*</label>
                            <input type="text" placeholder="0123456789" value="<?php echo e($customer->phone); ?>" id="phone" name="phone" class="form-control" maxlength="10"/>
                            <?php if($errors->has('phone')): ?>
                                <em class="invalid-feedback">
                                    <?php echo e($errors->first('phone')); ?>

                                </em>
                            <?php endif; ?>
                        </div>
                        <div class="mt-3 <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <label for="email">Email*</label>
                            <input type="email" placeholder="example@gmail.com" value="<?php echo e($customer->email); ?>" id="email" name="email" class="form-control" />
                            <?php if($errors->has('email')): ?>
                                <em class="invalid-feedback">
                                    <?php echo e($errors->first('email')); ?>

                                </em>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="text-right">
                        <input class="btn btn-success" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\phone-book-app-laravel\resources\views/customer/edit.blade.php ENDPATH**/ ?>