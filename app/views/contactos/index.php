<?php $this->start('head'); ?>
<style>
    .linkable {
        color: #c5ad4d;
    }
    a:hover {
        color: #756831;
    }
</style>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="wt-bnr-inr overlay-wraper" style="background-image:url(https://images.unsplash.com/photo-1511805296765-e8de8e3750f4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aa35de728b473ed2ed31b592b8b37483&auto=format&fit=crop&w=1479&q=80);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <h1 class="text-white">Envie-nos um texto ou solicite uma chamada</h1>
            <p class="text-white" style="margin-top: -23px;">O nosso cliente é uma empresa de referência no setor dos seguros que se encontra de momento a recrutar...</p>
        </div>
    </div>
</div>
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=PROOT?>"><i class="fa fa-home"></i> Página Inicial</a></li>
            <li>Contactos</li>
        </ul>
    </div>
</div>
<div class="section-full p-t80 p-b50">
    <div class="container">
        <div class="section-content m-b30">
            <div class="row">
            
                <div class="col-md-4 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                        <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                        <div class="icon-content">
                            <h5 class="text-white">Número de telefone</h5>
                            <p><a class="linkable" href="tel://+244222026518">(+244) 222 026518</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                        <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                        <div class="icon-content">
                            <h5 class="text-white">Endereço de e-mail</h5>
                            <p><a class="linkable" href="mailto:info@ccaac-civil.com">info@ccaac-civil.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                        <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                        <div class="icon-content">
                            <h5 class="text-white">Endereço</h5>
                            <p class="text-gray-dark">Panguila Velha - Bengo, Angola</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        
        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content m-b50">
            <div class="row">
            
                <!-- LOCATION BLOCK-->
                <div class="wt-box col-md-6">
                
                        <h4 class="text-uppercase">Localização</h4>
                    <div class="wt-separator-outer m-b30">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>      
                                            

                    <div class="gmap-outline m-b30">
                        <!-- <div id="gmap_canvas" class="google-map"></div> -->
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.087766732025!2d13.366707314381024!3d-8.777813193695321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f07000000001%3A0x8f905bbd82f59e4d!2sSplash+Ink+Company!5e0!3m2!1spt-PT!2sao!4v1530281099552" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                        
                </div>
                <div class="wt-box col-md-6">
                    <h4 class="text-uppercase">Formulário de Contato </h4>
                    <div class="wt-separator-outer m-b30">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                        
                    </div>
                
                    <div class="p-a30 bg-gray">
                
                        <form  method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="name" autocomplete="name" type="text" required="" class="form-control" placeholder="Jorge Simões">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email"autocomplete="email" type="email" class="form-control" required="" placeholder="jorge.s@splashink.co">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                            <textarea name="message" autocomplete="message" rows="3" class="form-control " required="" placeholder="Olá, gostaria de marcar uma audiência em vossos escritórios"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="site-button  m-r15">Enviar mensagem <i class="fa fa-angle-double-right"></i></button>
                                    <button type="reset"  class="site-button ">Resetar  <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>
<?php $this->start('scripts'); ?>

<?php $this->end(); ?>