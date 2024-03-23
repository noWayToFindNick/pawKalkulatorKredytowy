<?php
/* Smarty version 4.3.2, created on 2024-03-23 19:36:11
  from 'E:\xampp\htdocs\php_04_szablonowanie_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65ff211b1bdcd2_53523365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd676405bae60dcc267e07137900dc9f703a64723' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_04_szablonowanie_smarty\\templates\\main.html',
      1 => 1711218956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff211b1bdcd2_53523365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
    </head>
    <body >

        <div id="wrapper">

            <header id="header" class="alt">
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php" class="logo"><strong><?php echo (($tmp = $_smarty_tpl->tpl_vars['first_part_of_title']->value ?? null)===null||$tmp==='' ? "Tytuł" ?? null : $tmp);?>
</strong> <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['second_part_of_title']->value ?? null)===null||$tmp==='' ? "domyślny" ?? null : $tmp);?>
</span></a>
            </header>

            <section id="banner" class="major">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24535707565ff211b1bd129_20948972', 'banner');
?>

            </section>

            <section id="contact">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206181090665ff211b1bd817_25470945', 'content');
?>

            </section>

            <footer id="footer">
                <div class="inner">
                    <ul class="copyright">
                        <li>Widok oparty na stylach: <a href="https://html5up.net">HTML5 UP</a></li>
                        <li>Autor przykładu - Kacper Mularczyk</li>
                    </ul>
                </div>
            </footer>

            <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

        </div>

    </body>
</html><?php }
/* {block 'banner'} */
class Block_24535707565ff211b1bd129_20948972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_24535707565ff211b1bd129_20948972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na banner <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_206181090665ff211b1bd817_25470945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_206181090665ff211b1bd817_25470945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na formularz <?php
}
}
/* {/block 'content'} */
}
