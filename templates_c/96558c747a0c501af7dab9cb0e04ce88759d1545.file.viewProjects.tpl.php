<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 05:02:15
         compiled from "view/viewProjects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22976544c7247a22b32-96844928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96558c747a0c501af7dab9cb0e04ce88759d1545' => 
    array (
      0 => 'view/viewProjects.tpl',
      1 => 1414296107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22976544c7247a22b32-96844928',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/view.css" type="text/css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<!-- ヘッダ -->
        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
        <div id="header">
        <h1><?php echo $_smarty_tpl->getVariable('ch_project_title')->value;?>
</h1>
        <div id="menu">
        <a>あなたは</a> <?php echo $_smarty_tpl->getVariable('names')->value;?>

        <a>でログインしています。</a> | <a href="logout.php">ログアウト</a>
        </div>
        <div id="tub">
        <ul>
        <li class="on" id="protab"><a href="board.php">プロジェクト</a></li>
        <li style="visibility:hidden background-color:#1B5090" class="off" id="tickettab" ><a style="visibility:hidden" href="viewTickets.php">チケット</a></li>
        <li class="off" id="newtickettab"><a style="visibility:hidden" href="createTicket.php">チケット作成</a></li>
        <li class="off" id="searchtab"><a href="viewSearch.php">検索</a></li>
        </ul>
        </div>
        </div>
        <!-- ヘッダ -->
	</head>
	<body>
		<!-- コンテンツ -->
		<div id="pro">
			<p id="right_align">
			<?php if (($_smarty_tpl->getVariable('role_flag')->value=="2")){?>
				<a href="createProject.php">新規プロジェクト</a>
				<?php }?>
			</p>
			<!-- posts配列から投稿内容を取り出して表示 -->
			<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('projects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
			<?php if (($_smarty_tpl->tpl_vars['project']->value['project_id']!='')){?>
				<div class="post">
					<!-- 投稿タイトル -->
					<div class="title">
						<a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</h2></a>
						<div class="buttons">


						     <!-- 投稿本文 -->
					<div class="body">
						<p id="left_align"><?php echo nl2br($_smarty_tpl->tpl_vars['project']->value['body']);?>
</p>
					</div>
					     <p id="left_align">
							<progress value="<?php echo $_smarty_tpl->tpl_vars['project']->value['sintyoku'];?>
" max="100"></progress>進捗率<?php echo $_smarty_tpl->tpl_vars['project']->value['sintyoku'];?>
%<br>参加者:<?php echo $_smarty_tpl->tpl_vars['project']->value['members'];?>
</p>
					   <p> <strong>作成日</strong> / <?php echo $_smarty_tpl->tpl_vars['project']->value['created'];?>

							<?php if (($_smarty_tpl->getVariable('role_flag')->value=="2")){?>
								<a href="editProject.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
" class="edit">[編集]</a>
								<a href="#" class="delete" onclick="del_confirm('delete.php?project_id=<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
');">[削除]</a>
							<?php }?>
						     </p>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="post">
					<!-- 投稿タイトル -->
					<div class="title">
						<h2>表示できるプロジェクトがありません</h2>
						<div class="buttons">
						     <!-- 投稿本文 -->
						</div>
					</div>
				</div>
				<?php }?>
			<?php }} ?>
		</div>
		
	</body>
    <!-- フッタ -->
		<div id="footer">
			&copy; Quintet
		</div>
</html>