<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
		<link rel="stylesheet" href="css/view.css" type="text/css" />
		<link rel="stylesheet" href="css/itiran.css" type="text/css" />
<!-- ヘッダ -->
        <title>{$title}</title>
        <div id="header">
        <h1>{$ch_project_title}</h1>
        <div id="menu">
        <a>あなたは</a> {$names}
        <a>でログインしています。</a> | <a href="logout.php">ログアウト</a>
        </div>
        <div id="tub">
        <ul>
        <li class="off" id="protab"><a href="board.php">プロジェクト</a></li>
        <li class="on" id="tickettab"><a href="viewTickets.php?project_id={$ch_project_id}">チケット</a></li>
        <li class="off" id="newtickettab"><a href="createTicket.php?project_id={$ch_project_id}">チケット作成</a></li>
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
		<progress value="{$sintyoku}" max="100">50%</progress>
		<p class="percent">{$sintyoku}%</p>
		<p class="progress-info">
			{$total} チケット&nbsp;
			({$owari}件完了&#8212;{$untotal}件未完了)
		</p>
	</div><br/>

			<input type="hidden" name="id" value="33" />
				<form accept-charset="UTF-8" action="#" method="post"><div style="margin:0;padding:0;display:inline">
			<input name="utf8" type="hidden" value="&#x2713;" />

<div class="autoscroll">
			<br/>
			<table width="80%" class="list_issues">
			<tr>{$ch_project_title} チケット一覧
				<th title="並び替え &quot;#&quot;"><a href="viewTickets.php?project_id={$ch_project_id}&sort=ticket_id" class="sort desc">ID</a></th>
				<th title="並び替え &quot;ステータス&quot;"><a href="viewTickets.php?project_id={$ch_project_id}&sort=state">ステータス</a></th>
				<th title="並び替え &quot;優先度&quot;"><a href="viewTickets.php?project_id={$ch_project_id}&sort=priority">優先度</a></th>
				<th title="並び替え &quot;タイトル&quot;"><a href="viewTickets.php?project_id={$ch_project_id}&sort=title">タイトル</a></th>
				<th title="並び替え &quot;期日&quot;"><a href="viewTickets.php?project_id={$ch_project_id}&sort=kijitu">期日</a></th>
			</tr>

	<tbody>
		{foreach from=$tickets item=ticket}
		{if ($ticket.ticket_id != "")}
		{if ($ticket.priority == "3")}
		<tr style="background: #F3AD3B;">
		{elseif $ticket.priority == "2" }
		<tr style="background: #FFE200;">
		{else}
		<tr id="issue-100"  class="tiketo">
		{/if}
			<td class="id"><a href="viewTicket.php?ticket_id={$ticket.ticket_id}">{$ticket.ticket_id}</a></td>
			<td class="status">{$ticket.state}</td>
			{if ($ticket.priority == "3")}<td class="priority">緊急</td>
			{elseif $ticket.priority == "2" }<td class="priority">高</td>
			{elseif $ticket.priority == "0" }<td class="priority">低</td>
			{elseif $ticket.priority == "1" }
			<td class="priority">通常</td>
			{/if}

			<td class="subject"><a href="viewTicket.php?ticket_id={$ticket.ticket_id}">{$ticket.title}</a></td>
			{if ($ticket.kijitu != "0000-00-00 00:00:00")}
			<td class="updated_on">{$ticket.kijitu|date_format:"%Y/%m/%d"}</td>
			{/if}
		</tr>
		{/if}
		{/foreach}
	</tbody>
	</table>
</div>

<br/><br/><p class="pagination">
	<span class="current page"></span>
        {foreach from=$pageNums item=pageNum}
		<a href="viewTickets.php?project_id={$ch_project_id}&page={$pageNum}" class="page">{$pageNum}</a>
        {/foreach}
	</tbody>
	<span class="items">(1～10表示/{$total}件)</span> <span class="per-page">1ページに:
        <a href="viewTickets.php?project_id={$ch_project_id}&limit=10">10</a>,
		<a href="viewTickets.php?project_id={$ch_project_id}&limit=50">50</a>,
		<a href="viewTickets.php?project_id={$ch_project_id}&limit=100">100</a>
	</span>
</p>
</body>
		<!-- フッダ -->
		<div id="footer">
			&copy; Quintet
		</div>
</html>
