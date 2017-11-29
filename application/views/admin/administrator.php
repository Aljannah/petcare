 <?php $this->load->view('layout/headeradmin')?> 
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
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module" style="width: 2000px">
                                <div class="module-head">
                                    <h2 align = "center">Selamat Datang di Halaman Administrator Website</h2>
                                    <h5>Daftar Seluruh Event - Event</h5>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Kode Event</th>
                                                    <th>Username</th>
                                                    <th>Nama Event</th>
                                                    <th>Lokasi</th>
                                                    <th>Universitas</th>
                                                    <th>Deskripsi</th>
                                                    <th>Poster</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal</th>
                                                    <th>Status Konfirmasi</th>
                                                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($event as $events ): $no++;?>
                                            <tr class="odd gradeX">
                                                <td align="center"><?php echo $no;?></td>
                                                <td align="center"><?=  $events->kode_event ?></td>
                                                <td align="center"><?=  $events->username ?></td>
                                                <td align="center"><?=  $events->nama ?></td>
                                                <td align="center"><?=  $events->lokasi ?></td>
                                                <td align="center"><?=  $events->universitas ?></td>
                                                <td align="center"><textarea rows="10" disabled><?=  $events->deskripsi  ?></textarea></td>
                                                <td align="center"><img src="<?php echo base_url('assets/gambar/'.$events->poster);?>" height="200" width="200"></td>
                                                <td align="center"><?=  $events->kategori ?></td>
                                                <td align="center"><?=  $events->tanggal ?></td>
                                                <td align="center"><?=  $events->status_konfirm ?></td>
                                                <td>
                                                        <?=  anchor(''.$events->kode_event,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                                                        <?php  if($this->session->userdata('group') ==  '1' ): ?>
                                                        <?=  anchor(''.$events->kode_event,'Delete',['class'=>'btn btn-danger btn-xs','onclick'=>'return confirm(\'Anda yakin ? \')']) ?>
                                                        <?php endif;?>
                                                </td>
                                            </tr><?php endforeach; ?> 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                    <th>No</th>
                                                    <th>Kode Event</th>
                                                    <th>Username</th>
                                                    <th>Nama Event</th>
                                                    <th>Lokasi</th>
                                                    <th>Universitas</th>
                                                    <th>Deskripsi</th>
                                                    <th>Poster</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal</th>
                                                    <th>Status Konfirmasi</th>
                                                    <th>Action</th>
                                            </tr>
                                        </tfoot>
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