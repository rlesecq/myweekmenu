pipeline {
  agent any
  stages {
    stage('Test unitaires') {
      parallel {
        stage('Test unitaires') {
          steps {
            echo 'Hello, we start to execute unit tests'
          }
        }
        stage('Tests fonctionnels') {
          steps {
            echo 'Hello, we start to execture fonctionnel tests'
          }
        }
      }
    }
    stage('Deploiement en recette') {
      steps {
        echo 'Hello, we start to execute capistrano command to deploy in recette'
      }
    }
  }
}