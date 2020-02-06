#include <stdio.h>
#include <unistd.h>

int main()
{
forkfn();

return 0;
}
void forkfn()
{
int n,p;

printf("enter the number of rows");
scanf("%d",&n);
p=fork();

if(p==0){ //child process 
printf("child process %d \n ",getpid());
printf("inside child");

		for(int i=1;i<=n;i++)
		{
			for(int j=1;j<=1;j++)
			{
				printf("* ");
				//sleep(1);
			}
			printf("\n");
		}
	}
	else
	{
		//parent process 
printf("parent process %d \n ",getpid());
printf("inside parent");

for(int i=1;i<=n;i++){
	for(int j=1;j<=1;j++){
				printf("* ");
				//sleep(1);
			}
			printf("\n");
		}
	}

}



}
