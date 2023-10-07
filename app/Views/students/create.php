<?php echo view("layouts/header"); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-dark bg-light mb-3 mx-auto" style="width: 50%;">
                <div class="card-body">
                    <?php if (session()->getFlashdata('status')) {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey! </strong><?= session()->getFlashdata('status'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="card-title text-center fw-bold">Add Student Details</div>
                    <form method="POST" action="<?= base_url('students/add') ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Contact Number</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" name="course">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view("layouts/footer");
