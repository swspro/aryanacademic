<? session_start();
header('Cache-Control: private');
include_once("utility/config.php");
include_once("utility/dbclass.php");
include_once("utility/functions.php");
include_once("includes/other_functions.php");

$objDB = new DB();

date_default_timezone_set('Asia/Kolkata');

function disphtml($what) {
$page = basename($_SERVER['PHP_SELF']);
$ar = explode(".",$page);
$title = ucwords(str_replace("_"," ",$ar[0]));
$title = str_replace("-"," ",$title);
$GLOBALS['page_name'] = $ar[0];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LIGHT 4 LIFE MISSION  INTRA | Control Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>4LM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INTRA</b>LIGHT 4 LIFE MISSION </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>-->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$_SESSION[SE_ADMIN_SESSION_NAME]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$_SESSION[SE_ADMIN_SESSION_NAME]?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="change_password.php" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION[SE_ADMIN_SESSION_NAME]?></p>
         <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
             Č ph]@&� ��^@Bc J�_@�W 8U`@�� "b@V� e_b@nc s�e@�� �f@�� "wf@2� o�g@�� /nh@�� �.i@,� Q�i@f� �3j@f� tFj@V� ivj@� ��k@:� 52l@�� x[l@t� �kl@dj z�l@DQ ��l@�W �8n@� H�n@P� �n@�� �o@(� ��o@� &%p@ � x�p@V� ��p@r� d(q@�� ��q@
� .r@Ժ �Dr@�\ �Jr@^Y �qr@n� �s@>Q ��s@�` G�s@�� �mt@b� �t@�� ZRv@�� r�v@t� ��v@"� �w@L� (Aw@b� (Aw@�� pw@R� ��w@�W ��w@�� �vx@&� $�x@�W �y@�� �y@�� �y@�� �>|@�� ��|@R� �=}@�� u~@h �/~@6� �G~@�Y <�~@� ��@r� ��@2� I=�@\ �Ѐ@�X <O�@>v l�@j� Њ�@�� ⼁@z� �@\l '�@L� ���@�\ �ƃ@Fd *��@�� �H�@�� `��@�� ��@V� D`�@�� �R�@� IW�@�� و@�� ��@z� }�@� ��@�h r-�@.� "2�@^l %��@Ω I%�@&� 2�@� 3y�@�p =�@� _��@�� ��@�R Ԅ�@�� ���@b �ϑ@�[ ��@v� �n�@0W ��@J� ��@J� ��@�W ���@x� C(�@�W qv�@�� 7ϕ@L� 7ϕ@� f�@�X ��@�W Cs�@Zl )��@�W ��@�x �.�@�� �~�@�X ��@�� �Ț@�� �K�@�� ^k�@d� ���@b� Ǚ�@� �
�@Q �ş@n� ��@v� D�@B� ǐ�@~� 0��@�� 3��@6� ���@� G��@�� �B�@H� ���@x� ��@� ��@
� }m�@�� ��@�[ �Z�@�W �r�@2b  ��@�� (��@�Y ��@
h �Ω@�� �ê@�h ��@v� ,��@�� uc�@�W �í@� �߭@�\ _=�@L� �[�@L� vF�@�� �p�@�z ޕ�@� /U�@�� g�@�� }�@*� `��@Đ ���@�� d��@�W #}�@&� |5�@ؐ &��@ܭ ��@�o 3�@�� L�@�W � �@j� /��@^� ���@�� �к@Y ��@� C�@�X �ż@�� 6��@�a è�@Bd �v�@�� ��@�z ���@� �M�@B� EO�@�� ��@ؖ ���@n� ��@� ��@�W ��@�W �<�@�\ R��@F� c�@� V��@�l ���@�U �%�@�� ���@� ���@�n (�@�� �t�@�� J6�@�� [��@r ��@b� ��@ʾ ���@ޫ ���@�� �=�@�W �^�@�O ��@�� ���@� ���@p� VG�@�l ���@�W f��@�� .;�@� 5��@�� .�@Tl ���@n� jb�@6� ��@�� �R�@�� `��@�� `��@~~ �Y�@Xc ���@ � ;��@R� �
� ��@�� \��@o �5�@| vC�@z� K��@Ȍ ���@�� ��@ұ �
p�@�� 5��@�\ ���@B� �\�@�X ô�@(� ���@�W ���@�� ���@b� iF�@�i �H�@`_ ƀ�@�V ���@�� ���@� H A&W M� A�h �� A�W �A�� �"A�� �;A�W 4JA^� ƠA�q abA<� �qA,� �AR� HbA
� Q~A� ��AH� �A<� xwAx� ��A� ��AD� QA�� �A�� ��Ap� �-	A�� O	A4f �u	A� ��	A�� ��	A�a ��	A� <H
A�� �\
A�[ ^AH� �Aʌ ��A�� �
� ��=A0� ��=A҈ Hd>A�� S0?A޹ 4h?A�� �^@A� �MAA�W �
� �@UA� �UA�� ��UA�� ��VA6� ��VA�� n�VA|� O8WA�  �WAΣ 1�WA
h ��WA�� �ZXA�� MaXA�� ]�XA�� ��XAB� �@YA�W �YAB� �mZA�� y�ZA�� �ZA�X �A[A�� �_[A4� Rp[A� ��[AJY ��[A8� �\A�� ��\A:� ��\A�� ��]A�� ��]A�� �^A�W �^A,Q t_AN� ��_AD� �_A�T �
`A� �-`A0W ��`Aʆ ��aA� Z�aA>� ��bA�� �WcA,� IOdAV� � eAR� "<eAʒ �fA�\ i/gA�l [agAV� ?hA� ��hA � ��hA�� �ZiA�� !�iA�� �jA<d �=jA�� n`jA� vkA�X ��kA*z hlAZl ��lA�� "`mA� HjnA� nAv� �oA�� z�oA�� �pA^l �qA�� L~qA|a ��qAԨ J7rAf� �jrA$� ��rA�[ �sA�� (�sA�W ��vA�X �JwAv� ��wA�X �xA@� �PxA�i �_xA�� +�xAr� ��xA4m �yA:� ),yA`� ,;yA�h /wyAD� <�zA@� �}{A~� ��{AZ� P|A�� %Z|A�� �l|Az� �l|A�� 
}A�� yO}AV� ��}A�W ��}A�� ��A0� Z�At� �A�AFc �J�A.� 적A�� c��A�� 
�A�� NR�A6� ��A2s ���A�W ��Ax� ~��A8� x��A`� ��A� ��Ag �A@� +H�A�~ �«A0� p۫AF� �_�AЏ 5��A�� '�A�� ��A�� ���A�� ��A�� !W�A0� Z��A�� �#�A�� �#�A�W �ƳA � |7�A�X p[�A�P 5��A�� ���A�W j��A.� ~8�A\ �ȷA�� ��A>X 4i�A�T ��A� O��An� P��A�\ �+�A� �t�A�h ���AR� ûA�W ��A�� �6�A� }��A�� m��A � ���A�W C	�A&� �j�A�_ �˿A�� �m�A${ E��A�� ��AP\ ��A�� J�A�W ��A�� ��A6Q //�Af Y��A�W g�A�W ��A�� �g�A� ���A W �3�A��  `�ARY ���A�� ���A�� ���A.� ؋�A�� ���A�� �+�A�� ��A�� j��Ax� ދ�A�� ���A:� ��A>� �A� 7?�Al� ke�A�\ >G�AJ� ��A�W �`�A� ���A^l c"�A� �5�A,� ���A�X A(�AR� �\�A8� RF�A�� ��A@� ˖�A,� 0:�A�� N�AD� ^��A�� �A�W [#�A�� Z��AF� K_�ADd K��Aȵ ��A:� ��A0� t��A�W �P�A�X LY�A"� F��A(� �9�A|� �z�A�� �A� 4��A�f ���A� ��A�u A�AЏ �J�AJ� u�A�� ���Aʒ /
� �v�A�X X�Aȴ ;l�A�X *��A�\ 8�A� T�A�Q ���A,� �t�A&c v\�A�� �R�Ǎ jh�Ap� ޟ�A�� ���AĔ ���A�� �T�ApZ >��A�� PJ�A�� �Y�A o �|�A:Q ֠�A�� �K�A>� �K�AȌ ay�AX� v��AĆ ���A~ M��A�� ��A�W "�AN� ��Al� ���A h D��Al� _��AЏ �A|� �a�A�\ �� BΩ !� B�� ��B�W C
B�[ +�B�� *�B�� ��B�W 1IB�\ ��B� �\B� \�BXc �B�W �2B � IsB�� �BN� #�B� ��
B�� �0B�u  �B|� �
W �B�� �dB�� �Bv� �Bt� "!B֏ �;B�� �B�\ 
h y�B � Y�B� ��B�� ��B8� B�B�� B�BT� ~5B� ,�B� ��B*� ��!BN� �!B�� �"B�d �~$B�� �%B�W �1%B�S �L%B<� |D&B�� �y&B� e�&B�� ��&B�W ;'BRl .P(B�� �f(B�� �(Bʕ ��(BT� ��)B�� Ѣ*B�� y+B�� ��+B�W e�+B�W 3},B�� �-B�� �.BV� �'/B@� UU/B<� �|/B� ]&0B�] D�0B�i }2B�� �2B�� 1�2B:� O�3BȌ �(4B�W �/4B�� vW4BDQ �|4Bn� �|4B F�4B�� J�4B�� g 5BZl f05Bz� @|6B<� �6B�W �U8B� �9B�� ��9BΩ ,L:B.� 4;B�� vG;B�X �;Bڽ Q�;B�[ �6<BZ� Br<B�� D�<BT� ��<B~� ��=Bv� ��>BPY [A?B�W N�?BD� ��?B� ��?B�_ ��?B�X ��?B:� ]�@Bf K�@Bh� ��@B�W ��AB � �BB�� CBB� �BB�i i&DB�l 'DBh� �EB�\ �pEBz O�EB<� �XFB­ �~FB� z�FBv� -�FB�W g�FB�� c$GB`l k)IB�W ��JB] >@NB�� iQNB&c �RNB�� IZNB� L�NB�l �$OB�W �&OB^s �iPB:� QB�T �/RB�� �ZRB� vaTB�W ƭTBx� �)VB�� `�VBؐ C�WB�W �XBV� t�XB
h �tYBg $�YB�W �+ZBF� �nZB�� ��ZB�[ �[[BV� �H\B8� �Z\B:� ��\B�� TY^B�W �p^B�� |�_B�� �C`BN� Z�`BЏ �aB�\ ��aBT� �bB:� �fcB�W �
dBh� QdB�� 	]dBR� J�dB"� L�dB<� 
eB,� X�eB:� |�eB��  EfB�� ��fB6� �gB�� ʆhB6� ��hB�� uiB� RIjB^Y T�jB� ��jB� �kB�\ .akBy �oB2� �7oB"� �oBЏ K�pBY ��qB�l ޽qB�� ��qB�� ��qB0� ��qB�� ��rBp� =�sB � ��sB(� �rtB�h / uBtW �XvB6� a�vB\Q  �vB^c uwB� %wB*� ��wB�g h�xBf ��yB�\ %^zBz� ��zBF� v�zB�W x�zB@� ��zB<W ��zB�y 3|Bx� �m|B�y - }B�� Z4}Bޒ XH}Bt� ��}Bƫ pZ~B�W H�~Bܨ ���B�� ꖀBV� ���B.| �Bx� Y��B� ���BQ c�Bd� a!�Bx� ܷ�B�� e��Bf �n�B� ���B� ^��B�� ��Bʌ �X�B�� hx�B\l m�B_ .C�B@d �D�Bx� p�B�� _"�B$� n�B�W �J�B�� ߢ�B�~ U�B|� ��Bj� ��B�W ,��B�{ �\�B� �B� 5�B�� b��Bv� ���B&� ~�B�� q�Bbl f�B2�  o�B�W ju�B�� {�Bn� �A�B�� v��Bʖ �t�B�n ���BBd $əB�� ��B�X ��BR� W��BJi #��B� "ӛB�� S,�BH� k�B�� �u�B� �}�B�W *ƜB�X ��B�� �-�B�� 7��BH�  
� �w�BPQ ��B�W ��B�� P�B�� �E�B�� &��BP� �9�Bd� 4v�B̈ �w�B�P �@�Bʟ \
C�� PA
C�� ��
CH� r�
C|� ZtCj� S�C � ��C� _�CbY r�C�u �3C�W �?C�^ �@C � �zCR� �zC.� ƿC�� ƿC�� TWC� _�Ch� ��C�� %=Cؾ t�C�� {�C>� �C� �CV� p�C�R ��C�� �CR� ĲC8� �C^� ��C � ��C�  ,C��  ,C�� ,WC`� �{Č �CLu �CPc ̵Č @C^Y �6C�W �XC� ��C�� ��Cz� �gC�� )dC�� �! CDQ � C2� =v!C8� �}!C$� ��!Cҋ Q�!C�\ �"CVc ["C�� �"C�� d�"Cľ �#C&W �+#C�h �T#Cn� 6�#Cf� �[$C�i b%Cz rh%C6� �%CN� �n&CT �s&Cد ��&C�X m�'C>� {F(C�� N(C�� ��(C^l BU)C�u Ѹ)C� l�)C�V 3�*C�X U�*Ct� ˾+C�� �
,C�� `�,C�h k�,C�� �-CQ �P-C2� H.C�� ޳/Ch� On1C�� "3C�� R24C
x �Z4C�] �5C~� �A7C� 4�7CT� ��7C�� s8CƵ �P8C\� 0�8C|� ż8Cĵ �8C�� �a9C � ҈9C�X �9C� ��:C�� ��:C\n <M;C�� ?&=C�l �9=C�� 1�=CԨ ��=Cb� ��>C�� ^�>C�� G_?C�� �"@C�� cj@C�\ `v@C�� ��@C�[ ��@C�\ L�AC6� �DCj� R{DCN� �DC"b �DC�~ ��ECv� �	FC� �pFC�� QFC�� ��FCJi !�FC � ��FCtg #@GC�� ��GCT� �=IC�� �IC�_ ��JC_ �JC6Q �1KC�� �4LC�m �0MCB� �MCƆ ��NC�� [OC4� ��PC�� ]�PC�W x�PC�� ��QC�� �SC � ��SC�W |TCT� ۖTCJY ��TC~� hUC�` |WVC|� ��VC�� #XC�X �,YC"� vTYC�� @�YCXX 8ZCh� �<ZC2b P�ZC<y �\C�S �p]C�� ��^C�� ��^C�� ]�_C�� ��_C�� �W`C�\ z�`C� �|bCP� "�bC�p X�eC@� BEfC�P JfC�� �fC�` ~�fC�Z #�fC2W �fCf ��fCH� @�fC:� ]9gC�\ �FgC� �gC�h =�gC\� "�gC�� ��gC�W ��gCf� DYhC�� �hC$� ��hCȌ HiC�X (qiC`p �uiC�z ��iCt� 
{ �r�CT� ��C� R�C�� w=�C� �D�C�[ rR�C�X ek�C"f +s�C�� ꥁCR� ).�CF� �M�CFd ȷ�Cxe �5�C�� f;�C<� J�C�� �x�C�� ���C�� 8�C�\ $G�C�� �I�C� ��Cx� �'�CF� ���C� �j�C�� �j�C0o ���C� B�C*� V�C�h KB�C�V [��C΍ �CD�  Y�C�� �o�C� op�C�� �2�C�h ��C,b ��C�� ���C�X U�CBd �ݑC� �[�C4f id�C� ʾ�C*b "N�Cx� �p�C�� �
�C�` @��C�� �s�C�� )U�CČ �q�CR� ��C�� X,�CN� b<�C"� Aj�C�� -�C�R :j�C"e 1�C�� � �C^l Y�C� t��C� [�C�W q��C�[ (��C�\ �ŝC|� ���C4z �͞Cj^ l��C�� ��Ct� Qy�Cj� c�C̱ ��C�` D�C�� �ʥC2� [ӥC<� �C>� cU�C�� �{�CFc ZۧC�� �C�c .��C־ �t�C2� }��C�� �
Y ��CȌ ��C� 1U�C^l E��CNc C�C�W �k�C�� C��C�� C��Č �c�CЏ ���CFd ژ�C�\ ���C� 7��C_ E��C�� E��C<� ���C�P ��C�` O)�C�� wv�C^� ���C`� ���C� J�C� ��C� @)�C�W 
�CpY #��C� 
�C�� ���C� Ș�C�n T��C�� E" D�X u� D�� �#D�X �DDD� ��D6� ��D� +D�[ ��D�{ ��D� �D�X ېD6Q V�Dn� �^Dz� 1D�� ��Dr� ��D�O s�Dh� s�D�X �D|� s�Dv� ��D�W �Dr� iDX� �+	D�_ �,
D�W �
DF� �&D�[ yaD|� iD�W �LD(� sD� �!
` h^D�� ZD�� ��D�� ~ Dt� �5D\� �SDȵ �]D:� �D] H�D@� iD�X GD�� E
DX� f&D�� �kD<� �D�W ULD�� :�D6� 
lDzf {�D&] x�D8} ��D�� C&D�� ֊D2� -�D� �mD�X � D&� �h D^Y �� D�h ��!D֏ V�"Dx� ��"D� |?#D�~ ̠#D�X v$D� D�%D�� D�%D�� �!&D"f v�&D�W ��'DČ ,�'D�� ��'D�� �)D�W �%*D�f <�*D2� Ɯ+D^l �+D�W }�+D�W t�,D�Q ��,D� �o-D�X �-.D�W ��.D8� H�/D�� �N0DJ� H1DF� ǃ1D�\ P�2D�j ��2Dʆ V�4D�W �4D�� �v5Dp� �6Dx� $66D�W �j6D�� Y�6D�� 3i7D�^ ��8D�� P�:D�Q ��:D�W �v;D(� ��;D4Q � <DRY �=D�l G�=D�� SN>Db� �?Dj� � ?D�� ;?D�� ��?D�g 1@Dx� �E@DČ ��@Dd� ��@D6� �@D�X ��@D�] X�@D�� ��AD�w �iBD�� �iBDV� %�BDČ f�BD� @CD�� rACD�W (nCDV� [�CDRZ �DD�X �yED*� )FDD� ��FD�W tGDT ��GD6W $�HD�f T�HD�n �-LD0� ��LD�\ �`MDX� ;lMD�c }wMD~Q x�MD�W xNDֱ wMND� �nND�W  `OD�X ��ODl� �PD
h ��PD�� �SD�W 3�SDbY [ TD�� �ITD,� /�TD^� ��TD� bXWD�\ �WD�� s(YD^l 8�YDRY 6'ZDj^ ��ZD<� �]D�X T�]DĜ �]D�k �+^DN� �c^D� �^Dn� n�_D�� �`DPY �`aD2� �$bD�\ F