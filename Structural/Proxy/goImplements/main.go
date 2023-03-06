package main

import "fmt"

func main() {
	nginxServer := NewNginxServer()
	appStatusUrl := "/app/status"
	createUserUrl := "/create/user"

	httpCode, body := nginxServer.handleRequest(appStatusUrl, "GET")
	fmt.Printf("\nUrl: %s\nHttpCode: %d\nBody: %s\n", appStatusUrl, httpCode, body)

	httpCode, body = nginxServer.handleRequest(appStatusUrl, "GET")
	fmt.Printf("\nUrl: %s\nHttpCode: %d\nBody: %s\n", appStatusUrl, httpCode, body)

	httpCode, body = nginxServer.handleRequest(appStatusUrl, "GET")
	fmt.Printf("\nUrl: %s\nHttpCode: %d\nBody: %s\n", appStatusUrl, httpCode, body)

	httpCode, body = nginxServer.handleRequest(createUserUrl, "POST")
	fmt.Printf("\nUrl: %s\nHttpCode: %d\nBody: %s\n", createUserUrl, httpCode, body)

	httpCode, body = nginxServer.handleRequest(createUserUrl, "GET")
	fmt.Printf("\nUrl: %s\nHttpCode: %d\nBody: %s\n", createUserUrl, httpCode, body)
}
