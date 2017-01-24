<{foreach $logs as $log}>
<tr>
    <td><{$log['id']}></td>
    <td><{$log['name']}></td>
    <td><{$log['role']}></td>
    <td><{$log['city']}></td>
    <td><{$log['video']}></td>
    <td><{$log['watching_time']}></td>
</tr>
<{/foreach}>