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
    }
    post {
        success {
            withCredentials([string(credentialsId: 'botSecret', variable: 'token'), string(credentialsId: 'chatId', variable: 'chat_id')]) {
                sh  ("""
                    curl -s -X POST https://api.telegram.org/bot${token}/sendMessage -d chat_id=${chat_id} -d parse_mode=markdown -d text='*${env.JOB_NAME}* : POC *Branch*: ${env.GIT_BRANCH} *Build* : OK *Published* = YES'
                """)
                   }
                }
         }
}
