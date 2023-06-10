<style>
.line-wise .form-check,
.form-radio {
    display: inline-block;
    margin-right: 10px;
    margin-top: 8px;
}

.line-wise .form-check,
.form-radio label {
    padding-left: 12px;
}
</style>



<div class="main-panel">
    <div class="content-wrapper">
        <!-- <? if ($id > 0) : ?>
            <button class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#attr_modal"> Add
                Attribute</button>
        <? endif; ?> -->


        <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="editSliderModal"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSliderModal">Edit Slider Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body col-12">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Slider Title<sup>*</sup></label>
                                        <input type="text" class="form-control" name="home-slider-title" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Slider link<sup>*</sup></label>
                                        <input type="text" class="form-control" name="home-slider-link" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-form-label">Slider Image<sup>*</sup></label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" class="form-control file-upload-info" required>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-dark"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Banner type<sup>*</sup></label>
                                        <select class="form-control js-example-basic-multiple" name="slider_type">
                                            <option value="exam">Exam</option>
                                            <option value="college">College</option>
                                            <option value="course">Course</option>
                                            <option value="blog">Blog</option>
                                            <option value="news">News</option>
                                            <option value="news">Offer/Promotion</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Category<sup>*</sup></label>
                                        <select class="form-control js-example-basic-multiple" name="slider_category">
                                            <option value="medical">Medical</option>
                                            <option value="paramedical">Paramedical</option>
                                            <option value="pharmacy">Pharmacy</option>
                                            <option value="Dental">Dental</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Banner Position<sup>*</sup></label>
                                        <select class="form-control js-example-basic-multiple" name="slider_category">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Banner Duration<sup>*</sup></label>
                                        <input type="text" class="form-control" name="home-slider-duration"
                                            placeholder="date range here" value="">
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Update Details</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <? if ($this->session->flashdata('message')) : ?>
                        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <p><?= $this->session->flashdata('message') ?></p>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <? endif ?>
                        <h4 class="card-title mb-4">Homepage Changes</h4>
                        <div class="col-md-12">
                            <!-- Sub-silos-menu Start here -->
                            <ul class="nav nav-tabs tab-basic  p-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active tab-1" id="home-tab" data-toggle="tab" href="#home-slider"
                                        role="tab" aria-controls="home-slider" aria-selected="true">Home Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-2" id="home-tab" data-toggle="tab" href="#home-body-update"
                                        role="tab" aria-controls="home-body-update" aria-selected="true">body Update</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link tab-2" id="home-tab" data-toggle="tab" href="#mega-menu-panel"
                                        role="tab" aria-controls="mega-menu-panel" aria-selected="true">Mega Menu</a>
                                </li>

                                <!-- Sub-silos-menu end here -->
                            </ul>

                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="home-slider" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <?php echo form_open_multipart($this->uri->uri_string(), "class='form-horizontal form-home-slider'"); ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Slider Title<sup>*</sup></label>
                                                <input type="text" class="form-control" name="home-slider-title"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Slider link<sup>*</sup></label>
                                                <input type="text" class="form-control" name="home-slider-link"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">Slider Image<sup>*</sup></label>
                                                <div class="input-group col-xs-12">
                                                    <input type="file" class="form-control file-upload-info" required>
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-dark"
                                                            type="button">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Banner type<sup>*</sup></label>
                                                <select class="form-control js-example-basic-multiple"
                                                    name="slider_type">
                                                    <option value="exam">Exam</option>
                                                    <option value="college">College</option>
                                                    <option value="course">Course</option>
                                                    <option value="blog">Blog</option>
                                                    <option value="news">News</option>
                                                    <option value="news">Offer/Promotion</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Category<sup>*</sup></label>
                                                <select class="form-control js-example-basic-multiple"
                                                    name="slider_category">
                                                    <option value="medical">Medical</option>
                                                    <option value="paramedical">Paramedical</option>
                                                    <option value="pharmacy">Pharmacy</option>
                                                    <option value="Dental">Dental</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Venetrinary Science">Venetrinary Science</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Banner Position<sup>*</sup></label>
                                                <select class="form-control js-example-basic-multiple"
                                                    name="slider_category">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Banner Duration<sup>*</sup></label>
                                                <input type="text" class="form-control" name="home-slider-duration"
                                                    placeholder="date range here" value="">
                                            </div>
                                        </div>


                                    </div><button type="submit" class="btn btn-lg btn-rounded btn-success" id="next">Add
                                        New Slider</button>
                                    <?php echo form_close(); ?>
                                    <h4 class="mt-4 text-primary"></h4>
                                    <div class="card-description col-12 h4 text-primary">Slider Details</div>
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Banner Position</th>
                                                        <th>Slider Title</th>
                                                        <th>Type | Category</th>
                                                        <th>Image</th>
                                                        <th>Last Update</th> <!-- Date & time -->
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>AVBP College, Meerut <label
                                                                class="badge badge-outline-info">new</label></td>
                                                        <!--label should be apeear 7 days -->
                                                        <td>College | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face1.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Draft</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>AVBP College, Meerut <label
                                                                class="badge badge-outline-warning">expire soon</label>
                                                        </td>
                                                        <td>Exam | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face2.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Live</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>AVBP College, Meerut</td>
                                                        <td>News | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face3.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Live</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>AVBP College, Meerut</td>
                                                        <td>College | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face5.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Live</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>AVBP College, Meerut</td>
                                                        <td>Exam | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face1.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Live</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>AVBP College, Meerut</td>
                                                        <td>College | Medical</td>
                                                        <td> <img
                                                                src="<?php echo base_url(); ?>assets/images/faces/face2.jpg"
                                                                alt="" srcset=""> </td>
                                                        <td>15 Jan, 2023 | 14:52:20
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Live</label>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-eye"></i> View</button>
                                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                                data-target="#editSliderModal"><i
                                                                    class="fa fa-pencil-o"></i> Edit</button>
                                                            <button class="btn btn-outline-primary"><i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade show" id="home-body-update" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <form class="form-home-body-update line-wise" method="post" action="">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">City List
                                                        (check only 15 city)</div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    City Name Here
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">College
                                                        List (8 list should be check)</div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">Admission
                                                        Update (8 list should be check)</div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">Admission
                                                        Update (8 list should be check)</div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    College Name here
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-lg btn-success mr-2" name="status"
                                            value="1">Update Homepage</button>
                                    </form>
                                </div>

                                <div class="tab-pane fade show" id="mega-menu-panel" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <form class="form-mega-menu-panel line-wise" method="post" action="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">Exam
                                                        Section</div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Exams {Exam
                                                            Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Exams
                                                            {Exam Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Exams {Exam
                                                            Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Exams
                                                            {Exam Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Exams {Exam
                                                            Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Exams
                                                            {Exam Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Exams Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-description text-info mb-0">Feature Exams (Exam
                                                            Slider Details are here)</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Exam Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">College
                                                        Section</div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical College
                                                            {College Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical College
                                                            {College Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical college
                                                            {College Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical college
                                                            {College Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical college
                                                            {College Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical college
                                                            {College Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical college Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-description text-info mb-0">Feature college
                                                            (College Slider Details are here)</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical College Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card-description col-12 mt-4 h6 text-primary">Course
                                                        Section</div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Medical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-description text-info mb-0">Paramedical Course
                                                            {Course Category Name}</div>
                                                        <div class="form-group">


                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Paramedical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card-description text-info mb-0">Feature Course
                                                            (Course Slider Details are here)</div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-flat">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    Medical Course Name
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-lg btn-success mr-2" name="status"
                                                value="1">Make Job Live</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#next').click(function() {
            $('ul li a tab-2').addClass('active');
            $('ul li a tab-1').removeClass('active');
        });
    })
    </script>