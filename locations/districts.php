<?php include '../layouts/header.php'; ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Locations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Districts</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-1 mb-1">Add District</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="countryId">Country Name</label>
                                <select class="form-control select2" name="countryId" required>
                                    <option value="">Select Country Name</option>
                                    <option value="1">India</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stateId">State Name</label>
                                <select class="form-control select2" name="stateId" required>
                                    <option value="">Select State Name</option>
                                    <option value="1">Andra Pradesh</option>
                                    <option value="2">Telagana</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="districtName">District Name</label>
                                <input type="text" placeholder="Enter District name" name="districtName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="save district">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-1 mb-1">Districts List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>#</th>
                                        <th>District Name</th>
                                        <th>State Name</th>
                                        <th>Country Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Guntur</td>
                                        <td>Andra Pradesh</td>
                                        <td>India</td>
                                        <td align="center">
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Edit"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-grease-pencil"></i></a></span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Delete"><a href="#" class="mr-1 text-muted p-2"><i class="mdi mdi-delete"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hyderabad</td>
                                        <td>Telagana</td>
                                        <td>India</td>
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