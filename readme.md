# Missing Menu Item ID Fix
Contributors: (kengimel)
Tags: menu, menu-item-id, mega-menu, food-cook, recipe plugin,
Requires at least: 3.0.1
Tested up to: 4.4
Stable tag: 1
License: MIT License
License URI: http://opensource.org/licenses/MIT

This is a hack to fix the missing menu item id from the food-cook wootheme for recipes

## Description
This is a hack to fix the missing menu item id from the food-cook wootheme for recipes

It is implemented to allow easy setup and fix of a website's using food-cook theme to continue with menu item ids until the guys fix this issue.

This plugin is an extract from [globalfoodbook.com](http://globalfoodbook.com), as part of our effort to help other food bloggers, in a bid to reduce all the technical headaches that they should not have to put up with.

Just keep inventing those yummy recipes.


## Installation

1. Upload /mailchimp-woothemes-subscribe to the /wp-content/plugins directory
2. Activate the plugin through the Plugins menu in WordPress

## Frequently Asked Questions

### What is this?

This is just a quick fix, hopefully it will be temporary.

## Screenshots


## Changelog

### 1.0
* Initial Release

### 1.1
* Bump wordpress compatible version


## Upgrade Notice

### 1
* Initial Release

### 1.1
* Bump wordpress compatible version

## Notes to developers

#### Contributing

If you would like to contribute to our suite of plugins, head on over to [Global Food Book Labs](https://github.com/globalfoodbook). Feel free to fork and contribute back.
git@github.com:globalfoodbook/gfb_missing_menu_item_id_fix.git
1. Fork it (https://github.com/globalfoodbook/gfb_missing_menu_item_id_fix)
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request

#### Adding Screenshots to the wordpress repo

1. Rename each screenshot for each step like this. For step 1 the screenshot is screenshot-1.png.
2. The banner image is named as banner-772x250.png.
3. Use an SVN client like smart svn or rapid svn etc to uploads these iamges to the /assets folder.
4. After this commit and all will be picked up.

#### Pushing plugin to wordpress svn repo

1. Clone this repo

          `git clone git@github.com:globalfoodbook/gfb_missing_menu_item_id_fix.git`

2. cd path/to/gfb_missing_menu_item_id_fix
3. vim .git/config
4. Add the code below:

          [svn-remote "svn"]
                  url = http://plugins.svn.wordpress.org/[plugin_name]/trunk
                  fetch = :refs/remotes/git-svn

5. Then merge the master into the new branch:

          `git svn fetch svn`
          `git checkout -b svn git-svn`
          `git merge master`
          `git svn dcommit --username [wordpress.org username]`

6. Then rebase that branch to the master, and you can dcommit from the master to svn

          `git checkout master`
          `git rebase svn`
          `git branch -d svn`
          `git svn dcommit --username [wordpress.org username]`
