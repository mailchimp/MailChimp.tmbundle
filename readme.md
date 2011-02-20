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
  * x campaignUpdate (upload) (limitation: html only works for pushing to campaign that did import. templates need some help)
  * Render Campaign Text 
  * Render Campaign HTML
    * x remote - archive version
    * (local will work provided user fills in mock: http://kb.mailchimp.com/article/merge-tag-cheatsheet-for-campaigns)
  * x Merge Tags Menu (from list) Insertion
  
* Templates
  * List all Templates
  * addnew / update (push + pull)
    * incorporate uploading static assets elsewhere 
    (createCampaign seems you can set content as archive - so, there should be a way to do that via update)
  * Preview HTML
  
* Helpers (transformers, previews)
  * x generateText : generate a text version of HTML document you are currently in. Opens in a new window
  * x inlinecss : Will take the document you are working on, pass it through MailChimp's inlineCSSer, and replace the text. You can actually work in steps with this, writing just the styles you need, and then triggering. to build up the inline. (make video to make this clearer)
  * x ping - make sure chimp is alive!

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
