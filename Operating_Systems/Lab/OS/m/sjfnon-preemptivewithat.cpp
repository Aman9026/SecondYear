#include<iostream>
#include<stdlib.h>
using namespace std;
int* sorting(int bt[]);
int* waitingtime(int wt[],int bt[],int at[]);
int p[4]={'p1','p2','p3','p4'};
int* turnaroundtime(int wt[],int bt[],int tat[] );
int main()
{
int wt[4],bt[4],tat[4],at[4],t;
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
int *bt1=sorting(bt);
int *wt1=waitingtime(wt,bt,at);
int *tat1=turnaroundtime(wt,bt,tat);
cout<<"p\tbt\tat\twt\ttat"<<endl;
for(int i=0;i<4;i++)
{
cout<<p[i]<<"\t"<<bt[i]<<"\t"<<at[i]<<"\t"<<wt1[i]<<"\t"<<tat1[i]<<endl;
}
return 0;
}
int* sorting(int bt[])
{
int t;
for(int i=0;i<4;i++)
{
for(int j=i;j>=0;j--)
{
if(bt[j]<bt[j-1])
{
t= bt[j];
bt[j]=bt[j-1];
bt[j-1]=t;
}
}
}
return bt;
}
int* waitingtime(int wt[],int bt[],int at[])
{
for(int i=0;i<4;i++)
{
if(at[i]<bt[i-1])
{

wt[i]=bt[i-1]-at[i];
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
