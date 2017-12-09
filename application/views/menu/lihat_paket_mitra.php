 <?php $this->load->view('layout/headeruser')?> 
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
                                        <a href="#" class="btn pull-right"> </a>
                                        <label for="amount">
                                            </label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module" style="width: fit-content">
                                <div class="module-head">
                                    <h2 align = "center">Paket Grooming</h2>
                                    <h5>Daftar Seluruh Paket Anda</h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Kode </th>
                                                    <th>Username</th>
                                                    <th>Nama Paket</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Status Konfirmasi</th>
                                                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($event as $events ): $no++;?>
                                            <tr class="odd gradeX">
                                                <td align="center"><?php echo $no;?></td>
                                                <td align="center"><?=  $events->id_petgrooming ?></td>
                                                <td align="center"><?=  $events->user_partners ?></td>
                                                <td align="center"><?=  $events->package_name ?></td>
                                                <td align="center"><textarea rows="10" disabled><?=  $events->description  ?></textarea></td>
                                                <td align="center"><?=  $events->petcategory ?></td>
                                                <td align="center"><?=  $events->price ?></td>
                                                <td align="center"><?=  $events->status ?></td>
                                                
                                                        <td>
                                                            <?=  anchor('user/event/edit/'.$events->id_petgrooming,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                                            <?php  if($this->session->userdata('level')   ==  '1'  ): ?>
                                                            <?=  anchor('user/event/delete/'.$events->id_petgrooming,'Delete',['class'=>'btn btn-danger btn-xs','onclick'=>'return confirm(\'Anda yakin ? \')']) ?>
                                                            <?php else:?>
                                                            <?=  anchor('user/event/delete/'.$events->id_petgrooming,'Delete',['class'=>'btn btn-danger btn-xs','data-toggle'=>'button','onclick'=>'return confirm(\'Anda Yakin Menghapus Event ? \')']) ?>
                                                            <?php endif;?>
                                            
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