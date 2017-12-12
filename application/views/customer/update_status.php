<?php 
    $no_orders              = $pesanan->no_orders;
if($this->input->post('is_submitted'))
{
                               $no_orders              = set_value('no_orders');
                                $feedback_user         = set_value('feedback_user');
}else{

                                $no_orders              = $pesanan->no_orders;
                                $feedback_user         = $pesanan->feedback_user;
                                
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
                                    <h2 align = "center">Ganti Ketersediaan</h2>
                                    <h5>Konfirmasi Ketersediaan Anda Menerima Pengerjaan Paket</h5>
                                </div>
                                


                            <div class="col-md-6 contact-grid" align="center">
                            <?php echo form_open_multipart('customer/pesanan_customer/edit/'.$no_orders,['class'=>'your-para']);?>
                            <p class="your-para">Nomor Pesanan :</p>
                            <input type="text" name="no_orders" value="<?= $no_orders ?>" readonly>
                            
                            <?php echo form_error('feedback_user'); ?>
                            <p class="your-para">Ketersediaan Anda :</p>
                            <div class="controls">
                            <select name="feedback_user" >
                                  <option value="<?= $feedback_user ?>"><?= $feedback_user ?></option>
                                  <option value="Tidak Diterima">Tidak Diterima</option>
                                  <option value="Diterima">Diterima</option>
                             </select>
                            </div>

                            <div class="col-sm-1">
                            </br>
                                <div class="input-group">
                                    <input type="hidden" name="is_submitted" value="1">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                                 
                                    <?=  anchor('customer/pesanan_customer','Cancel',['class'=>'btn btn-danger']) ?>
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