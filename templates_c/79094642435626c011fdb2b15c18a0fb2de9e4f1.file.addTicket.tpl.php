<?php /* Smarty version Smarty-3.0.8, created on 2014-10-26 06:57:30
         compiled from "view/addTicket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3655544c8d4ab7a005-52027496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79094642435626c011fdb2b15c18a0fb2de9e4f1' => 
    array (
      0 => 'view/addTicket.tpl',
      1 => 1414303009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3655544c8d4ab7a005-52027496',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
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
        <li class="off" id="tickettab"><a href="viewTickets.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット</a></li>
        <li class="on" id="newtickettab"><a href="createTicket.php?project_id=<?php echo $_smarty_tpl->getVariable('ch_project_id')->value;?>
">チケット作成</a></li>
        <li class="off" id="searchtab"><a href="viewSearch.php">検索</a></li>
        </ul>
        </div>
        </div>
        <!-- ヘッダ -->
        <!--jqueryにてカレンダー機能を使うための読み込みURL -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
        <!--カレンダーのレイアウトをgoogle鯖から読み込み -->
        <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/cupertino/jquery-ui.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
        <!--iso-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery-ui-i18n.min.js"></script>
	<body></br>
		<h2>チケット作成</h2>
		<form action="excCreateTicket.php" method="post" name="newProject" onSubmit="return check()" enctype="multipart/form-data">
		<input type="hidden" name="choose"/>
			<!-- コメントテーブルに格納する投稿ID -->
			<input type="hidden" name="id" value="33" />
			<table id="nyuryoku">
					<tr>
						<th>タイトル</th>
						<td><input type="text" name="title" id="title" /></td>
					</tr>
					<tr>
						<th>ステータス</th>
						<td>
							<select name="state">
							<option value="新規">新規</option>
							<option value="作業中">作業中</option>
							<option value="完了">完了</option>
							</select>
						</td>
						<tr>
						<th>カテゴリー</th>
						<td>
							<select name="category">
							<option value="要件定義">要件定義</option>
							<option value="設計">設計</option>
							<option value="実装">実装</option>
							<option value="テスト">テスト</option>
							</select>
						</td>
						</tr>
					</tr>

					<tr>
						<th>優先度</th>
						<td>
							<select name="priority">
							<option value="通常">通常</option>
							<option value="至急">至急</option>
							<option value="高">高</option>
							<option value="低">低</option>
							</select>
						</td>
					</tr>

					<tr>
						<th>期日</th>
						<td>
							<input type="text" name="kijitu" id="date" size="10" />

						</td>
					</tr>

					<tr>
						<th>詳細</th>
						<td><textarea name="body" id="body" cols="40" rows="8"></textarea></td>
					</tr>

					<tr>
						<th>ファイル</th>
						<td><input type="file"  name="upfile"></td>
					</tr>

			</table>
			<table id ="usertable">
    <tr>
        <td align="center">
            担当者<br />
            <select name="member" size="20" multiple>
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
?><?php if (($_smarty_tpl->tpl_vars['developer']->value['name']!='')){?>
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
?><?php if (($_smarty_tpl->tpl_vars['partner']->value['name']!='')){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
<?php }?>
                <?php }} ?>
            </select>
        </td>
        
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
	</tr>
		<tr>
			<td colspan="7" class="right_align">
				<button onclick="myFunc();" id="selectest" >作成</button>
			</td>
		</tr>
	</table>
		</form>



		
<script type="text/javascript">
        $(function() {
        $.datepicker.setDefaults($.datepicker.regional['ja']);
        $('#date').datepicker({ dateFormat: 'yy/mm/dd' });
        });
        </script>


        <script type="text/javascript">
        function check(){
        var flag = 0;

        if(document.ticket.title.value == ""){
        flag = 1;
        }
        else if(document.ticket.body.value == ""){
        flag = 1;
        }

        if(flag){
        window.alert('未入力項目があります。');
        return false;

        }
        else{
        return true;
        }
        }
        </script>
        <script language="JavaScript" type="text/javascript">
        <!--
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
        //-->
        </script>
</body>
	<!-- フッダ -->
		<div id="footer">
			&copy; Quintet
		</div>

</html>
