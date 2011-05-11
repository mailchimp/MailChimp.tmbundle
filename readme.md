Mailchimp TextMate Bundle
===
##Getting Started
###Connecting to MailChimp
You'll need to "Connect to MailChimp" and supply an API Key before using this Bundle.
###Create and Edit Templates
There are two ways you can work with a Template. *Choose Bundles->MailChimp->New Template from Current File* or *Bundles->MailChimp->Get Template*. If you're creating a new Template, you'll be prompted to enter a name. With "Get Template", you'll be presented with a list of Your Templates.
###Working with Campaigns
Within TextMate you can work with any Campaign that has been created using "Paste in Code","Import HTML" or using a Custom Template. Campaigns associated with a MailChimp Template can not be edited via the TextMate bundle.

##Available Commands
###Connect to MailChimp
Prompts for an API Key and will create the initial MailChimp connection.

Templates
===
####Select a Template
Selects a Template to be coded and replaces the current TextMate document with the HTML of the selected Template. When you upload, this is the Template you will be *overwriting*. Only presents Your Templates.
####Get a Template (from MailChimp)
Will replace your current open document with a template containing all of the HTML, template tags and resource URLs from MailChimp. Use this to fetch a copy of a MailChimp provided Template, like Start-From-Scratch.
####Get Template without Template Tags
Same as Get Template, but will strip Template Tag. This is a great starting point for a Campaign draft.
####Upload Current Template
Uploads the current template (defined by Select a Template) to your MailChimp account.
####Preview Template (from MailChimp)
Preview the Template as it appears in MailChimp. Use this to look at Your Templates, Gallery, or Start-from-Scratch Templates.
####Open Template In MailChimp
Open the Edit page for this template on MailChimp.
####New Template from Current File
Create a new template from the current open document. This will also select this template
####Campaigns

###Disconnect from MailChimp
Destroys the API Key information. Use this for security purposes or to connect to different accounts to upload the same Template.

Campaigns
===
####Select a Campaign
Selects a Campaign to be coded and replaces the current TextMate document with the HTML of the selected Campaign. When you upload, this is the Campaign you will be *overwriting*. Only presents Campaigns in Draft(Saved) mode. Creates the files html.html and txt.txt.
####Get Current Campaign
Downloads the current Campaign (defined with Select a Campaign). Creates or overwrites the files html.html and txt.txt.
####Upload HTML or Text Campaign
Will upload text.txt or html.html file - which ever you are working on. Upload HTML only works for pushing to campaign that did "Import From URL" or "Paste In Code"
####Zip Campaign and Upload
Zips working folder containing assets and uploads it to your MailChimp account.
**Geeky Tip: This command will IGNORE any folder called \_local. This is a good place to keep notes, assets, etc. that relate to the project, but won't get uploaded to MailChimp.**
####Preview HTML Campaign (from MailChimp)
Preview the HTML version of your MailChimp Campaign Archive
####Preview Text Campaign (from MailChimp)
Preview the Text-Only version of your MailChimp Campaign Archive
####Global Merge Tags
Choose from available Merge Tags to insert into the document. (* TAB)
####Get Current Campaign Details
Print Campaign details to a TextMate status window.
   
Helpers
===
####Generate Text-Only from HTML
Generate a text version of HTML document you are currently in. Opens the result in a new window.
####CSS Inliner
Runs the current document through MailChimp's CSS Inliner Tool and replaces the document with the results. This tool can be stepped. Write the styles you need, run the inliner and then repeat.
####Merge Tag Cheat Sheet
Open the Merge Tag Cheat Sheet KB article.
####Check MailChimp Connection
Is Everything Chimpy?

##IMPORTANT
**This bundle makes calls to the MailChimp API and will not protect you from yourself. Make sure to use some form of version control or work on copies.**