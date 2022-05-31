﻿<!-- Sweet Alert Css -->
<link href="<?= base_url()?>public/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

<div class="container-fluid">
    <div class="block-header">
        <h2>
            FORM VALIDATION
            <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>BASIC VALIDATION</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="surname" required>
                                <label class="form-label">Surname</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" required>
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="gender" id="male" class="with-gap">
                            <label for="male">Male</label>

                            <input type="radio" name="gender" id="female" class="with-gap">
                            <label for="female" class="m-l-20">Female</label>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                <label class="form-label">Description</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="checkbox" name="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
    <!-- Advanced Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>ADVANCED VALIDATION</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_advanced_validation" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>
                                <label class="form-label">Min/Max Length</label>
                            </div>
                            <div class="help-info">Min. 3, Max. 10 characters</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
                                <label class="form-label">Min/Max Value</label>
                            </div>
                            <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="url" class="form-control" name="url" required>
                                <label class="form-label">Url</label>
                            </div>
                            <div class="help-info">Starts with http://, https://, ftp:// etc</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="date" required>
                                <label class="form-label">Date</label>
                            </div>
                            <div class="help-info">YYYY-MM-DD format</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="number" required>
                                <label class="form-label">Number</label>
                            </div>
                            <div class="help-info">Numbers only</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
                                <label class="form-label">Credit Card</label>
                            </div>
                            <div class="help-info">Ex: 1234-5678-9012-3456</div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Advanced Validation -->
    <!-- Validation Stats -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        VALIDATION STATS
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation_stats">
                        <div class="form-group form-float">
                            <div class="form-line focused warning">
                                <input type="text" class="form-control" name="warning" value="Warning" required>
                                <label class="form-label">Form Validation - Warning</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line focused error">
                                <input type="text" class="form-control" name="error" value="Error" required>
                                <label class="form-label">Form Validation - Error</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line focused success">
                                <input type="email" class="form-control" name="success" value="Success" required>
                                <label class="form-label">Form Validation - Success</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Validation Stats -->
</div>


<!-- Jquery Validation Plugin Css -->
<script src="<?= base_url()?>public/plugins/jquery-validation/jquery.validate.js"></script>
<!-- JQuery Steps Plugin Js -->
<script src="<?= base_url()?>public/plugins/jquery-steps/jquery.steps.js"></script>
<!-- Sweet Alert Plugin Js -->
<script src="<?= base_url()?>public/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Custom Js -->
<script src="<?= base_url()?>public/js/pages/forms/form-validation.js"></script>