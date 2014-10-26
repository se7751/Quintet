<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 03:30:18
         compiled from "view/viewTickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20127544c56b2a37cb0-57493931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73981267a06fb00a79de3d047ded42c0c66f22a7' => 
    array (
      0 => 'view/viewTickets.tpl',
      1 => 1414290549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20127544c56b2a37cb0-57493931',
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
		<link rel="stylesheet" href="css/itiran.css" type="text/css" />
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
    </head>
	<br/>
<body>
<!-- 進捗率 -->
	<div id="roadmap">
		<p>進捗率</p>
		<progress value="<?php echo $_smarty_tpl->getVariable('sintyoku')->value;?>
" max="100">50%</progress>
		<p class="percent"><?php echo $_smarty_tpl->getVariable('sintyoku')->value;?>
%</p>
		<p class="progress-info">
			<?php echo $_smarty_tpl->getVariable('total')->value;?>
 チケット&nbsp;
			(<?php echo $_smarty_tpl->getVariable('owari')->value;?>
件完了&#8212;<?php echo $_smarty_tpl->getVariable('untotal')->value;?>
件未完了)
		</p>
	</div><br/>

			<input type="hidden" name="id" value="33" />
				<form accept-charset="UTF-8" action="#" method="post"><div style="margin:0;padding:0;display:inline">
			<input name="utf8" type="hidden" value="&#x2713;" />

<div class="autoscroll">
			<br/>
			<table width="80%" class="list_issues">
			<tr><?php echo $_smarty_tpl->getVariable('ch_project_title')->value;?>
 チケット一覧
				<th title="並び替え &quot;#&quot;"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&sort=ticket_id" class="sort desc">ID</a></th>
				<th title="並び替え &quot;ステータス&quot;"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&sort=state">ステータス</a></th>
				<th title="並び替え &quot;優先度&quot;"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&sort=priority">優先度</a></th>
				<th title="並び替え &quot;タイトル&quot;"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&sort=title">タイトル</a></th>
				<th title="並び替え &quot;期日&quot;"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&sort=kijitu">期日</a></th>
			</tr>

	<tbody>
		<?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tickets')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value){
?>
		<?php if (($_smarty_tpl->tpl_vars['ticket']->value['ticket_id']!='')){?>
		<?php if (($_smarty_tpl->tpl_vars['ticket']->value['priority']=="至急")){?>
		<tr style="background: red;">
		<?php }else{ ?>
		<tr id="issue-100"  class="tiketo">
		<?php }?>
			<td class="id"><a href="viewTicket.php?ticket_id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
</a></td>
			<td class="status"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['state'];?>
</td>
			<td class="priority"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['priority'];?>
</td>
			<td class="subject"><a href="viewTicket.php?ticket_id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>
</a></td>
			<?php if (($_smarty_tpl->tpl_vars['ticket']->value['kijitu']!="0000-00-00 00:00:00")){?>
			<td class="updated_on"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket']->value['kijitu'],"%Y/%m/%d");?>
</td>
			<?php }?>
		</tr>
		<?php }?>
		<?php }} ?>
	</tbody>
	</table>
</div>

<br/><br/><p class="pagination">
	<span class="current page"></span>
        <?php  $_smarty_tpl->tpl_vars['pageNum'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pageNums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pageNum']->key => $_smarty_tpl->tpl_vars['pageNum']->value){
?>
		<a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
" class="page"><?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
</a>
        <?php }} ?>
	</tbody>
	<span class="items">(1～10表示/<?php echo $_smarty_tpl->getVariable('total')->value;?>
件)</span> <span class="per-page">1ページに:
        <a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&limit=10">10</a>,
		<a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&limit=50">50</a>,
		<a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
&limit=100">100</a>
	</span>
</p>
</body>
		<!-- フッダ -->
		<div id="footer">
			&copy; Quintet
		</div>
</html>
