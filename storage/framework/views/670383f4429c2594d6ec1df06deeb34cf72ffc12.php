<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="<?php echo e(route('home')); ?>"> Kembali</a>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Profil Penyewa</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-muted">Id</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Nama</td>
                            
                        </tr>
                        
                        <tr>
                            <td class="text-muted">Telepon</td>
                            
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Keterangan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-muted">Id Sepeda</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Nama Petugas Awal</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Hotel Awal</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Nama Petugas Kembali</td>
                            
                        </tr>
                        
                        <tr>
                            <td class="text-muted">Hotel Kembali</td>
                            
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Keterangan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-muted">Jam Pinjam</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Jam Kembali</td>
                            
                        </tr>
                        <tr>
                            <td class="text-muted">Total</td>
                            
                        </tr>
                        
                        <tr>
                            <td class="text-muted">Tanggal</td>
                            
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>