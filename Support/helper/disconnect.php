<?php
//Disconnect from MailChimp
//Deletes the projects .mc.ini
unlink(CONFIG_FILE_PATH);
echo "This project has been disconnected from MailChimp.";
