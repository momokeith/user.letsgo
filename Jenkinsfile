pipeline {
  agent any
  stages {
    stage('Unit tests') {
      steps {
        sh '''eval $(docker-machine env coulibaly-docker-ce)
docker-compose -f docker-compose.test.yml up --build --abort-on-container-exit --exit-code-from test'''
      }
    }
    stage('Docker compose') {
      steps {
        sh '''eval $(docker-machine env coulibaly-docker-ce)
docker-compose up -d --build'''
      }
    }
  }
}