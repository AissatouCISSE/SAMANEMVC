<?php
/* Smarty version 3.1.30, created on 2020-08-04 11:44:19
  from "C:\Ampps\www\SAMANE\projet-samane\src\view\pays\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f294a13dace66_10958565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9b8325d53a83c3fc22c82b2df93804e7259b3d' => 
    array (
      0 => 'C:\\Ampps\\www\\SAMANE\\projet-samane\\src\\view\\pays\\edit.html',
      1 => 1596541061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f294a13dace66_10958565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		
	</head>
	<body onload="load_design()">
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Ville/liste">Ville </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Pays/liste">Pays </a></li>
				
			</ul>
		</div>
		
		<div class="container" style="margin-top:80px;">
		<div class="col-md-6 col-xs-12 " >
			<div class="panel panel-info">
				<div class="panel-heading">Liste des pays</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr></tr>
						<th>Identifiant</th>
						<th>Nom</th>
						<th>Latitude</th>
						<th>Longitude</th>
                        <th>Action</th>
                        <th>Action</th>
					</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listepays']->value, 'pays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pays']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getId();?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getNom();?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getLatitude();?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['pays']->value->getLongitude();?>
</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Pays/edit/<?php echo $_smarty_tpl->tpl_vars['pays']->value->getId();?>
">Editer</a></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Pays/delete/<?php echo $_smarty_tpl->tpl_vars['pays']->value->getId();?>
" onclick="return confirm('Voulez-vous supprimer')">Supprimer</a></td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
					
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xs-12 " >
			<div class="panel panel-info">
				<div class="panel-heading">Formulaires de gestion des pays</div>
				<div class="panel-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Pays/update">
                        <div class="form-froup">
							<label>Id</label>
							<input class="form-control" readonly type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value->getId();?>
"/>
						</div>
						<div class="form-froup">
							<label>Nom</label>
							<input class="form-control" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value->getNom();?>
"/>
						</div>
						<div class="form-froup">
							<label>Latitude</label>
							<input class="form-control" type="text" name="latitude" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value->getLatitude();?>
"/>
						</div>
						<div class="form-froup">
							<label>Longitude</label>
							<input class="form-control" type="text" name="longitude" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value->getLongitude();?>
"/>
						</div>
						<div class="form-froup">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
<?php }
}
