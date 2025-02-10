package main 

import "fmt" 
import "time"

func printMessage(msg string) { 
	for i := 0; i < 10; i++ {
	    fmt.Println(msg)
		time.Sleep(100 * time.Millisecond)
	}
}

func main() {
	go printMessage("hi");
	printMessage("there");
}