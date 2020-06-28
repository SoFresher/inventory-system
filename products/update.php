<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/inventory/config/general.php';
    require_once DOCUMENT_ROOT.'/inc/html_header.php';

    $product_id = $_GET['id'];
    $product = get_single_entity('tbl_product', $product_id, 'id');
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
                        <strong>Update Product</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo BASE_URL?>/process/products.php" method="post" class="form-horizontal">
                            <input type="hidden" name="id" value="<?php if(isset($product['id'])){echo $product['id'];}?>">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="product_title" class=" form-control-label">Product Title</label>
                                    <input type="text" id="product_title" name="product_title" placeholder="Product Title" class="form-control" 
                                    value="<?php if(isset($product['product_name'])){echo $product['product_name'];}?>">
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="part_number" class=" form-control-label">Part Number</label>
                                    <input type="text" id="part_number" name="part_number" placeholder="Part Number" class="form-control"
                                    value="<?php if(isset($product['part_number'])){echo $product['part_number'];}?>">
                                </div>
                                <div class="col col-md-6">
                                    <label for="product_label" class=" form-control-label">Product Label</label>
                                    <input type="text" id="product_label" name="product_label" placeholder="Product Label" class="form-control"
                                    value="<?php if(isset($product['product_label'])){echo $product['product_label'];}?>" readonly="readonly">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="starting_inv" class=" form-control-label">Starting Inventory</label>
                                    <input type="number" id="starting_inv" name="starting_inv" placeholder="Starting Inventory" class="form-control"
                                    value="<?php if(isset($product['starting_inventory'])){echo $product['starting_inventory'];}?>" readonly="readonly">
                                </div>

                                <div class="col col-md-3">
                                    <label for="inv_recieved" class=" form-control-label">Inventory Recieved</label>
                                    <input type="number" id="inv_recieved" name="inv_recieved" placeholder="Inventory Recieved" class="form-control"
                                    value="<?php if(isset($product['inventory_recieved'])){echo $product['inventory_recieved'];}?>">
                                </div>

                                <div class="col col-md-3">
                                    <label for="inv_recieved" class=" form-control-label">Price (<i class="fa fa-dollar"></i>)</label>
                                    <input type="number" step="0.5" id="price" name="price" placeholder="price" class="form-control"
                                    value="<?php if(isset($product['price'])){echo $product['price'];}?>" readonly="readonly">
                                </div>
                            </div>
                            <?php unset($_SESSION['fields'])?>
                            <div class="card-footer">
                                <button type="submit" name="update" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
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
