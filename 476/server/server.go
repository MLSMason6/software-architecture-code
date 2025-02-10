package main 

import (
	"fmt"
	"net/http" 
	"time"
)

func handler(response http.ResponseWriter, request *http.Request) {
	// fmtFprintf(response, "hello, 476!"
	fmt.Fprintf(response, "<html><h2>Request received at: " + time.Now().Format(time.RFC1123) + " Mason Schrader</h2></html>")
}

func main() {
	http.HandleFunc("/", handler)
	http.ListenAndServe(":8080", nil)
}