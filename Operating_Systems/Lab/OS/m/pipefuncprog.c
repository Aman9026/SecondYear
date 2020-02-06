#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#define MSGSIZE 7

char* m1="hello1";
char* m2="hello2";
char* m3="hello3";

char inbuf[MSGSIZE];


void callwrite(int x)
{
	write(x,m1,MSGSIZE);
        write(x,m2,MSGSIZE);
	write(x,m3,MSGSIZE);
}


char* callread(int x)
{
	read(x,inbuf,MSGSIZE);
	return inbuf;
}


int main()
{
	
	int p[2];
	
	if(pipe(p)<0)
		exit(1);

	callwrite(p[1]);

	
	int i;
	for(i=0;i<3;i++)
	{
		char* inbuf=callread(p[0]);
		printf("%s\n",inbuf);
	}

	return 0;
}
 
