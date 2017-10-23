# user.letsgo

docker-compose up -d --build
docker-machine ssh staging-containers "sudo docker stack deploy -c docker-stack.yml user_letsgo"
docker-machine ssh staging-containers "sudo docker stack ps user_letsgo"
sh staging-containers "sudo netstat -lnp | grep dockerd"
docker-machine scp Projects/Personal/user.letsgo/docker-stack.yml staging-containers:~
ssh staging-containers "sudo docker ps -a"
sudo pip install docker

# Vagrant up
cd tools/vagrant/ && vagrant up
# build and push
ansible-playbook -i tools/ansible/inventories/local  tools/ansible/playbooks/build_image.yml

# Deploy to swarm
ansible-playbook -i tools/ansible/inventories/production  tools/ansible/playbooks/deploy_stack.yml

# Create docker machine
docker-machine create \
  --driver generic \
  --generic-ip-address=34.240.42.252 \
  --generic-ssh-key ~/.ssh/mohamedkeita.pem \
  --generic-ssh-user ubuntu \
  staging-docker-ce
  
docker-machine create \
  --driver amazonec2 \
  --amazonec2-ssh-keypath ~/.ssh/id_rsa \
  --amazonec2-region eu-west-1 \
  staging-docker-ce 
  
# CI setup  

## Jenkins host

### Ubuntu distribution
```
lsb_release -a

``

### Install the linux-image-extra-* packages

```
sudo apt-get update

sudo apt-get install \
    linux-image-extra-$(uname -r) \
    linux-image-extra-virtual
```
### log as jenkins

``
sudo su - jenkins
```

