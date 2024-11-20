<?php
/* Smarty version 4.2.1, created on 2024-11-18 07:54:22
  from 'C:\xampp\htdocs\tut\admin629yzffxd3wpvgn1gwr\themes\default\template\controllers\customer_threads\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673ae49e8f4017_46517712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b734914d192db38bb42687638a6f87d814696d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\admin629yzffxd3wpvgn1gwr\\themes\\default\\template\\controllers\\customer_threads\\helpers\\options\\options.tpl',
      1 => 1731806394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673ae49e8f4017_46517712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660731765673ae49e8f1be6_81915289', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_1660731765673ae49e8f1be6_81915289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1660731765673ae49e8f1be6_81915289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['use_sync']->value) {?>
		<div class="panel">
			<legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sync','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</legend>
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run sync:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
			<div class="margin-form">
				<button class="btn" id="run_sync" onclick="run_sync();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run sync','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</button>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to synchronize mail automatically','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</p>
				<div id="ajax_loader"></div>
				<div class="error" style="display:none" id="ajax_error"></div>
				<div class="alert" style="display:none" id="ajax_conf"></div>
			</div>
		</div>

		<?php echo '<script'; ?>
 type="text/javascript">
			var ajaxQueries = new Array();
			function run_sync()
			{
				$('#ajax_error').html('');
				$('#ajax_error').hide();
				$('#ajax_conf').html('');
				$('#ajax_conf').hide();
				for(i = 0; i < ajaxQueries.length; i++)
					ajaxQueries[i].abort();
				ajaxQueries = new Array();
				$('#ajax_loader').html('<img src="<?php echo (defined('_PS_ADMIN_IMG_') ? constant('_PS_ADMIN_IMG_') : null);?>
ajax-loader.gif">');
				ajaxQuery = $.ajax({
					type: "POST",
					url: "index.php",
					data: {
						ajax: "1",
						token: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
",
						syncImapMail: "1",
						ajax:"1",
						action:"syncImap",
						tab:"AdminCustomerThreads"
					},
					dataType : "json",
					success: function(jsonData) {
						jsonError = '';
						if (jsonData.hasError)
						{
							for (i=0;i < jsonData.errors.length;i++)
								jsonError = jsonError+'<li>'+jsonData.errors[i]+'</li>';
							$('#ajax_error').html('<ul>'+jsonError+'</ul>');
							$('#ajax_error').fadeIn();
						}
						else
						{
							jsonError = '<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sync success'),$_smarty_tpl ) );?>
</li>';
							for (i=0;i < jsonData.errors.length;i++)
								jsonError = jsonError+'<li>'+jsonData.errors[i]+'</li>';
							$('#ajax_conf').html('<ul>'+jsonError+'</ul>');
							$('#ajax_conf').fadeIn();
						}

						$('#ajax_loader').html('');
					},
					error: function(XMLHttpRequest, textStatus, errorThrown)
					{
						jAlert("TECHNICAL ERROR: unable to sync.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
					}
				});
				ajaxQueries.push(ajaxQuery);

			};
		<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block "after"} */
}
