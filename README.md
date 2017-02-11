<!-- ![CraftOps Logo](https://raw.githubusercontent.com/bgrrtt/craft-ops/master/logo.jpg "DevOps Environment for Craft CMS and AWS") -->
CraftOps
========
**DevOps VirtualBox for [Craft CMS](https://craftcms.com) ~~and [AWS](http://aws.amazon.com)~~(soon!).**

Built with [Vagrant](https://www.vagrantup.com)  &  [Ansible](https://ansible.com). Made by [Mizzen](http://madebymizzen.com).

Overview
--------
CraftOps is a self-contained, tooled, and local development environment, similar to Homestead, but also builds and maintains cloud infrastructure – specifically for Craft CMS.

<!-- #### Idempotent Infrastructure
- comming soon. -->

#### Technology
- Ubuntu 14.04
- Git
- Nginx 1.10
- MySQL 5.6
- PHP 7.0
- Craft CMS's PHP Dependancies
- ImageMagick
- jpegoptim
- optipng
- ~~Composer~~(soon!)
- A preconfigured Gulpfile.js & package.json
- ~~Zsh with ZIM~~(soon!)
- ~~CraftOps Command~~(soon!)

#### AWS Infrastructure
- ~~VPC~~(soon!)
- ~~EC2~~(soon!)
- ~~RDS~~(soon!)
- ~~Classic Load Balancer~~(soon!)
- ~~Certificate Manager~~(soon!)



Visit the [wiki](https://github.com/bgrrtt/craftOps/wiki) for more information!

Installation
------------
###### Prerequisites for Host Machine
- [Vagrant 1.8.1](https://www.vagrantup.com) and [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)
- [vagrant-vbguest](https://github.com/dotless-de/vagrant-vbguest)

##### Step 1. Clone!

```
git clone https://github.com/bgrrtt/craftOps.git PROJECT_NAME
```

##### Step 2. Change directory into your project and open it with a text editor (like [atom](https://atom.io/)).
```
cd PROJECT_NAME && atom .
```

##### Step 3. In the `Vagrantfile` set:
  - **`DOMAIN_NAME`** to a locally unique domain for your project. Defaults to 'project'.
  - **`LOCAL_IP`** to a nonconflicting address between 192.168.20.10 and 192.168.255.255.

##### Step 4. [Download Craft CMS](https://buildwithcraft.com/latest.zip?accept_license=yes), unzip, and move `craft/app` into `PROJECT_NAME/craft`.

##### Step 5. [Create and start a new private repository](https://github.com/new). (Or not, but [keep it local](https://github.com/bgrrtt/craftOps/wiki).)

##### Step 6. Start your new CraftOps development box:
```
vagrant up
```
##### Step 7. Wait for the installation playbook to run. Hmmm, [what to do](https://github.com/bgrrtt/craftOps/wiki)?

##### Step 8. Enter the machine:
```
vagrant ssh
```

## Congratulation! A fresh Craft CMS  site is ready to install at [http://project.dev/admin](http://project.dev/admin)! <small>(rather, your `DOMAIN_NAME`.dev/admin)</small>




---

---
### Developer’s Note
CraftOps creates an Ubuntu 14.04 VirtualBox on your local machine. After you start the box with Vagrant, an Ansible playbook provisions the new virtual computer into a CraftOps development box. From within the box, commands become available to build, maintain, and deploy to cloud infrastructure.


- Please [add ideas here](https://github.com/bgrrtt/craftOps/issues) marked [as such](https://github.com/bgrrtt/craftOps/labels/idea).

- Message me on the [Craft Slack](https://craftcms.com/community) with questions, [@bgrrtt](https://craftcms.slack.com/team/bgrrtt).

- My focus, for now, is shipping [v1.0](https://github.com/bgrrtt/craftOps/milestone/1) as soon as possible.

- A Craft 3 version is coming soon.

Thanks to [@pixelandtonic](https://github.com/pixelandtonic), [@khalwat](https://github.com/khalwat), and [@geerlingguy](https://github.com/geerlingguy) for their work and influence.

Thanks to friends and family for wondering where I've been.
