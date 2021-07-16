<?php $__env->startSection('content'); ?>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card o-hidden border-0 shadow-none my-5">
                <div class="card-body border-0 p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="card border-0">
                                <div class="card-header border-0 d-flex justify-content-center">
                                    <img src="<?php echo e(asset('img/logo.png')); ?>" width="45%">
                                </div>
                                <div class="card-body border-0 text-center">
                                    <h5 class="card-title" style="color: black">SMA NEGERI 1 SEPUTIH BANYAK</h5>
                                    <p class="card-text" style="color: black">Jl. Raya Sri Basuki No. 01 Seputih Banyak 34156 <br> Telp. (0725) 7623325</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php echo e(('Login Administrator')); ?></h1>
                                </div>

                                <form class="user" action="<?php echo e(route('admin.login')); ?>" method="post">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               name="email" placeholder="<?php echo e(('E-mail')); ?>" value="<?php echo e(old('email')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <input name="password" type="password"
                                               class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                               placeholder="<?php echo e(('Password')); ?>" value="<?php echo e(old('password')); ?>">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input name="remember" type="checkbox" id="customCheck"
                                                   class="custom-control-input">

                                            <label class="custom-control-label" for="customCheck">
                                                <?php echo e(('Ingat saya')); ?>

                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?php echo e(('Login')); ?>

                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo e(route('admin.register')); ?>"><?php echo e(('Belum punya akun?')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>