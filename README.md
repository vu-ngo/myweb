myweb
=====

URL: http://abce17b32dc0a4c87aae09881491396e-1821988714.us-west-2.elb.amazonaws.com

## Backend:
- PHP/nginx
- AWS EKS

### Display
- Pod
- Node
- Namespace
- IP

### Setup
```
Goto https://docs.aws.amazon.com/eks/latest/userguide/eks-ug.pdf#getting-started
- install aws cli, kubectl, eksctl
Create EKS cluster:
$ cd deploy
$ ./create-eks-cluster.sh <cluster name> [us-west-2] [t3.small] [3 nodes]

```

### Build / Test
```
$ docker build -t myweb:latest .
$ docker run -p 80:8080 myweb:latest
Goto http://localhost
```

### Test 
```
$ docker-compose up -d 
goto http://localhost
```

### Publish to ECR
```
$ aws ecr get-login-password --region us-west-2
$ docker login -u AWS -p eyJ.. https://713663648196.dkr.ecr.us-west-2.amazonaws.com
$ docker tag myweb:latest 713663648196.dkr.ecr.us-west-2.amazonaws.com/myweb
$ docker push 713663648196.dkr.ecr.us-west-2.amazonaws.com/myweb
```

### Publish to Docker Hub 
```
$ docker ps
$ docker commit <container id> myweb
$ docker tag myweb vuqngo/myweb
$ docker push vuqngo/myweb
```

### Deploy
```
$ cd deploy
$ kubectl apply -f deployment.yaml
$ kubectl apply -f service.yaml
$ kubectl get pods
$ kubectl get svc 
```
