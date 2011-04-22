Mailchimp Textmate Bundle
=========================

o-o-a-a.
--------

Getting Started
---------------

See videos. Temporary living at: http://mitchell.amihod.com/mc/

Commands
--------

* Connect to MailChimp: Prompts you to enter your API key. Will save it in the folder you are working in for this Campaign or Template

* Templates
  * Upload Current Template: Will upload your USER template that you are currently working on.   
  * Preview Template (from MailChimp): View the rendered version of the Source (on MC) from our popup preview. Allows you to look at User, Gallery, or Base Templates
  * Pull HTML generated from Template (from MailChimp): Will let you load the generated HTML source into a whatever file you currently have open. No template tags.
  * Get a Template (from MailChimp): Will replace whatever your current open document with a template, with all the template tags from MailChimp. You'd use this to fetch a copy of a template to work on.
  * Choose a Template: Sets the Template ID to whichever template you choose. This is the Template you will be working on. This controls which Template is affected when you select upload. Replaces current document with the content of the template. Only presents the User Template choices. 
  * Open Template In MailChimp: Goto the Edit page for this template on MailChimp site.
  * New Template from Current File: Will ask for a name, and save the current file as a new template with that name, and switch you to the new template.

-

* Campaign
  * x Select: Choose which campaign to work on. Only displays draft (saved) campaigns
  * x campaignContent (get)
  * x Upload HTML or Text: Allows uploading of text.txt or html.html file. 
    * (known limitation: html only works for pushing to campaign that did import. templates need some work)
  * x Zip Project and Upload
    * Create a new folder/project. Work as normal. When ready, use this command to push all assets up.
    * This command will IGNORE a folder called \_local if you have one in your project.   
      This is a good place to keep notes, assets, etc that relate to the project, but don't   
      get uploaded
  * Render Campaign Text 
    * x remote - archive version
  * Render Campaign HTML
    * x remote - archive version
    * (local will work provided user fills in mock: http://kb.mailchimp.com/article/merge-tag-cheatsheet-for-campaigns)
  * x Merge Tags Menu (from list) Insertion
  * Merge Tag Cheat Sheet?
  * x Info on current campaign
   
* Helpers (transformers, previews)
  * x Init: Enter your API KEY. This should happen on first use of bundle, so no need to call it explicitly
  * x generateText : generate a text version of HTML document you are currently in. Opens in a new window
  * x inlinecss : Will take the document you are working on, pass it through MailChimp's inlineCSSer, and replace the text. You can actually work in steps with this, writing just the styles you need, and then triggering. to build up the inline. (make video to make this clearer)
  * x ping - make sure chimp is alive!

Getting Started
---------------

* make a new folder for your project. Create any file in the folder.
* Drag the folder onto TextMate to make a new project.
* Open a file in that project.
* You can now use the bundle commands
* On your first use, you'll be prompted for your API Key.

Campaigns
---------

* Campaign: Select will allow you switch between campaigns
* Campaign: Get will download the .html + .txt

Templates
---------

* Use the `Template: Select`. Then, pick the template you would like to work on. 
* `Template: Load` Load Template HTML from other templates (User, Base, or Gallery) to use in your project 
* `Template: Upload` will send the file back to which ever you set in Template: Select
* `Template: New` create a new template from the current file, and switch over

Things you should know
----------------------

* Macros: In general, tried to keep the pieces of the bundle fairly tight - small responsibilities
  While the bundle has some of the more common workflows, this will allow you   
  (The User) to setup commands which will let you work how you like.
  For example, see the Upload and Preview macro included with this bundle.
* If you have a folder called **\_local** the bundle will ignore it by default
  This gives you a place to store notes, assets and whatnot as you work. 

Followup
--------

get feedback from chimp inhouse / top theme people what pain points they have?


End User Docs Notes
-------------------

* Stress this bundle will NOT protect you from yourself. Make sure to use some form of version control. git, hg, bzr, svn

Targets
-------

Textmate/OSX/php5.2  
  
IDEAS
-----

* snippets for template dev (is there a bundle already we can integrate with?)
* mailchimp tm language file - http://mailchimp.com/features/template-language/
