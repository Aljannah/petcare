<?php 
    //$username              = $pesan->username;
if($this->input->post('is_submitted'))
{
                                $price                      = set_value('price');
                                $id_petgrooming             = set_value('id_petgrooming');
                                $package_name               = set_value('package_name');
                                $no_orderdetail             = set_value('no_orderdetail');
                                $description                = set_value('description');
                                $petcategory                = set_value('petcategory');
                                $status_order               = set_value('status_order');
                                $feedback_mitra             = set_value('feedback_mitra');
                                $feedback_user              = set_value('feedback_user');
                                $user_partners              = set_value('user_partners');
                                $jumlah_hewan               = set_value('jumlah_hewan');
                                $order_date                 = set_value('order_date');
                                $grooming_date              = set_value('grooming_date');
                                $time_hour                  = set_value('time_hour');
                                $mnt_hour                   = set_value('mnt_hour');
                                $day_hour                   = set_value('day_hour');
                                
                                                          
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


 <?php $this->load->view('layout/headeruser_customer')?> 
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
                            <?php echo form_open_multipart('con_customer/lihat_detail_paket_anjing/'.$id_petgrooming,['class'=>'your-para']);?>
                            <input type="text" name="no_orderdetail" value="<?=$detor?>" readonly>
                            
                            <!--<input type="text" name="username" value="<?= $pesan->username ?>" readonly>-->
                            <!--<input type="text" name="id_petgrooming" value="<?= $pesan->user_partners ?>"-->
                            <input type="text" name="user_partners" value="<?= $pesan->user_partners ?>" readonly>
                            <input type="text" name="id_petgrooming" value="<?= $pesan->id_petgrooming ?>" readonly>
                            <input type="text" name="order_date" value="<?php echo date('Y-m-d'); ?>" />
                            <input type="text" name="feedback_user" value="Diterima" />
                            <input type="text" name="feedback_mitra" value="Menunggu Konfirmasi" />
                            <input type="text" name="status_order" value="Diterima" />
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
                    

                            <?php echo form_error('grooming_date'); ?>
                            <p class="your-para">Tanggal :</p>
                            <input type="date" name="grooming_date" value="<?php echo date('Y-m-d'); ?>">

                            <?php echo form_error('time_hour'); ?>
                                <p class="your-para">Jam :</p>
                                <select name="time_hour" style="max-width: 20%;">
                                          <option value="">Pilih Jam</option>
                                          <option value="00">00</option>
                                          <option value="01">01</option>
                                          <option value="02">02</option>
                                          <option value="03">03</option>
                                          <option value="04">04</option>
                                          <option value="05">05</option>
                                          <option value="06">06</option>
                                          <option value="07">07</option>
                                          <option value="08">08</option>
                                          <option value="09">09</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                </select>:
                                <?php echo form_error('mnt_hour'); ?>
                                <select name="mnt_hour" style="max-width: 20%;">
                                          <option value="">Pilih Menit</option>
                                          <option value="00">00</option>
                                          <option value="30">30</option>
                                </select>
                                <?php echo form_error('day_hour'); ?>
                                <select name="day_hour" style="max-width: 40%;">
                                          <option value="">Pilih AM/PM</option>
                                          <option value="AM">AM</option>
                                          <option value="PM">PM</option>
                                </select>
                            </div>
                            <!--<?php echo form_error('postal_code'); ?>
                            <p class="your-para">Kode Pos :</p>
                            <input type="text" name="postal_code" value="<?= $pesan->postal_code ?>">-->
                            
                            <!--<?php echo form_error('wop'); ?>
                            <p class="your-para">waktu Operasional :</p>
                            <textarea cols="100" rows="10" name="wop" disabled><?= $pesan->wop ?></textarea>-->


                            <div class="col-sm-1">
                            </br>
                                <div class="input-group">
                                    <input type="text" name="is_submitted" value="1">
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