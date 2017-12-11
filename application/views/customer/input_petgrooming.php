<?php 
    //$username              = $pesan->username;
if($this->input->post('is_submitted'))
{
                                $username                   = set_value('username');
                                $name                       = set_value('name');
                                $price                      = set_value('price');
                                $address                    = set_value('address');
                                $id_petgrooming             = set_value('id_petgrooming');
                                $hp                         = set_value('hp');
                                $email                      = set_value('email');
                                $postal_code                = set_value('postal_code');
                                $package_name               = set_value('package_name');
                                $city                       = set_value('city');
                                $description                = set_value('description');
                                $petcategory                = set_value('petcategory');
                                $status_order               = set_value('status_order');
                                $feedback_mitra             = set_value('feedback_mitra');
                                $feedback_user              = set_value('feedback_user');
}else{

                                //$username                   = $pesan->username;
                                //$name                       = $pesan->name;
                                $price                      = $pesan->price;
                                //$address                    = $pesan->address;
                                $id_petgrooming             = $pesan->id_petgrooming;
                                //$hp                         = $pesan->hp;
                                //$email                      = $pesan->email;
                                //$postal_code                = $pesan->postal_code;
                                $package_name               = $pesan->package_name;
                                //$city                       = $pesan->city;
                                $description                = $pesan->description;
                                $petcategory                = $pesan->petcategory;
                                
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
                                    <h2 align = "center">Your pesan</h2>
                                    <h5>Edit Your pesan</h5>
                                </div>
                                


                            <div class="col-md-6 contact-grid" align="center">
                            <form method="post" action="<?php echo site_url('con_input_pesanan') ?>">
                            <p class="your-para">Username :</p>
                            <!--<input type="text" name="username" value="<?= $pesan->username ?>" readonly>-->
                            <input type="hidden" name="id_petgrooming" value="<?= $pesan->id_petgrooming ?>" readonly>
                            <input type="hidden" name="tanggal_order" value="<?php echo date('Y-m-d'); ?>" />
                            <!--<p class="your-para">Nama :</p>
                            <input type="text" name="nama" value="<?= $pesan->name ?>"  readonly>-->
                            
                            <!--<p class="your-para">Alamat :</p>
                            <textarea cols="100" rows="10" name="address" disabled><?= $pesan->address ?></textarea>
                            
                            <p class="your-para">Nomor Telepon/Hp :</p>
                            <input type="text" name="hp" value="<?= $pesan->hp ?>" readonly>

                            <p class="your-para">Email :</p>
                            <input type="text" name="email" value="<?= $pesan->email ?>" readonly>
-->
                            <p class="your-para">Paket Yang Dipilih :</p>
                            <input type="text" name="package_name" value="<?= $pesan->package_name ?>" readonly>
                            
                            <p class="your-para">Harga per-hewan :</p>
                            <input type="text" name="price" value="<?= $pesan->price ?>" readonly>
                            
                            <?php echo form_error('jumlah_hewan'); ?>
                                <p class="your-para">Jumlah Hewan :</p>
                                <select name="jumlah_hewan">
                                          <option value="">Pilih Jumlah Hewan</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                </select>
                    

                            <?php echo form_error('tanggal'); ?>
                            <p class="your-para">Tanggal :</p>
                            <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>">

                            <!--<?php echo form_error('postal_code'); ?>
                            <p class="your-para">Kode Pos :</p>
                            <input type="text" name="postal_code" value="<?= $pesan->postal_code ?>">-->
                            
                            <!--<?php echo form_error('wop'); ?>
                            <p class="your-para">waktu Operasional :</p>
                            <textarea cols="100" rows="10" name="wop" disabled><?= $pesan->wop ?></textarea>-->


                            <div class="col-sm-1">
                            </br>
                                <div class="input-group">
                                    <input type="hidden" name="is_submitted" value="1">
                                    <button type="submit" class="btn btn-success">Lanjut</button>
                                                                 
                                    <?=  anchor('user/pesan','Cancel',['class'=>'btn btn-danger']) ?>
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