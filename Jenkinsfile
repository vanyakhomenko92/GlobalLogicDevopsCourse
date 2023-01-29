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
        post {
            success { 
                sh  ("""
                    curl -s -X POST https://api.telegram.org/bot5896903875:AAF2-YrNhtufWCzrjIMsAIA5DDkVgB_2RGA/sendMessage -d chat_id=-1001239498345 -d parse_mode=markdown -d text='*https://github.com/yurakorabel/task9_jenkins* \n *Job Name: task9_job* \n *Branch*: $GIT_BRANCH \n *Build* : [OK](${BUILD_URL}consoleFull)'
                """)
            }
	}
    }   
}
