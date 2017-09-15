# user.letsgo

docker-compose up -d --build
docker-machine ssh staging-containers "sudo docker stack deploy -c docker-stack.yml user_letsgo"
docker-machine ssh staging-containers "sudo docker stack ps user_letsgo"
sh staging-containers "sudo netstat -lnp | grep dockerd"
docker-machine scp Projects/Personal/user.letsgo/docker-stack.yml staging-containers:~
ssh staging-containers "sudo docker ps -a"
sudo pip install docker
