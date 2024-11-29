## Dan Streeter's Fork 🍴

I use this workflow quite a lot so fixed it up for myself. It runs on my Mac running PHP 8.4.1.

I added a GitHub action to build the Alfred Workflow - taking the version from the info.plist file which will fail by design if a tag already exists.

I left everything else the same.

---

⚠️⚠️⚠️ this project is archived. i don't use it myself anymore and there's too much work needed to keep it going. (API versions, PHP packages, PHP versions etc.) consider using individual service Workflows like https://github.com/jason0x43/alfred-toggl. ⚠️⚠️⚠️

___

<h1 align="center">Alfred Time</h1>

<p align="center">
<img src="https://shields.io/badge/PHP-8.1|8.2-blue" alt="PHP Versions Compatibility">
<a href="https://github.com/godbout/alfred-time/releases/latest"><img src="https://img.shields.io/github/v/release/godbout/alfred-time" alt="GitHub release"></a>
<a href="https://github.com/godbout/alfred-time/actions"><img src="https://img.shields.io/github/actions/workflow/status/godbout/alfred-time/main.yml" alt="build status"></a>
<a href="https://scrutinizer-ci.com/g/godbout/alfred-time"><img src="https://img.shields.io/scrutinizer/quality/g/godbout/alfred-time" alt="code quality"></a>
<a href="https://scrutinizer-ci.com/g/godbout/alfred-time"><img src="https://img.shields.io/scrutinizer/coverage/g/godbout/alfred-time" alt="code coverage"></a>
<a href="https://github.com/godbout/alfred-time/releases"><img src="https://img.shields.io/github/downloads/godbout/alfred-time/total" alt="GitHub downloads"></a>
</p>

<p align="center">
    Basic workflow to start, stop and continue timers for (currently) <a href="https://toggl.com/">Toggl</a>, <a href="https://www.getharvest.com/">Harvest</a>, <a href="https://www.everhour.com/">Everhour</a> or <a href="https://clockify.me/">Clockify</a> services through <a href="http://alfredapp.com/">Alfred 4</a>.
</p>

---

# Current features

* Set up services through Alfred menus
* Start timer
* Stop timer
* Continue (restart) timer
* All live (no more cache issues)

# How to use

## Features

* Set up your service

![setup](https://github.com/godbout/alfred-time/blob/master/resources/screenshots/setup.gif)

* Start a timer

![start](https://github.com/godbout/alfred-time/blob/master/resources/screenshots/start.gif)

* Stop a timer

![stop](https://github.com/godbout/alfred-time/blob/master/resources/screenshots/stop.gif)

* Continue a timer (using the ⌘ modifier)

![continue](https://github.com/godbout/alfred-time/blob/master/resources/screenshots/continue.gif)

# Contribute

* Feel free to let me know if something doesn't work, if you think something could be done better, or just fork and pull request.

# Download

* Workflow is downlodable on the [Release page](https://github.com/godbout/alfred-time/releases)

# Alternatives to Alfred Time

* [Alfred Harvest](https://github.com/tinystride/alfred-harvest) by Neil Renicker
* [Alfred Toggl](https://github.com/jason0x43/alfred-toggl) by Jason Cheatha
