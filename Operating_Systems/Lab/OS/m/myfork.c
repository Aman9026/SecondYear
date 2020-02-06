#include<stdio.h>
#include<unistd.h>

int main()
{
	int x,ip,jp,ic,jc;
	x=fork();
	if(x==0)
	{
		for(ic=1;ic<=4;ic++)
		{
			for(jc=1;jc<=ic;jc++)
			{
				printf("%d",jc);
				sleep(1);
			}
			printf("\n");
		}
	}
	else
	{
		for(ip=1;ip<=4;ip++)
		{
			for(jp=1;jp<=ip;jp++)
			{
				printf("*");
				sleep(1);
			}
			printf("\n");
		}
	}
	return 0;
}
