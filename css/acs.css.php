<?php // this is a PHP file so the global variable can be used for the image directory name ?>
<style type="text/css">

/* BEGIN GLOBAL */
* { margin: 0; padding: 0; }
img { border: none; }
/* END GLOBAL */

div#mainContentWrapper {
    width: 900px;
    font-family: Verdana,sans-serif;
    margin: 0 auto;
}
div#mainContentWrapper #masthead {
    margin: 0 0 10px 0;
}
div#mainContent {
    margin: 0 0 0 2px;
    padding: 10px 0px 10px 0px;
    width: 900px;
}
div#mainContent h1 {
    color: #000;
    margin: 0 0 10px 0;
    font-size: 1.8em;
}
div#mainContent h2 {
    color: #000;
    margin: 30px 0 10px 0;
    font-size: 1.5em;
}
div#mainContent p {
    margin: 0 0 10px 0;
    font-size: 1.1em;
    line-height: 1.2em;
}
div#mainContent ul,
div#mainContent ol {
    margin: 10px 30px 20px 40px;
}

/* @BEGIN LEFTNAV */
div#leftNav {
    text-align: center;
}
div#leftNav ul {
    width: 100%;
    list-style-type: none;
    margin-left: auto;
    margin-right: auto;
}
div#leftNav ul li {
    color: black;
    background: #eee;
    border: solid 2px #FFF;
    padding: 0px;
/*    width: 8em; */
    width: 8.5em;    /*6.9em;*/
    font-weight: bold;
    font-size: 0.9em;
    display: inline-block;
}
div#leftNav ul li.active {
    background: orange;
}
div#leftNav ul li a {
    display: block;
    padding: 5px 10px 5px 10px;
}

div#leftNav ul li a:link,
div#leftNav ul li a:visited {
    color: #000;
    display: block;
    text-decoration: none;
}
div#leftNav ul li a:hover {
    background-color: lightgray;
    display: block;
    text-decoration: none;
    color: #000;
}
/* @END LEFTNAV */


.footer {
  text-align: center;
  font-size: 0.9em;
}
.pageinfo {
  font-size: 0.8em;
  padding-top: 8px;
}

</style>
