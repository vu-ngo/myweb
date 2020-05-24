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

### Onetime setup
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
$ docker run -p 8080:8080 myweb:latest
Goto http://localhost:8080
```

### Test 
```
$ docker-compose up -d 
goto http://localhost
```

### Commit
```
$ docker ps
$ docker commit <container id> myweb
$ docker tag myweb vuqngo/myweb
$ docker push vuqngo/myweb
```

### Publish to ECR
```
$ docker tag myweb:latest 713663648196.dkr.ecr.us-west-2.amazonaws.com/myweb
$ docker push 713663648196.dkr.ecr.us-west-2.amazonaws.com/myweb
```

### Deploy
```
$ cd deploy
$ kubectl apply -f deployment.yaml
$ kubectl apply -f service.yaml
$ kubectl get pods
```
