<!-- ![Craft-Ops Logo](https://raw.githubusercontent.com/bgrrtt/craft-ops/master/logo.jpg "DevOps Environment for Craft CMS and AWS") -->
CraftOps
========
**Production DevOps Environment for [Craft CMS](http://craftcms.com) and [AWS](http://aws.amazon.com).**

Built with [Ansible](http://ansible.com). Made by [Mizzen](http://madebymizzen.com).

Overview
--------

Installation
------------
The host computer, tested with macOS, must have [Vagrant](vagrant_link) and [VirtualBox](virtualbox_link) installed. We also need the [vagrant-cachier](https://github.com/fgrehm/vagrant-cachier), [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater), and [vagrant-vbguest](https://github.com/dotless-de/vagrant-vbguest) plugins installed to ensure eveything will work properly. Then just clone the repo, quickly configure a little networking stuff, and you have lift off!

$`brew cask install virtualbox vagrant`

$`vagrant plugin install vagrant-cachier vagrant-hostsupdater vagrant-vbguest`

$`git clone https://github.com/bgrrtt/craft-ops.git YOUR_PROJECT_NAME`

VirtualBox Configuration
------------------------
$`cd YOUR_PROJECT_NAME && atom .` ([atom text editor](https://atom.io/))

In the Vagrantfile, change the variables on lines 4 and 5:
- PROJECT_NAME to a local develoment domain name. Your project will be available at http://PROJECT_NAME.dev.
- LOCAL_IP to any nonconflicting address between 192.168.10.10 - 192.168.255.255

Start CraftOps
--------------
$`vagrant up && vagrant ssh` into your CraftOps development enviornment.

CraftOps Configuration
----------------------

CraftOps Quick Commands
-----------------------
Once you have everything configured these commands are helpful to have on hand.
- `ops provision`
- `ops aws`
- `ops deploy`
- `ops dbsync`

[Visit the wiki for more information!](https://github.com/bgrrtt/craft-ops/wiki)
================================================================================

Thanks to [@howardroark](https://github.com/howardroark), [@jlund](https://github.com/jlund), [@geerlingguy](https://github.com/geerlingguy), [@khalwat](https://github.com/khalwat), and [@pixelandtonic](https://github.com/pixelandtonic) for their work and influence.
