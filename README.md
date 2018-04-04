# Gitscord
This is a very simple script which instantly pushes your head commit message from GitHub to one of your Discord channels, using the GitHub webhooks & Discord webhooks via PHP. 

----------

# Configuring
To begin, you will need to create a webhook from the Discord channel you wish for your GitHub commit messages to be sent to, to do this, right click the cog icon of the channel and click the webhooks option (you need to have 'manage webhooks' permissions for this channel to do this), then click the 'Create Webhook' option. 

You can fill in the name here for your bot, you should repeat the bot's name in the `szBotName` variable, you can also set a picture here which will be used as the avatar for all posts made by the bot. It is important that you copy and paste the webhook URL into the value of the `szDiscordWebhookURL` variable too.

Now the discord section is out of the way, we need to visit GitHub and go to the settings for the project you would like to configure this to. Once in the Settings menu, select 'webhooks' again. 

The Payload URL will be the web location of where you upload this script to, for example `http://mysite.com/gitscord.php` - keep this location in mind for later when you upload the configured script. You will need to set the content type to `application/json` and for secret you should enter a random phrase/password-like string and also fill in the `szGitHubSecret` variable in the script with this information. And finally, for the events you should select `Just the push event`. 

Upload the script to your web server and make your first commit, then push it!
 