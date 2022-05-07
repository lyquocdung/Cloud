<!DOCTYPE html>
<html>
<head>
    <title>Nhóm 1 Đề tài 11Điện toán đám mây</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/reset.css" rel="stylesheet" type="text/css"/>
<!--    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css"/>

    <link href="public/style.css" rel="stylesheet" type="text/css"/>
    <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</head>
<body>
<div id="site">
    <div id="container">
        <div id="header-wp">
            <div class="wp-inner clearfix">
                <a href="?page=list_post" title="" id="logo" class="fl-left">ADMIN</a>
                <ul id="main-menu" class="fl-left">
                    <li>
                        <a href="?mod=employee&act=main" title="">Quản lý nhân viên</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="?mod=employee&act=add" title="">Thêm nhân viên</a>
                            </li>
                            <li>
                                <a href="?mod=employee&act=main" title="">Danh sách nhân viên</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?mod=dish&act=main" title="">Quản lý món ăn</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="?mod=dish&act=add" title="">Thêm món ăn</a>
                            </li>
                            <li>
                                <a href="?mod=dish&act=main" title="">Danh sách món ăn</a>
                            </li>
                        </ul>
                    </li><li>
                        <a href="?mod=employee&act=createTbl" title="">Tạo bảng</a>
                    </li>
                </ul>
                <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                    <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div id="thumb-circle" class="fl-left">
                            <img src="public/images/img-admin.png">
                        </div>
                        <h3 id="account" class="fl-right">Admin</h3>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="?page=info_account" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                        <li><a href="#" title="Thoát">Thoát</a></li>
                    </ul>
                </div>
            </div>
        </div>