<?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row mt-5">
    <div class="col-md-8 offset-2">
        <div class="card box-shadow border-radius-small">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Customers</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-success underline-none" href="/create"> Add New </a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <?php if(Session::has('customer_deleted')): ?>
                <div class="alert alert-danger fade-message">
                    <?php echo e(Session::get('customer_deleted')); ?>

                </div>
                <?php elseif(Session::has('failed')): ?>
                <div class="alert alert-danger fade-message">
                    <?php echo e(Session::get('failed')); ?>

                </div>
                <?php endif; ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Last</th>
                            <th scope="col">First</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td><?php echo e($customer->last_name); ?></td>
                            <td><?php echo e($customer->first_name); ?></td>
                            <td class="customer-phone"><?php echo e($customer->phone); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                            <td><a class="btn btn-info" href="/edit/<?php echo e($customer->id); ?>">Edit</a>&nbsp;&nbsp;

                                  <div class="modal fade" id="delete-<?php echo e($customer->id); ?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title text-center font-weight-bold" style="width: 100%">Are you sure you want to delete this customer?</h5>
                                      </div>
                                      <div class="modal-body text-center">
                                        <div class="delete-data">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Last</th>
                                                        <th>First</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo e($customer->last_name); ?></td>
                                                        <td><?php echo e($customer->first_name); ?></td>
                                                        <td class="customer-phone"><?php echo e($customer->phone); ?></td>
                                                        <td><?php echo e($customer->email); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          <!-- <p><strong>Last : </strong><span></span></p>
                                          <p><strong>First : </strong><span></span></p>
                                          <p><strong>Phone : </strong><span class="customer-phone"></span></p>
                                          <p><strong>Email : </strong><span></span></p> -->
                                        </div>
                                        <form action="/delete/<?php echo e($customer->id); ?>" method="GET" style="display:inline-block;">
                                          <input type="submit" class="btn btn-danger" value="Yes">
                                        </form>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                      </div>
                                      
                                    </div>
                                   </div>
                                   </div>
                                    <button data-toggle="modal" data-target="#delete-<?php echo e($customer->id); ?>" class="btn btn-danger" id="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\phone-book-app\resources\views/customer/index.blade.php ENDPATH**/ ?>