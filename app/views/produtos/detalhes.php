<?php $this->start('body'); ?>
<div class="wt-bnr-inr overlay-wraper bg-parallax" style="background-image:url(<?=PROOT?>images/tpl.jpg);">
    <div class="overlay-main bg-black"></div>
</div>
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=PROOT?>"><i class="fa fa-home"></i> Produtos</a></li>
            <li><?=$GLOBALS['q']?></li>
            <li class="text-gray">Detalhes</li>
        </ul>
    </div>
</div>

<div class="section-full p-t80 p-b50">
    <div class="container woo-entry">    
        <div class="row m-b30">

            <div class="col-md-4 col-sm-4 m-b30">
                <div class="wt-box wt-product-gallery on-show-slider"> 
                    <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5 owl-loaded owl-drag">
                        <div class="owl-item active" style="width: 360px;">
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 ">
                                            <img src="http://thewebmax.com/build/images/products/pic-1.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a class="mfp-link" href="http://thewebmax.com/build/images/products/pic-1.jpg">
                                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8">
                <div class="wt-post-title ">
                    <h3 class="post-title"><a href="javascript:void(0);"><?=$GLOBALS['q']?></a></h3>
                </div>
                <h2 class="m-tb10">$ 1000.00 </h2>
                <div class="wt-post-text">
                    <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Preço</td>
                            <td>AOA 1000.00</td>
                        </tr>
                        <tr>
                            <td>Disponibilidade de estoque</td>
                            <td>Disponível</td>
                        </tr>
                    </tbody>
                </table>
                <form method="post" class="cart">
                    <div class="quantity btn-quantity pull-left m-r10">
                        <div class="input-group bootstrap-touchspin">
                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                            <input type="number" value="1" name="qtd" class="form-control" style="display: block;">
                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                            </input>
                            <input type="hidden" name="itemId" value="0000">
                            <input type="hidden" name="name" value="From Detail">
                            <input type="hidden" name="price" value="1000">
                            <input type="hidden" name="imagePath" value="http://thewebmax.com/build/images/products/pic-1.jpg">
                        </div>
                    </div>
                    <button class="btn btn-primary site-button-secondry pull-left m-r10"><i class="fa fa-shopping-bag"></i> Comprar agora</button>
                    <button type="submit" class="btn btn-primary site-button pull-left"><i class="fa fa-cart-plus"></i> Adicionar ao Carrinho</button>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12 p-b30">
                    <div class="wt-tabs border border-top bg-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#web-design-19">Description</a></li>
                            <li><a data-toggle="tab" href="#graphic-design-19">Specification</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="web-design-19" class="tab-pane active">
                                <div class=" p-a10">
                                    <p class="m-b10"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo. 
                                        Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
                                        commyolk augue aliquam ornare augue.</p>
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                                </div>
                            </div>
                            <div id="graphic-design-19" class="tab-pane">
                                <table class="table table-bordered table-striped m-b0">
                                    <tbody><tr>
                                        <td><strong>Size</strong></td>
                                        <td>Small, Medium, Large &amp; Extra Large</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Color</strong></td>
                                        <td>Read, Blue, Green &amp; Black</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Length</strong></td>
                                        <td>35 cm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fabric</strong></td>
                                        <td>Cotton, Silk &amp; Synthetic</td>
                                    </tr>
                                    <tr>
                                        <td>table-bordered</td>
                                        <td>6 Months</td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $this->end(); ?>