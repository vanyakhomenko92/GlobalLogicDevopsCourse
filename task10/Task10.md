Docker. Task1 
----------------------------------------------
- I installed Docker on AWS instance

![image](img/1.png)
- Here is my Dockerfile based on Nginx image: [Dockerfile1](Dockerfile1)
- with command I built my image
```
docker build -t nginx:latest .
```
![image](img/2.png)
- with command I ran my just created docker image
```
docker run -name task1 -d -p 8080:80 nginx:latest 
```
![image](img/3.png)
- here is the result 

![image](img/4.png)
----------------------------------------------

Docker. Task2


- I created 2 networks: private and public:
```
docker network create private --internal
docker network create public
```
- I prepared [Dockerfile2](Dockerfile2)

- I built an image based on Dockerfile with command
```
docker build -t ping .
```
![image](img/7.png)

- Then I ran my images:

```
docker run -name private_container1 -d -p 8080:80 ping:latest
docker run -name public_container1 -d -p 8080:80 ping:latest
```
![image](img/8.png)

- After that we can connect our containers and inspect our access to public IP addresses
```
docker exec -it private_container1 /bin/bash
docker exec -it public_container1 /bin/bash
```

![image](img/9.png)
