<?php echo view("layouts/header"); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-dark bg-light mb-3 mx-auto" style="width: 50%;">
                <div class="card-body">
                    <div class="card-title text-center fw-bold">Edit Student Details</div>
                    <form method="POST" action="<?= base_url('student/update/' . $student['id']) ?>">
                        <input type="hidden" name="method" value="PUT" />
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= $student['name']; ?>" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" value="<?= $student['email']; ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Contact Number</label>
                            <input type="number" value="<?= $student['phone']; ?>" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" value="<?= $student['course']; ?>" class="form-control" id="course" name="course">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view("layouts/footer");
