#include <stdio.h>
#include <unistd.h>

int main()
{
pid_t cpid;
if(fork()==0){
printf("child pid %d",cpid);
}
else{cpid=wait(NULL);
printf("parent pid %d",getpid());}

return 0;
}
