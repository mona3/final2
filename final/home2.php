<?php 

include("Controller.php");
$controller=new controller();
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    



    <!--Image which is background-->
    <style>
        body {
            background: url('36.jpg') no-repeat top;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            color :red;
            background-attachment:scroll;
            background-position:top;

        }
    </style>

	<style>

/*
Quick Cart
by Nizamilputra
http://nizamilputra.com
PSD by Kuba Stanek (http://www.kubastanek.pl/) at 365PSD.com
*/

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/*********************************************************************/
body{
	
	
	padding: 50px;
}
#wrapper{
	width:410px;
	margin:0 auto;
}
form{
	width:390px;
	height:30px;
	background-image : repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%);
	background-image : -webkit-repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%);
	background-image : -moz-repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%);
	background-image : -ms-repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%);
	background-image : -o-repeating-linear-gradient(45deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%);
	background-color: #151515;
	background-size: 6px 6px;
	padding:10px;
	position: relative;
	border-radius: 5px;
	box-shadow: inset 0 25px 0 0 rgba(255,255,255,0.15);
}
input[type="text"]{
	width:313px;
	height:26px;
	padding-right:65px;
	padding-left:10px;
	background: #1b1b1b; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzFiMWIxYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyNjI2MjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #1b1b1b 0%, #262626 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1b1b1b), color-stop(100%,#262626)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #1b1b1b 0%,#262626 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #1b1b1b 0%,#262626 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #1b1b1b 0%,#262626 100%); /* IE10+ */
	background: linear-gradient(top,  #1b1b1b 0%,#262626 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b1b1b', endColorstr='#262626',GradientType=0 ); /* IE6-8 */
	border:1px solid #000;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
	box-shadow:0 1px 0 rgba(255,255,255,0.2), inset 0 2px 0 rgba(0,0,0,0.5);
	-webkit-box-shadow:0 1px 0 rgba(255,255,255,0.2), inset 0 2px 0 rgba(0,0,0,0.5);
	-moz-box-shadow:0 1px 0 rgba(255,255,255,0.2), inset 0 2px 0 rgba(0,0,0,0.5);
	-o-box-shadow:0 1px 0 rgba(255,255,255,0.2), inset 0 2px 0 rgba(0,0,0,0.5);
	font-size:11px;
	color:#909090;
}
input[type="text"]:focus{
	outline:none;
}
input[type="submit"]{
	width:63px;
	height:28px;
	cursor: pointer;
	background: #353535; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI1MCUiIHN0b3AtY29sb3I9IiMzNTM1MzUiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSI1MSUiIHN0b3AtY29sb3I9IiMxYjFiMWIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #353535 50%, #1b1b1b 51%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#353535), color-stop(51%,#1b1b1b)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #353535 50%,#1b1b1b 51%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #353535 50%,#1b1b1b 51%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #353535 50%,#1b1b1b 51%); /* IE10+ */
	background: linear-gradient(top,  #353535 50%,#1b1b1b 51%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#353535', endColorstr='#1b1b1b',GradientType=0 ); /* IE6-8 */
	box-shadow:inset 0 1px 0 rgba(255,255,255,0.16);
	-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.16);
	-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.16);
	-o-box-shadow:inset 0 1px 0 rgba(255,255,255,0.16);
	border-radius:4px;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	-o-border-radius:4px;
	border:1px solid #000;
	color:#fff;
	position:absolute;
	right:11px;
	top:11px;
}
input[type="submit"]:active{
	background: #1b1b1b; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzFiMWIxYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzNTM1MzUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #1b1b1b 0%, #353535 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1b1b1b), color-stop(100%,#353535)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #1b1b1b 0%,#353535 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #1b1b1b 0%,#353535 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #1b1b1b 0%,#353535 100%); /* IE10+ */
background: linear-gradient(top,  #1b1b1b 0%,#353535 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b1b1b', endColorstr='#353535',GradientType=0 ); /* IE6-8 */

}

/** Autosuggest **/
div.autosuggest
{
	position: absolute;
	background:none;
	padding: 10px 0 0 0;
}

div.autosuggest ul
{
	list-style: none;
	margin: 0 0 -4px 0;
	padding: 0; 
	background-color: #1f1f1f;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-o-border-radius:5px;
	box-shadow:inset 0 1px 0 rgba(255,255,255,0.23);
	border:1px solid #000;
	position:relative;
	top:25px;
}

div.autosuggest ul:before{
	content:" ";

	width:24px;
	height:15px;
	position: absolute;
	top:-13px;
	left:18px;
	z-index:99;
}

div.autosuggest ul li
{
	color: #ccc;
	padding: 10px;
	text-align: left;
	border-bottom:1px solid #060606;
	box-shadow:0 1px 0 #323232;
	-moz-box-shadow:0 1px 0 #323232;
	-wekit-box-shadow:0 1px 0 #323232;
	-o-box-shadow:0 1px 0 #323232;
	background: #212121; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzIxMjEyMSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxYzFjMWMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #212121 0%, #1c1c1c 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#212121), color-stop(100%,#1c1c1c)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #212121 0%,#1c1c1c 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #212121 0%,#1c1c1c 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #212121 0%,#1c1c1c 100%); /* IE10+ */
	background: linear-gradient(top,  #212121 0%,#1c1c1c 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#212121', endColorstr='#1c1c1c',GradientType=0 ); /* IE6-8 */
}

div.autosuggest ul li:first-child{
	-webkit-border-radius:5px 5px 0 0;
	-moz-border-radius:5px 5px 0 0;
	-o-border-radius:5px 5px 0 0;
	margin-top:1px;
}

div.autosuggest ul li:last-child{
	border:none;
	box-shadow:none;
	-webkit-border-radius:0 0 5px 5px;
	-moz-border-radius:0 0 5px 5px;
	-o-border-radius:0 0 5px 5px;
}

div.autosuggest ul li a
{
	color: #939393;
	display: block;
	text-decoration: none;
	background-color: transparent;
	position: relative;
	padding: 0;
	width: 100%;
	font-size:11px;
}
div.autosuggest ul li:hover
{
	background: #2a2a2a; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIyJSIgc3RvcC1jb2xvcj0iIzJhMmEyYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyNDI0MjQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #2a2a2a 2%, #242424 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(2%,#2a2a2a), color-stop(100%,#242424)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* IE10+ */
background: linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2a2a2a', endColorstr='#242424',GradientType=0 ); /* IE6-8 */

}
div.autosuggest ul li:hover a:hover,  div.autosuggest ul li.as_highlight:hover a:hover{
	background:none;
}
div.autosuggest ul li.as_highlight:hover
{
	background: #2a2a2a; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIyJSIgc3RvcC1jb2xvcj0iIzJhMmEyYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyNDI0MjQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #2a2a2a 2%, #242424 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(2%,#2a2a2a), color-stop(100%,#242424)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* IE10+ */
background: linear-gradient(top,  #2a2a2a 2%,#242424 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2a2a2a', endColorstr='#242424',GradientType=0 ); /* IE6-8 */
 
}

div.autosuggest ul li a span
{
	display: block;
	padding: 3px 6px;
	font-weight: normal;
}

div.autosuggest ul li a span small
{
	font-weight: normal;
	color: #999;
}

div.autosuggest ul li.as_highlight a span small
{
	color: #ccc;
}

div.autosuggest ul li.as_highlight a
{
	color: #fff;
	background-color: none;
	
	background-position: bottom right;
	background-repeat: no-repeat;
}

div.autosuggest ul li.as_highlight a span
{

	background-position: bottom left;
	background-repeat: no-repeat;
}

div.autosuggest ul li a .tl,
div.autosuggest ul li a .tr
{
	
	
	width: 6px;
	height: 6px;
	position: absolute;
	top: 0;
	padding: 0;
	margin: 0;
}
div.autosuggest ul li a .tr
{
	right: 0;
}

div.autosuggest ul li.as_highlight a .tl
{
	left: 0;
	
}

div.autosuggest ul li.as_highlight a .tr
{
	right: 0;

}



div.autosuggest ul li.as_warning
{
	font-weight: bold;
	text-align: center;
}

div.autosuggest ul em
{
	font-style: normal;
	color: #6EADE7;
}
/** end autosuggest **/


</style>


</head>

<body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home2.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->


            <!-- Header -->
                
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Sign_up.php">Sign up</a>
                    </li>
                 <?php   $Username = $controller->get_UserName();
				 if($Username==Null)
				 {    ?>
					<li>
                        <a href="Login.php">Login</a>
                    </li>
				 <?php } else { ?>
                    <li>
                        <a href="view account.php"> <?php echo $Username;?></a>
                    </li>
					<li>
                        <a href="Login.php">Logout</a>
                    </li>
				 <?php } ?>
                    
                    <li>
                        <a href="Offers.php">Offers</a>
                    </li>
                	<li>
                        <a href="Order.php">My Cart</a>
                    </li>
					
                        <a>
                        <li>
 
 <form action=""  id="search-form" method="post">
       <input name="term" type="text" class="search..." placeholder="search..." required="">
      
       <input name="action" type="submit" value="search" >
     </form> 

      </a>
      </li>
    </div>
          <?php  $controller->search(); ?>

 
                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br/>  <br/> 
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">plumbing Companies</p>
                <div class="list-group">
           <?php 
        $result=$controller->View_Company();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
  
    while($row = mysqli_fetch_assoc($result))

    
         {?>
         <a href="Company_1.php?content=<?php echo $row["Name"];?>" class="list-group-item"><?php echo $row["Name"]; $SESSION['img2']=$row["Name"];?></a>
							
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>  
             

                    <br />
                    <p class="lead">plumbing Galaries</p>
                    <div class="slide-image">
                        <a href="Gallery" class="list-group-item">Galary 1</a>
                        <a href="#" class="list-group-item">Galary 2</a>
                        <a href="#" class="list-group-item">Galary 3</a>
                    </div>
                </div>
            </div>


           



                    <div class="col-md-9">

                        <div class="row carousel-holder">

                            <div class="col-md-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img class="slide-image" src="rsz_5.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="rsz_6.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="rsz_5.jpg" alt="">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
<?php
    
    $result=$controller->View_Products();
     if (mysqli_num_rows($result) > 0) 
     {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
 
         {?>
            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <!--  <img src="http://placehold.it/320x150" alt="">-->
                                 <div  style="height: 250px">
								   <?php  echo '<img src="upload/'.$row["img"].'.jpg"  style="width: 100%;max-height: 100%" height="200"/>';?>
								  </div>  
                                    <div class="caption">
                                        <h4 class="pull-right"><?php echo "$" .$row["Price"]; ?></h4>
										<h4> <a href="Product_1.php?content=<?php echo $row["Name"];?>"><?php echo $row["Name"];?></a></h4>
                                        
										<p><?php echo "quantity:  ".$row["Num"]; ?></p>
										<p><?php echo "Type:  ".$row["P_Type"]; ?></p>
										<p><?php echo "Country:  ".$row["Country"];?></p>
										
                                    </div>
									
					
                                    <div class="ratings">
                                        <p class="pull-right">12 reviews</p>
                                        <p>
                                            <?php  $r=round($row["Rate"]); 
						$i=5;
						
						while($r>0 and(( $r<5)or ($r==5)))
						{
						?>
						 <span class="glyphicon glyphicon-star"></span>
						<?php
						$r=$r-1;
						$i=$i-1;
						}
						while($i>0)
						{
						?>
						<span class="glyphicon glyphicon-star-empty"></span>
						<?php
						$i=$i-1;
						}
						
						?>
               

                                        </p>
                                    </div>
                                </div>
                            </div>
							
<?php						
      }
    } 

    else 
    {
      echo "0 results";
    }
 ?>         
</body>

</html>
