<? // extra styles for how the information is displayed ?>
<style>
div.p_img {float: left; margin: 0px 7px 0px 7px;}
div.p_container {margin-top: 10px; margin-right:30px;}
div.p_name {font-size: 1.5em; font-weight: bold;}
div.p_info {font-size: 0.9em; font-style: italic; }
div.p_cv {font-size: 0.9em; font-style: bold; }
</style>

<?
function G_getpeople() {
// define people info here - 
// $P['id'] : $P is the variable name, id must be unique
// see the G_showperson function (below) for field information

$P['fu'] = array(
    'img'=>'jsfu.jpg',
    'name'=>'Dr. Joshua Fu',
    'title'=>'Professor<br>Department of Civil and Environmental Engineering',
    'email'=>'jsfu@utk.edu',
    'web'=>'http://web.utk.edu/~jsfu',
//    'info'=>"area1, area2, area3",
);

$P['lam'] = array(
	'name'=>'Yun-Fat Lam, Ph.D.',
	'title'=>'Associate Professor<br>Department of Geography',
	'email'=>'yunlam@hku.hk',
  	'img'=>'NickyLam2.jpg',
	'office'=>'University of Hong Kong',
  	'web'=>'https://www.geog.hku.hk/nyf-lam',
);

$P['wang'] = array(
	'name'=>'Shuxiao Wang',
	'title'=>"Professor<br>School of Environment,Tsinghua University",
	'img'=>'Shuxiao Wang.jpg'
);

$P['li'] = array(
	'name'=>'Juan Li',
	'title'=>'Senior Air Quality Monitoring Specialist',
	'img'=>'jian_li.png',
	'office'=>'Washington State Department of Ecology',
);

$P['huang'] = array(
	'name'=>'Kan Huang',
	'title'=>'Professor <br> Department of Environmental Science and Engineering',
	'img'=>'kan_huang3.jpg',
	'email'=>'huangkan@fudan.edu.cn',
	'office'=>'Fudan University',
	'web'=> 'https://atmsci.fudan.edu.cn/65/d4/c15845a157140/page.htm',
);

$P['gao'] = array(
	'name'=>'Yang Gao',
	'title'=>'Professor <br> Ocean University of China',
	'img'=>'yang_gao2.png',
	'email'=>'yanggao@ouc.edu.cn',
);

$P['allen'] = array(
	'name'=>'Melissa R. Dumas',
	'title'=>'Research Scientist and IAV Theme Lead <br> Oak Ridge National Laboratory',
	'img'=>'allen_melissa2.png',
);

$P['dong'] = array(
	'name'=>'Xinyi Dong',
	'title'=>'Associate Professor <br> School  of Atmospheric Sciences',
	'email'=>'dongxy@nju.edu.cn',
	'office'=>'Nanjing University',
        'img'=>'Dong XY.jpg',
	'web'=>'https://as.nju.edu.cn/3a/d3/c11341a473811/page.htm',
);

$P['deneale'] = array(
	'name'=>'Scott DeNeale',
	'title'=>'Staff<br>Oak Ridge National Laboratory',
	'img'=>'DeNeale.JPG',
);

$P['calcagno'] = array(
	'name'=>'Jimmy Calcagno',
	'title'=>'Postdoc Research Associate',
);

$P['yun'] = array(
	'name'=>'Jeongran Yun',
	'title'=>'Research scientist <br> Bureau of Air Quality Analysis & Research,  Division of Air Resources',
	'email'=>'jeongran.yun@dec.ny.gov',
	'office'=>'New York State Department of Environmental Conservation',
);


$P['kim'] = array(
	'name'=>'Yunhee Kim',
	'title'=>'Environmental Modeler <br> Air Protection Branch',
	'email'=>'yunhee.kim@dnr.ga.gov',
	'office'=>'Georgia Department of Natural Resources',
);


$P['yang'] = array(
	'name'=>'Cheng-en Yang',
	'title'=>'Post Doc.',
	'email'=>'cyang10@vols.utk.edu',
	'office'=>'RM 414, John D, Tickle Building',
	'img'=>'CE_Yang.jpg'
);

$P['sun'] = array(
	'name'=>'Jian Sun',
	'title'=>'Post Doctor <br> Pacific Northwest National Laboratory',
	'img'=>'Jian_Sun.JPG'
);

$P['tan'] = array(
	'name'=>'Jiani Tan',
	'title'=>'Post Doc.',
	'email'=>'tjiani@vols.utk.edu',
	'office'=>'Max Planck Institute for chemistry',
	'img'=>'jiani_tan2.png',
    	'web'=>'https://www.mpic.de/person/104163/2285',
);

$P['zhu'] = array(
	'name'=>'Qingzhao Zhu',
	'title'=>'Ph.D. Student',
	'email'=>'qzhu7@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'Qingzhao_Zhu.jpg'
);

$P['curran'] = array(
	'name'=>'Scott Curran',
	'title'=>'Research staff<br>Oak Ridge National Laboratory',
	'img'=>'scott-curran.jpg',
);

$P['diaz'] = array(
	'name'=>'Luis Alonso Diaz Robles <br> Department of Chemical Engineering',
	'title'=>'Titular Professor',
	'email'=>'alonso.diaz.r@usach.cl',
	'office'=>'University of Santiago, Chile',
	'img'=>'diaz-robles.jpg',
);

$P['litao'] = array(
	'name'=>'Litao Wang',
	'title'=>'Professor<br>College of Energy and Environmental Engineering<br>Hebei University of Engineering',
	'img'=>'litao_wang.jpg',
    'email'=>'wlt@tsinghua.edu.cn',
);

$P['yun2'] = array(
	'name'=>'Yun Zhu',
	'title'=>'Associate Professor<br>South China University of Technology',
	'web'=> '<a href="http://202.38.194.245/hgschool/indexfive/indexAboutus.do?op=showStaff&id=593&schoolFlagId=16">[link]</a>'
);

$P['yang2'] = array(
	'name'=>'Hang Yang',
	'title'=>'Ph.D. Student <br>Zhejiang University',
    'email'=>'yanghang901004@gmail.com',
    'img'=>'hang_yang.png',
);

$P['kuo'] = array(
	'name'=>'Cheng-pin Kuo',
	'title'=>'Ph.D. Student',
	'email'=>'ckuo6@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'CP_Kuo_2.jpg',
);

$P['tipton'] = array(
	'name'=>'Matthew Jonathan Tipton',
	'title'=>'Ph.D. Student',
	'email'=>'mtipton1@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'M_Tipton.jpg',
);

$P['chien'] = array(
	'name'=>'Rong-You Chien',
	'title'=>'Ph.D. Student',
	'email'=>'rchien@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'RY_Chien.jpg',
);


$P['gadeken'] = array(
	'name'=>'Kellie Gadeken',
	'title'=>'Ph.D. Student',
	'email'=>'kgadeken@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'Gadeken_K.jpg',
);


$P['rubin'] = array(
	'name'=>'Hannah Rubin',
	'title'=>'Ph.D. Student',
	'email'=>'hrubin@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'Rubin_H.jpg',
);


$P['zhang'] = array(
	'name'=>'Leyuan Zhang',
	'title'=>'Ph.D. Student',
	'email'=>'lzhan108@vols.utk.edu',
	'office'=>'RM 411, John D, Tickle Building',
	'img'=>'LY_Zhang.jpg',
);

$P['ferrada'] = array(
	'name'=>'Gonzalo Andres (Andrew) Ferrada',
	'title'=>'Post Doc.',
	'email'=>'gferrada@utk.edu',
	'office'=>'RM 414, John D, Tickle Building',
	'img'=>'G_Ferrada.jpg',
);


return $P;
} // end of G_getpeople function
?>

<?

// show a list of people
function G_showpeople($all,$list) {
  foreach (explode(',',$list) as $p) {
    G_showperson($all[$p]);
  }
}

// macro for most consistent / flexible person display
function G_showperson($p) { // uses an associative array to make code more readable and allow for future additions
    global $G;
    // default values
    $img='';
    $imgw=120;
    $name='';
    $title='';
    $email='';
    $office='';
    $web='';
    $info='';
    $cvlink='';
    $diss_link='';
    $diss_title='';
    $imagedir = $G->imgdir;
    if (!$img) $img = 'nopic.png'; // default to a placeholder if no picture available
    extract($p); // defined fields in $p will override defaults
    if ($img) echo "<div class=p_img><img src='$imagedir/$img' width=$imgw></div>\n"; // assumes all images stored in images folder
    echo "<div class=p_container>";
    echo "<div class=p_name>$name</div>\n";
    if ($title) echo "<div class=p_title>$title</div>";
    if ($email) {
        //$emailshow = str_replace("@","&nsbp;<i>at</i>&nbsp;",$email);
        $emailshow = $email;
        echo "<div class=p_email><a href='mailto:$email'>$emailshow</a></div>\n";
    }
    if ($office) echo "<div class=p_title>$office</div>";
    if ($web) echo "<div class=p_web><a href='$web'>$web</a></div>\n";
    if ($diss_link) echo "<div class=p_diss><a href='$diss_link'>$diss_title</a></div>\n";
    if ($cvlink) echo "<div class=p_cv><a href='$cvlink'>CV</a></div>\n";
    echo "<div class=p_info>$info</div>";  // info can have html formatting
    echo "<br style='clear: both'>\n"; // needed because the p_img style 'floats'
    echo "</div>\n"; // end of p_container
}
?>