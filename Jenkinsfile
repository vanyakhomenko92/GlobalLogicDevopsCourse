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
            sh  ("""
                curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='*Full project name*: ${env.JOB_NAME} \n*Branch*: [$GIT_BRANCH]($GIT_URL) \n*Build* : [OK](${BUILD_URL}consoleFull)'
            """)
         }

         aborted {
            sh  ("""
                curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='*Full project name*: ${env.JOB_NAME} \n*Branch*: [$GIT_BRANCH]($GIT_URL) \n*Build* : [Aborted](${BUILD_URL}consoleFull)'
            """)
         }
         failure {
            sh  ("""
                curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d chat_id=${CHAT_ID} -d parse_mode=markdown -d text='*Full project name*: ${env.JOB_NAME} \n*Branch*: [$GIT_BRANCH]($GIT_URL) \n*Build* : [Not OK](${BUILD_URL}consoleFull)'
            """)
         }
    }   
}
