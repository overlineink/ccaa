<?php
    include_once(ROOT . '/app/views/layouts/scripts/shopify.php');
    $_shopify = Shopify::getInstance();
    $this->start('body');
 ?>
<div class="wt-bnr-inr overlay-wraper bg-parallax" style="background-image:url(<?=PROOT?>images/tpl.jpg);">
    <div class="overlay-main bg-black"></div>
</div>
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=PROOT?>"><i class="fa fa-home"></i> Página Inicial</a></li>
            <li><i class="fa fa-cart"></i> Carrinho</li>
        </ul>
    </div>
</div>

<div class="section-full text-center p-tb50">
    <div class="container">
        
        <div class="section-content" id="component">
            <div class="p-b30">
                <h2 class="">Carrinho de compras</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <div id="no-more-tables">
                <div <?=$GLOBALS['component']?>>
                    Não existem itens adicionados ao Carrinho. <a href="<?=PROOT?>produtos/roloutes">Clique aqui</a> para adicionar alguns produtos.
                </div>
                <div <?=$GLOBALS['hidden']?> id="controller">
                    <table class="table-bordered  table-condensed cf wt-responsive-table shopping-table">
                        <thead class="cf text-center bg-primary">
                            <tr>
                                <th>Imagem</th>
                                <th>Nome do Item</th>
                                <th class="numeric">Preço Unitário</th>
                                <th class="numeric">Quantidade</th>
                                <th class="numeric"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($GLOBALS['validator'] == true): ?>
                                <?php foreach($GLOBALS['items'] as $response): ?>
                                    <tr>
                                        <td data-title="Code"><img style="width: 40px; height: 40px;" src="<?=$response['url']?>" alt="<?=$response['name']?>"></td>
                                        <td data-title="Company"><?=$response['name']?></td>
                                        <td data-title="Price" class="numeric"><?=$response['price']?> Kzs</td>
                                        <td data-title="Change" class="numeric"><?=$response['qtd']?></td>
                                        <td data-title="Open" class="numeric"><a href="?action=delete&id=<?=$response['item_id']?>"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </tbody>
                    </table>
                    <div class="cart-buttons text-right">
                        <a href="<?=PROOT?>carrinho/?c=limpar" class="m-b15 site-button m-r15 text-uppercase"><i class="fa fa-trash"></i> Limpar carrinho</a>
                        <a href="#" class="m-b15 site-button text-uppercase"><i class="fa fa-shopping-bag"></i> Finalizar compra</a>
                        <table class="table-bordered  table-condensed cf wt-responsive-table">
                            <thead class="cf text-center bg-primary">
                                <tr>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Total"><?=$_shopify->getTotal()?> Kzs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>
<?php $this->end(); ?>