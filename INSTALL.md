Local Installation
===========

Use these instructions for getting a local version of Spotlight running using
Docker. Feel free to inspect the Makefile to get an understanding of how these
commands work under the hood.

Requirements
-------

- [Docker](https://docs.docker.com/engine/installation/)
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

Nothing else is required locally. You don't have to have PHP, MySQL, or
anything else installed. Docker will take care of this for you.

Quickstart
-------

Run the following commands to start from scratch.

```
$ git clone git@github.com:bsd/spotlight-admin.git spotlight-admin
$ cd spotlight-admin
$ make
$ make seed-db
$ make build-client
$ make start-client
```

Visit the server: http://localhost:8080
Visit the client: http://localhost:3000

To stop the application from running

```
$ control+c
$ make stop
```

Instructions
-------

The process uses Make, which should already be installed on your non-windows
system by default. Make allows us to wrap our many build commands into a
succinct and clean API to ease development.

### 1. Clone Spotlight from the repo

```
$ git clone git@github.com:bsd/spotlight-admin.git spotlight-admin
$ cd spotlight-admin
```

### 2. Installing the application

`$ make install`

or simly, run:

`$ make`

That is a shortcut for installing the application as the install command runs
by default.

A this point, the application is running at http://localhost:8080. If you want
to bring the application down, run:

`$ make stop`

If you want to remove all of the artifacts of the installation, run:

`$ make clean`

### 3. Seed the database

`$ make seed-db`

This will run migrations as well as introduce seed data to the installed database.

### 4. Running the Control Panel

The Spotlight Engine includes the Control Panel as a dependency when you run
composer, which happens automatically during `make install`.

`$ make build-client`
`$ make start-client`

To see the Control Panel, visit: http://localhost:3000.

It's important to note that the Control Panel is a separate Git repository and
is included with the Spotlight-Admin as a Composer dependency. See the
Development Workflow section of this document for more information on
day-to-day usage.

Starting, Stopping, Updating
-------

Once you've installed the application, there's no reason to run `make` or
`make install` again unless you want to start from scratch. You may want to
start from scratch if the application state doesn't allow you to run the
server or client. This should not happen, however, running `make` would be a
good method to debug your broken application if you think it's build/Docker
related.

### Conrol Panel

The control panel will start by running `make start-client`. This command also
updates the client's NPM dependencies.

When you start the client, it will run in the foreground, so `control+c` is how
you should stop the client from running.

### API / Server

Running `make update` will issue `git pull` and it will update all composer
dependencies.

Running `make start` will issue a command that spins up docker containers that
power the API. These containers will run in the background.

Running `make stop` will take these containers down.

### Development Workflow

After running `make` or `make install` you don't have to issues these commands
again.

To update the git repo and composer dependencies run: `make update`
Then start the server: `make start`

You do not have to run `make start` after `make update`. If the application is
already started, changes should be immediately testable. This is also
applicable if you use `git` to switch branches.


Gotchas
-------

If you recieve console errors related to an inability connecting to the
database while Make is running `composer` commands, then there is something
wrong happening in the application. Composer related scripts, post-install,
post-update, etc., should not attempt to connec to the database. A database
connection is not available during dependency installation or updating.