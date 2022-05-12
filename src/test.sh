#!/usr/bin/env bash

set -eu

ATTEMPTS=0
PG=""
SQL="SELECT ST_AsText(ST_MakeLine(ST_MakePoint(1,2), ST_MakePoint(3,4)))" # Verify that *PostGIS* is available
MAX_ATTEMPTS=30

echo "Waiting for PostgreSQL ..."

while [[ -z "${PG}" && "${ATTEMPTS}" -lt "${MAX_ATTEMPTS}" ]]; do
    sleep 1
    PG=$((psql -c "${SQL}" 2>&1 | grep "LINESTRING(1 2,3 4)") || echo "")
    echo "."
    let ATTEMPTS+=1
done

if [[ -z "{PG}" ]]; then
    echo "PostgreSQL unavailable"
    exit 1
fi

echo "${PG}"