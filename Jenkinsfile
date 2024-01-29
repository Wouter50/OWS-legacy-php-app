agent { label '!windows' }
stage('SonarQube') {
  steps {
    script { scannerHome = tool 'Sonar Scanner' }
    withSonarQubeEnv('SonarQube') {
      sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=legacy-php-app-opdracht"
    }
  }
}
