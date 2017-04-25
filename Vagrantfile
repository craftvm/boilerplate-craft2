# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'
vmconfig = YAML.load_file("./configuration.yml")

Vagrant.configure("2") do |config|

  # Box Image
  config.vm.box =  vmconfig['vagrant_box']

  # Define VM
  config.vm.define vmconfig['craftvm_hostname'] + ".dev"

  # Virtualbox Configuartion
  config.vm.provider :virtualbox do |v|
    v.name = vmconfig['craftvm_hostname'] + ".vm"
    v.memory = vmconfig['vagrant_memory']
    v.cpus = vmconfig['vagrant_cpus']
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--nictype1", "virtio" ]
    v.customize ["modifyvm", :id, "--nictype2", "virtio" ]
    v.customize ["modifyvm", :id, "--ioapic", "on"]
    v.customize ["storagectl", :id, "--name", "SATA Controller", "--hostiocache", "on"]
  end

  # SSH Configuartion
  config.ssh.insert_key = false

  # Set Hostname and IP
  config.vm.hostname = vmconfig['craftvm_hostname'] + ".dev"
  config.vm.network :private_network, ip: vmconfig['craftvm_ip']

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
