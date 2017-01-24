/**
 * Created by liuciyin on 2017/1/18.
 */
function sendData(formId,url,controller,action,replaceId,method){
    var form=new FormData(formId);
    form.append('controller',controller);
    form.append('action',action);
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function () {
        if (xhr.readyState==4&&xhr.status==200){
            document.getElementById(replaceId).innerHTML=xhr.responseText;
        }
    };
    xhr.open(method,url,true);
    xhr.send(form);

}
function add() {
    document.getElementById('myModal').style.display='none';
    var formId=document.getElementById('add_user');
    var url="index.php";
    var replaceId='user_list';
    var method='post';
    var controller='users';
    var action='add';
    sendData(formId,url,controller,action,replaceId,method);
}
function select_user() {
    var formId=document.getElementById('search_user');
    var url="index.php";
    var replaceId='user_list';
    var method='post';
    var controller='users';
    var action='search';
    sendData(formId,url,controller,action,replaceId,method);
}
