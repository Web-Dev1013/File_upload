<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Riyadh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/responsive.css">
</head>

<body>
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Riyadh</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (session()->get("permission") == 0) {
                                echo "<li class='navItem'><a id='manage' class=''><span class='glyphicon glyphicon-user'></span> Add/Edit User </a></li>";
                            }
                            ?>
                            <li class="navItem active"><a id="offer"><span class="glyphicon glyphicon-th"></span> My Offer </a></li>
                            <li class="navItem"><a id="logout" class=""><span class="glyphicon glyphicon-log-out"></span> LogOut </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Welcome area -->
    <!-- ********************************************************* My Offer *********************************************** -->
    <div class="all-content-wrapper" id="data_table">
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid row">
                <div class="alert alert-success alert-dismissible fade">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <div class="alert alert-success alert-dismissible fade">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <div class="home col-lg-10 col-md-9 col-sm-12 sidebar-list sparkline13-list active_section">

                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1> User Offer </h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="offer_table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <colgroup>
                                    <col width="3%">
                                    </col>
                                    <col width="3%">
                                    </col>
                                    <col width="10%">
                                    </col>
                                    <col width="10%">
                                    </col>
                                    <col width="10%">
                                    </col>
                                    <col width="15%">
                                    </col>
                                    <col width="10%">
                                    </col>
                                    <col width="15%">
                                    </col>
                                    <col width="15%">
                                    </col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th> No </th>
                                        <th> Billboard ID </th>
                                        <th> Address </th>
                                        <th> Price </th>
                                        <th> Real Estate Type </th>
                                        <th> What's Up </th>
                                        <th> Date </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <button class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Send</button>
                    </div>
                </div>
                <!-- ************************************* My Post ************************************************** -->
                <div class="my_post col-lg-10 col-md-9 col-sm-12 sidebar-list sparkline13-list">
                    <h2>Add New Real Estate</h2>
                    <form class="application-form" id="real_estate_form" method="post" enctype="multipart/form-data">
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="billboard_number" name="billboard_number">
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="billboard_number" class="control-label">: Billboard Number</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="address" class="control-label">: Address </label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <select class="form-control" id="district_select" name="district_select">

                                </select>
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="district_select" class="control-label">: District</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <select class="form-control" id="estate_type_select" name="estate_type_select">

                                </select>
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="estate_type_select" class="control-label">: Real Estate Type</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="price" class="control-label">: Price</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="upload_picture" name="upload_picture">
                                <button class="btn btn-primary" id="browser" name="browser">Browser</button>
                                <input type="file" id="file" name="file" accept="image/*" class="form-control" multiple>
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="upload_picture" class="control-label">: Upload Picture</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <textarea class="" id="real_estate_detail" name="real_estate_detail"></textarea>
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="real_estate_detail" class="control-label">: Real Estate Detail</label>
                            </div>
                        </div>
                        <div class="row offer_modal_item">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="location" name="location">
                            </div>
                            <div class="col-sm-4 px-0 mt-2">
                                <label for="location" class="control-label">: Location on google map</label>
                            </div>
                        </div>
                        <hr>
                        <div class="field-row" style="text-align: left;">
                            <button id="estate_add" class="btn btn-success"> Add </button>
                        </div>
                    </form>
                </div>
                <!-- *************************************************** District Table ************************************************** -->
                <div class="district col-lg-10 col-md-9 col-sm-12 sidebar-list sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1> District </h1>
                        </div>
                    </div>
                    <div id="district_toolbar" class="my-5">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_district_modal"><i class="glyphicon glyphicon-plus"></i> Add </button>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="district_table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#district_toolbar">
                                <colgroup>
                                    <col width="10%">
                                    </col>
                                    <col width="30%">
                                    </col>
                                    <col width="40%">
                                    </col>
                                    <col width="20%">
                                    </col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <!-- <th data-field="state" data-checkbox="true"></th> -->
                                        <th></th>
                                        <th> No. </th>
                                        <th data-field="billboard" data-editable="true"> District Name </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- *************************************************** My Post Edit Modal ******************************************** -->
                <div id="post_edit_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> Edit My Post </h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal-input">
                                    <form class="application-form" id="edit_estate_form" method="post" enctype="multipart/form-data">
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="edit_billboard_number" name="edit_billboard_number">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_billboard_number" class="control-label">: Billboard Number</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="edit_address" name="edit_address">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_address" class="control-label">: Address </label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <select class="form-control" id="edit_district_select" name="edit_district_select">

                                                </select>
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_district_select" class="control-label">: District</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <select class="form-control" id="edit_estate_type_select" name="edit_estate_type_select">

                                                </select>
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_estate_type_select" class="control-label">: Real Estate Type</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="edit_price" name="edit_price">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_price" class="control-label">: Price</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="edit_upload_picture" name="edit_upload_picture">
                                                <button class="btn btn-primary" id="edit_browser" name="browser">Browser</button>
                                                <input type="file" id="edit_file" name="edit_file" accept="image/*" class="form-control">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_upload_picture" class="control-label">: Upload Picture</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <textarea class="" id="edit_real_estate_detail" name="edit_real_estate_detail"></textarea>
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_real_estate_detail" class="control-label">: Real Estate Detail</label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="edit_location" name="edit_location">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="edit_location" class="control-label">: Location on google map</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="field-row" style="text-align: left;">
                                            <button id="edit_estate_save" class="btn btn-success"> Save </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************** Add District Modal ******************************************** -->
                <div id="add_district_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> Add District </h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal-input">
                                    <form class="application-form">
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="new_district" name="new_district">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="new_district" class="control-label">: New District Name </label>
                                            </div>
                                        </div>
                                        <div class="row offer_modal_item">
                                            <span class="modal-message"></span>
                                        </div>
                                        <hr>
                                        <div class="field-row" style="text-align: center;">
                                            <button id="new_district_add" class="btn btn-primary"> Add </button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Close </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  ****************************************************  Estate Type Table ***************************************** -->
                <div class="estate_type col-lg-10 col-md-9 col-sm-12 sidebar-list sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1> Estate Type </h1>
                        </div>
                    </div>
                    <div id="estate_toolbar">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_estate_modal"><i class="glyphicon glyphicon-plus"></i> Add </button>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="estate_table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#estate_toolbar">
                                <colgroup>
                                    <col width="10%">
                                    </col>
                                    <col width="10%">
                                    </col>
                                    <col width="40%">
                                    </col>
                                    <col width="40%">
                                    </col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th data-field="id"> No. </th>
                                        <th data-field="billboard" data-editable="true"> Estate Type </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#offer_modal"> Offer </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  ********************************************** Add Estate Type Modal ******************************************** -->
                <div id="add_estate_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> Add Estate Type </h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal-input">
                                    <form class="application-form">
                                        <div class="row offer_modal_item">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="new_estate_type" name="new_estate_type">
                                            </div>
                                            <div class="col-sm-4 px-0 mt-2">
                                                <label for="new_estate_type" class="control-label">: New Estate Type </label>
                                            </div>
                                        </div>
                                        <div class="row estate_modal_item">
                                            <span class="modal-message"></span>
                                        </div>
                                        <hr>
                                        <div class="field-row" style="text-align: center;">
                                            <button id="new_estate_add" class="btn btn-primary"> Add </button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Close </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ************************************************** Side Bar ****************************************************** -->
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="sidebar-container">
                        <div class="sidebar-logo">
                            Riyadh
                        </div>
                        <ul class="sidebar-navigation">
                            <!-- <li class="header">Navigation</li> -->
                            <li id="home">
                                <a href="#"> Home </a>
                            </li>
                            <li id="my_post">
                                <a href="#"> My Posts </a>
                            </li>
                            <li id="district">
                                <a href="#"> District </a>
                            </li>
                            <li id="estate_type">
                                <a href="#"> Real Estate Type </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ******************************************** Offer Modal ************************************************* -->
    <div id="offer_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Send Offer </h4>
                </div>
                <div class="modal-body">
                    <div class="modal-input">
                        <form class="application-form" id="offer_estate_form" method="post" enctype="multipart/form-data">
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="receiver_whatsapp" name="receiver_whatsapp">
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="receiver_whatsapp" class="control-label">: Receiver WhatsApp Number</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_billboard_number" name="offer_billboard_number" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_billboard_number" class="control-label">: Billboard Number</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_address" name="offer_address" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_address" class="control-label">: Address </label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_district_select" name="offer_district_select" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_district_select" class="control-label">: District</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_estate_type_select" name="offer_estate_type_select" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_estate_type_select" class="control-label">: Real Estate Type</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_price" name="offer_price" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_price" class="control-label">: Price</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_upload_picture" name="offer_upload_picture" readonly>
                                    <br><img src="" id="uploaded_image">
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_upload_picture" class="control-label">: Upload Picture</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <textarea class="" id="offer_real_estate_detail" name="offer_real_estate_detail" readonly></textarea>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_real_estate_detail" class="control-label">: Real Estate Detail</label>
                                </div>
                            </div>
                            <div class="row offer_modal_item">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="offer_location" name="offer_location" readonly>
                                </div>
                                <div class="col-sm-4 px-0 mt-2">
                                    <label for="offer_location" class="control-label">: Location on google map</label>
                                </div>
                            </div>
                            <hr>
                            <div class="field-row" style="text-align: left;">
                                <button id="offer_send" class="btn btn-success"><i class="glyphicon glyphicon-send"></i>&nbsp; Send </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ************************************************  Add New Real Estate Page Modal ********************************** -->
    <div id="add_offer_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add New Real Estate Page </h4>
                </div>
                <div class="modal-body">
                    <div class="modal-input">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *******************************************************  USER ADD MODAL ************************************** -->
    <div id="add_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add User </h4>
                </div>
                <div class="modal-body">
                    <div class="modal-input">
                        <form class="application-form">
                            <div class="field-row">
                                <input type="text" id="userName" name="userName" class="field text-field user-name-field" placeholder="User Name" autocomplete="off" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="email" id="email" name="email" class="field text-field email-field" placeholder="Email" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="password" id="pass" name="pass" class="field text-field" placeholder="Password">
                            </div>
                            <div class="field-row">
                                <input type="password" id="confirm-pass" name="confirm-pass" class="field text-field" placeholder="Confirm Password">
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="tel" id="phone" name="phone" class="field text-field tel-field" placeholder="Phone Number" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <label class="radio-inline"><input type="radio" class="radio" value="1" name="optradio"> Manager </label>
                                <label class="radio-inline"><input type="radio" class="radio" value="2" name="optradio"> Normal User </label>
                            </div>
                            <hr>
                            <div class="field-row" style="text-align: center;">
                                <button id="user_add" class="btn btn-success"> Add </button>
                                <button id="close" type="button" class="btn btn-warning" data-dismiss="modal"> Close </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ****************************************************** User Manage ************************************************ -->
    <div class="all-content-wrapper" id="user_manage">
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> User Management </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="user_toolbar">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_modal"><i class="glyphicon glyphicon-plus"></i> Add </button>
                                    </div>
                                    <table id="user_table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#user_toolbar">
                                        <colgroup>
                                            <col width="5%">
                                            </col>
                                            <col width="5%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="12%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="18%">
                                            </col>
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <th></th>
                                                <th data-field="id"> No. </th>
                                                <th data-field="username" data-editable="true"> User Name </th>
                                                <th data-field="email" data-editable="true"> Email </th>
                                                <th data-field="password" data-editable="true"> Password </th>
                                                <th data-field="phone" data-editable="true"> Phone Number </th>
                                                <th data-field="permission" data-editable="true"> Permission </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="offer">
                                                    <button class="btn table-data-del btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Del </button>
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
        </div>
    </div>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-export.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/google.maps/google.maps-active.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiNUO68DkrsFKFz744_LWMqCNI_GqYciQ&callback=initMap"></script> -->
</body>

</html>
<script>
    //--------------------------------------------------      INIT DATA   ------------------------------------------------------
    //  init User Data
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_Data") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var table_data = "";
            for (x in res) {
                table_data += "<tr id=" + res[x].id + "><td><input type='checkbox' class='user_checkbox'</td><td>" + x + "</td><td>" + res[x].username + "</td><td>" + res[x].email + "</td><td>" + res[x].pass + "</td><td>" + res[x].phone + "</td><td>" + res[x].permission + "</td><td class='offer'><button class='btn btn-primary data-save btn-xs'><i class='save-icon glyphicon glyphicon-save'></i> Save </button>&nbsp;<button class='btn btn-danger data-delete btn-xs'><i class='delete-icon glyphicon glyphicon-trash'></i> Del </button></td></tr>";
            }
            $("#user_table tbody").html(table_data);
        }
    });

    // Init my post Data
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_post_data") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var post_data = "";
            for (x in res) {
                post_data += "<tr id = " + res[x].id + "><td><input type='checkbox' class='offer_checkbox'</td><td>" + x + "</td><td>" + res[x].billboard_number + "</td><td>" + res[x].address + "</td><td>" + res[x].price + "</td><td>" + res[x].estate_type + "</td><td><button class='btn btn-offer btn-success btn-xs' data-toggle='modal' data-target='#offer_modal'> Offer </button></td><td>" + res[x].date + "</td><td><?php echo session()->get("permission") != 2 ? "<button id='post_delete' class='btn btn-danger btn-xs'> Delete </button>" : "" ?>&nbsp;<button class='btn btn-success edit_btn btn-xs' data-toggle='modal' data-target='#post_edit_modal'> Edit </button></td></tr>";
            }
            $("#offer_table tbody").html(post_data);
        }
    })

    // init Add new real estate modal
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_add_estate_modal") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var district_arr = res[0];
            var estate_arr = res[1];
            var district_result = "";
            var estate_type_result = "";
            for (x in district_arr) {
                district_result += "<option id=" + district_arr[x].id + ">" + district_arr[x].district + "</option>";
            }
            for (y in estate_arr) {
                estate_type_result += "<option id=" + estate_arr[y].id + ">" + estate_arr[y].estate_type + "</option>";
            }
            $("#district_select").html(district_result);
            $("#estate_type_select").html(estate_type_result);
            $("#edit_district_select").html(district_result);
            $("#edit_estate_type_select").html(estate_type_result);
        }
    })

    // init district Data
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_district") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var district_data = "";
            for (x in res) {
                district_data += "<tr id=" + res[x]["id"] + "><td><input type='checkbox' class='district_checkbox'</td><td>" + x + "</td><td>" + res[x]["district"] + "</td><td><?php echo session()->get("permission") != 2 ? "<button class='btn btn-danger district-delete-btn btn-xs'> Delete </button>" : "" ?><button class='btn btn-success district-save-btn btn-xs mx-5'> Save </button></td></tr>";
            }
            $("#district_table tbody").html(district_data);
        }
    });

    // init Estate Data
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_estate") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var estate_data = "";
            for (x in res) {
                estate_data += "<tr id=" + res[x]["id"] + "><td><input type='checkbox' class='estate_type_checkbox'</td><td>" + x + "</td><td>" + res[x]["estate_type"] + "</td><td><?php echo session()->get("permission") != 2 ? "<button class='btn btn-danger estate-delete-btn btn-xs'> Delete </button>" : "" ?><button class='btn btn-success estate-save-btn btn-xs mx-5'> Save </button></td></tr>";
            }
            $("#estate_table tbody").html(estate_data);
        }
    });

    //*************************************************  User manage *************************************************** */
    //  User Add
    var checked_radio = "";
    $("input[type='radio']").click(function() {
        checked_radio = $(this).val();
    });

    $("#user_add").click(function(e) {
        e.preventDefault();
        if ($("#userName").val() != "" && $("#email").val() != "" && $("#pass").val() == $("#confirm-pass").val()) {
            var userName = $("#userName").val();
            var pass = $("#pass").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var permission = checked_radio;
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/add_user") ?>",
                type: "post",
                data: {
                    userName: userName,
                    pass: pass,
                    email: email,
                    phone: phone,
                    permission: permission
                },
                async: false,
                success: function(res) {
                    if (res == "success") {
                        $(".close").click();
                        location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                    } else if (res == "already") {

                    }
                }
            });
        }
    });

    // User Save & Delete
    $("#user_table tbody").click(function(e) {
        // e.preventDefault();
        //  Delete
        var checked_row_id = $(e.target).parents("tr").attr("id");
        if ($(e.target).hasClass("data-delete") == true || $(e.target).hasClass("delete-icon") == true) {
            if (confirm("Do you really delete?")) {
                $(e.target).parents("tr").remove();
                $.ajax({
                    url: "<?php echo base_url("Riyadh/public/index.php/home/delete_user") ?>",
                    type: "post",
                    data: {
                        id: checked_row_id
                    },
                    success: function(res) {
                        // console.log(res);
                    }
                });
            }
        }
        //  Save
        if ($(e.target).hasClass("data-save") == true || $(e.target).hasClass("save-icon") == true) {
            var username = $("#" + checked_row_id).children().eq(2).children().html();
            var email = $("#" + checked_row_id).children().eq(3).children().html();
            var pass = $("#" + checked_row_id).children().eq(4).children().html();
            var phone = $("#" + checked_row_id).children().eq(5).children().html();
            var permission = $("#" + checked_row_id).children().eq(6).children().html();
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/save_data") ?>",
                type: "post",
                data: {
                    id: checked_row_id,
                    username: username,
                    email: email,
                    pass: pass,
                    phone: phone,
                    permission: permission
                },
                success: function(res) {
                    // console.log(res);
                }
            });
        }
    });

    // log out event
    $("#logout").click(function() {
        $.ajax({
            url: "<?php echo base_url("Riyadh/public/index.php/home/logout") ?>",
            type: "post",
            async: false,
            success: function() {
                location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
            }
        });
    });
    //************************************************************ District *********************************************************
    // Add new district
    $("#new_district_add").click(function(e) {
        e.preventDefault();
        if ($("#new_district").val() == "") {
            $(".offer_modal_item .modal-message").html("Please insert new district name.");
            $("#new_district").focus(function() {
                $(".offer_modal_item .modal-message").html("");
            });
        } else {
            var new_district = $("#new_district").val();
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/reg_district") ?>",
                type: "post",
                data: {
                    new_district: new_district
                },
                // async: false,
                success: function(res) {
                    if (res == "already") {
                        $(".modal-message").html("Please insert new district name.");
                        $("#new_district").focus(function() {
                            $(".modal-message").html("");
                        });
                    }
                    if (res == "success") {
                        location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                        $(".close").click();
                    }
                }
            });
        }
    });
    // save & delete btn event
    $("#district_table tbody").click(function(e) {
        if ($(e.target).hasClass("district-delete-btn") == true) {
            if (confirm("Do you really delete?")) {
                var id = $(e.target).parents("tr").attr("id");
                $.ajax({
                    url: "<?php echo base_url("Riyadh/public/index.php/home/delete_district") ?>",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        $(e.target).parents("tr").remove();
                        $(".alert-success").html("Successful Deleted");
                        $(".alert-success").addClass("in");
                        setTimeout(function() {
                            $(".alert-success").removeClass("in")
                        }, 1500);
                    }
                });
            }
        }
        if ($(e.target).hasClass("district-save-btn") == true) {
            var id = $(e.target).parents("tr").attr("id");
            var change_district_name = $("#" + id + " td:eq(2)").children().html();
            // console.log(change_district_name)
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/change_district") ?>",
                type: "post",
                data: {
                    id: id,
                    change_district_name: change_district_name
                },
                success: function(res) {
                    $(".alert-success").html("Successful Saved");
                    $(".alert-success").addClass("in");
                    setTimeout(function() {
                        $(".alert-success").removeClass("in")
                    }, 1500);
                }
            });
        }
    });

    //****************************************************** Estate Type *******************************************************
    // Add new Estate Type    
    $("#new_estate_add").click(function(e) {
        e.preventDefault();
        if ($("#new_estate_type").val() == "") {
            $(".estate_modal_item .modal-message").html("Please insert new estate type.");
            $("#new_estate_type").focus(function() {
                $(".estate_modal_item .modal-message").html("");
            });
        } else {
            var new_estate_type = $("#new_estate_type").val();
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/reg_estate_type") ?>",
                type: "post",
                data: {
                    new_estate_type: new_estate_type
                },
                // async: false,
                success: function(res) {
                    if (res == "already") {
                        $(".estate_modal_item .modal-message").html("Please insert new estate type.");
                        $("#new_estate_type").focus(function() {
                            $(".estate_modal_item .modal-message").html("");
                        });
                    }
                    if (res == "success") {
                        location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                        $(".close").click();
                    }
                }
            });
        }
    });
    // save & delete btn event
    $("#estate_table tbody").click(function(e) {
        if ($(e.target).hasClass("estate-delete-btn") == true) {
            if (confirm("Do you really delete?")) {
                var id = $(e.target).parents("tr").attr("id");
                $.ajax({
                    url: "<?php echo base_url("Riyadh/public/index.php/home/delete_estate") ?>",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        $(e.target).parents("tr").remove();
                        $(".alert-success").html("Successful Deleted");
                        $(".alert-success").addClass("in");
                        setTimeout(function() {
                            $(".alert-success").removeClass("in")
                        }, 1500);
                    }
                });
            }
        }
        if ($(e.target).hasClass("estate-save-btn") == true) {
            var id = $(e.target).parents("tr").attr("id");
            var change_estate_name = $("#" + id + " td:eq(2)").children().html();
            // console.log(change_estate_name, id)
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/change_estate") ?>",
                type: "post",
                data: {
                    id: id,
                    change_estate_name: change_estate_name
                },
                success: function(res) {
                    $(".alert-success").html("Successful Saved");
                    $(".alert-success").addClass("in");
                    setTimeout(function() {
                        $(".alert-success").removeClass("in")
                    }, 1500);
                }
            });
        }
    });

    // *************************************************** New My post **********************************
    $("#file").on("change", function() {
        var images = "";
        for (var i = 0; i < $("#file")[0].files.length; i++) {
            images += $("#file")[0].files[i].name;
        }
        $("#upload_picture").val(images);
    });

    $("#estate_add").click(function(e) {
        e.preventDefault();
        var billboard_number = $("#billboard_number").val();
        var address = $("#address").val();
        var district = $("#district_select").val();
        var estate_type = $("#estate_type_select").val();
        var price = $("#price").val();
        var upload_picture = $("#upload_picture").val();
        var location = $("#location").val();
        var estate_detail = $("#real_estate_detail").val();
        var form = document.getElementById("real_estate_form");
        var fd = new FormData(form);
        var files = $('#file')[0].files[0];
        fd.append('file', files);
        fd.append("billboard_number", billboard_number);
        fd.append("address", address);
        fd.append("district", district);
        fd.append("estate_type", estate_type);
        fd.append("price", price);
        fd.append("upload_picture", upload_picture);
        fd.append("estate_detail", estate_detail);
        fd.append("location", location);
        $.ajax({
            url: '<?php echo base_url("Riyadh/public/index.php/home/upload") ?>',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == "success") {
                    location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                }
            },
        });
    });

    // ************************************************** My Posts ******************************************************
    $("#offer_table tbody").click(function(e) {
        if ($(e.target).attr("id") == "post_delete") {
            if (confirm("Do you really delete?")) {
                var id = $(e.target).parents("tr").attr("id");
                $.ajax({
                    url: "<?php echo base_url("Riyadh/public/index.php/home/post_data_delete") ?>",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        if (res == "success") {
                            $("#" + id).remove();
                            $(".alert-success").html("Successful Deleted");
                            $(".alert-success").addClass("in");
                            setTimeout(function() {
                                $(".alert-success").removeClass("in")
                            }, 1500);
                        }
                    }
                });
            }
        }
        //  Edit
        $("#edit_file").on("change", function() {
            var images = "";
            for (var i = 0; i < $("#edit_file")[0].files.length; i++) {
                images += $("#edit_file")[0].files[i].name;
            }
            $("#edit_upload_picture").val(images);
        });

        if ($(e.target).hasClass("edit_btn") == true) {
            var id = $(e.target).parents("tr").attr("id");
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/post_data_edit") ?>",
                type: "post",
                data: {
                    id: id
                },
                success: function(res) {
                    var res = JSON.parse(res);
                    $("#edit_billboard_number").val(res.billboard_number);
                    $("#edit_address").val(res.address);
                    $("#edit_district_select").val(res.district);
                    $("#edit_estate_type_select").val(res.estate_type);
                    $("#edit_price").val(res.price);
                    $("#edit_location").val(res.location);
                    $("#edit_real_estate_detail").val(res.real_estate_detail);
                    $("#edit_upload_picture").val(res.image_name);
                }
            });
            $("#edit_estate_save").click(function(e) {
                e.preventDefault();
                var billboard_number = $("#edit_billboard_number").val();
                var address = $("#edit_address").val();
                var district = $("#edit_district_select").val();
                var estate_type = $("#edit_estate_type_select").val();
                var price = $("#edit_price").val();
                var upload_picture = $("#edit_upload_picture").val();
                var estate_detail = $("#edit_real_estate_detail").val();
                var location = $("#edit_location").val();
                var form = document.getElementById("edit_estate_form");
                var fd = new FormData(form);
                var files = $('#edit_file')[0].files[0];
                fd.append('file', files);
                fd.append("id", id);
                fd.append("billboard_number", billboard_number);
                fd.append("address", address);
                fd.append("district", district);
                fd.append("estate_type", estate_type);
                fd.append("price", price);
                fd.append("upload_picture", upload_picture);
                fd.append("estate_detail", estate_detail);
                fd.append("location", location);
                $.ajax({
                    url: '<?php echo base_url("Riyadh/public/index.php/home/edit_upload") ?>',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        console.log(res)
                        // if (res == "success") {
                        //     location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                        // }
                    },
                });
            })
        }
    });

    // ***************************************************** Offer Send Click *******************************************
    $("#offer_table tbody").click(function(e) {
        e.preventDefault();
        if ($(e.target).hasClass("btn-offer") == true) {
            var id = $(e.target).parents("tr").attr("id");
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/post_data_edit") ?>",
                type: "post",
                data: {
                    id: id
                },
                success: function(res) {
                    var res = JSON.parse(res);
                    $("#offer_billboard_number").val(res.billboard_number);
                    $("#offer_address").val(res.address);
                    $("#offer_district_select").val(res.district);
                    $("#offer_estate_type_select").val(res.estate_type);
                    $("#offer_price").val(res.price);
                    $("#offer_location").val(res.location);
                    $("#offer_real_estate_detail").val(res.real_estate_detail);
                    $("#offer_upload_picture").val(res.image_name);
                    $("#uploaded_image").attr("src", res.image_url);
                }
            });
            $("#offer_send").click(function(e) {
                e.preventDefault();
                var receiver_whatsapp = $("#receiver_whatsapp").val();
                var billboard_number = $("#offer_billboard_number").val();
                var address = $("#offer_address").val();
                var district = $("#offer_district_select").val();
                var estate_type = $("#offer_estate_type_select").val();
                var price = $("#offer_price").val();
                var image_url = $("#uploaded_image").attr("src");
                var estate_detail = $("#offer_real_estate_detail").val();
                var location = $("#offer_location").val();
                var image_name = $("#offer_upload_picture").val();
                var message = '<div class="modal-body"><div class="modal-input"><div class="row offer_modal_item"><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_billboard_number" readonly value="' + billboard_number + '"></div><div class="col-sm-4 px-0 mt-2"><label for="offer_billboard_number" class="control-label">: Billboard Number</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_address" readonly value="' + address + '"></div><div class="col-sm-4 px-0 mt-2"><label for="offer_address" class="control-label">: Address </label></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_district_select" value="' + district + '" readonly></div><div class="col-sm-4 px-0 mt-2"><label for="offer_district_select" class="control-label">: District</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_estate_type_select" value="' + estate_type + '" readonly=""></div><div class="col-sm-4 px-0 mt-2"><label for="offer_estate_type_select" class="control-label">: Real Estate Type</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_price" value="' + price + '" readonly></div><div class="col-sm-4 px-0 mt-2"><label for="offer_price" class="control-label">: Price</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_upload_picture" value="' + image_name + '" readonly=""><br><img src="<?php echo $_SERVER['HTTP_HOST'] ?>/Riyadh/upload/background444.jpg" id="uploaded_image"></div><div class="col-sm-4 px-0 mt-2"><label for="offer_upload_picture" class="control-label">: Upload Picture</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><textarea class="" id="offer_real_estate_detail" readonly>"' + estate_detail + '"</textarea></div><div class="col-sm-4 px-0 mt-2"><label for="offer_real_estate_detail" class="control-label">: Real Estate Detail</label></div></div><div class="row offer_modal_item"><div class="col-sm-8"><input type="text" class="form-control" id="offer_location" value="' + location + '" readonly></div><div class="col-sm-4 px-0 mt-2"><label for="offer_location" class="control-label">: Location on google map</label></div></div></div></form></div></div>';
                console.log(receiver_whatsapp, billboard_number, address, district, estate_type, price, image_url, estate_detail, location);
                $.ajax({
                    url: "https://eu23.chat-api.com/instance211392/text=" + message+ "&token=ukshy31lf499dadd",
                    type: "post",
                    success: function(res) {
                        console.log(res);
                    }
                })
            });
        }
    });
</script>