<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<link href="login.css" rel="stylesheet" type="text/css" />
<style type="text/css">
u{text-decoration:none;white-space:nowrap;}
</style>
</head>
<body>
<div class="main" id="login" style="border:0px;">
    
    <div id="qlogin" style="display:none;"></div>
    <div id="web_login">
    <FORM method="post" autocomplete="off" id=loginform style="MARGIN: 0px" name=loginform onsubmit="return aa() " onreset="return onFormReset(loginform)" action="../save1.php" target=_parent>
        <ul id="g_list">
            <li id="err_m" class="err_m"></li>
            <li id="g_u">
            	<span><u id="label_uin"><img src="../images/im/21.png"/></u></span><input type="text" class="inputstyle" maxlength="12" id="u" name="u" value="" style="ime-mode:disabled" tabindex="1" onfocus="try{ptui_onUserFocus('u', '#000000')}catch(e){}" onblur="try{ptui_onUserBlue('u', '#CCCCCC');}catch(e){}check();" /> <label><a target="_top" href="http://zc.qq.com?from=pt" tabindex="7" id="label_newreg">
				<img src="../images/im/23.png"/></a></label>   
            </li> 
            <li id="g_p">
            	<span><u id="label_pwd"><img src="../images/im/22.png"/></u></span><input type="password"  class="inputstyle" id="p" name="p" value="" maxlength="16" tabindex="2" onfocus="check();"onkeyup="value=value.replace(/[\u4e00-\u9fa5]/ig,'')" /> <label><a target="_top" tabindex="8" href="http://ptlogin2.qq.com/ptui_forgetpwd" onclick="onClickForgetPwd()" id="label_forget_pwd">
				<img src="../images/im/24.png"/></a></label>
            </li>
            <li id="verifyshow" >&nbsp;<span for="pic">&nbsp;</span> </li> 
               
        </ul> 
        <div class="login_button">
            <input type="submit" tabindex="5" value="登 陆" class="btn"/>
        </div>
        <div class="lineright" id="label_unable_tips">
        	<a style="CURSOR: pointer" onclick="switchpage();"><img src="../images/im/25.png"/></a></div>

        <input type="hidden" name="from_ui" value="1" />
        <input type="hidden" name="dumy" value="" />
    </form>
    </div>
    <div id="switch" class="lineright"><a onclick=""></a></div>
</div>
</body>
</html>