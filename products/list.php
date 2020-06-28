<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/inventory/config/general.php';
    require_once DOCUMENT_ROOT.'/inc/html_header.php';


    $all_products = get_all_entity('tbl_product');
?>

    <div class="page-wrapper">
        <?php include_once DOCUMENT_ROOT.'/inc/side_nav.php';?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php include_once DOCUMENT_ROOT.'/inc/header_desktop.php';?>

            <?php include_once DOCUMENT_ROOT.'/inc/breadcrumb.php';?>

            <!-- Other Contents here -->
            <div class="col-lg-12">
                <h3 class="title-5 m-b-35">all products</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </div>
                    <div class="table-data__tool-right">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th>
                                <th>title</th>
                                <th>part number</th>
                                <th>label</th>
                                <th>starting inventory</th>
                                <th>inventory shipped</th>
                                <th>inventory on hand</th>
                                <th>inventory recieved</th>
                                <th>price</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($all_products as $product) { ?>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td><?php echo $product[1];?></td>
                                    <td class="desc">
                                        <span><?php echo $product[2];?></span>
                                    </td>
                                    <td>
                                        <span class="block-email"><?php echo $product[3];?></span>
                                    </td>
                                    <td><?php echo $product[5];?></td>
                                    <td>
                                        <span class="status--process"><?php echo $product[6];?></span>
                                    </td>
                                    <td><?php echo $product[7];?></td>
                                    <td><?php echo $product[9];?></td>
                                    <td>
                                        <i class="fa fa-dollar"></i>
                                        <?php echo $product[4];?>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="<?php echo BASE_URL.'/products/update.php?id='.$product[0]?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="<?php echo BASE_URL.'/products/delete.php?id='.$product[0]?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include_once DOCUMENT_ROOT.'/inc/footer.php';?>

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include_once DOCUMENT_ROOT.'/inc/footer_scripts.php';?>
