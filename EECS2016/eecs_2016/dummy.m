clc;clear all;close all

system('ls *.JPG >fileName.txt');

fp=fopen('fileName.txt','r');
fpx=fopen('details.txt','w');
t=fgetl(fp);
while(t~=-1)
    outStr=['<img src="eecs_2016/' t '" width="auto" height="500" alt="" />'];
    fprintf(fpx,'%s\n',outStr);
    t=fgetl(fp);
end

delete fileName.txt