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
  --amazonec2-region eu-west-1 \
  staging-docker-ce 
  
docker swarm init
  
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

docker swarm init

docker service create \
--name portainer \
--publish 9000:9000 \
--replicas=1 \
--constraint 'node.role == manager' \
--mount type=bind,src=//var/run/docker.sock,dst=/var/run/docker.sock \
portainer/portainer \
-H unix:///var/run/docker.sock


sudo docker service create \
--name migration \
--network userletsgo_default \
--restart-condition none
momokeith/userletsgo-db-migration \
tools/docker/db-migration/entrypoint.sh


docker swarm join-token worker
