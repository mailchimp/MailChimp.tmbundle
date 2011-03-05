<?php
// List of Default MC Merge Tags.
// To be broken up based on feedback
// Moved into a user editable ini?
$mergetags = array(
'*|ARCHIVE|*',
'*|REWARDS_TEXT|*',
'*|MC_TRANSLATE|*',
'*|MC:TRANSLATE|*',
'*|DATE|*',
'*|COMMENTS_URL|*',
'*|RECENT:XXX|*',
'*|TRANSLATE:xx|*',
'*|INTERESTED:|* *|END:INTERESTED|*',
'*|MC:TOC|*',
'*|POLL:|* *|END:POLL|*',
'*|QRCOUPON:xxx:yy:zzz|*',
'*|EMAIL_UID|*',
'*|UNIQID|*'
);

$UI = new UI(getenv('DIALOG'));
$UI->popup($mergetags);
