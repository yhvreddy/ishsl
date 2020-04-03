<?php include '../layouts/header.php'; ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Roles types</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-1 mb-1">Add Role Type</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="roleType">Role type</label>
                                <input type="text" placeholder="Enter role type" name="roleType" class="form-control" required>
                            </div>
                            
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-success" value="save role type">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-1 mb-1">Role Types List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>#</th>
                                        <th>Role Types</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Super-admin</td>
                                        <td align="center">
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Edit"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-grease-pencil"></i></a></span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Delete"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-delete"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Admin</td>
                                        <td align="center">
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Edit"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-grease-pencil"></i></a></span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Delete"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-delete"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Hospital</td>
                                        <td align="center">
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Edit"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-grease-pencil"></i></a></span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Delete"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-delete"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- content-wrapper ends -->
<?php include '../layouts/footer.php'; ?>  