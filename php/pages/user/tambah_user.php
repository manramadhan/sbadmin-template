<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus mr-1"></i>
                    Form Tambah User
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo BASE_URL; ?>/pages/proses_tambah_User.php">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="UserNama">Nama</label>
                            <input type="text" class="form-control" id="UserNama" name="User_nama" required>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputName1">Username</label>
                            <input type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">File</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1">
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Simpan
                        </button>
                        <a href="User.php" class="btn btn-primary float-right">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>