#include<stdio.h>
#include<unistd.h>

int main()
{
	printf("This is before forking\n");
	fork();
	fork();
	fork();
	printf("Hello\n");
	return 0;
}
