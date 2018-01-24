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
                                    <h2 align = "center">Profil Saya</h2>
                                    <h5></h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <tbody>
                                        <?php $no=0; foreach($profile as $profile ): $no++;?>
                                        

                                        <tr>
                                                   <th>Username</th>                                            
                                                   <td align="center"><?=  $profile->user_partners ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nama Pemilik</th>
                                                   <td align="center"><?=  $profile->owner ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nama PetShop</th>
                                                   <td align="center"><?=  $profile->partners_name ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Alamat</th>
                                                    <td align="center"><textarea rows="10" disabled><?=  $profile->address  ?></textarea></td>
                                        </tr>
                                        <tr>
                                                   <th>Kabupaten/kota</th>
                                                   <td align="center"><?=  $profile->city ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Email</th>
                                                   <td align="center"><?=  $profile->email ?></td>
                                        </tr>
                                        <tr>
                                                   <th>No. Telp/ Hp</th>
                                                   <td align="center"><?=  $profile->hp ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Kodepos</th>
                                                   <td align="center"><?=  $profile->postal_code ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Waktu Operasional</th>
                                                   <td align="center"><textarea rows="10" disabled><?=  $profile->wop ?></textarea></td>
                                        </tr>
                                       
                                        <tr>
                                                   <td>
                                                            <?=  anchor('user/profile/edit_biodata/'.$profile->user_partners,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                                            
                                                    </td>
                                        </tr>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                        
                                        <?php endforeach; ?> 
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