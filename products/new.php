<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/inventory/config/general.php';
    require_once DOCUMENT_ROOT.'/inc/html_header.php';
?>

    <div class="page-wrapper">
        <?php include_once DOCUMENT_ROOT.'/inc/side_nav.php';?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php include_once DOCUMENT_ROOT.'/inc/header_desktop.php';?>

            <?php include_once DOCUMENT_ROOT.'/inc/breadcrumb.php';?>

            <!-- Other Contents here -->
            <div class="col-lg-12">
                <?php if (isset($_SESSION['err_msg']) && !empty($_SESSION['err_msg'])) { ?>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <span class="badge badge-pill badge-danger">Error!</span>
                        <?php echo $_SESSION['err_msg'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php unset($_SESSION['err_msg']); }?>

                <?php if (isset($_SESSION['suc_msg']) && !empty($_SESSION['suc_msg'])) { ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Success!</span>
                        <?php echo $_SESSION['suc_msg'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php unset($_SESSION['suc_msg']); }?>

                <div class="card">
                    <div class="card-header">
                        <strong>Add New Product</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo BASE_URL?>/process/products.php" method="post" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="product_title" class=" form-control-label">Product Title</label>
                                    <input type="text" id="product_title" name="product_title" placeholder="Product Title" class="form-control" 
                                    value="<?php if(isset($_SESSION['fields']['product_title'])){echo $_SESSION['fields']['product_title'];}?>">
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="part_number" class=" form-control-label">Part Number</label>
                                    <input type="text" id="part_number" name="part_number" placeholder="Part Number" class="form-control"
                                    value="<?php if(isset($_SESSION['fields']['part_number'])){echo $_SESSION['fields']['part_number'];}?>">
                                </div>
                                <div class="col col-md-6">
                                    <label for="product_label" class=" form-control-label">Product Label</label>
                                    <input type="text" id="product_label" name="product_label" placeholder="Product Label" class="form-control"
                                    value="<?php if(isset($_SESSION['fields']['product_label'])){echo $_SESSION['fields']['product_label'];}?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="starting_inv" class=" form-control-label">Starting Inventory</label>
                                    <input type="number" id="starting_inv" name="starting_inv" placeholder="Starting Inventory" class="form-control"
                                    value="<?php if(isset($_SESSION['fields']['starting_inventory'])){echo $_SESSION['fields']['starting_inventory'];}?>">
                                </div>

                                <div class="col col-md-3">
                                    <label for="inv_recieved" class=" form-control-label">Inventory Recieved</label>
                                    <input type="number" id="inv_recieved" name="inv_recieved" placeholder="Inventory Recieved" class="form-control"
                                    value="<?php if(isset($_SESSION['fields']['inventory_recieved'])){echo $_SESSION['fields']['inventory_recieved'];}?>">
                                </div>

                                <div class="col col-md-3">
                                    <label for="inv_recieved" class=" form-control-label">Price</label>
                                    <input type="number" id="price" step="0.5" name="price" placeholder="price" class="form-control"
                                    value="<?php if(isset($_SESSION['fields']['price'])){echo $_SESSION['fields']['price'];}?>">
                                </div>
                            </div>
                            <?php unset($_SESSION['fields'])?>
                            <div class="card-footer">
                                <button type="submit" name="add_new" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <?php include_once DOCUMENT_ROOT.'/inc/footer.php';?>

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include_once DOCUMENT_ROOT.'/inc/footer_scripts.php';?>
