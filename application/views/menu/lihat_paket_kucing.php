 <?php $this->load->view('layout/header')?> 
                    <!--/.span3-->
                    <!-- START MAIN -->
    <!-- START MAIN -->
<div class="span9">
    <div class="content" style="padding-left: 107px;">
     <div class="module" style="width: fit-content">                       
       <div class="module-body table">
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
              
                <!-- START CONTENT -->
                <section id="content">
                    <!--start container-->
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5 class="breadcrumbs-title">Pilih Paket </h5>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url("index.php/con_home/mitra_list_cat")?>">Jenis Hewan / Kucing </a></li>
                                    <li class="active"> Paket</li>
                                </ol>
                            </div>
                        </div>
                        
                        <hr>
                        <div id="profile-page" class="section">
                            <!-- profile-page-header -->

                                <div id="profile-page-content" class="row">
                                    <!-- profile-page-sidebar-->

                        <?php $no=0; foreach($pesan as $pesan ): $no++;?>                      
                                    <div id="profile-page-sidebar" class="col s12 m3">
                                        <!-- Profile About Details  -->

                                        <ul id="profile-page-about-details" class="collection z-depth-1">
                                            <!--<li class="collection-item">
                                               <button onclick="location.href='<?php echo base_url("index.php/con_customer/lihat_detail_paket_Kucing/".$pesan -> id_petgrooming)?>';" type="button" class="btn btn-cart">
                                                    Pilih
                                                </button>
                                            </li>-->

                                            <li class="collection-item">
                                                <div class="row" style="margin-left: 0px;">
                                                    <div class="col s5 grey-text darken-1">Nama Paket</div>
                                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $pesan -> package_name ?></div>
                                                    <!--<div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp.".number_format($pesan -> partners_name,2,',','.') ?></div>-->
                                                </div>
                                            </li>
                                            <li class="collection-item">
                                                <div class="row">
                                                    <div class="col s5 grey-text darken-1">Deskripsi Paket</div>
                                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $pesan -> description ?></div>
                                                </div>
                                            </li>
                                            <li class="collection-item">
                                                <div class="row">
                                                    <div class="col s5 grey-text darken-1">Harga Per-Hewan</div>
                                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $pesan -> price ?></div>
                                                </div>
                                            </li>
                                            <li class="collection-item">
                                                <div class="row">
                                                    <div class="col s5 grey-text darken-1">Nama Mitra</div>
                                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $pesan -> partners_name ?></div>
                                                </div>
                                            </li>
                                            <li class="collection-item">
                                                <div class="row">
                                                    <div class="col s5 grey-text darken-1">Tipe Hewan</div>
                                                    <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $pesan -> petcategory ?></div>
                                                </div>
                                            </li>
                                        </ul>

                                        <!--/ Profile About Details  -->

                                    </div><?php endforeach; ?> 
                                    <!-- profile-page-sidebar-->

                                </div>

                        </div>
                        
                    </div>
                </section>

                <!-- END CONTENT -->

            </div>
            <!-- END WRAPPER -->

        </div>
        <!-- END MAIN -->
        </div>
       
    </div>
    </div>
        <div>
       <?php $this->load->view('layout/footer')?>
   </div>
</div>

<style>.collection {
  margin: 0.5rem 0 1rem 0;
  border: 1px solid #e0e0e0;
  border-radius: 2px;
  overflow: hidden;
  position: relative; }
  .collection .collection-item {
    background-color: #fff;
    line-height: 1.5rem;
    padding: 10px 20px;
    margin: 0;
    border-bottom: 1px solid #e0e0e0; }
    .collection .collection-item.avatar {
      height: 84px;
      padding-left: 72px;
      position: relative; }
      .collection .collection-item.avatar .circle {
        position: absolute;
        width: 42px;
        height: 42px;
        overflow: hidden;
        left: 15px;
        display: inline-block;
        vertical-align: middle; }
      .collection .collection-item.avatar i.circle {
        font-size: 18px;
        line-height: 42px;
        color: #fff;
        background-color: #999;
        text-align: center; }
      .collection .collection-item.avatar .title {
        font-size: 16px; }
      .collection .collection-item.avatar p {
        margin: 0; }
      .collection .collection-item.avatar .secondary-content {
        position: absolute;
        top: 16px;
        right: 16px; }
    .collection .collection-item:last-child {
      border-bottom: none; }
    .collection .collection-item.active {
      background-color: #ff4081;
      color: white; }
  .collection a.collection-item {
    display: block;
    -webkit-transition: 0.25s;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    -ms-transition: 0.25s;
    transition: 0.25s;
    color: #ff4081; }
    .collection a.collection-item:not(.active):hover {
      background-color: #ddd; }
  .collection.with-header .collection-header {
    background-color: #fff;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 20px; }
  .collection.with-header .collection-item {
    padding-left: 30px; }
    .row {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px; }
  .row:after {
    content: "";
    display: table;
    clear: both; }
  .row .col {
    float: left;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0 0.75rem; }
    .row .col.s1 {
      width: 8.33333%;
      margin-left: 0; }
    .row .col.s2 {
      width: 16.66667%;
      margin-left: 0; }
    .row .col.s3 {
      width: 25%;
      margin-left: 0; }
    .row .col.s4 {
      width: 33.33333%;
      margin-left: 0; }
    .row .col.s5 {
      width: 41.66667%;
      margin-left: 0; }
    .row .col.s6 {
      width: 50%;
      margin-left: 0; }
    .row .col.s7 {
      width: 58.33333%;
      margin-left: 0; }
    .row .col.s8 {
      width: 66.66667%;
      margin-left: 0; }
    .row .col.s9 {
      width: 75%;
      margin-left: 0; }
    .row .col.s10 {
      width: 83.33333%;
      margin-left: 0; }
    .row .col.s11 {
      width: 91.66667%;
      margin-left: 0; }
    .row .col.s12 {
      width: 100%;
      margin-left: 0; }
    .row .col.offset-s1 {
      margin-left: 8.33333%; }
    .row .col.offset-s2 {
      margin-left: 16.66667%; }
    .row .col.offset-s3 {
      margin-left: 25%; }
    .row .col.offset-s4 {
      margin-left: 33.33333%; }
    .row .col.offset-s5 {
      margin-left: 41.66667%; }
    .row .col.offset-s6 {
      margin-left: 50%; }
    .row .col.offset-s7 {
      margin-left: 58.33333%; }
    .row .col.offset-s8 {
      margin-left: 66.66667%; }
    .row .col.offset-s9 {
      margin-left: 75%; }
    .row .col.offset-s10 {
      margin-left: 83.33333%; }
    .row .col.offset-s11 {
      margin-left: 91.66667%; }
    .row .col.offset-s12 {
      margin-left: 100%; }
    @media only screen and (min-width: 601px) {
      .row .col.m1 {
        width: 8.33333%;
        margin-left: 0; }
      .row .col.m2 {
        width: 16.66667%;
        margin-left: 0; }
      .row .col.m3 {
        width: 25%;
        margin-left: 0; }
      .row .col.m4 {
        width: 33.33333%;
        margin-left: 0; }
      .row .col.m5 {
        width: 41.66667%;
        margin-left: 0; }
      .row .col.m6 {
        width: 50%;
        margin-left: 0; }
      .row .col.m7 {
        width: 58.33333%;
        margin-left: 0; }
      .row .col.m8 {
        width: 66.66667%;
        margin-left: 0; }
      .row .col.m9 {
        width: 75%;
        margin-left: 0; }
      .row .col.m10 {
        width: 83.33333%;
        margin-left: 0; }
      .row .col.m11 {
        width: 91.66667%;
        margin-left: 0; }
      .row .col.m12 {
        width: 100%;
        margin-left: 0; }
      .row .col.offset-m1 {
        margin-left: 8.33333%; }
      .row .col.offset-m2 {
        margin-left: 16.66667%; }
      .row .col.offset-m3 {
        margin-left: 25%; }
      .row .col.offset-m4 {
        margin-left: 33.33333%; }
      .row .col.offset-m5 {
        margin-left: 41.66667%; }
      .row .col.offset-m6 {
        margin-left: 50%; }
      .row .col.offset-m7 {
        margin-left: 58.33333%; }
      .row .col.offset-m8 {
        margin-left: 66.66667%; }
      .row .col.offset-m9 {
        margin-left: 75%; }
      .row .col.offset-m10 {
        margin-left: 83.33333%; }
      .row .col.offset-m11 {
        margin-left: 91.66667%; }
      .row .col.offset-m12 {
        margin-left: 100%; } }
    @media only screen and (min-width: 993px) {
      .row .col.l1 {
        width: 8.33333%;
        margin-left: 0; }
      .row .col.l2 {
        width: 16.66667%;
        margin-left: 0; }
      .row .col.l3 {
        width: 25%;
        margin-left: 0; }
      .row .col.l4 {
        width: 33.33333%;
        margin-left: 0; }
      .row .col.l5 {
        width: 41.66667%;
        margin-left: 0; }
      .row .col.l6 {
        width: 50%;
        margin-left: 0; }
      .row .col.l7 {
        width: 58.33333%;
        margin-left: 0; }
      .row .col.l8 {
        width: 66.66667%;
        margin-left: 0; }
      .row .col.l9 {
        width: 75%;
        margin-left: 0; }
      .row .col.l10 {
        width: 83.33333%;
        margin-left: 0; }
      .row .col.l11 {
        width: 91.66667%;
        margin-left: 0; }
      .row .col.l12 {
        width: 100%;
        margin-left: 0; }
      .row .col.offset-l1 {
        margin-left: 8.33333%; }
      .row .col.offset-l2 {
        margin-left: 16.66667%; }
      .row .col.offset-l3 {
        margin-left: 25%; }
      .row .col.offset-l4 {
        margin-left: 33.33333%; }
      .row .col.offset-l5 {
        margin-left: 41.66667%; }
      .row .col.offset-l6 {
        margin-left: 50%; }
      .row .col.offset-l7 {
        margin-left: 58.33333%; }
      .row .col.offset-l8 {
        margin-left: 66.66667%; }
      .row .col.offset-l9 {
        margin-left: 75%; }
      .row .col.offset-l10 {
        margin-left: 83.33333%; }
      .row .col.offset-l11 {
        margin-left: 91.66667%; }
      .row .col.offset-l12 {
        margin-left: 100%; } }


    </style>