pipeline {
  agent any
  stages {
    stage('Change docker host') {
      steps {
        sh '# eval $(docker-machine env coulibaly-docker-ce)'
      }
    }
    stage('docker-compose') {
      steps {
        sh 'docker-compose up'
      }
    }
  }
}