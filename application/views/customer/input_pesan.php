 <?php $this->load->view('layout/headeruser_customer')?> 
                    <!--/.span3-->
                    <!-- START MAIN -->
<div class="span9">
    <div class="content">
     <div class="module" style="width: fit-content">                       
        <div class="module-body table">
            <div id="main">
                <!-- START WRAPPER -->
                <div class="wrapper" style="padding-top: 50px;padding-bottom: 65px; width: 950px;">

                    <!-- START CONTENT -->
                    <section id="content">
                        <!--start container-->
                        <div class="container">
                          <!-- SLider-->
                            <!DOCTYPE html>
                            <html>
                            <head>
                                <link href="<?php echo base_url("./themes/2/js-image-slider.css")?>" rel="stylesheet" type="text/css" />
                                <script src="<?php echo base_url("./themes/2/js-image-slider.js")?>" type="text/javascript"></script>
                                <link href="<?php echo base_url("./generic.css")?>" rel="stylesheet" type="text/css" />
                            </head>

                            <br>

                            <div id="container" style="width: 950px;">
                                <h3>Pilih Jenis Hewan Peliharaan Anda :</h3>
                                <a href="<?php echo site_url('con_customer/mitradog'); ?>">
                                    <figure>
                                        <img src="<?php echo base_url("./assets/images/dog.png")?>" width="100px" height="100px" />
                                        <figcaption>Anjing</figcaption>
                                    </figure>
                                </a>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a href="<?php echo site_url('con_customer/mitracat'); ?>">
                                    <figure>
                                        <img src="<?php echo base_url("./assets/images/cat.png")?>" width="100px" height="100px" />
                                        <figcaption>Kucing</figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </section>




                    <style>
                        #container {
                            text-align: center;
                        }
                        a, figure {
                            display: inline-block;
                        }
                        figcaption {
                            margin: 10px 0 0 0;
                            font-variant: small-caps;
                            font-family: Arial;
                            font-weight: bold;
                            color: #bb3333;
                        }
                        figure {
                            padding: 5px;
                        }
                        img:hover {
                            transform: scale(1.1);
                            -ms-transform: scale(1.1);
                            -webkit-transform: scale(1.1);
                            -moz-transform: scale(1.1);
                            -o-transform: scale(1.1);
                        }
                        img {
                            transition: transform 0.2s;
                            -webkit-transition: -webkit-transform 0.2s;
                            -moz-transition: -moz-transform 0.2s;
                            -o-transition: -o-transform 0.2s;
                        }
                    </style>
                    <!--Start of Zendesk Chat Script
                    <script type="text/javascript">
                        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
                        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
                            $.src="https://v2.zopim.com/?5K8hLQsfy7OuoR5d7SrTJXWIjLppNgIc";z.t=+new Date;$.
                                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
                    </script>
                    <!--End of Zendesk Chat Script-->
                    <!-- END CONTENT -->
                </div>
                <!-- END WRAPPER -->

            </div>
        </div>
    </div>
    
       <?php $this->load->view('layout/footeruser')?>
    </div>

</div>