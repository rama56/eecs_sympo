clc;clear all;close all;

system('ls *.jpg >fileNames.txt');

fpW=fopen('code.txt','w');

fp=fopen('fileNames.txt','r');
t=fgetl(fp);
while(t~=-1)
    fprintf(fpW,'%s\n',['<img src="indexPageSlideShow/' t '" width="350" height="auto" alt="">']);
    t=fgetl(fp);
end
fclose(fp);
fclose(fpW)
system('rm fileNames.txt');