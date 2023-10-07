<?php echo view("layouts/header"); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <?php if (session()->getFlashdata('status')) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey! </strong><?= session()->getFlashdata('status'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <div class="card text-dark bg-light mb-3">
                <div class="card-body">
                    <div class="card-title fw-bold fw-bold ">
                        <div class="row">
                            <div class="col-sm-8">
                                Student Details
                            </div>
                            <div class="col-sm-2 float-end">
                                <a href="<?= base_url('students/create') ?>" class="btn btn-info btn-sm float end">Add Student</a>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table" id="Table">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Contact Number</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($students) : ?>
                                    <?php foreach ($students as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['course']; ?></td>
                                            <td>
                                                <a href="<?= base_url('student/edit' . $row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('student/delete' . $row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view("layouts/footer");
