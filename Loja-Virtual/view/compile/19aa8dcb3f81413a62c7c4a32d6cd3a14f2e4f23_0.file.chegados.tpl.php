<?php
/* Smarty version 3.1.31, created on 2022-12-02 19:41:09
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Escola_Hugo_Curso\Loja-Virtual\view\chegados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a7f05cba938_07377895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19aa8dcb3f81413a62c7c4a32d6cd3a14f2e4f23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Escola_Hugo_Curso\\Loja-Virtual\\view\\chegados.tpl',
      1 => 1667442027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a7f05cba938_07377895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="arrivals" id="arrivals">

    <h1 class="heading"> Recém <span>Chegados</span> </h1>
    

    <div class="box-container">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'PC');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PC']->value) {
?>

        <div class="box" data-aos="fade-right">
            <div class="icons">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="fas fa-shopping-cart"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['NOVO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PC']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PC']->value['pro_slug'];?>
" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
            </div>
            <div class="image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['PC']->value['pro_img'];?>
">
            </div>
            <div class="content">
                <h3><?php echo $_smarty_tpl->tpl_vars['PC']->value['pro_nome'];?>
</h3>
                <div class="price">R$ <?php echo $_smarty_tpl->tpl_vars['PC']->value['pro_valor'];?>
 <span>$495.99</span> </div>
            </div>
        </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    </div>
        <div class="box-container">
            <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        </div>
</section>

<!-- Fim Section Recem Chegados --><?php }
}
