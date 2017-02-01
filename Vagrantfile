# -*- mode: ruby -*-
# vi: set ft=ruby :

PROJECT_NAME = "project"
LOCAL_IP = "192.168.20.10"

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/trusty64"
  config.ssh.insert_key = false

  # Virtualbox Configuartion
  config.vm.provider :virtualbox do |v|
    v.name = PROJECT_NAME + ".vm"
    v.memory = 1024
    v.cpus = 2
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--ioapic", "on"]
  end

  # Set hostname and IP
  config.vm.hostname = PROJECT_NAME + ".dev"
  config.vm.network :private_network, ip: LOCAL_IP

  # Sync local folders for dev
  config.vm.synced_folder "./ops", "/ops"
  config.vm.synced_folder ".", "/site"

  # Set name of the VM
  config.vm.define PROJECT_NAME do |something|
  end

  # Provison with Ansible
  config.vm.provision "ansible_local" do |ansible|
    ansible.playbook = "vagrant.yml"
    ansible.provisioning_path = "/ops"
    ansible.inventory_path = "/ops/inventory/hosts"
    ansible.limit = "all"
    ansible.verbose = true
    ansible.version = "latest"
  end

end
