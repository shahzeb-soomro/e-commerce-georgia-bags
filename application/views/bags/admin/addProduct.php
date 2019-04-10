
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Product Setup</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Fill this form to add Product
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="<?php echo site_url('AdminController/addProductFormSubmit')?>" class="form-style-9" enctype="multipart/form-data">

                                        <ul>

                                            <b><label>Main Attibutes</label></b>

                                            <br>

                                            <br>

                                            <li>

                                                <input type="text" name="product_name" class="field-style field-split align-left" placeholder="Enter Product Name" />

                                                <input type="text" name="short_description" class="field-style field-split align-right" placeholder="Enter Short Description" />



                                            </li>

                                            <li>

                                                <input type="file" name="product_image" class="field-style field-split align-left" placeholder="Choose Image File" />

                                                <select name="cat_id" class="field-style field-split align-right select">
                                                    <option selected="true" disabled>Select Category</option>
                                                    <?php foreach ($category as $item){?>
                                                        <option value="<?php echo $item['cat_id'];?>"><?php echo $item['cat_name'];?></option>
                                                    <?php } ?>
                                                </select>



                                            </li>

                                            <li>

                                                <input type="text" name="72_ntr" class="field-style field-split align-left" placeholder="Enter 72 Natural Price" />



                                                <input type="text" name="144_ntr" class="field-style field-split align-right" placeholder="Enter 144 Natural Price" />

                                            </li>

                                            <li>

                                                <input type="text" name="300_ntr" class="field-style field-split align-left" placeholder="Enter 300 Natural Price" />



                                                <input type="text" name="600_ntr" class="field-style field-split align-right" placeholder="Enter 600 Natural Price" />

                                            </li>

                                            <li>

                                                <input type="text" name="1000_ntr" class="field-style field-split align-left" placeholder="Enter 1000 Natural Price" />



                                                <input type="text" name="2500_ntr" class="field-style field-split align-right" placeholder="Enter 2500 Natural Price" />

                                            </li>



                                            <li>

                                                <input type="text" name="72_clr" class="field-style field-split align-left" placeholder="Enter 72 Color Price" />



                                                <input type="text" name="144_clr" class="field-style field-split align-right" placeholder="Enter 144 Color Price" />

                                            </li>



                                            <li>

                                                <input type="text" name="300_clr" class="field-style field-split align-left" placeholder="Enter 300 Color Price" />



                                                <input type="text" name="600_clr" class="field-style field-split align-right" placeholder="Enter 600 Color Price" />

                                            </li>



                                            <li>

                                                <input type="text" name="1000_clr" class="field-style field-split align-left" placeholder="Enter 1000 Color Price" />



                                                <input type="text" name="2500_clr" class="field-style field-split align-right" placeholder="Enter 2500 Color Price" />

                                            </li>



                                            <li>

                                                <input type="text" name="price_includes" class="field-style field-split align-left" placeholder="Enter Price Includes" />



                                                <input type="text" name="lead_time" class="field-style field-split align-right" placeholder="Enter Lead Time" />

                                            </li>



                                            <li>

                                                <input type="text" name="rush_available" class="field-style field-split align-left" placeholder="Enter Rush Available" />



                                                <input type="text" name="imprint_area" class="field-style field-split align-right" placeholder="Enter Imprint Area" />

                                            </li>



                                            <li>

                                                <input type="text" name="setup_charge" class="field-style field-split align-left" placeholder="Enter Setup Charge" />



                                                <input type="text" name="repeat_setup" class="field-style field-split align-right" placeholder="Enter Repeat Setup" />

                                            </li>



                                            <li>

                                                <input type="text" name="flash_charge" class="field-style field-split align-left" placeholder="Enter Flash Charge" />



                                                <input type="text" name="pms_match" class="field-style field-split align-right" placeholder="Enter PMS Charge" />

                                            </li>



                                            <li>

                                                <input type="text" name="less_than_minimum" class="field-style field-split align-left" placeholder="Enter Less Than Minimum" />



                                                <input type="text" name="color_change_charge" class="field-style field-split align-right" placeholder="Enter Color Change Charge" />

                                            </li>



                                            <li>

                                                <input type="text" name="spec_sample" class="field-style field-full align-none" placeholder="Enter Specification Sample" />

                                            </li>

                                            <br>

                                            <br>



                                            <b><label>Bottom Left Attibutes</label></b>

                                            <br>

                                            <br>

                                            <li>

                                                <input type="text" name="item_no" class="field-style field-split align-right" placeholder="Enter Item Number" />



                                                <input type="text" name="item_name" class="field-style field-split align-left" placeholder="Enter Item Name" />

                                            </li>

                                            <li>

                                                <input type="text" name="available_colors" class="field-style field-split align-right" placeholder="Enter Available Colors" />



                                                <input type="text" name="product_size" class="field-style field-split align-left" placeholder="Enter Product Size" />

                                            </li>



                                            <br>

                                            <br>



                                            <b><label>Bottom Right Attibutes</label></b>

                                            <br>

                                            <br>



                                            <li>

                                                <input type="text" name="quality_matrial" class="field-style field-split align-right" placeholder="Enter Quality Material" />



                                                <input type="text" name="quality_weight" class="field-style field-split align-left" placeholder="Enter Quality Weight" />

                                            </li>



                                            <li>

                                                <input type="text" name="handle_length" class="field-style field-split align-right" placeholder="Enter Handle Length" />



                                                <input type="text" name="side_gussets" class="field-style field-split align-left" placeholder="Enter Side Gussets" />

                                            </li>



                                            <li>

                                                <input type="text" name="bottom_gussets" class="field-style field-split align-right" placeholder="Enter Bottom Gussets" />



                                                <input type="text" name="available_decoration" class="field-style field-split align-left" placeholder="Enter Available Decorations" />

                                            </li>



                                            <li>

                                                <textarea name="long_description" class="field-style" placeholder="Enter Long Description Here"></textarea>

                                            </li>

                                            <li>

                                                <input type="submit" value="Save Product" />

                                            </li>

                                        </ul>

                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <style type="text/css">

                .form-style-9{

                    max-width: 101%;

                    background: #FAFAFA;

                    padding: 30px;

                    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);

                    border-radius: 10px;

                    border: 6px solid #305A72;

                }
                .select{
                    margin-left: 16px;
                }

                .form-style-9 ul{

                    padding:0;

                    margin:0;

                    list-style:none;

                }

                .form-style-9 ul li{

                    display: block;

                    margin-bottom: 10px;

                    min-height: 35px;

                }

                .form-style-9 ul li  .field-style{

                    box-sizing: border-box;

                    -webkit-box-sizing: border-box;

                    -moz-box-sizing: border-box;

                    padding: 8px;

                    outline: none;

                    border: 1px solid #B0CFE0;

                    -webkit-transition: all 0.30s ease-in-out;

                    -moz-transition: all 0.30s ease-in-out;

                    -ms-transition: all 0.30s ease-in-out;

                    -o-transition: all 0.30s ease-in-out;



                }.form-style-9 ul li  .field-style:focus{

                     box-shadow: 0 0 5px #B0CFE0;

                     border:1px solid #B0CFE0;

                 }

                .form-style-9 ul li .field-split{

                    width: 49%;

                }

                .form-style-9 ul li .field-full{

                    width: 100%;

                }

                .form-style-9 ul li input.align-left{

                    float:left;

                }

                .form-style-9 ul li input.align-right{

                    float:right;

                }

                .form-style-9 ul li textarea{

                    width: 100%;

                    height: 100px;

                }

                .form-style-9 ul li input[type="button"],

                .form-style-9 ul li input[type="submit"] {

                    -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;

                    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;

                    box-shadow: inset 0px 1px 0px 0px #3985B1;

                    background-color: #216288;

                    border: 1px solid #17445E;

                    display: inline-block;

                    cursor: pointer;

                    color: #FFFFFF;

                    padding: 8px 18px;

                    text-decoration: none;

                    font: 12px Arial, Helvetica, sans-serif;

                }

                .form-style-9 ul li input[type="button"]:hover,

                .form-style-9 ul li input[type="submit"]:hover {

                    background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);

                    background-color: #28739E;

                }

            </style>