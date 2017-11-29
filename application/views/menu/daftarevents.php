 <?php $this->load->view('layout/header')?>
 <div class="banner two">
       <div class="container">
           <h2 class="inner-tittle">DAFTAR EVENT</h2>
        </div>
  </div>
</br></br></br>
        <link type="text/css" href="<?php echo base_url();?>assets3/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets3/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>


 <!--/.span3--><div>
                    <div class="span9">
                        <div class="content" style="width: 1010px;">
                            
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">

                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="module" style="width: 1275px" align="center">
                                <div class="module-head">
                                    <h2 align="left"> Show by : <?php echo $kategori ?></h2>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr align="center">
                                                    <th>Poster</th>
                                                    <th>Nama Event</th>
                                                    <th>Lokasi</th>
                                                    <th>Deadline Tanggal Pendaftaran</th>
                                                    <th>Instansi</th>
                                                    <th>Detail</th>
                                                    <th>Poster</th>
                                                    <th>Nama Event</th>
                                                    <th>Lokasi</th>
                                                    <th>Deadline Tanggal Pendaftaran</th>
                                                    <th>Instansi</th>
                                                    <th>Detail</th>

                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($event as $events ): $no++;?>
                                                <tr class="odd gradeX">
                                                <td> <a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><img src="<?php echo base_url('assets/gambar/'.$events->poster);?>" height="200" width="200"> </a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->nama;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->lokasi;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->tanggal;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->universitas;?></a></td>
                                                <td>
                                                <?=  anchor('con_home/detail/'.$events->kode_event,'Detail',['class'=>'btn btn-success btn-xs']) ?>
                                                </td>
                                                <td> <a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><img src="<?php echo base_url('assets/gambar/'.$events->poster);?>" height="200" width="200"> </a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->nama;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->lokasi;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->tanggal;?></a></td>
                                                <td align="center"><a href="<?php echo base_url();?>index.php/con_home/detail/<?php echo $events->kode_event;?>"><?php echo $events->universitas;?></a></td>
                                                <td>
                                                <?=  anchor('con_home/detail/'.$events->kode_event,'Detail',['class'=>'btn btn-success btn-xs']) ?>
                                                </td>

                                            </tr></a><?php endforeach; ?> 
                                        </tbody>
                                
                                    </table>
                                </div>
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

        </br></br></br>
       <?php $this->load->view('layout/footeruser')?>