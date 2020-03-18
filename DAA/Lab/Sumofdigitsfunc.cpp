int sumOfDigits(int n){
        int sum;
        if(n < 10){
            return n;
        }
        sum = (n % 10) + sumOfDigits(n / 10);
        return sum;
}
