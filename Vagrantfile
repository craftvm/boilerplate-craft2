# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'
vmconfig = YAML.load_file("./configuration.yml")

Vagrant.configure("2") do |config|

  # Box Image
  config.vm.box = "bento/ubuntu-14.04"

  # Define VM
  config.vm.define vmconfig['DOMAIN_NAME'] + ".dev"

  # Virtualbox Configuartion
  config.vm.provider :virtualbox do |v|
    v.name = vmconfig['DOMAIN_NAME'] + ".vm"
    v.memory = 2048
    v.cpus = 2
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--nictype1", "virtio" ]
    v.customize ["modifyvm", :id, "--nictype2", "virtio" ]
    v.customize ["modifyvm", :id, "--ioapic", "on"]
    v.customize ["storagectl", :id, "--name", "SATA Controller", "--hostiocache", "on"]
  end

  # SSH Configuartion
  config.ssh.insert_key = false

  # Set Hostname and IP
  config.vm.hostname = vmconfig['DOMAIN_NAME'] + ".dev"
  config.vm.network :private_network, ip: vmconfig['LOCAL_IP']

  # Sync folders
  config.vm.synced_folder ".", "/nfs", type: "nfs", mount_options: ['rw', 'vers=3', 'tcp', 'fsc' ,'actimeo=2']
  config.bindfs.bind_folder "/nfs", "/site"
  config.bindfs.bind_folder "/nfs/ops", "/ops"

  # Provison with Ansible
  config.vm.provision "ansible_local" do |ansible|
    ansible.provisioning_path = "/ops"
    ansible.playbook = "plays/vagrant.yml"
    ansible.inventory_path = "hosts"
    ansible.limit = "all"
    ansible.version = "latest"
    ansible.verbose = false
  end

  # Cache packages and dependencies if vagrant-cachier plugin is present.
  if Vagrant.has_plugin?('vagrant-cachier')
    config.cache.scope = :box
    config.cache.auto_detect = false
    config.cache.enable :apt
  end

end
