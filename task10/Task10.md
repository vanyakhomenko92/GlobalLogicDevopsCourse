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

To run a playbook please use:
```
ansible-playbook playbook.yml -t 'role1'
```
then: 
```
ansible-playbook playbook.yml -t 'role2'
```
![image](img/2.png)
<br>
To connect to the instance please use this command:
```
ssh -i ~/.ssh/devops.pem" ubuntu@ec2-44-212-10-217.compute-1.amazonaws.com
```
![image](img/5.png)
<br>
- Add user <i>user1</i>. There were 3 unsuccessful tryies with simple passwords
![image](img/3.png)
- The successful attemp was `user2`. Here is I've used more difficult password with letters, numbers and specific symbols
![image](img/4.png)
