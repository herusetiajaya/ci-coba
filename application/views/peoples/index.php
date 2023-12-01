<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h3 class="mt-3">List of Peoples</h3>

            <table class="table bg-gradient-light">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <!-- <th>Action</th> -->
                    </tr>
                <tbody>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <th><?= $people['name']; ?></th>
                            <th><?= $people['email']; ?></th>
                            <th><?= $people['address']; ?></th>
                            <!-- <th>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </th> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </thead>
            </table>
            <?= $this->pagination->create_links(); ?>

        </div>
    </div>
</div>