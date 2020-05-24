#!/bin/bash

if test -z "$1"
then
   echo "Usage: $0 <cluster name> [us-west-1] [t3.small] [3 nodes]"
   exit 4
fi

NAME=$1
REGION=${2:-us-west-2}
TYPE=${3:-t3.small}
DESIRE=${4:-3}

echo "> $0 $NAME $REGION $TYPE $DESIRE"
eksctl create cluster \
--name ${NAME} \
--version 1.15 \
--region ${REGION} \
--nodegroup-name standard-workers \
--node-type ${TYPE} \
--nodes ${DESIRE} \
--nodes-min 1 \
--nodes-max 4 \
--ssh-access \
--ssh-public-key ~/myaws.pub \
--managed
