pipeline{
agent { label '!windows' }
stages {
    stage('SonarQube') {
        steps {
            script { scannerHome = tool 'Sonar scanner' }
            withSonarQubeEnv('SonarQube') {
            sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=legacy-php-app-opdracht"
            }
        }
    }
}
}
