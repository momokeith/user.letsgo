pipeline {
  agent any
  stages {
    stage('docker-compose') {
      steps {
        sh '''eval $(docker-machine env coulibaly-docker-ce)
docker-compose up -d --build'''
      }
    }
  }
}