#!/bin/bash
bin/phinx migrate -e development
bin/phinx seed:run -e development