<?php
namespace Jamm\HTTP;

interface IRequest
{
	const method_GET        = 'GET';
	const method_POST       = 'POST';
	const method_PUT        = 'PUT';
	const method_DELETE     = 'DELETE';
	const method_HEAD       = 'HEAD';
	const method_OPTIONS    = 'OPTIONS';
	const method_TRACE      = 'TRACE';
	const method_CONNECTION = 'CONNECTION';

	/**
	 * Parse input data (GET, POST) into Request object
	 */
	public function BuildFromInput();

	/**
	 * Return header from array by key, or all keys
	 * @param string $key
	 * @return null|array|mixed
	 */
	public function getHeaders($key = null);

	public function setHeader($header, $value);

	public function removeHeader($header);

	public function getMethod();

	/**
	 * Set the request method
	 * @param string $method
	 */
	public function setMethod($method);

	/**
	 * Return key or all the keys of request
	 * @param string $key
	 * @return mixed
	 */
	public function getData($key = null);

	/**
	 * Set array of data
	 * @param array $values
	 */
	public function setData(array $values);

	public function setDataKey($key, $value);

	/**
	 * Return HTTP_ACCEPT header
	 * @return string
	 */
	public function getAccept();

	public function SetAccept($accept);

	/**
	 * Check, if this type is acceptable
	 * @param string $type
	 * @return bool
	 */
	public function isAcceptable($type);

	/**
	 * Send request by URL. Pass $Response argument, if you need response
	 * @param $URL
	 * @param IResponse|null $Response
	 * @return bool|IResponse
	 */
	public function Send($URL, IResponse $Response = NULL);
}
