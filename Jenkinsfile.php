pipeline {
    agent any
    stages {
        stage('Checkout')
        {
            // Repository
            git branch: 'main', url: 'https://github.com/Thoriso777/pipeline-maven-java'          
        }
    }
    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                // Compile the Java code
                sh 'javac -d target /home/jenkins/execises/pipeline-java/ToUpper.java'
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

public class ToUpper {
    public static void main(String[] args) {
        if (args.length > 0) {
            String input = args[0];
            String output = input.toUpperCase();
            System.out.println(output);
        } else {
            System.out.println("No input provided!");
        }
    }
}