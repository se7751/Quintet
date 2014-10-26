<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 04:59:43
         compiled from "view/editProject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22009544c71af01b203-97657772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b92d9504082756b9361ad323798b31862437f32' => 
    array (
      0 => 'view/editProject.tpl',
      1 => 1414295980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22009544c71af01b203-97657772',
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
        <h1><?php echo $_smarty_tpl->getVariable('title')->value;?>
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
    <script type="text/javascript">
        var element = document.getElementById("selectest");
        element.onclick = myFunc;
        function myFunc(){
        var o = document.forms['newProject'].elements['member'].options;

        var v = new Array();
        var t = new Array();

        for(var i = 0; i < o.length; i++) {
        v[i] = o[i].value;
        t[i] = o[i].text;
        }

        //alert(v);
        //alert(t);
        document.forms["newProject"].elements["choose"].value = v;
        }
    </script>
    <script language="JavaScript" type="text/javascript">
        function moveForm( form, from_name, to_name ) {
        var from_options = form.elements[from_name].options;
        var to_options = form.elements[to_name].options;

        for(i = 0 ; i < from_options.length; i++) {
        if(!from_options[i].selected || !from_options[i].text)
        continue;

        var addFlag = true;

        for(j = 0; j < to_options.length; j++) {
        if(to_options[j].text == from_options[i].text) {
        addFlag = false;
        break;
        }
        }

        if(addFlag)
        to_options[to_options.length] = new Option(from_options[i].text, from_options[i].value);
        from_options[i] = null;
        i--;
        }
        }
    </script>
    <form action="excEditProject.php" id="newProject" method="post">
            <!-- 編集対象の投稿ID -->
            <input type="hidden" name="choose"/>
            <input type="hidden" name="project_id" value="<?php echo $_smarty_tpl->getVariable('project_id')->value;?>
"/>
        <div id="waku">
            <table> 
                <tbody>
                    <tr>
                        <th>プロジェクト名　</th>
                        <td>
                            <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->getVariable('project_title')->value;?>
" />
                        </td>
                    </tr>
                    <tr>
                        <th>概要</th>
                        <td>
                            <textarea name="body" id="body" cols="40" rows="8"><?php echo $_smarty_tpl->getVariable('project_body')->value;?>
</textarea>
                        </td>
                    </tr>

<table>
    <tr>
        <td align="center">
            所属ユーザー<br />
            <select name="member" size="20" multiple>
                <?php  $_smarty_tpl->tpl_vars['enable_user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('enable_users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['enable_user']->key => $_smarty_tpl->tpl_vars['enable_user']->value){
?>
                <?php if (($_smarty_tpl->tpl_vars['enable_user']->value['name']!='')){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['enable_user']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['enable_user']->value['name'];?>

                    <?php }?>
                <?php }} ?>
            </select>
        </td>
        <td>
            <input type="button" value="←" onClick="moveForm(this.form, 'manager', 'member')" /><br>
            <input type="button" value="→" onClick="moveForm(this.form, 'member', 'manager')" />
        </td>
        <td align="center">
            マネージャー<br />
            <select name="manager" size="20" multiple>

                <?php  $_smarty_tpl->tpl_vars['manager'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('managers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['manager']->key => $_smarty_tpl->tpl_vars['manager']->value){
?>
                <?php if (($_smarty_tpl->tpl_vars['manager']->value['name']!='')){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['manager']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['manager']->value['name'];?>

                    <?php }?>
                <?php }} ?>

            </select>
        </td>
        <td>
            <input type="button" value="→" onClick="moveForm(this.form, 'member', 'developer')" /><br>
            <input type="button" value="←" onClick="moveForm(this.form, 'developer', 'member')" />
        </td>
        <td align="center">
            開発者<br />
            <select name="developer" size="20" multiple>
                <?php  $_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('developers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['developer']->key => $_smarty_tpl->tpl_vars['developer']->value){
?>
                <?php if (($_smarty_tpl->tpl_vars['developer']->value['name']!='')){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['developer']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['developer']->value['name'];?>

                    <?php }?>
                <?php }} ?>
            </select>
        </td>
         <td>
            <input type="button" value="→" onClick="moveForm(this.form, 'member', 'partner')" /><br>
            <input type="button" value="←" onClick="moveForm(this.form, 'partner', 'member')" />
        </td>
         <td align="center">
            協力会社<br />
            <select name="partner" size="20" multiple>
                <?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('partners')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
?>
                <?php if (($_smarty_tpl->tpl_vars['partner']->value['name']!='')){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>

                    <?php }?>
                <?php }} ?>
            </select>
        </td>


    </tr>
        <tr>
            <td colspan="7" class="right_align">
                <button onclick="myFunc();" id="selectest" >編集</button>
            </td>
        </tr>
    </table>
                    </tbody>
                </table>
            </div>
        </form>
    </body>
    <!-- フッダ -->
		<div id="footer">
			&copy; Quintet
		</div>
</html>
