<?php $this->start('body'); ?>
<div class="wt-bnr-inr overlay-wraper bg-parallax" style="background-image:url(<?=PROOT?>images/tpl.jpg);">
    <div class="overlay-main bg-black"></div>
</div>
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=PROOT?>"><i class="fa fa-home"></i> Página Inicial</a></li>
            <li>Quem Somos</li>
        </ul>
    </div>
</div>
<div class="section-full p-t80 p-b70">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="text-uppercase">Somos uma Empresa Prestadora de Serviços</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
            <p><?=$GLOBALS['about']?></p>
        </div>
        <!-- TITLE END -->                	
        
<div class="section-full">
    <div class="container our-value">
            <div class="row"> 
            <div class="col-md-8 col-sm-8 p-t15 p-b30 our-value-left">
                    <div class="clearfix">
                    <div class="col-md-6 p-tb10">
                        <div class="wt-icon-box-wraper left ">
                            <div class="icon-md">
                                <div class="icon-cell text-black">
                                    <span class="iconmoon-buildings"></span>
                                </div>
                            </div>
                            <div class="icon-content text-secondry">
                                <h5 class="wt-tilte text-uppercase m-b5">Melhor qualidade</h5>
                                <p>Lorem ipsum dolor sit amet, cdipiscing elit, sed diam non dolore .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-tb10">
                        <div class="wt-icon-box-wraper left">
                            <div class="icon-md text-primary">
                                <div class="icon-cell text-black">
                                    <span class="iconmoon-hours"></span>
                                </div>
                            </div>
                            <div class="icon-content text-secondry">
                                <h5 class="wt-tilte text-uppercase m-b0">Suporte 24 horas</h5>
                                <p>Lorem ipsum dolor sit amet, cdipiscing elit, sed diam non dolore .</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-3 p-t50 p-b50 col-md-offset-1 our-value-right">
                <div class="">
                    <a href="<?=PROOT?>contactos" class="site-button-secondry  m-r15 text-uppercase font-weight-600">Contate-Nos</a>
                </div>
            </div>
            </div>
    </div>
</div>
    </div>
</div>
<?php $this->end();