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
                notifyEvents message: "${OWNER}, Build and test were successful", token: '5896903875:AAF2-YrNhtufWCzrjIMsAIA5DDkVgB_2RGA'
                echo 'Jenkins sends notification on telegram about success'
            }
        }
    }
}
