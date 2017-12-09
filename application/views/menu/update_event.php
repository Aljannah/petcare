<?php 
    $id_petgrooming              = $events->id_petgrooming;
if($this->input->post('is_submitted'))
{
                                $username              = set_value('username');
                                $package_name          = set_value('package_name');
                                $description           = set_value('description');
                                $price                 = set_value('price'); 
                                $petcategory           = set_value('petcategory');
                                $status                = set_value('status');
}else{

                                $username              = $events->user_partners;
                                $package_name          = $events->package_name;
                                $price                 = $events->price;
                                $description           = $events->description;
                                $petcategory           = $events->petcategory;
                                $status                = $events->status;
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
                                    <h2 align = "center">Paket Anda</h2>
                                    <h5>Update Paket</h5>
                                </div>
                                


                            <div class="col-md-6 contact-grid" align="center">
                            <?php echo form_open_multipart('user/event/edit/'.$id_petgrooming,['class'=>'your-para']);?>
                            <input type="hidden" name="status_konfirm" value="Belum Dikonfirmasi">
                            
                            <?php echo form_error('id_petgrooming'); ?>
                            <p class="your-para">Kode Paket:</p>
                            <input type="text" name="id_petgrooming" value="<?= $id_petgrooming ?>"  readonly>
                            

                            <?php echo form_error('username'); ?>
                            <p class="your-para">Username :</p>
                            <input type="text" name="username" value="<?= $username ?>" readonly>

                            <?php echo form_error('package_name'); ?>
                            <p class="your-para">Nama Paket :</p>
                            <input type="text" name="package_name" value="<?= $package_name ?>">
                            
                            <?php echo form_error('package_name'); ?>
                            <p class="your-para">Harga :</p>
                            <input type="text" name="price" value="<?= $price ?>">
                            
                            <?php echo form_error('description'); ?>
                            <p class="your-para">Deskripsi Paket :</p>
                            <textarea cols="100" rows="10" name="description" ><?= $description ?></textarea>
                            
                            <?php echo form_error('petcategory'); ?>
                            <p class="your-para">Kategori Grooming :</p>
                            <div class="controls">
                            <select name="petcategory" >
                              <option value="<?= $petcategory ?>"><?= $petcategory ?></option>
                              <option value="Anjing">Anjing</option>
                              <option value="Kucing">Kucing</option>
                              
                             </select>
                            </div>
                        

                            <?php echo form_error('status'); ?>
                            <p class="your-para">Status Konfirmasi :</p>
                            <div class="controls">
                            <select name="status" readonly>
                              <option value="<?= $status ?>"><?= $status ?></option>
                              <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                               <option value="Konfirmasi">Konfirmasi</option>
                             </select>
                            </div>

                            <div class="col-sm-1">
                            </br>
                                <div class="input-group">
                                    <input type="hidden" name="is_submitted" value="1">
                                    <button type="submit" class="btn btn-success">Update</button>
                                                                 
                                    <?=  anchor('user/event','Cancel',['class'=>'btn btn-danger']) ?>
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