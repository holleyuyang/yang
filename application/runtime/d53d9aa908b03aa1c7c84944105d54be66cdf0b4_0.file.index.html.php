<?php
/* Smarty version 3.1.29, created on 2016-12-27 11:27:03
  from "D:\wamp\Apache24\htdocs\Project\1223\application\admin\view\category\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5861df87ef97b2_29631621',
  'file_dependency' => 
  array (
    'd53d9aa908b03aa1c7c84944105d54be66cdf0b4' => 
    array (
      0 => 'D:\\wamp\\Apache24\\htdocs\\Project\\1223\\application\\admin\\view\\category\\index.html',
      1 => 1482809203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5861df87ef97b2_29631621 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="webkit" name="renderer">
    <meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="blank" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>分类管理-有问必答</title>
    <link href="<?php echo PUBLIC_PATH;?>
home/css/bootstrap.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="<?php echo PUBLIC_PATH;?>
home/css/icon.css?v=20151125" rel="stylesheet" type="text/css">
    <link href="<?php echo PUBLIC_PATH;?>
admin/css/common.css?v=20151125" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
home/js/jquery.2.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
home/js/jquery.form.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
admin/js/framework.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
admin/js/global.js?v=20151125" type="text/javascript"><?php echo '</script'; ?>
>
    <!--[if lte IE 8]>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/respond.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>

<body>
    <div class="aw-header">
        <button class="btn btn-sm mod-head-btn pull-left">
         <i class="icon icon-bar"></i>
        </button>

        <div class="mod-header-user">
            <ul class="pull-right">

                <li class="dropdown username">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <img width="30" class="img-circle" src="<?php echo PUBLIC_PATH;?>
common/avatar-mid-img.png">
                        itbull
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu pull-right mod-user">
                        <li>
                            <a target="_blank" href="">
                                <i class="icon icon-user"></i>
                                账户
                            </a>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="icon icon-logout"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="aw-side" class="aw-side ps-container">
        <div class="mod">
            <div class="mod-logo">
                <img alt="" src="<?php echo PUBLIC_PATH;?>
admin/img/logo.png" class="pull-left">
                <h1>有问必答</h1>
            </div>

            <div class="mod-message">
                <div class="message">
                    <a title="首页" target="_top" href="?m=home&c=Index&a=index" class="btn btn-sm">
                        <i class="icon icon-home"></i>
                    </a>

                    <a title="退出" href="login.html" class="btn btn-sm">
                        <i class="icon icon-logout"></i>
                    </a>
                </div>
            </div>

            <ul class="mod-bar">
                <input type="hidden" val="0" id="hide_values">
                <li>
                    <a class=" icon icon-ul" href="index.html">
                        <span>摘要信息</span>
                    </a>
                </li>

                <li>
                    <a data="icon" class=" icon icon-reply active" href="javascript:;">
                        <span>内容管理</span>
                    </a>

                    <ul class="hide" style="display: block;">
                        <li>
                            <a class="active" href="?m=admin&c=Category&a=index">
                                <span>分类管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="question.html">
                                <span>问题管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="?m=admin&c=Topic&a=index">
                                <span>话题管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="?m=admin&c=Question&a=add">
                                <span>采集管理</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class=" icon icon-user" href="javascript:;">
                        <span>用户管理</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="user.html">
                                <span>用户列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="role.html">
                                <span>用户角色</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class="icon icon-setting" href="javascript:;">
                        <span>全局设置</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="site.html">
                                <span>站点信息</span>
                            </a>
                        </li>
                        <li>
                            <a href="regedit.html">
                                <span>注册访问</span>
                            </a>
                        </li>
                        <li>
                            <a href="mail.html">
                                <span>邮件设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class=" icon icon-job" href="javascript:;">
                        <span>工具</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="tool.html">
                                <span>系统维护</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ps-scrollbar-x-rail" style="width: 235px; display: none; left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 607px; display: inherit; right: 0px;">
            <div class="ps-scrollbar-y" style="top: 0px; height: 560px;"></div>
        </div>
    </div>

    <div class="aw-content-wrap">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">分类管理</span>
                </h3>
            </div>

            <div class="tab-content mod-body">
                <div class="alert alert-success hide error_message"></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>分类标题</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form method="post" action="#" id="category_form"></form>
                    <?php
$_from = $_smarty_tpl->tpl_vars['cate_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>   
                        <tr>
                            <td>
                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a>
                            </td>
                            <td>
                                <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['parent_id'];?>

                                </div>
                            </td>
                            <td>
                                <a href="?m=admin&c=Category&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" title="" class="icon icon-edit md-tip" data-toggle="tooltip" href="category_edit.html" data-original-title="编辑"></a>
                                <a href="?m=admin&c=Category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" title="" class="icon icon-trash md-tip" data-toggle="tooltip"  data-original-title="删除"></a>
                                
                            </td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                        <tr>
                            <td colspan="3">暂无内容</td>
                        </tr>
                    <?php
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
                        </tbody>
                        <tfoot class="mod-foot-center">

                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['cate_page']->value;?>
</td>
                            <td colspan="2">                          
                            <form method="post" action="http://localhost/wecenter/?/admin/ajax/save_category/" id="add_category_form">
                               
                                <div class="pull-right" style="margin-right: 150px">
                                 <a class="btn-primary btn" href="?m=admin&c=Category&a=add">添加分类</a>
                                </div>
                            </form>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="hide" id="target-category">
            <option value="1">默认分类</option>    
        </div>
    </div>


    <div class="aw-footer">
        <p>
            Copyright &copy; 2016-2099 - Powered By
            <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
        </p>
    </div>

</body>
</html><?php }
}
