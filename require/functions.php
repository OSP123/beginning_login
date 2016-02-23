<?php
require 'connect.php';

function escape_quotes($nonEscapedQuery) {
	global $conn;
	$escaped_string = $conn->real_escape_string($nonEscapedQuery);
	return $escaped_string;
}

function confirm_query($result_set) {
	if (!$result_set) {
		die("Query not valid or no info available");
	}
}

function get_all_info($sql_query) {
	global $conn;
	$result = $conn->query($sql_query);
	confirm_query($result);
	return $result;
}

function insert_or_update_info($sql_query) {
	global $conn;
	$conn->query($sql_query);
}
?>
