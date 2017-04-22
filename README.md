# Installation

### Prerequisites for Host Machine
- [Vagrant 1.9](https://www.vagrantup.com) and [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)
- [vagrant-vbguest](https://github.com/dotless-de/vagrant-vbguest)

## Step 1.
Start and enter a new directory for this project with:
```
mkdir PROJECT_NAME && cd PROJECT_NAME
```

## Step 2.
Initialize git and get source files from Github with:
```
git init && git pull https://github.com/bgrrtt/craft-vm.git
```

## Step 3. 
Open your project with a text editor, like [atom](https://atom.io/), with:
```
atom .
```

## Step 4. 
In the Vagrantfile set:
  - **`DOMAIN_NAME`** to a locally unique domain for your project. ('craft')
  - **`LOCAL_IP`** to an address between 192.168.20.10 and 192.168.255.255.

## Step 5. 
[Download Craft CMS](https://buildwithcraft.com/latest.zip?accept_license=yes), unzip, and move `craft/app` into `PROJECT_NAME/craft`.

## Step 6. 
Start your new Craft VM with:
```
vagrant up
```
## Step 7. 
Wait for the installation playbook to run. Hmmm, [what to do](https://github.com/bgrrtt/craft-vm/wiki)?

## Step 8. 
Visit [http://craft.dev/admin](http://craft.dev/admin) to finish installation!

## Step 9.
Vist the [Craft VM Wiki](https://github.com/bgrrtt/craft-vm/wiki) for instructions on launching AWS resources.

-----------------------------------------------------------------

Thanks to [@pixelandtonic](https://github.com/pixelandtonic), [@khalwat](https://github.com/khalwat), and [@geerlingguy](https://github.com/geerlingguy) for their work and influence.
