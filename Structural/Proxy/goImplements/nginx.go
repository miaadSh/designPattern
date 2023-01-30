package main

type Nginx struct {
	app             *Application
	maxAllowRequest int
	rateLimiter     map[string]int
}

func newNginxServer() *Nginx {
	return &Nginx{
		app:             &Application{},
		maxAllowRequest: 2,
		rateLimiter:     make(map[string]int),
	}
}

func (n *Nginx) handleRequest(url, method string) (int, string) {
	allowd := n.checkRateLimiting(url)

	if !allowd {
		return 403, "not Allowed"
	}

	return n.app.handleRequest(url, method)
}

func (n *Nginx) checkRateLimiting(url string) bool {
	if n.rateLimiter[url] == 0 {
		n.rateLimiter[url] = 1
	}
	if n.rateLimiter[url] > n.maxAllowedRequest {
		return false
	}
	n.rateLimiter[url] = n.rateLimiter[url] + 1
	return true
}
