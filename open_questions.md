re: for MC
  * having issue uploading HTML - txt no problem, but not sure why i'm failing uploading the html. 
  I'm wondering if it has something to do with html vs template? api returns true, so in theory, its succeeding.
  just not being reflected.
  
    - ok, so more investigation - yes ,this seems to be something to 
    do with how campaigns html/templates are setup. may need to ask for some advice 
    is there a way to change a campaign to html when its been setup as a template?
    - looking at things like content_type which is returned in the campaign info - however seems to be NULL in cases, even though it should have a value
      so how can i tell a template one frmo an html one?
  

re: filetypes
with language file, should be go with a .mct for mailchimp template, both for html + txt versions
then language file can kick in? scope and such as well for the commands. the main thing would be 
to figure out the inheritance, so html syntax highlighting still works


re: List all Campaigns/Switch from menu
(not sure here about the use case - 
  i guess you would make a project for the one client w/api key, 
  and then you could just switch among campaigns? 
  Look at making it more like git? checkout will switch and pull? 
  but i tend to stay away from destructive actions like that)
