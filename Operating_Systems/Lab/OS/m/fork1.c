#include <stdio.h>
#include <unistd.h>

int main()
{

int a = fork();
sleep(5);
if(a==0)
{printf("Child process %d \n",getpid());}
else
{printf("Parent %d\n",getpid());}

int b=fork();
sleep(5);
if(b==0)
{printf("child %d",getpid());}
else
{printf("parent %d",getpid());}

return 0;
}
