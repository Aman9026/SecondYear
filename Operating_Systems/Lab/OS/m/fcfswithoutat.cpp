#include<iostream>
#include<stdlib.h>
using namespace std;
int* waitingtime(int wt[],int bt[]);
int p[4]={'p1','p2','p3','p4'};
int* turnaroundtime(int wt[],int bt[],int tat[] );
int main()
{
int wt[4],bt[4],tat[4],at[4];
for(int  i=0;i<4;i++)
{
cout<<"enter burst time of  process"<<i<<":";
cin>>bt[i];
}
int *wt1=waitingtime(wt,bt);
int *tat1=turnaroundtime(wt,bt,tat);
cout<<"p\tbt\twt\ttat"<<endl;
for(int i=0;i<4;i++)
{
cout<<p[i]<<"\t"<<bt[i]<<"\t"<<wt1[i]<<"\t"<<tat1[i]<<endl;
}
return 0;
}
int* waitingtime(int wt[],int bt[])
{
for(int i=0;i<4;i++)
{
if(i==0)
{
wt[i]=0;
}
else
{
wt[i]=wt[i-1]+bt[i-1];
}
}
return wt;
}
int* turnaroundtime(int wt[],int bt[],int tat[])
{
for(int i=0;i<4;i++)
{
tat[i]=wt[i]+bt[i];
}
return tat;
}
