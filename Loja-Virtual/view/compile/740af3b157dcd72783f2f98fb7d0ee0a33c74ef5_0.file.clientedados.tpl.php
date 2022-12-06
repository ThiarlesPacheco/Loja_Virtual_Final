<?php
/* Smarty version 3.1.31, created on 2022-11-30 02:52:56
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\clientedados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6386b778695604_36691393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740af3b157dcd72783f2f98fb7d0ee0a33c74ef5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\clientedados.tpl',
      1 => 1669773169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386b778695604_36691393 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
label{
    color: #ef7819;
    font-size: 14pt;
    text-align: left;
    display: block;
}
</style>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Meus</span> Dados </h1>

    <div class="row">
        <form name="cliente_login" method="post" action="" class="flex flex-col">

        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_nome">Nome</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" class="box" name="cli_nome" id="cli_nome">
            </div>
            <div style="width: 50%;">
                <label for="cli_sobrenome">Sobrenome</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" class="box" name="cli_sobrenome" id="cli_sobrenome">
            </div>
        </div>
        
        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="cli_data_nasc">Data Nascimento</label>
                <input data-aos="zoom-in" type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" class="box" name="cli_data_nasc" id="cli_data_nasc">
            </div>
            <div style="width: 20%;">
                <label for="cli_rg">RG</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" class="box" name="cli_rg" id="cli_rg">
            </div>

            <div style="width: 20%;">
                <label for="cli_cpf">CPF</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" class="box" name="cli_cpf" id="cli_cpf" readonly>
            </div>

            <div style="width: 20%;">
                <label for="cli_ddd">DDD</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" class="box" name="cli_ddd" id="cli_ddd" required>
            </div>

            <div style="width: 20%;">
                <label for="cli_fone">Telefone</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" placeholder="Telefone" class="box" name="cli_fone" id="cli_fone" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="cli_celular">Celular</label>
                <input data-aos="zoom-in" type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" class="box" name="cli_celular" id="cli_celular" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_endereco">Endereço</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" class="box" name="cli_endereco" id="cli_endereco" required>
            </div>
            <div style="width: 50%;">
                <label for="cli_numero">Número</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" class="box" name="cli_numero" id="cli_numero" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_bairro">Bairro</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" class="box" name="cli_bairro" id="cli_bairro" required>
            </div>

            <div style="width: 50%;">
                <label for="cli_cidade">Cidade</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" class="box" name="cli_cidade" id="cli_cidade" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_uf">UF</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" class="box" name="cli_uf" id="cli_uf" required>
            </div>

            <div style="width: 50%;">
                <label for="cli_cep">CEP</label>
                <input data-aos="zoom-in" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" class="box" name="cli_cep" id="cli_cep" required>
            </div>
        </div>
        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="cli_email">Email</label>
                <input data-aos="zoom-in" type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" placeholder="Email" class="box" name="cli_email" id="cli_email" readonly>
            </div>

            <div style="width: 50%;">
                <label for="cli_senha">Senha (Digite sua senha atual por segurança)</label>
                <input data-aos="zoom-in" type="password" placeholder=" (Ela não será alterada)" class="box" name="cli_senha" id="cli_senha" required>
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Gravar" class="btn">
        </div>

        </form>

    </div>

</section>
<?php }
}
