# pecl-memcache Issue #23

This repository reproduces the issue described in
[websupport-sk/pecl-memcache#23][pecl-memcache-23].

In short, on PHP 7.1, when using `memcache` as the `session.save_handler`, the
following warning occurs when calling `session_start()`:

```
Warning: session_start(): Failed to read session data: memcache (path: tcp://127.0.0.1:11211)
```

The same code and settings does not result in this warning on PHP 7.0.


## Running the Example

This example uses [Docker][] and [Docker Compose][] to build two images and run
two containers (one for PHP 7.0 and one for PHP 7.1). Both are identical, expect
for the version of PHP used.

``` bash
git clone https://github.com/ramsey/pecl-memcache-issue-23
cd pecl-memcache-issue-23/
docker-compose up
```

Now, the two containers should be running, you can open the following in your
browser to verify:

* <http://localhost:8001/info.php> (should be running PHP 7.0)
* <http://localhost:8002/info.php> (should be running PHP 7.1)

To test the `session_start()` issue and see the warning, open the following:

* PHP 7.0: <http://localhost:8001/> (the session should work as expected)
* PHP 7.1: <http://localhost:8002/> (`session_start()` should generate a warning)


[pecl-memcache-23]: https://github.com/websupport-sk/pecl-memcache/issues/23
[docker]: https://docs.docker.com/
[docker compose]: https://docs.docker.com/compose/overview/
