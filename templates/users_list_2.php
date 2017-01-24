<tbody id="user_list">
<{foreach $lists as $list}>
<tr>
    <td><{$list['id']}></td>
    <td><{$list['name']}></td>
    <td><{$list['email']}></td>
    <td><{$list['password']}></td>
    <td><{$list['role']}></td>
    <td><{$list['city']}></td>
    <td><{$list['created_by']}></td>
    <td><{$list['created_at']}></td>
</tr>
<{/foreach}>
</tbody>