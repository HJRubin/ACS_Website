<?
include('../template.inc.php');
G_header('Members of ACS');
include('people.inc.php'); // this file has the details about each person in it, along with helper functions
$P = G_getpeople();
?>
<font face="Lucida Bright"><font size="2.5">
<h2>Current members</h2>
<? G_showpeople($P, 'fu'); ?>

<h2>Atmospheric Modeling</h2>
<? G_showpeople($P, 'yang,ferrada,kuo,tipton,chien,rubin,zhang'); ?>

<h2>Mobile Source Group</h2>
<? G_showpeople($P, 'calcagno'); ?>

<h2>Alumni</h2>
<? G_showpeople($P, 'dong,tan,sun,huang,allen,li,lam,gao,deneale,diaz,curran,yun,kim');?>

<h2>Past and Current Visiting Scholars and Professors</h2>
<? G_showpeople($P, 'wang,litao,yun2,yang2');?>

<h2>Collaborations</h2>
<font face="Lucida Bright"><font size="3.0">
<b>Abacas [LINK]</b>
<a href="http://www.abacas-dss.com/abacas/Default.aspx" target="_new">
    http://www.abacas-dss.com/abacas/Default.aspx</a>

<? G_footer(); ?>
