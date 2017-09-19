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