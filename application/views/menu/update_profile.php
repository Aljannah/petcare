<?php 
    $user_partners              = $profile->user_partners;
if($this->input->post('is_submitted'))
{
                                $user_partners              = set_value('user_partners');
                                $password                   = set_value('password');
                                $email                      = set_value('email');
                                $hp                         = set_value('hp');
                                $partners_name              = set_value('partners_name');
                                $address                    = set_value('address');
                                $city                       = set_value('city');
                                $postal_code                = set_value('postal_code');
                                $wop                        = set_value('wop');
                                $owner                      = set_value('owner');
                                $file_gambar                = set_value('file_gambar');
}else{

                                $user_partners              = $profile->user_partners;
                                $password                   = $profile->password;
                                $email                      = $profile->email;
                                $hp                         = $profile->hp;
                                $partners_name              = $profile->partners_name;
                                $address                    = $profile->address;
                                $city                       = $profile->city;
                                $postal_code                = $profile->postal_code;
                                $wop                        = $profile->wop;
                                $owner                      = $profile->owner;
                                $file_gambar                = $profile->file_gambar;
}
    
?>


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
                            <div class="module" style="width: 700px">
                                <div class="module-head">
                                    <h2 align = "center">Profil Saya</h2>
                                    <h5>Edit Profil Saya</h5>
                                </div>
                                


                            <div class="col-md-6 contact-grid" align="center">
                            <?php echo form_open_multipart('user/profile/edit_biodata/'.$user_partners,['class'=>'your-para']);?>
                            <p class="your-para">Username :</p>
                            <input type="text" name="user_partners" value="<?= $user_partners ?>" readonly>
                            
                            <?php echo form_error('owner'); ?>
                            <p class="your-para">Nama Pemilik :</p>
                            <input type="text" name="owner" value="<?= $owner ?>"  >
                            
                            <?php echo form_error('partners_name'); ?>
                            <p class="your-para">Nama Petcare :</p>
                            <input type="text" name="partners_name" value="<?= $partners_name ?>"  >
                            
                            <p class="your-para">Password :</p>
                            <input type="text" name="password" value="" placeholder="password baru">
                            
                            <?php echo form_error('email'); ?>
                            <p class="your-para">Email :</p>
                            <input type="text" name="email" value="<?= $email ?>">

                            <?php echo form_error('hp'); ?>
                            <p class="your-para">No. Telp/Hp :</p>
                            <input type="text" name="hp" value="<?= $hp ?>">

                            <?php echo form_error('address'); ?>
                            <p class="your-para">Alamat Lengkap :</p>
                            <input type="text" name="address" value="<?= $address ?>">
                            
                            <?php echo form_error('city'); ?>
                            <p class="your-para">Kabupaten/Kota :</p>
                            <div class="controls">
                            <select name="city" >
                                  <option value="<?= $city ?>"><?= $city ?></option>
                                  <option value="Jakarta Selatan">Jakarta Selatan</option>
                                  <option value="Jakarta Pusat">Jakarta Pusat</option>
                                  <option value="Jakarta Timur">Jakarta Timur</option>
                                  <option value="Jakarta Barat">Jakarta Barat</option>
                                  <option value="Jakarta Utara">Jakarta Utara</option>
                                  <option value="Depok">Depok</option>
                                  <option value="Tangerang">Tangerang</option>
                                  <option value="Bekasi">Bekasi</option>
                                  <option value="Bogor">Bogor</option>
                             </select>
                            </div>
                        

                            <?php echo form_error('postal_code'); ?>
                            <p class="your-para">Kode Pos :</p>
                            <input type="text" name="postal_code" value="<?= $postal_code ?>">
                            
                            <?php echo form_error('wop'); ?>
                            <p class="your-para">waktu Operasional :</p>
                            <textarea cols="100" rows="10" name="wop" ><?= $wop ?></textarea>


                            <div class="col-sm-1">
                            </br>
                                <div class="input-group">
                                    <input type="hidden" name="is_submitted" value="1">
                                    <button type="submit" class="btn btn-success">Update</button>
                                                                 
                                    <?=  anchor('user/profile','Cancel',['class'=>'btn btn-danger']) ?>
                                </div>
                                </br></br>
                            </div>    

                        <?= form_close() ?>

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