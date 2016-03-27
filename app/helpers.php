<?php

/**
 * Checks if the route is active
 *
 * @param 	string $route
 * @return 	string
 */
function is_route_active($route) {
	return route($route) === app('Illuminate\Http\Request')->fullUrl();
}