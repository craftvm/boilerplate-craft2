<!-- ![CraftOps Logo](https://raw.githubusercontent.com/bgrrtt/craft-ops/master/logo.jpg "DevOps Environment for Craft CMS and AWS") -->
CraftOps
========
**DevOps Box for [Craft CMS](https://craftcms.com) ~~and [AWS](http://aws.amazon.com)~~.**

Built with [Ansible](https://ansible.com). Made by [Mizzen](http://madebymizzen.com).

Overview
--------
CraftOps is a self-contained, tooled, and local development environment, similar to Homestead, that also builds and maintains cloud infrastructure – specifically for Craft CMS.

Visit the [wiki](https://github.com/bgrrtt/craftOps/wiki) for more information!

Installation
------------

**1)** The host computer must have [Vagrant](https://www.vagrantup.com) and [VirtualBox](https://www.virtualbox.org/wiki/Downloads) installed. (fyi, [brew](http://brew.sh))
```
brew cask install virtualbox vagrant
```

**2)** Install [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)  and [vagrant-vbguest](https://github.com/dotless-de/vagrant-vbguest), which help with local networking and concurrent development.
```
vagrant plugin install vagrant-hostsupdater vagrant-vbguest
```

**3)** Clone this repo!
```
git clone https://github.com/bgrrtt/craftOps.git PROJECT_NAME
```

**4)** Get into your project's folder and open it with a text editor like [atom](https://atom.io/).
```
cd PROJECT_NAME && atom .
```

**5)** In the `Vagrantfile` set:
  - `DOMAIN_NAME` to the local development domain name.
  - `LOCAL_IP` to a nonconflicting address between 192.168.20.10 and 192.168.255.255.

**6)** [Download Craft CMS](https://buildwithcraft.com/latest.zip?accept_license=yes), unzip, and move `craft/app` into `PROJECT_NAME/craft`.

**7)** [Create a new private repository](https://github.com/new). Or not and keep it local, if just deving.

**8)** Delete the current `PROJECT_NAME/.git` folder and start your own with `git init`. Next, add your new repository's url as the local repository's remote origin...or not.
```
rm -rf .git && git init
```
```
git remote add origin git@github.com:USERNAME/YOUR-NEW-REPOSITORY.git
```

**9)** Start the new CraftOps box on your local machine with `vagrant up` and wait.
```
vagrant up
```

**10)** Use `vagrant ssh` to enter the machine after installation completes.
```
vagrant ssh
```

Congratulation! A fresh CraftOps site should be available at [http://project.dev/admin/install](http://project.dev/admin/install)!

---
Developer’s Note
================
CraftOps creates an Ubuntu 14.04 virtual computer on your local machine using Virtualbox. After you start the machine with Vagrant, an Ansible playbook runs which provisions the new virtual computer into a CraftOps box.

Please [add ideas here](https://github.com/bgrrtt/craftOps/issues) marked [as such](https://github.com/bgrrtt/craftOps/labels/idea).

Message me on the [Craft CMS Slack](https://craftcms.com/community) with questions. [@bgrrtt](https://craftcms.slack.com/team/bgrrtt).

My focus, for now, is shipping [v1.0](https://github.com/bgrrtt/craftOps/milestone/1) as soon as possible.

Thanks to [@pixelandtonic](https://github.com/pixelandtonic), [@khalwat](https://github.com/khalwat), and [@geerlingguy](https://github.com/geerlingguy) for their work and influence.

Thanks to friends and family for wondering where I've been.
