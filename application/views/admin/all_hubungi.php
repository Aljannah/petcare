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
                            <div class="module" style="width: 2000px">
                                <div class="module-head">
                                    <h2 align = "center">Selamat Datang di Halaman Administrator Website</h2>
                                    <h5>Daftar Seluruh Pesan Masuk</h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Nama </th>
                                                    <th>Email</th>
                                                    <th>Telepon</th>
                                                    <th>Subjek</th>
                                                    <th>Pesan</th>
                                                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($hubungi as $hubungis ): $no++;?>
                                            <tr class="odd gradeX">
                                                <td align="center"><?php echo $no;?></td>
                                                <td align="center"><?=  $hubungis->nama ?></td>
                                                <td align="center"><?=  $hubungis->email ?></td>
                                                <td align="center"><?=  $hubungis->telepon ?></td>
                                                <td align="center"><?=  $hubungis->subjek ?></td>
                                                <td align="center"><?=  $hubungis->pesan ?></td>
                                                <td>
                                                         <?=  anchor('admin/hubungi/delete/'.$hubungis->id_hubungi,'Delete',['class'=>'btn btn-danger btn-xs','onclick'=>'return confirm(\'Anda yakin menghapus Pesan ? \')']) ?>
                                                </td>
                                            </tr><?php endforeach; ?> 
                                        </tbody>
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