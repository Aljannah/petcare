 <?php $this->load->view('layout/headeruser_customer')?> 
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/.module-->
                            <div class="module hide">
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
                                                   <td align="center"><?=  $profile->username ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nama</th>
                                                   <td align="center"><?=  $profile->name ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Email</th>
                                                   <td align="center"><?=  $profile->email ?></td>
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
                                                   <th>No. Telp/ Hp</th>
                                                   <td align="center"><?=  $profile->hp ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Kodepos</th>
                                                   <td align="center"><?=  $profile->postal_code ?></td>
                                        </tr>
                                        <tr>
                                                   <td>
                                                            <?=  anchor('customer/profile/edit_biodata/'.$profile->username,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                                            
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