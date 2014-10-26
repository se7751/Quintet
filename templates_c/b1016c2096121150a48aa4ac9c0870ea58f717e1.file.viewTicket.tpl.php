<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 03:04:37
         compiled from "view/viewTicket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7148544c56b56b4393-87030048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1016c2096121150a48aa4ac9c0870ea58f717e1' => 
    array (
      0 => 'view/viewTicket.tpl',
      1 => 1414288294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7148544c56b56b4393-87030048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\pleiades\xampp\htdocs\Quintet\Smarty-3.0.8\libs\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/view.css" type="text/css" />
        <link rel="stylesheet" href="css/sakusei.css" type="text/css" />
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
        <li class="off" id="protab"><a href="board.php">プロジェクト</a></li>
        <li class="on" id="tickettab"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット</a></li>
        <li class="off" id="newtickettab"><a href="createTicket.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット作成</a></li>
        <li class="off" id="searchtab"><a href="viewSearch.php">検索</a></li>
        </ul>
        </div>
        </div>
        <!-- ヘッダ -->
    </head>
    <body></br>
		<form action="editComment.php" method="post">
            </form>
		<div id="option">
			<a href="editTicket.php?ticket_id=<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
" class="project">編集</a>
            <a href="#" class="delete" onclick="del_confirm('delete.php?ticket_id=<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
');">[削除]</a>
		</div>
			<input type="hidden" name="id" value="33" />
			<table class="attributes">

				<tr><?php  $_smarty_tpl->tpl_vars['tic'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tic']->key => $_smarty_tpl->tpl_vars['tic']->value){
?>
					<h2><?php echo $_smarty_tpl->tpl_vars['tic']->value['title'];?>
</h2>
					<th class="status">ステータス:</th>
					<td class="status"><?php echo $_smarty_tpl->tpl_vars['tic']->value['state'];?>
</td>

					<th class="start-date">作成日:</th>
					<td class="start-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tic']->value['created'],"%Y/%m/%d %H:%M:%S");?>
</td></tr>

					<th class="priority">優先度:</th>
					<td class="priority"><?php echo $_smarty_tpl->tpl_vars['tic']->value['priority'];?>
</td>

					<th class="due-date">更新日:</th>
					<td class="due-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tic']->value['modified'],"%Y/%m/%d %H:%M:%S");?>
</td></tr>

					<th class="assigned-to">期日:</th>
					<?php if (($_smarty_tpl->tpl_vars['tic']->value['kijitu']!="0000-00-00 00:00:00")){?>
					<td class="assigned-to"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tic']->value['kijitu'],"%Y/%m/%d");?>
</td>
					<?php }?>

					<th class="a">担当者:</td>
					<td class="assigned-to"><?php echo $_smarty_tpl->tpl_vars['tic']->value['members'];?>
</td>

					<tr><th class="category">カテゴリー:</th><td class="category"><?php echo $_smarty_tpl->tpl_vars['tic']->value['category'];?>
</td>
					<tr><th class="fixed-version">ファイル:</th><td class="fixed-version">
					<a href="view/<?php echo $_smarty_tpl->tpl_vars['tic']->value['file_name'];?>
" class="user active"><?php echo $_smarty_tpl->tpl_vars['tic']->value['file_name'];?>
</a>
					<?php if (($_smarty_tpl->tpl_vars['tic']->value['file_name']!='')){?>
                    <a href="#" class="delete" onclick="del_confirm('delete.php?ticket_id=<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
&file_name=<?php echo $_smarty_tpl->tpl_vars['tic']->value['file_name'];?>
');">[削除]</a>
					<?php }?>
                        <th class="a">作成者:</td>
					<td class="assigned-to"><?php echo $_smarty_tpl->tpl_vars['tic']->value['create_user'];?>
</td>
					<?php }} ?>
				</tr>
			</table></br>
	
	<!-- 概要 -->
			<div id="gaiyo">
				<h3>概要</h3>
						<div id="note-1">
							<p><?php echo $_smarty_tpl->getVariable('tic')->value['body'];?>
</p>
					</div>
			</div></br></br>

	<!-- 投稿欄 -->
			<div id="history" >
				<h3>コメント</h3>
					<div id="sc">
						<?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value){
?>
						<?php if (($_smarty_tpl->tpl_vars['com']->value['comennt_id']!='')){?>
						<h4>投稿者:<a href="#" class="user active"><?php echo $_smarty_tpl->tpl_vars['com']->value['name'];?>
</a></h4>
						<p><?php echo $_smarty_tpl->tpl_vars['com']->value['comment'];?>
</p><h5>投稿日時：<?php echo $_smarty_tpl->tpl_vars['com']->value['created'];?>
</h5>
						<a href="view/<?php echo $_smarty_tpl->tpl_vars['com']->value['file_name'];?>
" class="user active"><?php echo $_smarty_tpl->tpl_vars['com']->value['file_name'];?>
</a>
					<?php if (($_smarty_tpl->tpl_vars['com']->value['file_name']!='')){?>
                    <a href="#" class="delete" onclick="del_confirm('delete.php?ticket_id=<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
&file_name=<?php echo $_smarty_tpl->tpl_vars['com']->value['file_name'];?>
&comment_id=<?php echo $_smarty_tpl->tpl_vars['com']->value['comennt_id'];?>
');">[削除]</a>
					<?php }?><br/><a href="#" class="delete" onclick="del_confirm('delete.php?ticket_id=<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
&comment_id=<?php echo $_smarty_tpl->tpl_vars['com']->value['comennt_id'];?>
');">[コメントを削除]</a>
                <hr>
						<?php }?>
						<?php }} ?>
					</div>
			</div>


	<!-- コメント投稿 -->
			<div id="coment" >
				<h3>コメント投稿</h3>
					<div id="kome">
                        <form action="excAddComments.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="ticket_id" value="<?php echo $_smarty_tpl->getVariable('ticket_id')->value;?>
" />
						<textarea name="body" id="body" cols="50" rows="8"></textarea><br>
								<pre>ファイル<input type="file" name="upfile"></pre>
								<input type="submit" id="entry" value="送信" />
                        </form>
					</div>
			</div>
	</body>
    <!-- フッダ -->
					<div id="footer">
						&copy; Quintet
					</div>

</html>
