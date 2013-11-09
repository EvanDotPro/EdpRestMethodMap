# EdpRestMethodMap - Restful ZF2 Forms

Version 0.0.1 Created by [Evan Coury](http://blog.evan.pro/)

## Introduction

If you have a basic HTML form, the only two HTTP request methods that browsers support are `GET` and `POST` according to the HTTP 1.x specs. This can be obnoxious if you want to map your forms to your restful controllers, without relying on js/ajax. This module aims to solve (read: work around) this limitation.

I created this module in response to a question asked by shafox on #zftalk.

## Usage

To make use of this module, simply add a hidden `_method` post parameter to any form. This module will then dispatch the request as if the value of that post parameter was the HTTP method used by the client.

## License

EdpRestMethodMap is released under the New BSD license. See the included LICENSE file.
