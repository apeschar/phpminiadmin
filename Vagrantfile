Vagrant.configure("2") do |config|
    config.vm.box = 'precise64'
    config.vm.box_url = 'http://files.vagrantup.com/precise64.box'
    config.vm.network 'private_network', ip: '192.168.50.6'

    config.vm.provision :puppet do |puppet|
        puppet.manifests_path = 'puppet/manifests'
        puppet.manifest_file = 'lamp.pp'
        puppet.module_path = 'puppet/modules'
    end

    config.vm.provision "shell", inline: "rm -rf /var/www && ln -s /vagrant /var/www"
end

# vim: set ft=ruby :
