Mailchimp Textmate Bundle
=========================

o-o-a-a.
--------

Initial list of functionality we are looking to implement, plus some related notes.

Focus is on Campaigns initially, then fill in template stuff after

(x is rough done)

Commands
--------
* Campaign
  * x List all Campaigns & Switch from menu
  * x campaignContent (get)
  * campaignUpdate (upload)
  * Render Campaign Text 
  * Render Campaign HTML (local will work provided user fills in mock: http://kb.mailchimp.com/article/merge-tag-cheatsheet-for-campaigns)
  * Merge Tags Cheat Sheet
  
* Templates
  * List all Templates
  * addnew / update (push + pull)
    * incorporate uploading static assets elsewhere 
    (createCampaign seems you can set content as archive - so, there should be a way to do that via update)
  * Preview HTML
  
* Helpers (transformers, previews)
  * generateText : returns text version of HTML would be most common case (ie: preview text version)) 
  * inlinecss : takes proper HTML/CSS and turns out mush for LCD mail clients :) this is super handy
  * ping - make sure chimp is alive!

Getting Started
---------------

* make a new folder for your project. create a file, **mc.ini** inside that folder
* inside **mc.ini** add the line: api\_key="YourAPIKeyHereOk-us2"
* drag folder onto Textmate to make a new project
* Campaign: Checkout will modify your mc.ini to include the campaign ID you select.


Followup
--------

get feedback from chimp inhouse / top theme people what pain points they have?


Targets
-------

Textmate/OSX/php5.2  
  
IDEAS
-----

* snippets for template dev (is there a bundle already we can integrate with?)
* mailchimp tm language file - http://mailchimp.com/features/template-language/
* bonus points: allow people to load a template from the github repo.
