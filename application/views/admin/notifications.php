 <?php $this->load->view('layout/headeradmin')?> 
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 4.0
                                                </td>
                                                <td>
                                                    Win 95+
                                                </td>
                                                <td class="center">
                                                    4
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
 <?php $this->load->view('layout/footeruser')?>