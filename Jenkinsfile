pipeline {
    agent any
    stages {
        stage('1 - Build') {
            steps {
                echo "buildung the application..."
                sh '''
                date
                echo $BUILD_ID
                echo $JENKINS_URL
                '''
            }
        }
        
        stage('2 - Test') {
            steps {
                echo "testing the application..."
                sh '''
                df -h
                free -m
                '''
            }
        }
        stage('3 - Deploy') {
            steps {
                echo "deploying the application..."
            }
        }
        
        stage('Stage only for test branch') {
            when {
                expression { return env.BRANCH_NAME == 'test' }
            }
            steps {
                echo "This steps only for test stage!"
                echo "Result: SUCCESS"
            }
        } 
        stage('Notification') {
            when {
                branch 'master'
	        }
            steps {
                notifyEvents message: "Build and test were successful", token: '6005293687:AAGigUMAR5t203QoaEIZhV-r6Hg_1UtiSuA'
                echo 'Jenkins sends notification on telegram about success'
            }
        }
    }
}
