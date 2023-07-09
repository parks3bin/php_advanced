<?php
echo "여기는 메인 페이지입니다. <br><br>";

require_once('require_1.php');
echo "1번 페이지에서 선언한 과일은 '".$fruits."'입니다. <br><br>";

require_once('require_2.php');
echo "2번 페이지에서 선언한 과일은 '".$fruits."'입니다.<br>";