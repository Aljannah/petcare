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
                                    <h2 align = "center">Paket Grooming</h2>
                                    <h5>Daftar Seluruh Paket Anda</h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Nomor Pemesanan</th>
                                                    <th>Nama Pemesan</th>
                                                    <th>Tanggal Order</th>
                                                    <th>Alamat</th>
                                                    <th>Kabupaten</th>
                                                    <th>Nomor Telepon Pemesan</th>
                                                    <th>Status Order</th>
                                                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($pesanan as $pesanan ): $no++;?>
                                            <tr class="odd gradeX">
                                                <td align="center"><?php echo $no;?></td>
                                                <td align="center"><?=  $pesanan->no_orders ?></td>
                                                <td align="center"><?=  $pesanan->name ?></td>
                                                <td align="center"><?=  $pesanan->order_date ?></td>
                                                <td align="center"><textarea rows="10" disabled><?=  $pesanan->address  ?></textarea></td>
                                                <td align="center"><?=  $pesanan->city ?></td>
                                                <td align="center"><?=  $pesanan->hp ?></td>
                                                <td align="center"><?=  $pesanan->status_order ?></td>
                                                
                                                        <td>
                                                            <?=  anchor('user/pesanan/lihat/'.$pesanan->no_orders,'Lihat',['class'=>'btn btn-success btn-xs']) ?>
                                            
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