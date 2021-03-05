<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="YOCEN,软件,开源"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>YOCEN's space</title>

    <link href="./css/painting.css" rel="stylesheet">
    <link href="./module/font-awesome/css/fontawesome.css" rel="stylesheet">
    <link href="./module/font-awesome/css/brands.css" rel="stylesheet">
    <link href="./module/font-awesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fancy.css">
    <link rel="shortcut icon" href="/media/logo.ico">       <!-- 网站logo，浏览器标签页-->

    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/fancy.js" type="text/javascript"></script>
    <script src="./js/jquery.js" type="text/javascript"></script>
    <script src="./js/painting.js" type="text/javascript"></script>

    <style type="text/css">
        .heart {
            width: 10px;
            height: 10px;
            position: fixed;
            background: #f00;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
        }

        .heart:after, .heart:before {
            content: '';
            width: inherit;
            height: inherit;
            background: inherit;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            position: absolute;
        }

        .heart:after {
            top: -5px;
        }

        .heart:before {
            left: -5px;
        }</style>
    <style type="text/css">
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /*opacity: 0.8;*/
            /*background-color: #333;*/
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background: #f9efff;
            border-radius: 15px;
        }
    </style>
    <style id="bsSuggest">
        .jhover {
            background: #07d;
            color: #fff
        }</style>
</head>
<body onload="domain()">
<div class="header">
<!--    <div id="ipv6_logo"><a href="https://ipv6.yocen.top">-->
<!--            <img style="width: 100%;"-->
<!--                 src="/media/img/World_IPv6_launch_banner.svg"-->
<!--                 alt='ipv6 ready' title='ipv6 ready' border='0'>-->
<!--            <!--                <img src='http://ipv6-test.com/button-ipv6-small.png' alt='ipv6 ready' title='ipv6 ready' border='0'>-->-->
<!--        </a>-->
<!--    </div>-->
    <main class="cd-main-content">
        <div class="container">
            <div class="wrapper-content article">
                <div class="ibox">
                    <div class="ibox-content animated fadeIn">
                        <main>
                            <section class="article-content">
                                <header class="page-header">
                                    <div class="text-center">

                                            <h1 class="padding-bot10" style="font-weight: bolder;font-family: 'Microsoft YaHei UI'">Welcome to YOCEN's space-NetDisk</h1>
                                            <h5>最后修改时间：<?php
                                                $time = getlastmod();
                                                echo date('Y-m-d',$time);
                                                ?></h5>
                                    </div>
                                </header>
                                <article class="article" id="article">
                                    <div id="dbody">
                                        <div> <!--style="background: #088acb;height: 100px;width: 100%;">-->
                                            <!--        <div id="ptime" style="float: left;width: 25%;font-size: 20px;margin-left: 5%;margin-top: 25px;"></div>-->
                                            <!--        <div id="head_annocement" align="center" style="color:#f7c872;float:left;width: 50%;margin-right: auto;margin-left: auto;">Hello World!</div>-->
                                            <!--        <div style="width:25%;float: right;display: none"><input id="switch_dark" type="button" value="暗黑模式"-->
                                            <!--                                          style="float:right;font-size:15px;color: white;background-color: #3D5054;color:white;width: 50%;height: 20px;border-radius: 8px;"-->
                                            <!--                                          onclick="change_darkmodel()"></div>-->
                                        </div>
                                        <div id="head_title">
                                                <ul>
                                                    <li><a href="/"><i class="fas fa-home"></i>首页</a></li>
                                                    <li><a href="https://t.me/cheungyocen"><i class="fab fa-telegram" style="color: #198dc7"></i>telegram</a></li>
                                                </ul>
                                        </div>
                                        <hr width="90%" color="#000000"><br>
                                        <h1 id="indextitle" style="color: #000000;font-family: 'Microsoft New Tai Lue'"  >Index of