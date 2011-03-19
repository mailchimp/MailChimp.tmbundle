<?php
$mergetags = array();
// List of Default MC Merge Tags.
// Simple PHP array. Just move the pieces around to control order,
// and just copy to add any.
$mergetags[] = '*|ARCHIVE|*';
$mergetags[] = '*|REWARDS_TEXT|*';
$mergetags[] = '*|MC_TRANSLATE|*';
$mergetags[] = '*|MC:TRANSLATE|*';
$mergetags[] = '*|DATE|*';
$mergetags[] = '*|COMMENTS_URL|*';
$mergetags[] = '*|RECENT:XXX|*';
$mergetags[] = '*|TRANSLATE:xx|*';
$mergetags[] = '*|INTERESTED:|* *|END:INTERESTED|*';
$mergetags[] = '*|MC:TOC|*';
$mergetags[] = '*|POLL:|* *|END:POLL|*';
$mergetags[] = '*|QRCOUPON:xxx:yy:zzz|*';
$mergetags[] = '*|EMAIL_UID|*';
$mergetags[] = '*|UNIQID|*';

$UI = new UI(getenv('DIALOG'));
$UI->popup($mergetags);
