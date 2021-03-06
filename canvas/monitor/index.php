<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>Canvas&WebGL QB和TBS性能监控</title>
    <script type="text/javascript" src="./0_utils/cookiemanager.js"></script>
</head>
<body>
<div align="center" style="border:2px solid red">
    <p><b>Canvas&WebGL QB和TBS性能监控页面</b></p>
</div>
<p><b>测试相关操作</b></p>
<table border=1 width="95%">
    <tr>执行时间表示主页面定时刷新时间间隔(单位秒,需要大于默认值6*60秒):</tr>
    <tr>
        <td>
            <p><button type="button" height="50px" width="100px" onclick="startTest()">开始测试用例</button></p>
        </td>
        <td>
            <p><button type="button" height="50px" width="100px" onclick="stopTest()">停止测试用例</button></p>
        </td>
        <td>
            <p><button type="button" height="50px" width="100px" onclick="removeAllTestData()">清除测试数据</button></p>
        </td>
        <td>
            <p>执行时间:<input type="text" id="testRefreshInteraltxt" height="50px" width="255px" value="360"/></p>
        </td>
    </tr>
</table>
<p><b>保存相关操作</b></p>
<table border=1 width="95%">
    <tr>
        <td>
            <p>手机信息:
                <input type="radio" name="savesjxx" value="p7" >华为P7</input>
                <input type="radio" name="savesjxx" value="p9" >华为P9</input>
                <input type="radio" name="savesjxx" value="lgn5" >LG N5</input>
                <input type="radio" name="savesjxx" value="lgn5x" >LG N5X</input>
                <input type="radio" name="savesjxx" value="mx5" >魅族MX5</input>
                <input type="radio" name="savesjxx" value="jls6" >金立S6+</input>
                <input type="radio" name="savesjxx" value="jls10b" >金立S10b</input>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>分支信息:
                <input type="radio" name="savefzxx" value="qbm57" checked="">QBM57</input>
                <input type="radio" name="savefzxx" value="tbsm57">TBSM57</input>
                <input type="radio" name="savefzxx" value="qb">QB</input>
                <input type="radio" name="savefzxx" value="tbs2" >TBS2</input>
                <input type="radio" name="savefzxx" value="tbs3" >TBS3</input>
                <input type="radio" name="savefzxx" value="tbs4" >TBS4</input>
                <input type="radio" name="savefzxx" value="tms" >TMS</input>
                <input type="radio" name="savefzxx" value="sys" >SYS</input>
                <input type="radio" name="savefzxx" value="chrome" >CHROME</input>
                <input type="radio" name="savefzxx" value="rom" >ROM</input>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>版本信息:<input type="text" name="csbb" id="csbbId" height="50px" width="255px"/></p>
        </td>
    </tr>
    <tr>
        <td>
            <p><button type="button" height="50px" width="100px" onclick="uploadTestData()">上传测试数据</button></p>
        </td>
    </tr>
</table>
<p><b>查询相关操作</b></p>
<table border=1 width="95%">
    <tr>
        <td>
            <p>手机信息:
                <input type="radio" name="querysjxx" value="p7" >华为P7</input>
                <input type="radio" name="querysjxx" value="p9" >华为P9</input>
                <input type="radio" name="querysjxx" value="lgn5" >LG N5</input>
                <input type="radio" name="querysjxx" value="lgn5x" >LG N5X</input>
                <input type="radio" name="querysjxx" value="mx5" >魅族MX5</input>
                <input type="radio" name="querysjxx" value="jls6" >金立S6+</input>
                <input type="radio" name="querysjxx" value="jls10b" >金立S10b</input>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>分支信息:
                <input type="radio" name="queryfzxx" value="qbm57" checked="">QBM57</input>
                <input type="radio" name="queryfzxx" value="tbsm57">TBSM57</input>
                <input type="radio" name="queryfzxx" value="qb">QB</input>
                <input type="radio" name="queryfzxx" value="tbs2" >TBS2</input>
                <input type="radio" name="queryfzxx" value="tbs3" >TBS3</input>
                <input type="radio" name="queryfzxx" value="tbs4" >TBS4</input>
                <input type="radio" name="queryfzxx" value="tms" >TMS</input>
                <input type="radio" name="queryfzxx" value="sys" >SYS</input>
                <input type="radio" name="queryfzxx" value="chrome" >CHROME</input>
                <input type="radio" name="queryfzxx" value="rom" >ROM</input>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p><button type="button" height="50px" width="100px" onclick="showAllHistoryCharts()">图表展示</button></p>
        </td>
    </tr>
</table>

<br><br>
<p><b>HTML5 Canvas GUIMark3 Performance</b></p>
<table border=1 width="95%" cellpadding="30px">
    <tr>
        <th width="30%">用例名称</th>
        <th width="30%">测试URL</th>
        <th width="40%">FPS</th>
    </tr>
    <tr>
        <td>GUIMark3 GM3_JS_Bitmap</td>
        <td><a href="./GUIMark3bitmap/GM3_JS_Bitmap.html" target="">GM3_JS_Bitmap.html</a></td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(GM3_JS_Bitmap_max) + "min:" + getCookie(GM3_JS_Bitmap_min) + "avg:" + getCookie(GM3_JS_Bitmap_avg));</script>
        </td>
    </tr>
    <tr>
        <td>GUIMark3 GM3_JS_Vector</td>
        <td><a href="./GUIMark3vector/GM3_JS_Vector.html" target="">GM3_JS_Vector.html</a></td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(GM3_JS_Vector_max) + "min:" + getCookie(GM3_JS_Vector_min) + "avg:" + getCookie(GM3_JS_Vector_avg));</script>
        </td>
    </tr>
    <tr>
        <td>GUIMark3 GM3_JS_Compute</td>
        <td><a href="./GUIMark3compute/GM3_JS_Compute.html" target="">GM3_JS_Compute.html</a></td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(GM3_JS_Compute_max) + "min:" + getCookie(GM3_JS_Compute_min) + "avg:" + getCookie(GM3_JS_Compute_avg));</script>
        </td>
    </tr>


</table>
<br><br>
<p><b>HTML5 WebGL Performance</b></p>
<table border=1 width="95%" cellpadding="30px">
    <tr>
        <th width="30%">用例名称</th>
        <th width="30%">测试URL</th>
        <th width="40%">FPS</th>
    </tr>
    <tr>
        <td>webgl_shader2</td>
        <td><a href="three.js-r71/webgl_shader2.html"
               target="">webgl_shader2</a></td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(webgl_shader2_max) + "min:" + getCookie(webgl_shader2_min) + "avg:" + getCookie(webgl_shader2_avg));</script>
        </td>
    </tr>
    <tr>
        <td>webgl_materials</td>
        <td><a href="three.js-r71/webgl_materials.html" target="">webgl_materials</a>
        </td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(webgl_materials_max) + "min:" + getCookie(webgl_materials_min) + "avg:" + getCookie(webgl_materials_avg));</script>
        </td>
    </tr>
    <tr>
        <td>webglspacerocks</td>
        <td><a href="googleio/webglspacerocks.html" target="">webglspacerocks</a>
        </td>
        <td>
            <script type="text/javascript">document.write("max:" + getCookie(webglspacerocks_max) + "min:" + getCookie(webglspacerocks_min) + "avg:" + getCookie(webglspacerocks_avg));</script>
        </td>
    </tr>
</table>

<br><br>
<script type="text/javascript">
    var runTimer = null;
    // 对Date的扩展，将 Date 转化为指定格式的String
    // 月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符，
    // 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
    // 例子：
    // (new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423
    // (new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18
    Date.prototype.Format = function(fmt)
    { //author: meizz
        var o = {
            "M+" : this.getMonth()+1,                 //月份
            "d+" : this.getDate(),                    //日
            "h+" : this.getHours(),                   //小时
            "m+" : this.getMinutes(),                 //分
            "s+" : this.getSeconds(),                 //秒
            "q+" : Math.floor((this.getMonth()+3)/3), //季度
            "S"  : this.getMilliseconds()             //毫秒
        };
        if(/(y+)/.test(fmt))
            fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
        for(var k in o)
            if(new RegExp("("+ k +")").test(fmt))
                fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
        return fmt;
    }

    //删除所有的测试数据
    function removeAllTestData() {
        clearAllCookie();
        if(runTimer)
        {
            clearInterval(runTimer);
            runTimer=null;
        }
        window.location.reload();
    }

    //开始测试
    function startTest() {
        setCookie(startAllTest, 1);
        startNextTest();
        setCookie("testRefreshInteral",parseInt(document.getElementById("testRefreshInteraltxt").value.trim())*1000);
        testRefreshInteral = parseInt(getCookie("testRefreshInteral").trim());
        if(runTimer == null && testRefreshInteral != "")
            runTimer = setTimeout("startNextTest()",testRefreshInteral);
    }

    //具体跳转函数
    function startNextTest() {
        var startTest = getCookie(startAllTest);
        if (null == startTest || "" == startTest) {
            return;
        }
        var testComplete = true;
        for (var index = 0; index < cookieAndUrlArray.length; index++) {
            var value = getCookie(cookieAndUrlArray[index].cookieName);
            if ("" == value) {
                setTimeout(
                        function () {
                            window.location.href = cookieAndUrlArray[index].url;
                            if(runTimer){
                                clearInterval(runTimer);
                                runTimer=null;
                            }
                        },
                        testPageInteral
                );
                testComplete = false;
                break;
            }

        }
        if (testComplete) {
            removeCookie(startAllTest);
            if(runTimer) {
                clearInterval(runTimer);
                runTimer=null;
            }
        }


    }
    //检查是否开始
    function checkStartTest()
    {
        var startTest = getCookie(startAllTest);
        if (null == startTest || "" == startTest)
        {
            return;
        }
        testRefreshInteral = parseInt(getCookie("testRefreshInteral").trim());
        if (runTimer == null && testRefreshInteral != "")
            runTimer = setTimeout("startNextTest()",testRefreshInteral);
    }

    //停止测试
    function stopTest()
    {
        removeCookie(startAllTest);
        if(runTimer)
        {
            clearInterval(runTimer);
            runTimer=null;
        }
    }

    //获取单选框的value
    function getRadioCheckValue(radioId)
    {
        for(var i=0;i<radioId.length;i++){
            if(radioId[i].checked){
                return radioId[i].value;
            }
        }
    }

    //上传数据
    function uploadTestData()
    {
        var ttcsbbValue = document.getElementById("csbbId").value;
        var savesjxxValue = getRadioCheckValue(document.getElementsByName("savesjxx"));
        var savefzxxValue = getRadioCheckValue(document.getElementsByName("savefzxx"));
        if(""==ttcsbbValue || null==ttcsbbValue)
        {
            alert("APK版本信息必填!!!!");
            return;
        }
        var ttcssjValue = new Date().Format("yyyy-MM-dd hh:mm:ss");
        var ttcsylarrayValue = new Array();
        var ttminfpsarrayValue = new Array();
        var ttmaxfpsarrayValue = new Array();
        var ttavgfpsarrayValue = new Array();
        for (var index = 0; index < cookieAndUrlArray.length; index++)
        {
            var pageCookieName = cookieAndUrlArray[index].cookieName.replace("_avg","");
            ttcsylarrayValue.push(pageCookieName);
            ttminfpsarrayValue.push(getCookie(pageCookieName+"_min"));
            ttmaxfpsarrayValue.push(getCookie(pageCookieName+"_max"));
            ttavgfpsarrayValue.push(getCookie(pageCookieName+"_avg"));
        }

        //发送post数据给php
        var postUrl = "http://whmgc.cn/canvas/monitor/upload.php";//提交地址
        var submitForm = document.createElement("form");
        document.body.appendChild(submitForm);
        submitForm.method = "POST";

        var ttcsylarray = document.createElement("input");
        ttcsylarray.setAttribute("name", "ttcsylarray");
        ttcsylarray.setAttribute("type", "hidden");

        var ttminfpsarray = document.createElement("input");
        ttminfpsarray.setAttribute("name", "ttminfpsarray");
        ttminfpsarray.setAttribute("type", "hidden");

        var ttmaxfpsarray = document.createElement("input");
        ttmaxfpsarray.setAttribute("name", "ttmaxfpsarray");
        ttmaxfpsarray.setAttribute("type", "hidden");

        var ttavgfpsarray = document.createElement("input");
        ttavgfpsarray.setAttribute("name", "ttavgfpsarray");
        ttavgfpsarray.setAttribute("type", "hidden");

        var ttcsbb = document.createElement("input");
        ttcsbb.setAttribute("name", "ttcsbb");
        ttcsbb.setAttribute("type", "hidden");

        var ttcssj = document.createElement("input");
        ttcssj.setAttribute("name", "ttcssj");
        ttcssj.setAttribute("type", "hidden");

        var ttsjxx = document.createElement("input");
        ttsjxx.setAttribute("name", "ttsjxx");
        ttsjxx.setAttribute("type", "hidden");

        var ttfzxx = document.createElement("input");
        ttfzxx.setAttribute("name", "ttfzxx");
        ttfzxx.setAttribute("type", "hidden");

        var ttua = document.createElement("input");
        ttua.setAttribute("name", "ttua");
        ttua.setAttribute("type", "hidden");

        submitForm.appendChild(ttcsylarray);
        submitForm.appendChild(ttminfpsarray);
        submitForm.appendChild(ttmaxfpsarray);
        submitForm.appendChild(ttavgfpsarray);
        submitForm.appendChild(ttcsbb);
        submitForm.appendChild(ttcssj);
        submitForm.appendChild(ttsjxx);
        submitForm.appendChild(ttfzxx);
        submitForm.appendChild(ttua);

        ttcsylarray.value = ttcsylarrayValue;
        ttminfpsarray.value = ttminfpsarrayValue;
        ttmaxfpsarray.value = ttmaxfpsarrayValue;
        ttavgfpsarray.value = ttavgfpsarrayValue;
        ttcsbb.value = ttcsbbValue;
        ttcssj.value = ttcssjValue;
        ttsjxx.value = savesjxxValue;
        ttfzxx.value = savefzxxValue;
        ttua.value=navigator.userAgent;

        submitForm.action = postUrl;
        submitForm.submit();
    }

    //查询指定分支，指定手机的所有历史数据
    function showAllHistoryCharts()
    {
        var querysjxxValue = getRadioCheckValue(document.getElementsByName("querysjxx"));
        var queryfzxxValue = getRadioCheckValue(document.getElementsByName("queryfzxx"));

        //发送post数据给php
        var postUrl = "http://whmgc.cn/canvas/monitor/showcharts.php";//提交地址
        var submitForm = document.createElement("form");
        document.body.appendChild(submitForm);
        submitForm.method = "POST";

        var ttsjxx = document.createElement("input");
        ttsjxx.setAttribute("name", "ttsjxx");
        ttsjxx.setAttribute("type", "hidden");

        var ttfzxx = document.createElement("input");
        ttfzxx.setAttribute("name", "ttfzxx");
        ttfzxx.setAttribute("type", "hidden");

        submitForm.appendChild(ttsjxx);
        submitForm.appendChild(ttfzxx);

        ttsjxx.value = querysjxxValue;
        ttfzxx.value = queryfzxxValue;

        submitForm.action = postUrl;
        submitForm.submit();
    }
    window.addEventListener("pageshow", checkStartTest, false);
</script>
</body>
</html>	
		