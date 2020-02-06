#include<iostream>
#include<stdlib.h>
using namespace std;
int* waitingtime(int wt[],int bt[],int at[]);
char p[]={'p1','p2','p3','p4'};
int* turnaroundtime(int wt[],int bt[],int tat[] );
int main()
{
int wt[4],bt[4],tat[4],at[4];
for(int  i=0;i<4;i++)
{
cout<<"enter burst time of  process"<<i<<":";
cin>>bt[i];
}
for(int i=0;i<4;i++)
{
cout<<endl<<"enter arrival time of process"<<i<<":";
cin>>at[i];
}

int *wt1=waitingtime(wt,bt,at);
int *tat1=turnaroundtime(wt,bt,tat);
cout<<"p\tbt\tat\t wt\ttat"<<endl;
for(int i=0;i<4;i++)
{
cout<<p[i]<<"\t"<<bt[i]<<"\t"<<at[i]<<"\t"<<wt1[i]<<"\t"<<tat1[i]<<endl;
}
return 0;
}
int* waitingtime(int wt[],int bt[],int at[])
{
for(int i=0;i<4;i++)
{
if(i==0)
{
wt[i]=0;
//cout<<"wt of process"<<i <<":"<<wt[i]<<endl;
}
else
{
wt[i]=bt[i-1]-at[i];
//cout<<"wt of process"<<i <<":"<<wt[i]<<endl;
}
}
return wt;
}
int* turnaroundtime(int wt[],int bt[],int tat[])
{
//cout<<"turnaround time";
for(int i=0;i<4;i++)
{
tat[i]=wt[i]+bt[i];
//cout<<tat[i]<<endl;
}
return tat;
}
