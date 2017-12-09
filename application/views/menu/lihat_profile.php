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
                                    <h2 align = "center">your Profile</h2>
                                    <h5></h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                                    <th>Username</th>
                                                    <th>Nama Pemilik</th>
                                                    <th>Nama PetShop</th>
                                                    <th>Alamat</th>
                                                    <th>kabupaten/kota</th>
                                                    <th>email</th>
                                                    <th>No. Telp/ Hp</th>
                                                    <th>Kodepos</th>
                                                    <th>Waktu Operasional</th>
                                                    <th>Foto Perusahaan</th>
                                                    <th>Action</th>
                                        <tbody>
                                        <?php $no=0; foreach($profile as $profile ): $no++;?>
                                            <tr class="odd gradeX">
                                                <td align="center"><?=  $profile->user_partners ?></td>
                                                <td align="center"><?=  $profile->owner ?></td>
                                                <td align="center"><?=  $profile->partners_name ?></td>
                                                <td align="center"><?=  $profile->address  ?></textarea></td>
                                                <td align="center"><?=  $profile->city ?></td>
                                                <td align="center"><?=  $profile->email ?></td>
                                                <td align="center"><?=  $profile->hp ?></td>
                                                <td align="center"><?=  $profile->postal_code ?></td>
                                                <td align="center"><textarea rows="10" disabled><?=  $profile->wop ?></textarea></td>
                                                <td align="center"><?=  $profile->file_gambar ?></td>
                                                        <td>
                                                            <?=  anchor('user/profile/edit_biodata/'.$profile->user_partners,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                                            
                                            
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