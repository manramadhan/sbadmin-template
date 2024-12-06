<?php
include('./inc/header.php');
include('./inc/sidebar.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Vertical</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Vertical</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Form Vertical
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputName1">Username</label>
                            <input type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <!-- input email -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
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
                        <!-- input addons -->
                        <div class="form-group">
                            <label for="inputAddons">Input addons</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="inputAddons" placeholder="Username">
                            </div>
                        </div>
                        <!-- Multiselect -->
                        <div class="form-group">
                            <label for="multiSelect">Multiselect</label>
                            <select multiple class="form-control" id="multiSelect">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <!-- Select -->
                        <div class="form-group">
                            <label for="selectOption">Select</label>
                            <select class="form-control" id="selectOption">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                        <!-- Radio Buttons -->
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="radio1" name="radioGroup">
                                <label class="custom-control-label" for="radio1">Radio 1</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="radio2" name="radioGroup">
                                <label class="custom-control-label" for="radio2">Radio 2</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="radio3" name="radioGroup">
                                <label class="custom-control-label" for="radio3">Radio 3</label>
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label for="textArea">Textarea</label>
                            <textarea class="form-control" id="textArea" rows="3"></textarea>
                        </div>
                        <!-- Checkbox -->
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Checkbox 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Checkbox 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                <label class="form-check-label" for="exampleRadios3">
                                    Checkbox 3
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include('./inc/footer.php');
