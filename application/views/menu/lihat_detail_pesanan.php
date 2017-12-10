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
                                    <h2 align = "center">your pesanan</h2>
                                    <h5></h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <tbody>
                                        <?php $no=0; foreach($pesanan as $pesanan ): $no++;?>
                                        

                                        <tr>
                                                   <th>Nomor Pesanan</th>                                            
                                                   <td align="center"><?=  $pesanan->no_orders ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nama Pemesan</th>
                                                   <td align="center"><?=  $pesanan->name ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nomor Telepon Pemesan</th>
                                                   <td align="center"><?=  $pesanan->hp ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Alamat</th>
                                                    <td align="center"><textarea rows="10" disabled><?=  $pesanan->address  ?></textarea></td>
                                        </tr>
                                        <tr>
                                                   <th>kabupaten/kota</th>
                                                   <td align="center"><?=  $pesanan->city ?></td>
                                        </tr>
                                        <tr>
                                                   <th>email</th>
                                                   <td align="center"><?=  $pesanan->email ?></td>
                                        </tr>
                                        <tr>
                                                   <th>No. Telp/ Hp</th>
                                                   <td align="center"><?=  $pesanan->hp ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Kodepos</th>
                                                   <td align="center"><?=  $pesanan->postal_code ?></td>
                                        </tr>
                                        <tr>
                                                   <th>id paket yang disimpan</th>
                                                   <td align="center"><?=  $pesanan->id_petgrooming ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Nama Paket yang dipesan</th>
                                                   <td align="center"><?=  $pesanan->package_name ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Deskripsi</th>
                                                    <td align="center"><textarea rows="10" disabled><?=  $pesanan->description  ?></textarea></td>
                                        </tr>
                                        <tr>
                                                   <th>Untuk Hewan</th>
                                                   <td align="center"><?=  $pesanan->petcategory ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Harga Paket per-Hewan</th>
                                                   <td align="center"><?=  $pesanan->unit_price ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Jumlah Hewan</th>
                                                   <td align="center"><?=  $pesanan->quantity ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Jumlah Total yang dibayar</th>
                                                   <td align="center"><?=  $pesanan->total ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Status Order</th>
                                                   <td align="center"><?=  $pesanan->status_order ?></td>
                                        </tr>
                                        <tr>
                                                   <th>Feedback Anda</th>
                                                   <td align="center"><textarea rows="10" disabled><?=  $pesanan->feedback_mitra  ?></textarea></td>
                                        </tr>
                                        <tr>
                                                   <th>Customer</th>
                                                   <td align="center"><?=  $pesanan->feedback_user  ?></td>
                                        </tr>
                                        <tr>
                                                   <td>
                                                            <?=  anchor('user/pesanan/edit/'.$pesanan->no_orders,'Ganti Ketersediaan',['class'=>'btn btn-success btn-xs']) ?>
                                                            
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