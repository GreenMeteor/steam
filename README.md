[![](resources/steamlogo.png)](http://store.steampowered.com/)

## [HumHub](https://www.humhub.org/en) Steam Module

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GreenMeteor/humhub-steam-module/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GreenMeteor/humhub-steam-module/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/GreenMeteor/humhub-steam-module/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GreenMeteor/humhub-steam-module/build-status/master)

This module adds the ability to display a single game widget from your Steam game developer account.

## Installing & Setup
1. Download via git or normal download.
2. Upload the content of your `humhub-steam-module-master` to your server under `/protected/modules` and rename it `steam`
3. Enable the module via `ACP --> Modules --> Modules List`
4. Go to your [Steam](http://store.steampowered.com) game, under embed you'll see your widget code (The url will be needed) copy the url (example: `http://store.steampowered.com/widget/{id}/{id}`) then follow the next step
5. In `ACP --> Steam Settings` place your Steam game embeddable URL in the configuration option then save and now you're done.

> Note: Steam is an external service that provides the embeddable url that is used to place a widget within your HumHub's sidebar.

### __Authors:__
@GreenMeteor
