pipeline {
  agent {
    node {
      label 'Builder'
    }
    
  }
  stages {
    stage('Change docker host') {
      steps {
        sh '# eval $(docker-machine env coulibaly-docker-ce)'
      }
    }
  }
}