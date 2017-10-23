pipeline {
  agent any
  stages {
    stage('tests') {
      steps {
        sh '''eval $(docker-machine env coulibaly-docker-ce)
docker-compose -f docker-compose.test.yml up -d --build'''
      }
    }
    stage('compose') {
      steps {
        sh '''eval $(docker-machine env coulibaly-docker-ce)
docker-compose up -d --build'''
      }
    }
  }
}