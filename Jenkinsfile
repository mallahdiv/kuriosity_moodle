pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS=credentials('dockerhub')
  }
   stages {
    stage ('Build') {
      steps {
        dir ('moodle_source_code') {
            sh '''#!/bin/bash

            '''
        }
      }
    }
    stage ('Test') {
      steps {
        dir ('moodle_source_code') {
            sh '''#!/bin/bash
            
            '''
        } 
      }
    }
    stage ('Push to DockerHub') {
      agent { label 'dockerAgent' }
      steps {
        sh '''#!/bin/bash
        echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin
        cd kuriosity_moodle
        git pull origin main

        # copy config.php and replace config-dist.php

        docker build -t moodle:${BUILD_NUMBER} .
        docker tag moodle:${BUILD_NUMBER} ${DOCKERHUB_CREDENTIALS_USR}/moodle:${BUILD_NUMBER}
        docker logout
        '''
      }
    }
    stage ('Deploy to ECS') {
      agent { label 'tfAgent' }
      steps {
        withCredentials([string(credentialsId: 'AWS_ACCESS_KEY', variable: 'aws_access_key'), 
                        string(credentialsId: 'AWS_SECRET_KEY', variable: 'aws_secret_key')]) {
                          dir('moodle_infrastructure') {
                            sh ''' #!/bin/bash
                            terraform init
                            terraform plan -out plan.tfplan -var="aws_access_key=$aws_access_key" -var="aws_secret_key=$aws_secret_key"
                            terraform apply plan.tfplan
                            '''
                          }
                        }
      }
    }
    // stage ('Destroy ECS Infra') {
    //   agent { label 'tfAgent' }
    //   steps {
    //     withCredentials([string(credentialsId: 'AWS_ACCESS_KEY', variable: 'aws_access_key'), 
    //                     string(credentialsId: 'AWS_SECRET_KEY', variable: 'aws_secret_key')]) {
    //                       dir('moodle_infrastructure') {
    //                         sh 'terraform destroy --auto-approve -var="aws_access_key=$aws_access_key" -var="aws_secret_key=$aws_secret_key"'
    //                       }
    //                     }
    //   }
    // }
  }
  post {
    always {
      emailext to: "caden.p.hong@gmail.com",
      subject: "Jenkins Alert for ${currentBuild.projectName} - Build ${currentBuild.number} Result",
      body: "Confirming that build ${currentBuild.number} has been completed for ${currentBuild.projectName} with a result of ${currentBuild.result}.\n\nFor more information, please visit ${env.BUILD_URL} for details on the build."
      }
  }
}