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
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="mr-2 fa fa-align-justify"></i>
                                    <strong class="card-title" v-if="headerText">Delete Product</strong>
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text m-b-20">
                                        You are deleting product <strong><?php echo $product['product_name']?></strong>.
                                    </p>
                                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#staticModal">
                                        Yes, Delete
                                    </button>
                                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#smallmodal">
                                        Small
                                    </button>
                                    <!-- modal confirm delete -->
                                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        This is a static modal, backdrop click will not close it.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal confirm delete -->
                                    <!-- modal small -->
                                    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                                                        zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                                                        resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                                                        genus Equus, along with other living equids.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal small -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once DOCUMENT_ROOT.'/inc/footer.php';?>

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include_once DOCUMENT_ROOT.'/inc/footer_scripts.php';?>