* ErrorHelper ($oopsy)
  Will echo error msg + exit(), so we avoid the if/else pattern in our command code

On Templates
------------

templateInfo
diff of the pieces:

preview: renders it out fuller (ie: styles put inline), editable comments removed, but merge tages still show.
source: has all the editable comments in it - basically, the template info still in there, but its the 'compiled' one from what I understand

switch campaign to the html mode

* need a way to force campaignUpdate to recognize html evenif campaign was a template before. 
* otherwise, forced to work with template.