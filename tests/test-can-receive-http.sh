#!/usr/bin/env bash
set -euxo pipefail

curl http://localhost:80/ | grep vAPI

curl http://localhost:80/ | grep HeyIDontExistThisShouldFail