pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS=credentials('dockerhub')
  }
   stages {
//     stage ('Build Docker Image') {
//       agent { label 'dockerAgent' }
//       steps {
//         sh '''#!/bin/bash
//         git pull origin main
//         cp /home/ubuntu/agent/secret-config.php /home/ubuntu/agent/workspace/kuriosity_moodle_main/moodle_source_code/config.php
//         docker build -t ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER} .
//         '''
//       }
//     }
//     stage ('Push Image to DockerHub') {
//       agent { label 'dockerAgent' }
//       steps {
//         sh '''#!/bin/bash
//         echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin
//         docker push ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER}
//         docker rmi ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER}
//         docker logout
//         '''
//       }
//     }
//     stage ('Test') {
//       agent { label 'altAgent' }
//       steps {
//         sh '''#!/bin/bash
//         cp /home/ubuntu/docker-compose.yaml ./
//         docker-compose down
//         docker stop $(docker ps -a -q)
//         docker rm $(docker ps -a -q)
//         docker rmi moodle:alt
//         docker pull ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER}
//         docker tag ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER} moodle:alt
//         docker rmi ${DOCKERHUB_CREDENTIALS_USR}/kuriosity:1.${BUILD_NUMBER}
//         docker-compose up -d


//         echo 'Installing k6'
//         sudo chmod +x ./setup_scripts/setup_k6.sh
//         sudo ./setup_scripts/setup_k6.sh
//         echo 'Running K6 performance tests...'
//         mkdir /home/ubuntu/testsummary/
//         k6 run --out json=/home/ubuntu/testsummary/test_results.json loadtests/k6_loadtest.js
//         '''
//       }
//     }
//       stage ('Destroy ECS Infra') {
//       agent { label 'terraformAgent' }
//       steps {
//         withCredentials([string(credentialsId: 'AWS_ACCESS_KEY', variable: 'aws_access_key'), 
//                         string(credentialsId: 'AWS_SECRET_KEY', variable: 'aws_secret_key')]) {
//                           dir('moodle_infrastructure') {
//                             sh 'terraform destroy --auto-approve -var="aws_access_key=$aws_access_key" -var="aws_secret_key=$aws_secret_key" -var="image-id=kuriosity:1.${BUILD_NUMBER}"'
//                           }
//                         }
//       }
//     }
  
    stage ('Deploy to ECS') {
      agent { label 'terraformAgent' }
      steps {
        withCredentials([string(credentialsId: 'AWS_ACCESS_KEY', variable: 'aws_access_key'), 
                        string(credentialsId: 'AWS_SECRET_KEY', variable: 'aws_secret_key')]) {
                          dir('moodle_infrastructure') {
                            sh ''' #!/bin/bash
                            terraform init -var="aws_access_key=$aws_access_key" -var="aws_secret_key=$aws_secret_key" 
                            terraform plan -out plan.tfplan -var="aws_access_key=$aws_access_key" -var="aws_secret_key=$aws_secret_key" -var="image-id=kuriosity:1.${BUILD_NUMBER}"
                            terraform apply plan.tfplan
                            '''
                          }
                        }
      }
    }
//                             echo "yes" | terraform init \
//                             -backend-config="bucket=moodle-tfstate-bucket" \
//                             -backend-config="key=moodle/infra.tfstate" \
//                             -backend-config="region=us-east-1" \
//                             -backend-config="dynamodb_table=moodle-terraform-state" \
//                             -backend-config="access_key=$aws_access_key" \
//                             -backend-config="secret_key=$aws_secret_key"
     
  }
  post {
    always {
      emailext to: "kurafinalgroup4@gmail.com",
      subject: "Jenkins Pipeline Alert for ${JOB_NAME} - Build ${currentBuild.number} Result",
      body: "Confirming that build ${currentBuild.number} has been completed for ${currentBuild.projectName} with a result of ${currentBuild.result}.\n\nFor more information, please visit ${env.BUILD_URL} for details on the build."
      }
  }
}
