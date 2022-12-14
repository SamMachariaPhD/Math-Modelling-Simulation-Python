<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="Asciidoctor 2.0.10">
<meta name="description" content="Engineering, Computing, Science, and Philosophy">
<meta name="keywords" content="Applied Mathematics, Mathematical Modelling, Simulation,">
<meta name="author" content="Dr. Sam Macharia, Home">
<link rel="icon" type="image/png" href="favicon.png">
<title>Modelling and Simulation: Theory and Examples</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700">
<style>
/* Asciidoctor default stylesheet | MIT License | https://asciidoctor.org */
/* Uncomment @import statement to use as custom stylesheet */
/*@import "https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic%7CNoto+Serif:400,400italic,700,700italic%7CDroid+Sans+Mono:400,700";*/
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}
audio,video{display:inline-block}
audio:not([controls]){display:none;height:0}
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
a{background:none}
a:focus{outline:thin dotted}
a:active,a:hover{outline:0}
h1{font-size:2em;margin:.67em 0}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:bold}
dfn{font-style:italic}
hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}
mark{background:#ff0;color:#000}
code,kbd,pre,samp{font-family:monospace;font-size:1em}
pre{white-space:pre-wrap}
q{quotes:"\201C" "\201D" "\2018" "\2019"}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
img{border:0}
svg:not(:root){overflow:hidden}
figure{margin:0}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0}
button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}
button,input{line-height:normal}
button,select{text-transform:none}
button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
textarea{overflow:auto;vertical-align:top}
table{border-collapse:collapse;border-spacing:0}
*,*::before,*::after{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
html,body{font-size:100%}
body{background:#fff;color:rgba(0,0,0,.8);padding:0;margin:0;font-family:"Noto Serif","DejaVu Serif",serif;font-weight:400;font-style:normal;line-height:1;position:relative;cursor:auto;tab-size:4;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}
a:hover{cursor:pointer}
img,object,embed{max-width:100%;height:auto}
object,embed{height:100%}
img{-ms-interpolation-mode:bicubic}
.left{float:left!important}
.right{float:right!important}
.text-left{text-align:left!important}
.text-right{text-align:right!important}
.text-center{text-align:center!important}
.text-justify{text-align:justify!important}
.hide{display:none}
img,object,svg{display:inline-block;vertical-align:middle}
textarea{height:auto;min-height:50px}
select{width:100%}
.center{margin-left:auto;margin-right:auto}
.stretch{width:100%}
.subheader,.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{line-height:1.45;color:#7a2518;font-weight:400;margin-top:0;margin-bottom:.25em}
div,dl,dt,dd,ul,ol,li,h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6,pre,form,p,blockquote,th,td{margin:0;padding:0;direction:ltr}
a{color:#2156a5;text-decoration:underline;line-height:inherit}
a:hover,a:focus{color:#1d4b8f}
a img{border:0}
p{font-family:inherit;font-weight:400;font-size:1em;line-height:1.6;margin-bottom:1.25em;text-rendering:optimizeLegibility}
p aside{font-size:.875em;line-height:1.35;font-style:italic}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{font-family:"Open Sans","DejaVu Sans",sans-serif;font-weight:300;font-style:normal;color:#ba3925;text-rendering:optimizeLegibility;margin-top:1em;margin-bottom:.5em;line-height:1.0125em}
h1 small,h2 small,h3 small,#toctitle small,.sidebarblock>.content>.title small,h4 small,h5 small,h6 small{font-size:60%;color:#e99b8f;line-height:0}
h1{font-size:2.125em}
h2{font-size:1.6875em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.375em}
h4,h5{font-size:1.125em}
h6{font-size:1em}
hr{border:solid #dddddf;border-width:1px 0 0;clear:both;margin:1.25em 0 1.1875em;height:0}
em,i{font-style:italic;line-height:inherit}
strong,b{font-weight:bold;line-height:inherit}
small{font-size:60%;line-height:inherit}
code{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;font-weight:400;color:rgba(0,0,0,.9)}
ul,ol,dl{font-size:1em;line-height:1.6;margin-bottom:1.25em;list-style-position:outside;font-family:inherit}
ul,ol{margin-left:1.5em}
ul li ul,ul li ol{margin-left:1.25em;margin-bottom:0;font-size:1em}
ul.square li ul,ul.circle li ul,ul.disc li ul{list-style:inherit}
ul.square{list-style-type:square}
ul.circle{list-style-type:circle}
ul.disc{list-style-type:disc}
ol li ul,ol li ol{margin-left:1.25em;margin-bottom:0}
dl dt{margin-bottom:.3125em;font-weight:bold}
dl dd{margin-bottom:1.25em}
abbr,acronym{text-transform:uppercase;font-size:90%;color:rgba(0,0,0,.8);border-bottom:1px dotted #ddd;cursor:help}
abbr{text-transform:none}
blockquote{margin:0 0 1.25em;padding:.5625em 1.25em 0 1.1875em;border-left:1px solid #ddd}
blockquote cite{display:block;font-size:.9375em;color:rgba(0,0,0,.6)}
blockquote cite::before{content:"\2014 \0020"}
blockquote cite a,blockquote cite a:visited{color:rgba(0,0,0,.6)}
blockquote,blockquote p{line-height:1.6;color:rgba(0,0,0,.85)}
@media screen and (min-width:768px){h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2}
h1{font-size:2.75em}
h2{font-size:2.3125em}
h3,#toctitle,.sidebarblock>.content>.title{font-size:1.6875em}
h4{font-size:1.4375em}}
table{background:#fff;margin-bottom:1.25em;border:solid 1px #dedede}
table thead,table tfoot{background:#f7f8f7}
table thead tr th,table thead tr td,table tfoot tr th,table tfoot tr td{padding:.5em .625em .625em;font-size:inherit;color:rgba(0,0,0,.8);text-align:left}
table tr th,table tr td{padding:.5625em .625em;font-size:inherit;color:rgba(0,0,0,.8)}
table tr.even,table tr.alt{background:#f8f8f7}
table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td{display:table-cell;line-height:1.6}
h1,h2,h3,#toctitle,.sidebarblock>.content>.title,h4,h5,h6{line-height:1.2;word-spacing:-.05em}
h1 strong,h2 strong,h3 strong,#toctitle strong,.sidebarblock>.content>.title strong,h4 strong,h5 strong,h6 strong{font-weight:400}
.clearfix::before,.clearfix::after,.float-group::before,.float-group::after{content:" ";display:table}
.clearfix::after,.float-group::after{clear:both}
:not(pre):not([class^=L])>code{font-size:.9375em;font-style:normal!important;letter-spacing:0;padding:.1em .5ex;word-spacing:-.15em;background:#f7f7f8;-webkit-border-radius:4px;border-radius:4px;line-height:1.45;text-rendering:optimizeSpeed;word-wrap:break-word}
:not(pre)>code.nobreak{word-wrap:normal}
:not(pre)>code.nowrap{white-space:nowrap}
pre{color:rgba(0,0,0,.9);font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;line-height:1.45;text-rendering:optimizeSpeed}
pre code,pre pre{color:inherit;font-size:inherit;line-height:inherit}
pre>code{display:block}
pre.nowrap,pre.nowrap pre{white-space:pre;word-wrap:normal}
em em{font-style:normal}
strong strong{font-weight:400}
.keyseq{color:rgba(51,51,51,.8)}
kbd{font-family:"Droid Sans Mono","DejaVu Sans Mono",monospace;display:inline-block;color:rgba(0,0,0,.8);font-size:.65em;line-height:1.45;background:#f7f7f7;border:1px solid #ccc;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.2),0 0 0 .1em white inset;box-shadow:0 1px 0 rgba(0,0,0,.2),0 0 0 .1em #fff inset;margin:0 .15em;padding:.2em .5em;vertical-align:middle;position:relative;top:-.1em;white-space:nowrap}
.keyseq kbd:first-child{margin-left:0}
.keyseq kbd:last-child{margin-right:0}
.menuseq,.menuref{color:#000}
.menuseq b:not(.caret),.menuref{font-weight:inherit}
.menuseq{word-spacing:-.02em}
.menuseq b.caret{font-size:1.25em;line-height:.8}
.menuseq i.caret{font-weight:bold;text-align:center;width:.45em}
b.button::before,b.button::after{position:relative;top:-1px;font-weight:400}
b.button::before{content:"[";padding:0 3px 0 2px}
b.button::after{content:"]";padding:0 2px 0 3px}
p a>code:hover{color:rgba(0,0,0,.9)}
#header,#content,#footnotes,#footer{width:100%;margin-left:auto;margin-right:auto;margin-top:0;margin-bottom:0;max-width:62.5em;*zoom:1;position:relative;padding-left:.9375em;padding-right:.9375em}
#header::before,#header::after,#content::before,#content::after,#footnotes::before,#footnotes::after,#footer::before,#footer::after{content:" ";display:table}
#header::after,#content::after,#footnotes::after,#footer::after{clear:both}
#content{margin-top:1.25em}
#content::before{content:none}
#header>h1:first-child{color:rgba(0,0,0,.85);margin-top:2.25rem;margin-bottom:0}
#header>h1:first-child+#toc{margin-top:8px;border-top:1px solid #dddddf}
#header>h1:only-child,body.toc2 #header>h1:nth-last-child(2){border-bottom:1px solid #dddddf;padding-bottom:8px}
#header .details{border-bottom:1px solid #dddddf;line-height:1.45;padding-top:.25em;padding-bottom:.25em;padding-left:.25em;color:rgba(0,0,0,.6);display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-flow:row wrap;-webkit-flex-flow:row wrap;flex-flow:row wrap}
#header .details span:first-child{margin-left:-.125em}
#header .details span.email a{color:rgba(0,0,0,.85)}
#header .details br{display:none}
#header .details br+span::before{content:"\00a0\2013\00a0"}
#header .details br+span.author::before{content:"\00a0\22c5\00a0";color:rgba(0,0,0,.85)}
#header .details br+span#revremark::before{content:"\00a0|\00a0"}
#header #revnumber{text-transform:capitalize}
#header #revnumber::after{content:"\00a0"}
#content>h1:first-child:not([class]){color:rgba(0,0,0,.85);border-bottom:1px solid #dddddf;padding-bottom:8px;margin-top:0;padding-top:1rem;margin-bottom:1.25rem}
#toc{border-bottom:1px solid #e7e7e9;padding-bottom:.5em}
#toc>ul{margin-left:.125em}
#toc ul.sectlevel0>li>a{font-style:italic}
#toc ul.sectlevel0 ul.sectlevel1{margin:.5em 0}
#toc ul{font-family:"Open Sans","DejaVu Sans",sans-serif;list-style-type:none}
#toc li{line-height:1.3334;margin-top:.3334em}
#toc a{text-decoration:none}
#toc a:active{text-decoration:underline}
#toctitle{color:#7a2518;font-size:1.2em}
@media screen and (min-width:768px){#toctitle{font-size:1.375em}
body.toc2{padding-left:15em;padding-right:0}
#toc.toc2{margin-top:0!important;background:#f8f8f7;position:fixed;width:15em;left:0;top:0;border-right:1px solid #e7e7e9;border-top-width:0!important;border-bottom-width:0!important;z-index:1000;padding:1.25em 1em;height:100%;overflow:auto}
#toc.toc2 #toctitle{margin-top:0;margin-bottom:.8rem;font-size:1.2em}
#toc.toc2>ul{font-size:.9em;margin-bottom:0}
#toc.toc2 ul ul{margin-left:0;padding-left:1em}
#toc.toc2 ul.sectlevel0 ul.sectlevel1{padding-left:0;margin-top:.5em;margin-bottom:.5em}
body.toc2.toc-right{padding-left:0;padding-right:15em}
body.toc2.toc-right #toc.toc2{border-right-width:0;border-left:1px solid #e7e7e9;left:auto;right:0}}
@media screen and (min-width:1280px){body.toc2{padding-left:20em;padding-right:0}
#toc.toc2{width:20em}
#toc.toc2 #toctitle{font-size:1.375em}
#toc.toc2>ul{font-size:.95em}
#toc.toc2 ul ul{padding-left:1.25em}
body.toc2.toc-right{padding-left:0;padding-right:20em}}
#content #toc{border-style:solid;border-width:1px;border-color:#e0e0dc;margin-bottom:1.25em;padding:1.25em;background:#f8f8f7;-webkit-border-radius:4px;border-radius:4px}
#content #toc>:first-child{margin-top:0}
#content #toc>:last-child{margin-bottom:0}
#footer{max-width:100%;background:rgba(0,0,0,.8);padding:1.25em}
#footer-text{color:rgba(255,255,255,.8);line-height:1.44}
#content{margin-bottom:.625em}
.sect1{padding-bottom:.625em}
@media screen and (min-width:768px){#content{margin-bottom:1.25em}
.sect1{padding-bottom:1.25em}}
.sect1:last-child{padding-bottom:0}
.sect1+.sect1{border-top:1px solid #e7e7e9}
#content h1>a.anchor,h2>a.anchor,h3>a.anchor,#toctitle>a.anchor,.sidebarblock>.content>.title>a.anchor,h4>a.anchor,h5>a.anchor,h6>a.anchor{position:absolute;z-index:1001;width:1.5ex;margin-left:-1.5ex;display:block;text-decoration:none!important;visibility:hidden;text-align:center;font-weight:400}
#content h1>a.anchor::before,h2>a.anchor::before,h3>a.anchor::before,#toctitle>a.anchor::before,.sidebarblock>.content>.title>a.anchor::before,h4>a.anchor::before,h5>a.anchor::before,h6>a.anchor::before{content:"\00A7";font-size:.85em;display:block;padding-top:.1em}
#content h1:hover>a.anchor,#content h1>a.anchor:hover,h2:hover>a.anchor,h2>a.anchor:hover,h3:hover>a.anchor,#toctitle:hover>a.anchor,.sidebarblock>.content>.title:hover>a.anchor,h3>a.anchor:hover,#toctitle>a.anchor:hover,.sidebarblock>.content>.title>a.anchor:hover,h4:hover>a.anchor,h4>a.anchor:hover,h5:hover>a.anchor,h5>a.anchor:hover,h6:hover>a.anchor,h6>a.anchor:hover{visibility:visible}
#content h1>a.link,h2>a.link,h3>a.link,#toctitle>a.link,.sidebarblock>.content>.title>a.link,h4>a.link,h5>a.link,h6>a.link{color:#ba3925;text-decoration:none}
#content h1>a.link:hover,h2>a.link:hover,h3>a.link:hover,#toctitle>a.link:hover,.sidebarblock>.content>.title>a.link:hover,h4>a.link:hover,h5>a.link:hover,h6>a.link:hover{color:#a53221}
details,.audioblock,.imageblock,.literalblock,.listingblock,.stemblock,.videoblock{margin-bottom:1.25em}
details>summary:first-of-type{cursor:pointer;display:list-item;outline:none;margin-bottom:.75em}
.admonitionblock td.content>.title,.audioblock>.title,.exampleblock>.title,.imageblock>.title,.listingblock>.title,.literalblock>.title,.stemblock>.title,.openblock>.title,.paragraph>.title,.quoteblock>.title,table.tableblock>.title,.verseblock>.title,.videoblock>.title,.dlist>.title,.olist>.title,.ulist>.title,.qlist>.title,.hdlist>.title{text-rendering:optimizeLegibility;text-align:left;font-family:"Noto Serif","DejaVu Serif",serif;font-size:1rem;font-style:italic}
table.tableblock.fit-content>caption.title{white-space:nowrap;width:0}
.paragraph.lead>p,#preamble>.sectionbody>[class="paragraph"]:first-of-type p{font-size:1.21875em;line-height:1.6;color:rgba(0,0,0,.85)}
table.tableblock #preamble>.sectionbody>[class="paragraph"]:first-of-type p{font-size:inherit}
.admonitionblock>table{border-collapse:separate;border:0;background:none;width:100%}
.admonitionblock>table td.icon{text-align:center;width:80px}
.admonitionblock>table td.icon img{max-width:none}
.admonitionblock>table td.icon .title{font-weight:bold;font-family:"Open Sans","DejaVu Sans",sans-serif;text-transform:uppercase}
.admonitionblock>table td.content{padding-left:1.125em;padding-right:1.25em;border-left:1px solid #dddddf;color:rgba(0,0,0,.6)}
.admonitionblock>table td.content>:last-child>:last-child{margin-bottom:0}
.exampleblock>.content{border-style:solid;border-width:1px;border-color:#e6e6e6;margin-bottom:1.25em;padding:1.25em;background:#fff;-webkit-border-radius:4px;border-radius:4px}
.exampleblock>.content>:first-child{margin-top:0}
.exampleblock>.content>:last-child{margin-bottom:0}
.sidebarblock{border-style:solid;border-width:1px;border-color:#dbdbd6;margin-bottom:1.25em;padding:1.25em;background:#f3f3f2;-webkit-border-radius:4px;border-radius:4px}
.sidebarblock>:first-child{margin-top:0}
.sidebarblock>:last-child{margin-bottom:0}
.sidebarblock>.content>.title{color:#7a2518;margin-top:0;text-align:center}
.exampleblock>.content>:last-child>:last-child,.exampleblock>.content .olist>ol>li:last-child>:last-child,.exampleblock>.content .ulist>ul>li:last-child>:last-child,.exampleblock>.content .qlist>ol>li:last-child>:last-child,.sidebarblock>.content>:last-child>:last-child,.sidebarblock>.content .olist>ol>li:last-child>:last-child,.sidebarblock>.content .ulist>ul>li:last-child>:last-child,.sidebarblock>.content .qlist>ol>li:last-child>:last-child{margin-bottom:0}
.literalblock pre,.listingblock>.content>pre{-webkit-border-radius:4px;border-radius:4px;word-wrap:break-word;overflow-x:auto;padding:1em;font-size:.8125em}
@media screen and (min-width:768px){.literalblock pre,.listingblock>.content>pre{font-size:.90625em}}
@media screen and (min-width:1280px){.literalblock pre,.listingblock>.content>pre{font-size:1em}}
.literalblock pre,.listingblock>.content>pre:not(.highlight),.listingblock>.content>pre[class="highlight"],.listingblock>.content>pre[class^="highlight "]{background:#f7f7f8}
.literalblock.output pre{color:#f7f7f8;background:rgba(0,0,0,.9)}
.listingblock>.content{position:relative}
.listingblock code[data-lang]::before{display:none;content:attr(data-lang);position:absolute;font-size:.75em;top:.425rem;right:.5rem;line-height:1;text-transform:uppercase;color:inherit;opacity:.5}
.listingblock:hover code[data-lang]::before{display:block}
.listingblock.terminal pre .command::before{content:attr(data-prompt);padding-right:.5em;color:inherit;opacity:.5}
.listingblock.terminal pre .command:not([data-prompt])::before{content:"$"}
.listingblock pre.highlightjs{padding:0}
.listingblock pre.highlightjs>code{padding:1em;-webkit-border-radius:4px;border-radius:4px}
.listingblock pre.prettyprint{border-width:0}
.prettyprint{background:#f7f7f8}
pre.prettyprint .linenums{line-height:1.45;margin-left:2em}
pre.prettyprint li{background:none;list-style-type:inherit;padding-left:0}
pre.prettyprint li code[data-lang]::before{opacity:1}
pre.prettyprint li:not(:first-child) code[data-lang]::before{display:none}
table.linenotable{border-collapse:separate;border:0;margin-bottom:0;background:none}
table.linenotable td[class]{color:inherit;vertical-align:top;padding:0;line-height:inherit;white-space:normal}
table.linenotable td.code{padding-left:.75em}
table.linenotable td.linenos{border-right:1px solid currentColor;opacity:.35;padding-right:.5em}
pre.pygments .lineno{border-right:1px solid currentColor;opacity:.35;display:inline-block;margin-right:.75em}
pre.pygments .lineno::before{content:"";margin-right:-.125em}
.quoteblock{margin:0 1em 1.25em 1.5em;display:table}
.quoteblock:not(.excerpt)>.title{margin-left:-1.5em;margin-bottom:.75em}
.quoteblock blockquote,.quoteblock p{color:rgba(0,0,0,.85);font-size:1.15rem;line-height:1.75;word-spacing:.1em;letter-spacing:0;font-style:italic;text-align:justify}
.quoteblock blockquote{margin:0;padding:0;border:0}
.quoteblock blockquote::before{content:"\201c";float:left;font-size:2.75em;font-weight:bold;line-height:.6em;margin-left:-.6em;color:#7a2518;text-shadow:0 1px 2px rgba(0,0,0,.1)}
.quoteblock blockquote>.paragraph:last-child p{margin-bottom:0}
.quoteblock .attribution{margin-top:.75em;margin-right:.5ex;text-align:right}
.verseblock{margin:0 1em 1.25em}
.verseblock pre{font-family:"Open Sans","DejaVu Sans",sans;font-size:1.15rem;color:rgba(0,0,0,.85);font-weight:300;text-rendering:optimizeLegibility}
.verseblock pre strong{font-weight:400}
.verseblock .attribution{margin-top:1.25rem;margin-left:.5ex}
.quoteblock .attribution,.verseblock .attribution{font-size:.9375em;line-height:1.45;font-style:italic}
.quoteblock .attribution br,.verseblock .attribution br{display:none}
.quoteblock .attribution cite,.verseblock .attribution cite{display:block;letter-spacing:-.025em;color:rgba(0,0,0,.6)}
.quoteblock.abstract blockquote::before,.quoteblock.excerpt blockquote::before,.quoteblock .quoteblock blockquote::before{display:none}
.quoteblock.abstract blockquote,.quoteblock.abstract p,.quoteblock.excerpt blockquote,.quoteblock.excerpt p,.quoteblock .quoteblock blockquote,.quoteblock .quoteblock p{line-height:1.6;word-spacing:0}
.quoteblock.abstract{margin:0 1em 1.25em;display:block}
.quoteblock.abstract>.title{margin:0 0 .375em;font-size:1.15em;text-align:center}
.quoteblock.excerpt>blockquote,.quoteblock .quoteblock{padding:0 0 .25em 1em;border-left:.25em solid #dddddf}
.quoteblock.excerpt,.quoteblock .quoteblock{margin-left:0}
.quoteblock.excerpt blockquote,.quoteblock.excerpt p,.quoteblock .quoteblock blockquote,.quoteblock .quoteblock p{color:inherit;font-size:1.0625rem}
.quoteblock.excerpt .attribution,.quoteblock .quoteblock .attribution{color:inherit;text-align:left;margin-right:0}
table.tableblock{max-width:100%;border-collapse:separate}
p.tableblock:last-child{margin-bottom:0}
td.tableblock>.content>:last-child{margin-bottom:-1.25em}
td.tableblock>.content>:last-child.sidebarblock{margin-bottom:0}
table.tableblock,th.tableblock,td.tableblock{border:0 solid #dedede}
table.grid-all>thead>tr>.tableblock,table.grid-all>tbody>tr>.tableblock{border-width:0 1px 1px 0}
table.grid-all>tfoot>tr>.tableblock{border-width:1px 1px 0 0}
table.grid-cols>*>tr>.tableblock{border-width:0 1px 0 0}
table.grid-rows>thead>tr>.tableblock,table.grid-rows>tbody>tr>.tableblock{border-width:0 0 1px}
table.grid-rows>tfoot>tr>.tableblock{border-width:1px 0 0}
table.grid-all>*>tr>.tableblock:last-child,table.grid-cols>*>tr>.tableblock:last-child{border-right-width:0}
table.grid-all>tbody>tr:last-child>.tableblock,table.grid-all>thead:last-child>tr>.tableblock,table.grid-rows>tbody>tr:last-child>.tableblock,table.grid-rows>thead:last-child>tr>.tableblock{border-bottom-width:0}
table.frame-all{border-width:1px}
table.frame-sides{border-width:0 1px}
table.frame-topbot,table.frame-ends{border-width:1px 0}
table.stripes-all tr,table.stripes-odd tr:nth-of-type(odd),table.stripes-even tr:nth-of-type(even),table.stripes-hover tr:hover{background:#f8f8f7}
th.halign-left,td.halign-left{text-align:left}
th.halign-right,td.halign-right{text-align:right}
th.halign-center,td.halign-center{text-align:center}
th.valign-top,td.valign-top{vertical-align:top}
th.valign-bottom,td.valign-bottom{vertical-align:bottom}
th.valign-middle,td.valign-middle{vertical-align:middle}
table thead th,table tfoot th{font-weight:bold}
tbody tr th{display:table-cell;line-height:1.6;background:#f7f8f7}
tbody tr th,tbody tr th p,tfoot tr th,tfoot tr th p{color:rgba(0,0,0,.8);font-weight:bold}
p.tableblock>code:only-child{background:none;padding:0}
p.tableblock{font-size:1em}
ol{margin-left:1.75em}
ul li ol{margin-left:1.5em}
dl dd{margin-left:1.125em}
dl dd:last-child,dl dd:last-child>:last-child{margin-bottom:0}
ol>li p,ul>li p,ul dd,ol dd,.olist .olist,.ulist .ulist,.ulist .olist,.olist .ulist{margin-bottom:.625em}
ul.checklist,ul.none,ol.none,ul.no-bullet,ol.no-bullet,ol.unnumbered,ul.unstyled,ol.unstyled{list-style-type:none}
ul.no-bullet,ol.no-bullet,ol.unnumbered{margin-left:.625em}
ul.unstyled,ol.unstyled{margin-left:0}
ul.checklist{margin-left:.625em}
ul.checklist li>p:first-child>.fa-square-o:first-child,ul.checklist li>p:first-child>.fa-check-square-o:first-child{width:1.25em;font-size:.8em;position:relative;bottom:.125em}
ul.checklist li>p:first-child>input[type="checkbox"]:first-child{margin-right:.25em}
ul.inline{display:-ms-flexbox;display:-webkit-box;display:flex;-ms-flex-flow:row wrap;-webkit-flex-flow:row wrap;flex-flow:row wrap;list-style:none;margin:0 0 .625em -1.25em}
ul.inline>li{margin-left:1.25em}
.unstyled dl dt{font-weight:400;font-style:normal}
ol.arabic{list-style-type:decimal}
ol.decimal{list-style-type:decimal-leading-zero}
ol.loweralpha{list-style-type:lower-alpha}
ol.upperalpha{list-style-type:upper-alpha}
ol.lowerroman{list-style-type:lower-roman}
ol.upperroman{list-style-type:upper-roman}
ol.lowergreek{list-style-type:lower-greek}
.hdlist>table,.colist>table{border:0;background:none}
.hdlist>table>tbody>tr,.colist>table>tbody>tr{background:none}
td.hdlist1,td.hdlist2{vertical-align:top;padding:0 .625em}
td.hdlist1{font-weight:bold;padding-bottom:1.25em}
.literalblock+.colist,.listingblock+.colist{margin-top:-.5em}
.colist td:not([class]):first-child{padding:.4em .75em 0;line-height:1;vertical-align:top}
.colist td:not([class]):first-child img{max-width:none}
.colist td:not([class]):last-child{padding:.25em 0}
.thumb,.th{line-height:0;display:inline-block;border:solid 4px #fff;-webkit-box-shadow:0 0 0 1px #ddd;box-shadow:0 0 0 1px #ddd}
.imageblock.left{margin:.25em .625em 1.25em 0}
.imageblock.right{margin:.25em 0 1.25em .625em}
.imageblock>.title{margin-bottom:0}
.imageblock.thumb,.imageblock.th{border-width:6px}
.imageblock.thumb>.title,.imageblock.th>.title{padding:0 .125em}
.image.left,.image.right{margin-top:.25em;margin-bottom:.25em;display:inline-block;line-height:0}
.image.left{margin-right:.625em}
.image.right{margin-left:.625em}
a.image{text-decoration:none;display:inline-block}
a.image object{pointer-events:none}
sup.footnote,sup.footnoteref{font-size:.875em;position:static;vertical-align:super}
sup.footnote a,sup.footnoteref a{text-decoration:none}
sup.footnote a:active,sup.footnoteref a:active{text-decoration:underline}
#footnotes{padding-top:.75em;padding-bottom:.75em;margin-bottom:.625em}
#footnotes hr{width:20%;min-width:6.25em;margin:-.25em 0 .75em;border-width:1px 0 0}
#footnotes .footnote{padding:0 .375em 0 .225em;line-height:1.3334;font-size:.875em;margin-left:1.2em;margin-bottom:.2em}
#footnotes .footnote a:first-of-type{font-weight:bold;text-decoration:none;margin-left:-1.05em}
#footnotes .footnote:last-of-type{margin-bottom:0}
#content #footnotes{margin-top:-.625em;margin-bottom:0;padding:.75em 0}
.gist .file-data>table{border:0;background:#fff;width:100%;margin-bottom:0}
.gist .file-data>table td.line-data{width:99%}
div.unbreakable{page-break-inside:avoid}
.big{font-size:larger}
.small{font-size:smaller}
.underline{text-decoration:underline}
.overline{text-decoration:overline}
.line-through{text-decoration:line-through}
.aqua{color:#00bfbf}
.aqua-background{background:#00fafa}
.black{color:#000}
.black-background{background:#000}
.blue{color:#0000bf}
.blue-background{background:#0000fa}
.fuchsia{color:#bf00bf}
.fuchsia-background{background:#fa00fa}
.gray{color:#606060}
.gray-background{background:#7d7d7d}
.green{color:#006000}
.green-background{background:#007d00}
.lime{color:#00bf00}
.lime-background{background:#00fa00}
.maroon{color:#600000}
.maroon-background{background:#7d0000}
.navy{color:#000060}
.navy-background{background:#00007d}
.olive{color:#606000}
.olive-background{background:#7d7d00}
.purple{color:#600060}
.purple-background{background:#7d007d}
.red{color:#bf0000}
.red-background{background:#fa0000}
.silver{color:#909090}
.silver-background{background:#bcbcbc}
.teal{color:#006060}
.teal-background{background:#007d7d}
.white{color:#bfbfbf}
.white-background{background:#fafafa}
.yellow{color:#bfbf00}
.yellow-background{background:#fafa00}
span.icon>.fa{cursor:default}
a span.icon>.fa{cursor:inherit}
.admonitionblock td.icon [class^="fa icon-"]{font-size:2.5em;text-shadow:1px 1px 2px rgba(0,0,0,.5);cursor:default}
.admonitionblock td.icon .icon-note::before{content:"\f05a";color:#19407c}
.admonitionblock td.icon .icon-tip::before{content:"\f0eb";text-shadow:1px 1px 2px rgba(155,155,0,.8);color:#111}
.admonitionblock td.icon .icon-warning::before{content:"\f071";color:#bf6900}
.admonitionblock td.icon .icon-caution::before{content:"\f06d";color:#bf3400}
.admonitionblock td.icon .icon-important::before{content:"\f06a";color:#bf0000}
.conum[data-value]{display:inline-block;color:#fff!important;background:rgba(0,0,0,.8);-webkit-border-radius:100px;border-radius:100px;text-align:center;font-size:.75em;width:1.67em;height:1.67em;line-height:1.67em;font-family:"Open Sans","DejaVu Sans",sans-serif;font-style:normal;font-weight:bold}
.conum[data-value] *{color:#fff!important}
.conum[data-value]+b{display:none}
.conum[data-value]::after{content:attr(data-value)}
pre .conum[data-value]{position:relative;top:-.125em}
b.conum *{color:inherit!important}
.conum:not([data-value]):empty{display:none}
dt,th.tableblock,td.content,div.footnote{text-rendering:optimizeLegibility}
h1,h2,p,td.content,span.alt{letter-spacing:-.01em}
p strong,td.content strong,div.footnote strong{letter-spacing:-.005em}
p,blockquote,dt,td.content,span.alt{font-size:1.0625rem}
p{margin-bottom:1.25rem}
.sidebarblock p,.sidebarblock dt,.sidebarblock td.content,p.tableblock{font-size:1em}
.exampleblock>.content{background:#fffef7;border-color:#e0e0dc;-webkit-box-shadow:0 1px 4px #e0e0dc;box-shadow:0 1px 4px #e0e0dc}
.print-only{display:none!important}
@page{margin:1.25cm .75cm}
@media print{*{-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:none!important}
html{font-size:80%}
a{color:inherit!important;text-decoration:underline!important}
a.bare,a[href^="#"],a[href^="mailto:"]{text-decoration:none!important}
a[href^="http:"]:not(.bare)::after,a[href^="https:"]:not(.bare)::after{content:"(" attr(href) ")";display:inline-block;font-size:.875em;padding-left:.25em}
abbr[title]::after{content:" (" attr(title) ")"}
pre,blockquote,tr,img,object,svg{page-break-inside:avoid}
thead{display:table-header-group}
svg{max-width:100%}
p,blockquote,dt,td.content{font-size:1em;orphans:3;widows:3}
h2,h3,#toctitle,.sidebarblock>.content>.title{page-break-after:avoid}
#toc,.sidebarblock,.exampleblock>.content{background:none!important}
#toc{border-bottom:1px solid #dddddf!important;padding-bottom:0!important}
body.book #header{text-align:center}
body.book #header>h1:first-child{border:0!important;margin:2.5em 0 1em}
body.book #header .details{border:0!important;display:block;padding:0!important}
body.book #header .details span:first-child{margin-left:0!important}
body.book #header .details br{display:block}
body.book #header .details br+span::before{content:none!important}
body.book #toc{border:0!important;text-align:left!important;padding:0!important;margin:0!important}
body.book #toc,body.book #preamble,body.book h1.sect0,body.book .sect1>h2{page-break-before:always}
.listingblock code[data-lang]::before{display:block}
#footer{padding:0 .9375em}
.hide-on-print{display:none!important}
.print-only{display:block!important}
.hide-for-print{display:none!important}
.show-for-print{display:inherit!important}}
@media print,amzn-kf8{#header>h1:first-child{margin-top:1.25rem}
.sect1{padding:0!important}
.sect1+.sect1{border:0}
#footer{background:none}
#footer-text{color:rgba(0,0,0,.6);font-size:.9em}}
@media amzn-kf8{#header,#content,#footnotes,#footer{padding:0}}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Ads. -->
<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6590816372910687"
     crossorigin="anonymous"></script> -->

<!-- We could also include Javascript
     for example in this document. -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
     (function(){
     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
     s1.async=true;
     s1.src='https://embed.tawk.to/633f134c37898912e96d3fbe/1gen66p79';
     s1.charset='UTF-8';
     s1.setAttribute('crossorigin','*');
     s0.parentNode.insertBefore(s1,s0);
     })();
     </script>
<!--End of Tawk.to Script-->

<!--Start of MailChimp Subscribe Pop Up Script-->
<!-- <script id="mcjs">!
     function(c,h,i,m,p){
          m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)
     }(document,"script","https://chimpstatic.com/mcjs-connected/js/users/71dd098dcbd6c5501a0a533d3/876294ece12132fcfb943798d.js");
     </script> -->
<!--End of MailChimp Subscribe Pop Up Script-->

  <!-- add the applause button style & script (head) -->
  <!-- <link rel="stylesheet" href="applause-button.css" />
  <script src="applause-button.js"></script> -->

<!--Start commentics comments-->
<!-- <script src="http://siliconwit.com/comments/embed.js"></script> -->

<!-- Change some CSS for TOC -->
<style>
/* Change CSS overflow for table of contents. */
#toc.toc2, #toc { overflow: scroll; }

/* Change styling for footer text. */
/* .footer-text { color: rgba(255,255,255,.8); background: rgba(0,0,0,.8); text-align: center;} */

.footer-text {
    background: rgba(0,0,0,.8);
    color: rgba(255,255,255,.8);
    padding: 1.25em;
    margin: 0;
    font-family: "Noto Serif","DejaVu Serif",serif;
    font-size: 100%;
    text-align: center;
    line-height: 1;
    position: relative;
    cursor: auto;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    word-wrap: anywhere;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

/* Subscribe button CSS */
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  margin:5px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}

</style>

</head>
<body class="book toc2 toc-left">
<div id="header">
<h1>Modelling and Simulation: Theory and Examples</h1>
<div class="details">
<span id="author" class="author">Dr. Sam Macharia</span><br>
<span id="email" class="email"><a href="https://orcid.org/0000-0002-7326-7502" class="bare">https://orcid.org/0000-0002-7326-7502</a></span><br>
<span id="author2" class="author">Home</span><br>
<span id="email2" class="email"><a href="https://SiliconWit.com" class="bare">https://SiliconWit.com</a></span><br>
</div>
<div id="toc" class="toc2">
<div id="toctitle">Table of Contents</div>
<ul class="sectlevel1">
<li><a href="#_random_process">1. Random Process</a>
<ul class="sectlevel2">
<li><a href="#_discrete_random_variable">1.1. Discrete random variable</a></li>
<li><a href="#_continuous_random_variable">1.2. Continuous random variable</a></li>
<li><a href="#_gamblers_ruin">1.3. <span class="icon"><i class="fa fa-info-circle"></i></span> Gambler&#8217;s Ruin</a></li>
</ul>
</li>
<li><a href="#_makov_process">2. Makov Process</a>
<ul class="sectlevel2">
<li><a href="#_a_2_state_markov_chain">2.1. <span class="icon"><i class="fa fa-info-circle"></i></span> A 2 state markov chain</a></li>
<li><a href="#_a_3_state_markov_chain">2.2. <span class="icon"><i class="fa fa-info-circle"></i></span> A 3 state markov chain</a></li>
</ul>
</li>
<li><a href="#_differentiation_and_integration">3. Differentiation and Integration</a>
<ul class="sectlevel2">
<li><a href="#_using_python_to_find_derivatives_and_integrals">3.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Using Python to find derivatives and integrals .</a></li>
<li><a href="#_spread_of_virus_using_the_sir_model">3.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Spread of virus using the SIR Model.</a></li>
</ul>
</li>
<li><a href="#_monte_carlo_simulation">4. Monte Carlo Simulation</a>
<ul class="sectlevel2">
<li><a href="#_calculate_the_aproximate_value_of_pi">4.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Calculate the aproximate value of \(\pi\).</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div id="content">
<div id="preamble">
<div class="sectionbody">
<!-- Website logo and Subscribe button -->

<div style="display: flex; justify-content: flex-end">
    <div>
<!-- cellspacing="0" cellpadding="0"  -->
<table border="1" frame="void" rules="all">
    <tr>
      <td class="first">
        <a href="https://siliconwit.com/">
            <img alt="SiliconWit" src="SiWit.png" width="50" height="50">
        </a>
      </td>
      <td class="second">
        <button class="button-3" onclick="location.href='https://50312631.sibforms.com/serve/MUIEAMNpGV92xSPcDr_46NegYWAVvHPghmb-X7Mk-vXlVoMCv9HHTuNuahdOqK57NP8x4zxM22qPmxUgAdBtg4XOOcWwqQzEDR3BrSfpzO2nagCGGlV1WXEBTOvf90PUd6UUMxZ1PmgLpZ4w0pXK0Iqg5brcEwooD91t2lP1hZd7LUtYh4SVBBKHJ2il_RHD5zB4dhSVuMbiVVSb';">
            Subscribe to SiliconWit.com</button>
      </td>
    </tr>
  </table>
    </div>
</div>

  <!-- <div style="display: flex; justify-content: flex-end">
    <div>I'm on the right</div>
  </div> -->
</div>
</div>
<div class="sect1">
<h2 id="_random_process">1. Random Process</h2>
<div class="sectionbody">
<div class="ulist">
<ul>
<li>
<p>It is better to think of a random process in terms of a function rather than a variable.</p>
</li>
<li>
<p>In a random function, say, <code>random(x)</code>, \(x\) is the sample space of random outcomes that are possible after performing a certain stochastic process such as tossing a fair coin.</p>
</li>
<li>
<p>Let&#8217;s say we are tossing a pair of coins. The outcome does not have to be a number. It can be heads or tails. However, the number of possible outcomes lies in a certain range, say, <code>range(x)</code>.</p>
</li>
</ul>
</div>
<div class="stemblock">
<div class="content">
\[\begin{align}
random(x) &amp;=
\begin{cases}
  Coin 1 &amp;= [H, H, T, T]\\
  Coin 2 &amp;= [H, T, H, T]
\end{cases}
\\
range(x) &amp;= [1, 2, 3, 4]
\end{align}\]
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>\(x\) outputs an outcome from <code>range(x)</code> using a probability distribution that represents a likelihood of occurrences of events within the sample space.</p>
</li>
<li>
<p>In the above coin-tossing experiment, the sum of the probabilities of all outcomes should add up to 1 because a coin toss will always yield some output.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>\(P_{\text{1 or 2 or 3 or 4}} = P_1 + P_2 + P_3 + P_4 = 1\)</p>
</div>
<div class="ulist">
<ul>
<li>
<p>\(x\) can be discrete or continuous.</p>
</li>
</ul>
</div>
<div class="sect2">
<h3 id="_discrete_random_variable">1.1. Discrete random variable</h3>
<div class="ulist">
<ul>
<li>
<p>A <strong>discrete random variable</strong> can take a distict or separate values.</p>
</li>
<li>
<p>Discrete random variable is <strong>countably infinite</strong></p>
</li>
<li>
<p>A coin toss</p>
</li>
</ul>
</div>
<div class="stemblock">
<div class="content">
\[x =
\begin{cases}
  Head &amp;= [1]\\
  Tail &amp;= [0]
\end{cases}\]
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>The year that a random student in a school was born</p>
</li>
<li>
<p>The number of mosquitos born yesterday on earth</p>
</li>
<li>
<p>Winning time of random athrets to the nearest 2 decimals</p>
</li>
<li>
<p>The number of cars passing at a certain junction at a certain time</p>
</li>
<li>
<p>A discrete random variable can be countable finite or approach infinite values. At least you can list a few specific values.</p>
</li>
<li>
<p>The probability distribution of a discrete random variable is called <strong>Probability Mass Function (PMF)</strong></p>
</li>
</ul>
</div>
</div>
<div class="sect2">
<h3 id="_continuous_random_variable">1.2. Continuous random variable</h3>
<div class="ulist">
<ul>
<li>
<p>A <strong>continuous random variable</strong> can take any value in an interval.</p>
</li>
<li>
<p>Continuous random variable is <strong>uncountably infinite</strong></p>
</li>
</ul>
</div>
<div class="stemblock">
<div class="content">
\[x =
\begin{cases}
  \textbf{Exact mass}\text{ of random organisms on earth}
\end{cases}\]
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>Even if you could find a range of this mass, the exact mass of a certain organism at a given time could have several decimal points&#8230;&#8203;</p>
</li>
<li>
<p>Precisely exact winning time of random athrets</p>
</li>
<li>
<p>Temperature of a random place in a year measured at a high precision</p>
</li>
<li>
<p><strong>A real-world example of a true case of a continuous random variable is rare.</strong></p>
</li>
<li>
<p>A continuous random variable can be uncountable infinite values. You cannot list a few specific values.</p>
</li>
<li>
<p>The probability distribution of a continuous random variable is called <strong>Probability Density Function (PDF)</strong></p>
</li>
<li>
<p>Each variable can take on a different value from a probability distribution.</p>
</li>
<li>
<p>A <strong>random process</strong> can be discrete or continuous depending on whether its member variables are discrete or continuous.</p>
</li>
</ul>
</div>
</div>
<div class="sect2">
<h3 id="_gamblers_ruin">1.3. <span class="icon"><i class="fa fa-info-circle"></i></span> Gambler&#8217;s Ruin</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A gambler has KES 500. They can only bet in increments of KES 100. They can only win or lose KES 100 per bet. They will keep gambling until they either lost all their money (KES 0) or win KES 1000. Simulate this gambling situation.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="stemblock">
<div class="content">
\[\text{gambling outcome, } x =
\begin{cases}
  \text{Win KES 100 (P = 50%)} &amp;= [+100] \\
  \text{Lose KES 100 (P = 50%)} &amp;= [-100]
\end{cases}\]
</div>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlightjs highlight"><code data-lang="python" class="language-python hljs">import numpy as np
import random
import matplotlib.pyplot as plt

def gamble():
    start_money = 500
    win_money = 1000
    bet_size = 100
    win_lose = 100
    gambling_range = range(win_lose,win_money)
    simul_gamble = []
    while start_money in gambling_range:
        win_lose = bet_size*random.randrange(-1, 2, step=2)
        start_money += win_lose
        simul_gamble.append(start_money)
    return simul_gamble

plt.plot(gamble(), marker = 'o')</code></pre>
</div>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_makov_process">2. Makov Process</h2>
<div class="sectionbody">
<div class="paragraph">
<p>The future evolution of the process depends only on the instant observation of the system and not on the past.</p>
</div>
<div class="sect2">
<h3 id="_a_2_state_markov_chain">2.1. <span class="icon"><i class="fa fa-info-circle"></i></span> A 2 state markov chain</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Assume you have 2 shirts, white and blue. Their state space is \(S = {W,B}\).</p>
</div>
<div class="ulist">
<ul>
<li>
<p>The probability of you wearing a white shirt and continue wearing the white shirt is 0.7.</p>
</li>
<li>
<p>The probability of changing the white shirt to a blue shirt is 0.3.</p>
</li>
<li>
<p>Once you&#8217;re wearing a blue shirt, the probability of you continue wearing the blue shirt is 0.4.</p>
</li>
<li>
<p>The probability of changing the blue shirt to the white shirt is 0.6.</p>
</li>
</ul>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="stemblock">
<div class="content">
\[\text{2 Shirts} =
\begin{cases}
P(W|W) &amp;= 0.7\\
P(B|W) &amp;= 0.3\\
P(W|B) &amp;= 0.6\\
P(B|B) &amp;= 0.4
\end{cases}\]
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>Suppose you repeat this for several days. Let&#8217;s say today is Monday and you&#8217;ve already decided that you&#8217;ll wear a white shirt. \(S = {1,0}\)</p>
</li>
<li>
<p>What is the probability of you wearing a white or blue shirt on Tuesday through Friday?</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>(i) At the end of Monday: Mon \(= S \times \text{trans_matrix}\)<br>
(ii) At the end of Tuesday: Tue \(= Mon \times \text{trans_matrix}\)<br>
(iii) At the end of Wednesday: Wed \(= Tue \times \text{trans_matrix}\)</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlightjs highlight"><code data-lang="python" class="language-python hljs">nodes = ['White', 'Blue']
trans_matrix = np.array([[0.7,0.3],[0.6,0.4]])
pd.DataFrame(trans_matrix, columns=nodes, index=nodes)</code></pre>
</div>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlightjs highlight"><code data-lang="python" class="language-python hljs">S = np.array([[1,0]])
Mon = np.matmul(S,trans_matrix)
Mon</code></pre>
</div>
</div>
<div class="listingblock">
<div class="content">
<pre class="highlightjs highlight"><code data-lang="python" class="language-python hljs">Tue = np.matmul(Mon,trans_matrix)
Tue</code></pre>
</div>
</div>
<div class="ulist">
<ul>
<li>
<p>If you are not decided, you can set \(S = [0.5, 0.5\)] or introduce randomness.</p>
</li>
</ul>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_a_3_state_markov_chain">2.2. <span class="icon"><i class="fa fa-info-circle"></i></span> A 3 state markov chain</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>There are 3 states:<br>
 - Home<br>
 - Bar<br>
 - Back Home</p>
</div>
<div class="ulist">
<ul>
<li>
<p>You only have one bar you go to if you want to go out.</p>
</li>
<li>
<p>From state <strong>Home</strong> you can only go out. The first assumption is that you have to go out to be in a bar.</p>
</li>
<li>
<p>From the <strong>Bar</strong>, you can stay in the bar or go back home.</p>
</li>
<li>
<p>For each time step, you have a 50% probability of going back home and a 50% probability of staying.</p>
</li>
<li>
<p>When you are <strong>Back Home</strong>, the only thing that you could do is stay home. It means you won&#8217;t go out again.</p>
</li>
</ul>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><div class="content"><div class="listingblock">
<div class="content">
<pre class="highlightjs highlight"><code data-lang="python" class="language-python hljs">import numpy as np
import pandas as pd

nodes = ['Home', 'Bar', 'Back Home']
trans_matrix = np.array([[0,1,0],[0,0.5,0.5],[0,0,1]])
pd.DataFrame(trans_matrix, columns=nodes, index=nodes)

# You're in the bar. Where can you go next?
# All nodes: np.arange(0,len(nodes),1)
# Bar transitions: trans_matrix[1]
print(np.random.choice(np.arange(0,len(nodes),1), p=trans_matrix[1]))</code></pre>
</div>
</div></div></td>
</tr>
</tbody>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_differentiation_and_integration">3. Differentiation and Integration</h2>
<div class="sectionbody">
<div class="sect2">
<h3 id="_using_python_to_find_derivatives_and_integrals">3.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Using Python to find derivatives and integrals .</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Use the <code>Python</code> <code>sympy</code> package to solve the following</p>
</div>
<div class="paragraph">
<p>(a) \(\frac{dy}{dx} = x^2\)<br>
(b) \(\frac{dy}{dx} = cos(x)\)<br>
(c) \(\frac{dy}{dx} = e^{x^2}\)<br>
(d) \(\frac{d^3y}{dx^3} = x^4\)<br>
(e) \(\int cos(x)\)<br>
(f) \(\int_0^\infty e^{-x}\)<br>
(g) \(\int_{-\infty}^{\infty}\int_{-\infty}^{\infty} e^{- x^{2} - y^{2}}\, dx\, dy\)</p>
</div>
<div class="paragraph">
<p>Use the <code>Python</code> <code>scipy</code> package to solve and plot the following</p>
</div>
<div class="paragraph">
<p>(a) \(\frac{dy(t)}{dt} = -k \ y(t)\)<br>
\(k = 0.3; y_0 = 5\)<br>
(b) \(\frac{dy(t)}{dt} = ke^t + y\)</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top"></th>
</tr>
</thead>
</table>
</div>
</details>
</div>
<div class="sect2">
<h3 id="_spread_of_virus_using_the_sir_model">3.2. <span class="icon"><i class="fa fa-info-circle"></i></span> Spread of virus using the SIR Model.</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>A new infectious flu virus is discovered to have infected \(10\%\) of a community. The rate of infection is \(0.35\) and that of recovery is \(0.1\). Given that no one has recovered so far, use the SIR Model to simulatet the spread of this virus.</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top"></th>
</tr>
</thead>
</table>
</div>
</details>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_monte_carlo_simulation">4. Monte Carlo Simulation</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Sometimes it is difficult to obtain an analytical solution of a problem. Monte carlo methods rely on repeated random sampling to obtain numerial results. Randomness may be used to solve some deterministic problems.</p>
</div>
<div class="sect2">
<h3 id="_calculate_the_aproximate_value_of_pi">4.1. <span class="icon"><i class="fa fa-info-circle"></i></span> Calculate the aproximate value of \(\pi\).</h3>
<div class="admonitionblock note">
<table>
<tr>
<td class="icon">
<i class="fa icon-note" title="Note"></i>
</td>
<td class="content">
<div class="paragraph">
<p>Use the monte carlo method to evaluate</p>
</div>
<div class="paragraph">
<p>(a) the approximate value of \(\pi\).<br>
(b) the approximate area of a triangle.<br>
(c) \(\int_{-3}^{3} e^{x^2}\)<br>
(d) \(\int_0^{15} \Big( \big(7x^3 + 20x^2 + 45x + 5 \big)^{\frac{1}{3}} \Big) e^{-\frac{1}{5}x} dx \)</p>
</div>
</td>
</tr>
</table>
</div>
<details>
<summary class="title"><em>Click to reveal/hide the solution.</em></summary>
<div class="content">
<table class="tableblock frame-all grid-all stretch">
<colgroup>
<col style="width: 100%;">
</colgroup>
<thead>
<tr>
<th class="tableblock halign-left valign-top"></th>
</tr>
</thead>
</table>
</div>
</details>
<!-- Step 1: Include the JavaScript SDK on your page once, ideally right after the opening body tag. -->
<!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=787925512262196&autoLogAppEvents=1" nonce="hUpr0zj0"></script> -->

<!-- add the button! (body) -->
<!-- <applause-button style="width: 58px; height: 58px;"/> -->

<!-- Start facebook comment section -->
<!-- Step 2: Place this code wherever you want the plugin to appear on your page. -->
<!-- <hr>

<div class="fb-comments" data-href="https://siliconwit.com/solid-mechanics" data-width="" data-numposts="20"></div>

<hr> -->

<!-- End facebook comment section -->

<!-- Start commentics comment section -->

<!-- <div id="commentics"></div> -->

<!-- Start commentics php comment section -->

<?php
$cmtx_identifier = 'modelling-and-simulation';
$cmtx_reference  = 'modelling-and-simulation';
$cmtx_folder     = '/comments/';
require($_SERVER['DOCUMENT_ROOT'] . $cmtx_folder . 'frontend/index.php');
?>
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/github.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
<script>hljs.initHighlighting()</script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  messageStyle: "none",
  tex2jax: {
    inlineMath: [["\\(", "\\)"]],
    displayMath: [["\\[", "\\]"]],
    ignoreClass: "nostem|nolatexmath"
  },
  asciimath2jax: {
    delimiters: [["\\$", "\\$"]],
    ignoreClass: "nostem|noasciimath"
  },
  TeX: { equationNumbers: { autoNumber: "all" } }
})
MathJax.Hub.Register.StartupHook("AsciiMath Jax Ready", function () {
  MathJax.InputJax.AsciiMath.postfilterHooks.Add(function (data, node) {
    if ((node = data.script.parentNode) && (node = node.parentNode) && node.classList.contains('stemblock')) {
      data.math.root.display = "block"
    }
    return data
  })
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_HTMLorMML"></script>
<p class="footer-text">
<!-- footer -->

<!-- Copyright text  -->
SiliconWit.com &copy; 2021-<script>document.write(new Date().getFullYear())</script> <!-- &#9997; Sam Macharia, PhD -->
&emsp;
<!-- Subscribe button -->
<button class="button-3" onclick="location.href='https://50312631.sibforms.com/serve/MUIEAMNpGV92xSPcDr_46NegYWAVvHPghmb-X7Mk-vXlVoMCv9HHTuNuahdOqK57NP8x4zxM22qPmxUgAdBtg4XOOcWwqQzEDR3BrSfpzO2nagCGGlV1WXEBTOvf90PUd6UUMxZ1PmgLpZ4w0pXK0Iqg5brcEwooD91t2lP1hZd7LUtYh4SVBBKHJ2il_RHD5zB4dhSVuMbiVVSb';"> Subscribe</button>

</p>
</body>
</html>