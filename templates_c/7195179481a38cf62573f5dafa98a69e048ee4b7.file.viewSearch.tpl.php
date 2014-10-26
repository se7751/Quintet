<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 04:40:48
         compiled from "view/viewSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29350544a880a992bb5-97114542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7195179481a38cf62573f5dafa98a69e048ee4b7' => 
    array (
      0 => 'view/viewSearch.tpl',
      1 => 1414290549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29350544a880a992bb5-97114542',
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
            <?php if ((!$_smarty_tpl->getVariable('ch_project_id')->value=='')){?>
        <li class="off" id="tickettab"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット</a></li>
        <li class="off" id="newtickettab"><a href="createTicket.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット作成</a></li>
            <?php }else{ ?>
        <li style="visibility:hidden background-color:#1B5090" class="off" id="tickettab" ><a style="visibility:hidden" href="viewTickets.php">チケット</a></li>
        <li class="off" id="newtickettab"><a style="visibility:hidden" href="createTicket.php">チケット作成</a></li>
            <?php }?>
        <li class="on" id="searchtab"><a href="viewSearch.php">検索</a></li>
        </ul>
        </div>
        </div>
        <!-- ヘッダ -->
    </head>
    <body>
    <div id="wholewappers">
        <div id="serch" class="font">
            <form action="viewSearch.php" id="newProject" method="post">
            <td>検索ワード</th><td><input type="textbox" value="" name="word"></td>
            <td><input type="submit" value="検索"></td>
            </form>
        </div>
        <div id="serch_label" class="font">
                <?php if (($_smarty_tpl->getVariable('restotal')->value!='')){?>

            <th><?php echo $_smarty_tpl->getVariable('restotal')->value;?>
件ヒット</th><?php }?>
        </div>
            </br>
		<div id="rest">
            <table border="1" id="restable">
            <tr>
            <th>プロジェクト名</th><th>チケット名</th><th>概要</th>
            </tr>
                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
?>
						<?php if (($_smarty_tpl->tpl_vars['res']->value['ticket_id']!='')){?>
            <tr>
            <th><a href="#"><?php echo $_smarty_tpl->tpl_vars['res']->value['project_title'];?>
</a><!--ここにプロジェクト・チケットを表示--></th>
            <th><a href="viewTicket.php?ticket_id=<?php echo $_smarty_tpl->tpl_vars['res']->value['ticket_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</a></th>
            <th><?php echo $_smarty_tpl->tpl_vars['res']->value['body'];?>
</th>
            </tr>
                <?php }?>
                <?php }} ?>
            </table>
           </div>

    </div>

    <!-- フッダ -->
    <div id="footer">
    &copy; Quintet
    </div>
</body>
</html>
