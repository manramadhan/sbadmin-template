<?php
include('./inc/header.php');
include('./inc/sidebar.php');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Horizontal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Horizontal</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Form Horizontal
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <!-- File -->
                        <div class="form-group row">
                            <label for="fileUpload" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="fileUpload">
                            </div>
                        </div>
                        <!-- Input with addons -->
                        <div class="form-group row">
                            <label for="inputAddons" class="col-sm-2 col-form-label">Input with addons</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="inputAddons"
                                        placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <!-- input Checkbox -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Checkboxes</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                    <label class="custom-control-label" for="checkbox1">Checkbox 1</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                                    <label class="custom-control-label" for="checkbox2">Checkbox 2</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox3">
                                    <label class="custom-control-label" for="checkbox3">Checkbox 3</label>
                                </div>
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group row">
                            <label for="textArea" class="col-sm-2 col-form-label">Textarea</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="textArea" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Radio -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 float-sm-left pt-0">Radios</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios"
                                        id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Third radio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Select -->
                        <div class="form-group row">
                            <label for="selectOption" class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="selectOption">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                        <!--Multiselect -->
                        <div class="form-group row">
                            <label for="multiSelect" class="col-sm-2 col-form-label">Multiselect</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="multiSelect" multiple>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include('./inc/footer.php'); ?>
