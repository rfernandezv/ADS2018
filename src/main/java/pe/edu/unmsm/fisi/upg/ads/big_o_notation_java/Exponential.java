package pe.edu.unmsm.fisi.upg.ads.big_o_notation_java;

import java.util.concurrent.TimeUnit;

import com.google.common.base.Stopwatch;

//Complexity: O(2^N)
public class Exponential {

	public static void main(String[] args) {
		long N = 45;
		Exponential exponential = new Exponential();
		Stopwatch stopwatch = Stopwatch.createStarted();
                try {
                    long a = exponential.fibonacci2(80);
                     System.out.println(" => " + a);
                } catch (Exception e) {
                }
		System.out.println(String.format("Time elapsed: %d seconds", stopwatch.elapsed(TimeUnit.SECONDS)) + "\n");
	}
	
	public long fibonacci(int n) throws Exception {
            if (n < 0) {
                throw new Exception("N can not be less than zero");
            }
            if (n <= 2) {
                return 1;
            }
            return fibonacci(n - 1) + fibonacci(n - 2);
        }
        
        public long fibonacci2(int n) throws Exception {
           long a = 0, b = 1, c = 0;
           for(int i= 0;i < n; i++){
                c = a + b;
                a = b;
                b = c;
                
                System.out.println((i+1) + " => " + a);
           }
           return a;
         }
}
