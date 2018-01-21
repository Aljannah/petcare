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
                                    <h5>Daftar Seluruh Member</h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr align="center">
                                                    <th >No</th>
                                                    <th>Username</th>
                                                    <th>Pemilik PetCare</th>
                                                    <th>Nama PetCare</th>
                                                    <th>Email</th>
                                                    <th>Hp</th>
                                                    <th>Alamat</th>
                                                    <th>Kabupaten</th>
                                                    <th>Waktu Operasional</th>
                                                    <th>Jenis PetCare</th>
                                                    <th>Jenis User</th>
                                                    <th>Action</th>
                                            </tr>   
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($pengguna as $penggunas ): $no++;?>
                                            <tr class="odd gradeX" align="center">
                                                <td align="center"><?php echo $no;?></td>
                                                <td align="center"><?=  $penggunas->user_partners ?></td>
                                                <td align="center"><?=  $penggunas->owner ?></td>
                                                <td align="center"><?=  $penggunas->partners_name ?></td>
                                                <td align="center"><?=  $penggunas->email ?></td>
                                                <td align="center"><?=  $penggunas->hp ?></td>
                                                <td align="center"><?=  $penggunas->address ?></td>
                                                <td align="center"><?=  $penggunas->city ?></td>
                                                <td align="center"><?=  $penggunas->wop ?></td>
                                                <td align="center"><?=  $penggunas->id_caretype ?></td>
                                                <td align="center"><?=  $penggunas->role ?></td>
                                                <td>
                                                        <?=  anchor('admin/pengguna/delete/'.$penggunas->user_partners,'Delete',['class'=>'btn btn-danger btn-xs','onclick'=>'return confirm(\'Anda yakin menghapus Member ? \')']) ?>
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