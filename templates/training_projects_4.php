<{foreach $projects as $value}>
<tr id="projects">
    <td><{$value['id']}></td>
    <td><{$value['role']}></td>
    <td><{$value['project']}></td>
    <td><a href="index.php?controller=showPage&action=showProjectDetails&role=<{$value['id']}>" target="_blank">查看</a></td>
</tr>
<{/foreach}>