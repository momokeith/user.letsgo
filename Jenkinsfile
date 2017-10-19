pipeline {
  agent {
    node {
      label 'Builder'
    }
    
  }
  stages {
    stage('Initialize') {
      steps {
        sh 'hostname'
      }
    }
    stage('deploy') {
      steps {
        sh 'docker-compose up --build'
      }
    }
  }
}