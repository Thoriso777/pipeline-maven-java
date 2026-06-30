pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Repository
                git branch: 'main', url: 'https://github.com/Thoriso777/pipeline-maven-java'
            }
        }

        stage('Build') {
            steps {
                echo 'Building...'

                // Compile the Java code
                sh 'mkdir -p target'
                sh 'javac -d target /home/jenkins/exercises/pipeline-java/ToUpper.java'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploying...'

                // Run the Java program with an example argument
                sh 'java -cp target ToUpper "example text"'
            }
        }
    }
}
