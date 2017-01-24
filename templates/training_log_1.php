<!--培训内容-->
<div style="margin-top: 5px">
    <!--搜索-->
    <div style="float: right;margin-bottom: 5px">
        <form id="search_log">
            <input type="text" name="search_name" placeholder="请输入姓名进行查找">
            <button type="button" onclick="log()" style="margin-left: 5px">搜索</button>
        </form>
    </div>
    <div>
        <table class="table table-responsive">
            <thead>
            <tr style="background-color: gainsboro">
                <td>序号</td>
                <td>姓名</td>
                <td>角色</td>
                <td>城市</td>
                <td>观看内容</td>
                <td>观看时间</td>
            </tr>
            </thead>
            <tbody id="log_list">