Mailchimp Textmate Bundle
=========================

o-o-a-a.
--------

Getting Started
===============

We have some Getting Started [videos](http://mitchell.amihod.com/mc/). (temporary location)

* [New Campaign](http://mitchell.amihod.com/mc/01-new-campaign.mov)
* [Campaign Begin HTML Upload](http://mitchell.amihod.com/mc/02-campaign-begin-html-upload.mov)
* [Campaign Begin Using HTML Generated from Template](http://mitchell.amihod.com/mc/03-campaign-begin-using-generated-from-template.mov)

Commands
========

* Connect to MailChimp: Prompts you to enter your API key. Will save it in the folder you are working in for this Campaign or Template

Working With Templates
======================

* Choose a Template: This sets the Template you are working with. When you upload, this is the Template you will be uploading to. It will replace the current document with the content of the template. Only presents the User Template choices. 
* Get a Template (from MailChimp): Will replace whatever your current open document with a template, with all the template tags from MailChimp. You'd use this to fetch a copy of a MailChimp provided Template.
* Pull HTML generated from Template (from MailChimp): Will let you load the generated HTML source into a whatever file you currently have open. This file will have no template tags. Good if you want to use a template as a starting point for Campaign HTML.
* Upload Current Template: Will upload the Template you are working on. 
* Preview Template (from MailChimp): View the rendered version of the Source (on MC) from our popup preview. Allows you to look at User, Gallery, or Base Templates
* Open Template In MailChimp: Goto the Edit page for this template on MailChimp site.
* New Template from Current File: Will ask for a name, and save the current file as a new template with that name, and switch you to the new template.


Working With A Campaign
=======================

Have a look at the Getting Started [videos](http://mitchell.amihod.com/mc/). (temporary location)

* Choose a Campaign: This sets the Campaign you will work on. Will download the Campaign you choose. Creates the files html.html and txt.txt. Only displays draft (saveed) campaigns.
* Get Current Campaign: Will download the Campaign. Creates or overwrites the files html.html and txt.txt.
* Upload HTML or Text Campaign: Will upload text.txt or html.html file - which ever you are working on.
  * Upload HTML only works for pushing to campaign that did "Import From URL" or "Paste In Code"
* Zip Campaign and Upload
  * Create a new folder/project. Work as you normally would on a campaign you plan to ZIP and Upload. When ready, use this command to push all assets in this project up.
  * **TIP** By convention, this command will IGNORE any folder called \_local. So, you could make a folder with that name - it is a good place to keep notes, assets, etc that relate to the project, but don't get uploaded.
* Preview HTML Campaign (from MailChimp): Shows you a preview of how your HTML email will look when someone visits it in the MC Archive
* Preview Text Campaign (from MailChimp): Shows you a preview of how your Text version will look when someone visits it in the MC Archive
* Merge Tags Insertion: Hitting * TAB will allow you to choose Merge Tags to insert. You can choose from regular MailChimp ones, or from Merge Tags used for your campaign.
* Get Current Campaign Details: Get some info on the current campaign.
   
Helpers to make things easier
=============================
* Generate Text-Only from HTML: Generate a text version of HTML document you are currently in. Opens the result in a new window.
* CSS Inliner : Will take the document you are working on, pass it through MailChimp's inlineCSSer, and replace the text. You can actually work in steps with this, writing just the styles you need, and then triggering. to build up the inline. (needs video to make this clearer?)
* Merge Cheat Sheet: Open the wiki Merge Tags page
* Check MailChimp Connection - make sure chimp is alive!

Things you should know
======================
* Hi! This bundle will not protect you from yourself. :) Make sure to use some form of version control: git, hg, bzr, svn
* Macros: In general, tried to keep the pieces of the bundle fairly tight - small responsibilities While the bundle has some of the more common workflows, this will allow you (The User) to setup commands which will let you work how you like. For example, see the Upload and Preview macro included with this bundle.
